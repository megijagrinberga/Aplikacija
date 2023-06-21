<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['lengthCsv']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['lengthCsv']); ?>
<?php foreach (array_filter((['lengthCsv']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
  $hours = floor($lengthCsv / 60);
  $minutes = $lengthCsv % 60;
  $formattedLength = $hours.'h'.$minutes.'m';
?>

<div>
  <p>
    <a href="/?length=<?php echo e($lengthCsv); ?>"><?php echo e($formattedLength); ?></a>
  </p>
</div>

<?php /**PATH C:\Wamp.NET\sites\bablingo.dev\resources\views/components/movie-length.blade.php ENDPATH**/ ?>