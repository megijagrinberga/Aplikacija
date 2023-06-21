<?php $__env->startSection('content'); ?>
<section class="create">
    <form method="POST" action="/users">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Username:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div class="form-group password-confirm">
            <label for="password_confirmation">Confirm password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>

        <button type="submit">Sign Up</button>

        <?php if($errors->has('email')): ?>
        <p class="error-message"><?php echo e($errors->first('email')); ?></p>
        <?php elseif($errors->has('name')): ?>
        <p class="error-message"><?php echo e($errors->first('name')); ?></p>
        <?php elseif($errors->has('password')): ?>
        <p class="error-message"><?php echo e($errors->first('password')); ?></p>
        <?php endif; ?>


        <div id="have-account">
        <p class="redirect">Already have an account?
        <a class="login" href="/login">Login</a>
        </p>
        </div>
    </form>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Wamp.NET\sites\bablingo.dev\resources\views/users/register.blade.php ENDPATH**/ ?>