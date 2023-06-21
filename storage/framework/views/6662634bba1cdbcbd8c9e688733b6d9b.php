

<?php $__env->startSection('content'); ?>
<div class="top-part">
<img class="poster-2" src="<?php echo e($movie->logo ? asset('storage/' . $movie->logo) : asset('/images/bob-ross.jpg')); ?>" alt="Poster"/>
<h2 class="movie-title">
    <?php echo e($movie['title']); ?>

</h2>
<?php if(auth()->guard()->check()): ?>
<?php if(auth()->user()->role === 'admin'): ?>
    <div class="button-group">
        <p class="icon"><i class="fa-solid fa-pen-to-square"></i><a href="/movies/<?php echo e($movie->id); ?>/edit"><button class="button">Edit</button></a></p>

        <form method="POST" action="/movies/<?php echo e($movie->id); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <p class="icon"><i class="fa-solid fa-trash"></i><button class="button">Delete</button></p>
        </form>
    </div>
<?php endif; ?>
<?php endif; ?>

<?php if(auth()->guard()->check()): ?>
    <?php if(auth()->user()->movies_bookmark->contains($movie->id)): ?>
        <form action="<?php echo e(route('movies.unbookmark', $movie)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <i class="fa-solid fa-bookmark"></i><button class="button" type="submit">Unbookmark</button>
        </form>
    <?php else: ?>
        <form action="<?php echo e(route('movies.bookmark', $movie)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <i class="fa-solid fa-bookmark"></i><button class="button" type="submit">Bookmark</button>
        </form>
    <?php endif; ?>

    <?php if(auth()->user()->movies_seen->contains($movie->id)): ?>
        <form action="<?php echo e(route('movies.notseen', $movie)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <i class="fa-solid fa-eye"></i><button class="button" type="submit">Remove from seen</button>
        </form>
    <?php else: ?>
        <form action="<?php echo e(route('movies.seen', $movie)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <i class="fa-solid fa-eye"></i></i><button class="button" type="submit">Add to seen</button>
        </form>
    <?php endif; ?>

<?php endif; ?>

<div class="text"><?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.movie-attributes','data' => ['movie' => $movie]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('movie-attributes'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['movie' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($movie)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?></div>
</div>

<div class="comment-part">
<h2>Comments</h2>
<div class="comment-box">
<form action="<?php echo e(url('comments')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="movie_id" value="<?php echo e($movie->id); ?>">
    <div>
        <textarea name="comment_body" id="comment_body" style="font-family:sans-serif;font-size:1.2em;" placeholder="Leave a comment" required></textarea>
    </div>
    <input class="button comment-submit" type="submit" value="Submit">
</form>
</div>
</div>
<?php $__empty_1 = true; $__currentLoopData = $movie->comments->reverse(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div id="comments-section">
        <div class="comment">
            <div class="comment-meta">
                    <?php if($comment->user): ?>
                    <p class="comment-user">User <?php echo e($comment->user->name); ?></p>
                    <?php endif; ?>
                    <p class="comment-date">commented on <?php echo e($comment->created_at->format('d-m-y')); ?></p>
                </div>
            <p class="comment-content"><?php echo $comment->comment_body; ?></p>
            <?php if(Auth::check() && ($comment->user_id == auth()->user()->id || auth()->user()->role === 'admin')): ?>
        <div class="comment-buttons">

        <a  class="button" href="<?php echo e(route('comments.edit', $comment)); ?>">Edit</a>


        <form action="<?php echo e(route('comments.delete', $comment)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button class="button" type="submit">Delete</button>
        </form>
    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <p class="womp-womp">No comments yet</p>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Wamp.NET\sites\bablingo.dev\resources\views/movies/show.blade.php ENDPATH**/ ?>