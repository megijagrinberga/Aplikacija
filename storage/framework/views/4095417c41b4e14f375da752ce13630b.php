<?php if(session()->has('message')): ?>
    <div class="success">
    <p><?php echo e(session('message')); ?></p>
    </div>
<?php endif; ?>
<?php /**PATH C:\Wamp.NET\sites\bablingo.dev\resources\views/components/flash-message.blade.php ENDPATH**/ ?>