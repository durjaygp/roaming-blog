<?php $__env->startSection('content'); ?>
    <div id="content">
      <div class="slider-block style-one mt-60">
        <div class="container"> 
          <div class="row row-gap-32">
            <div class="col-md-3 col-sm-12">
              
            </div>
            <div class="col-md-6 col-sm-9">
              

              
              
             
                <center>
                  <h3>Search "<?php echo e($name); ?>"</h3>
                <p><?php echo e($class_word); ?></p>
                </center>
                <hr>
                <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <br>
                        <div class="alert alert-warning" role="alert">
                        <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($record->WM_meaning); ?>

                          
                            <?php if($record->WM_sentence): ?>
                            <br>
                            <?php echo e($record->WM_sentence); ?>

                            <?php endif; ?>
                          <br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                          </div>
                      </div>
                    </div>
                  </div>
                 
            </div>
            <div class="col-md-3 col-sm-3"></div>
          </div>
        </div>
      </div>
      
      
    </div>
    <!-- Button trigger modal -->


<!-- Modal -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontEnd.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/defination.blade.php ENDPATH**/ ?>