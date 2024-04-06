<div class="container overflow-hidden">
    <div class="row ">
        <div class="col-12 col-lg-12p-2 m-auto text-center  one_title  p-3">

            <div class="container">
                <div class="row justify-content-center ">
                    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-2 col-sm-4 img_item">
                        <div class="pb-4">
                            <a class="link_image" href="<?php echo e(route('article',[$article->title_en,$article->id])); ?>"><img class="img_header"
                                    src="<?php echo e(asset('website/assets/images/header/buttons/Times Square, NYC.jpg')); ?>"
                                    alt=""></a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>









        </div>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Article_new\resources\views/website/layout/link.blade.php ENDPATH**/ ?>