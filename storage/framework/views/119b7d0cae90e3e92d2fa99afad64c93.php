<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['yearCsv']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['yearCsv']); ?>
<?php foreach (array_filter((['yearCsv']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div>
  <p>
    <a href="/?year=<?php echo e($yearCsv); ?>"><?php echo e($yearCsv); ?></a>
  </p>
</div>

<?php /**PATH C:\Wamp.NET\sites\bablingo.dev\resources\views/components/movie-year.blade.php ENDPATH**/ ?>