<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Movie;
use App\Models\User;

class UserController extends Controller
{
    //Rāda reģistrācijas formu
    public function create(){
        return view('users.register');
    }

    //Jauns lietotajs
    public function store(Request $request){
$formFields = $request->validate([
    'name' => ['required', 'min:3', Rule::unique('users', 'name')],
    'email' => ['required', 'email', Rule::unique('users', 'email')],
    'password' => ['required', 'confirmed', 'min:8']
], [
    'name.unique' => 'The username is taken.',
    'email.unique' => 'The email address is already registered.',
    'password.confirmed' => 'The passwords do not match.',
    'password.min' => 'The password must be at least 8 characters long.'
]);

        //Hash password
        $formFields['password'] = bcrypt($formFields['password']);

        //Izveido lietotāju
        $user = User::create($formFields);

        //Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }

    //logout
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have logged out');
    }

    //login forma
    public function login(){
        return view('users.login');
    }

public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->with(['message' => 'Invalid Credentials'])->onlyInput('email');
    }
}
