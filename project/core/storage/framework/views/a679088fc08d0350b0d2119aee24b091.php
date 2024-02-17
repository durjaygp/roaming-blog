<?php $__env->startSection('body'); ?>

    <?php if(count($languages)): ?>

        <div class="panel">

            <div class="panel-header">

                <?php echo e(__('translation.languages')); ?>



            </div>

            <div class="panel-body">

                <table>

                    <thead>
                    <tr>
                        <th><?php echo e(__('translation.language_name')); ?></th>
                        <th><?php echo e(__('translation.locale')); ?></th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <?php echo e($name); ?>

                            </td>
                            <td>
                                <a href="<?php echo e(route('languages.translations.index', $language)); ?>">
                                    <?php echo e($language); ?>

                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

            </div>

        </div>

    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('translation::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/vendor/translation/languages/index.blade.php ENDPATH**/ ?>