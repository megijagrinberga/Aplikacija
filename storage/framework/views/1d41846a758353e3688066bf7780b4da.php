<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['movie']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['movie']); ?>
<?php foreach (array_filter((['movie']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="movie">
      <img class="poster" src="<?php echo e($movie->logo ? asset('storage/' . $movie->logo) : asset('/images/bob-ross.jpg')); ?>" alt="Poster"/>

      <div class="descriptor">
      <div class="title-year">
            <h2>
                <a href="/movies/<?php echo e($movie['id']); ?>"><?php echo e($movie['title']); ?></a>
            </h2>
            <p class="movie-text-1 floater"><?php echo e($movie['year']); ?></p>
        </div>
      <?php
        $genres = str_replace(['[', ']', '"'], '', $movie['genres']);
        $genres = str_replace(',', ' ', $genres);
        ?>
      <p class="movie-text-1"><?php echo e($genres); ?></p>
      <p class="movie-text-1"><?php echo e(floor($movie['length'] / 60)); ?>h<?php echo e($movie['length'] % 60); ?></p>
      </div>
</div>
<?php /**PATH C:\Wamp.NET\sites\bablingo.dev\resources\views/components/movie-card.blade.php ENDPATH**/ ?>