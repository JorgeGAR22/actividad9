<li <?php if(isset($item['id'])): ?> id="<?php echo e($item['id']); ?>" <?php endif; ?> class="nav-header <?php echo e($item['class'] ?? ''); ?>">

    <?php echo e(is_string($item) ? $item : $item['header']); ?>


</li>
<?php /**PATH /Users/jorgearcibargon/activity-9/vendor/jeroennoten/laravel-adminlte/src/../resources/views/partials/sidebar/menu-item-header.blade.php ENDPATH**/ ?>