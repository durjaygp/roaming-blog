<?=
/* Using an echo tag here so the `<? ... ?>` won't get parsed as short tags */
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0">
    <channel>
        <title><![CDATA[<?php echo e($meta['title']); ?>]]></title>
        <link><![CDATA[<?php echo e(url($meta['link'])); ?>]]></link>
        <description><![CDATA[<?php echo e($meta['description']); ?>]]></description>
        <language><?php echo e($meta['language']); ?></language>
        <pubDate><?php echo e($meta['updated']); ?></pubDate>

        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <item>
                <title><![CDATA[<?php echo e($item->title); ?>]]></title>
                <link><?php echo e(url($item->link)); ?></link>
                <description><![CDATA[<?php echo $item->summary; ?>]]></description>
                <author><![CDATA[<?php echo e($item->authorName); ?>]]></author>
                <guid><?php echo e(url($item->id)); ?></guid>
                <pubDate><?php echo e($item->updated->toRfc3339String()); ?></pubDate>
                <?php $__currentLoopData = $item->category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <category><?php echo e($category); ?></category>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </item>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </channel>
</rss>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/vendor/feed/rss.blade.php ENDPATH**/ ?>