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

<div class="description">
      <p class="movie-text-2">Language: <?php echo e($movie['language']); ?></p>
      <p class="movie-text-2">Year: <?php echo e($movie['year']); ?></p>
      <?php
        $genres = str_replace(['[', ']', '"'], '', $movie['genres']);
        $genres = str_replace(',', ' ', $genres);
      ?>
      <p class="movie-text-2">Genre/-s: <?php echo e($genres); ?></p>
      <p class="movie-text-2">Length: <?php echo e(floor($movie['length'] / 60)); ?>h<?php echo e($movie['length'] % 60); ?></p>
      <p class="movie-text-2">Description: <p class="movie-text-2"><?php echo e($movie['description']); ?></p></p>
  
</div>
<?php /**PATH C:\Wamp.NET\sites\bablingo.dev\resources\views/components/movie-attributes.blade.php ENDPATH**/ ?>