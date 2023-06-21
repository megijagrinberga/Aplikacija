<?php $__env->startSection('content'); ?>
<section class="create">

<form action="<?php echo e(route('comments.update', $comment)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <textarea name="comment_body"><?php echo e($comment->comment_body); ?></textarea>
    <input type="hidden" name="previous_url" value="<?php echo e($previousUrl); ?>">
    <button type="submit">Update</button>
</form>


</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Wamp.NET\sites\bablingo.dev\resources\views/movies/edit-comment.blade.php ENDPATH**/ ?>