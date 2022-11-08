
<?php $__env->startSection('title', 'Menu'); ?>
<?php $__env->startSection('content'); ?>

<div class="list-group">

    <h2 class="text-center">Our Menu</h2>
    <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php if($mn == "Nasi Goreng"): ?>
            <?php echo e($spiceLevel = 3); ?>

        <?php elseif($mn == "Bakmi Ayam"): ?>
            <?php echo e($spiceLevel = 1); ?>

        <?php elseif($mn == "Bakso Goreng"): ?>
            <?php echo e($spiceLevel = "4"); ?>

        <?php endif; ?>

        <a href="#" class="list-group-item list-group-item-action text-center"><?php echo e($mn); ?> Spice Level: <?php echo e($spiceLevel); ?></a>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    <div class= "alert alert-success d-inline-block text-center">
            Note: Please take note of our spice level
    </div>
     
</div>

    

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\forum1\resources\views/menu.blade.php ENDPATH**/ ?>