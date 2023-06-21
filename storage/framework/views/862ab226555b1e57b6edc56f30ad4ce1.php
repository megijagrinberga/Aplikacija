<?php $__env->startSection('content'); ?>
<section class="create">
    <form method="POST" action="/users/authenticate">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit">Log in</button>
        </div>

        <div id="have-account">
        <p class="redirect">Don't have an account?
        <a class="register" href="/register">Register</a>
        </p>
        </div>
    </form>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Wamp.NET\sites\bablingo.dev\resources\views/users/login.blade.php ENDPATH**/ ?>