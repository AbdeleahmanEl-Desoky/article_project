<?php $__env->startSection('title'); ?>
    <title>Manhattan</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    
    
    
    <section id="cta" class="section section_head ">

        <div id="carouselExampleIndicators" class="carousel slide img_container">
            <div class="carousel-inner wow bounce"  data-wow-delay="0.05s">
                <div class="carousel-item carousel_height h-100  active img_about">
                    <img class="d-block h-100 w-100" galleryimg="no"
                    src="<?php echo e($article->image); ?>"
                        alt="First slide">
                </div>
            </div>
        </div>
    </section>
    
    
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section id="cta" class="section">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 layerIndex d-lg-block">
            <div class="sidebar">

                <div class="widget">
                    <div class="link-widget text-dark">
                        <div class="dropdown">
                            <button class="btn btn-lg index dropdown-toggle " type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                index
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#Manhattan,NewYorkCity"></a>
                                <a class="dropdown-item" href="#Howmanyboroughs">How many boroughs</a>
                                <a class="dropdown-item" href="#HistoryofManhattan">History</a>
                                <a class="dropdown-item" href="#FamousManhattanbridges">Famous bridges</a>
                                <a class="dropdown-item" href="#Howtonavigate">How to navigate</a>
                                <a class="dropdown-item" href="#BikeandWalk">Manhattan Bike and walk</a>
                                <a class="dropdown-item" href="#NeighborhoodsinManhattan">Neighborhoods</a>
                                <a class="dropdown-item" href="#FamousbuildingsinManhattan">Famous buildin</a>
                                <a class="dropdown-item" href="#Famousparks">Famous parks/a>
                                <a class="dropdown-item" href="#newschannels">News channels</a>
                                <a class="dropdown-item" href="#Colleges">Colleges</a>
                                <a class="dropdown-item" href="#Questions">Questions</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        
        
        

        <div class="container " id="container_contact">

            <?php echo $__env->make('website.layout.link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="row">

                <div class="col-12 text-center p-4">

                    <h2 style="color: black">
                        <?php echo e($article->title_en); ?>

                    </h2>
                </div>
                <div class="row d-flex justify-content-center ">
                    <div class="col-12 col-lg-8  wow bounce" data-wow-delay="0.01s">
                        <!-- Right third with an image -->
                        <img class="w-100 p-2" src="<?php echo e(asset('images/manhattan/manhattan.jpg')); ?>"
                            class="img-fluid" alt="Article Image">
                        <small class="text-center d-block"></small>
                    </div>
                </div>

                <div class="col-lg-12 my-3 wow bounce">
                    <?php echo $article->description_en; ?>

                </div>
            </div>




                <?php $__currentLoopData = $article->articleDescriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $descriptions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($descriptions->style == 'right'): ?>
                <div class="row my-5 py-5
                 <?php if( $descriptions->aria==1): ?>
                    tiko
                <?php endif; ?>" >
                <?php if($descriptions->title_en !=null): ?>
                <div class="col-lg-12 my-3 wow bounce">
                    <h3>
                        <?php echo e($descriptions->title_en); ?>

                    </h3>
                </div>
                <?php endif; ?>
                    <!-- First Row -->
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12 col-lg-8 data-wow-delay="0.1s"">
                                <?php echo $descriptions->description_en; ?>

                            </div>
                            <div class="col-12 col-lg-4 wow fadeInLeft" data-wow-delay="0.2s">
                                <?php $__currentLoopData = $descriptions->imageArticleDescriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imageArticleDescriptions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                <img
                                    src="<?php echo e($imageArticleDescriptions->image); ?>"
                                    class="img-fluid" alt="Article Image">
                                <small class="text-center d-block">Empire state building</small>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php elseif($descriptions->style == 'up'): ?>
                <div class="row
                <?php if( $descriptions->aria==1): ?>
                    tiko
                <?php endif; ?>">
                    <div class="col-lg-12">
                        <div class="row">
                            <?php $__currentLoopData = $descriptions->imageArticleDescriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imageArticleDescriptions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                                <!-- Centered image with text -->
                                <img class="w-100 h-75 p-2"
                                    src="<?php echo e($imageArticleDescriptions->image); ?>"
                                    class="img-fluid" alt="Article Image">
                                <small class="d-block text-center">Metropolitan museum</small>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="row tiko">
                    <?php if($descriptions->title_en !=null): ?>
                    <div class="col-lg-12 my-3 wow bounce">
                        <h3>
                            <?php echo e($descriptions->title_en); ?>

                        </h3>
                    </div>
                    <?php endif; ?>
                    <?php if($descriptions->description_en !=null): ?>
                    <div class="col-lg-12 wow bounce"  data-wow-delay="0.1s">
                        <?php echo $descriptions->description_en; ?>

                    </div>
                    <?php endif; ?>
                </div>
                
                <?php elseif($descriptions->style == 'down'): ?>
                <div class="row
                <?php if( $descriptions->aria===1): ?>
                    tiko
                <?php endif; ?>  my-5   ">
                    <?php if($descriptions->title_en !=null): ?>
                    <div class="col-lg-12 my-3 wow bounce">
                        <h3>
                            <?php echo e($descriptions->title_en); ?>

                        </h3>
                    </div>
                    <?php endif; ?>
                    <?php if($descriptions->description_en !=null): ?>
                    <div class="col-lg-12 wow bounce"  data-wow-delay="0.1s">
                        <?php echo $descriptions->description_en; ?>

                    </div>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <?php $__currentLoopData = $descriptions->imageArticleDescriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imageArticleDescriptions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                                <!-- Centered image with text -->
                                <img class="w-100 h-75 p-2"
                                    src="<?php echo e($imageArticleDescriptions->image); ?>"
                                    class="img-fluid" alt="Article Image">
                                <small class="d-block text-center">Metropolitan museum</small>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <?php else: ?>
                <div class="row
                <?php if( $descriptions->aria==1): ?>
                    tiko
                <?php endif; ?>">
                    <div class="col-lg-12 my-3 wow bounce">
                        <h3>
                           <?php echo e($descriptions->title_en); ?>

                        </h3>
                    </div>

                    <div class="col-lg-12 "  data-wow-delay="0.1s">
                        <?php echo $descriptions->description_en; ?>

                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('website.layout.link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        </div>
    </section>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('website.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Article_new\resources\views/website/manhattan/manhattan.blade.php ENDPATH**/ ?>