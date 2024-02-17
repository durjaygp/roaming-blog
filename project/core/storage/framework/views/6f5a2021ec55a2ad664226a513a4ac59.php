<?php $__env->startSection('metaHead'); ?>
    <?php
        $harfler_meta = str_replace('?','',$harfler);
    ?>
    <meta name="keywords" content="<?php echo e(@$PageKeywords); ?>"/>
    <?php if(!$start && !$end && $contain && !$length && !$harfler): ?>
        <title>İçinde <?php echo e(mb_strtoupper($contain, 'UTF-8')); ?> olan kelimeler | Kelime Bulma Oyun Yardımcısı</title>
        <meta property="og:description" content="İçinde <?php echo e(mb_strtoupper($contain, 'UTF-8')); ?> olan kelimeler nelerdir? Sözlükte, içinde <?php echo e(mb_strtoupper($contain, 'UTF-8')); ?> olan <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='İçinde <?php echo e(mb_strtoupper($contain, 'UTF-8')); ?> olan kelimeler | Kelime Bulma Oyun Yardımcısı'/>
        <meta name="description" content="İçinde <?php echo e(mb_strtoupper($contain, 'UTF-8')); ?> olan kelimeler nelerdir? Sözlükte, içinde <?php echo e(mb_strtoupper($contain, 'UTF-8')); ?> olan <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    <?php endif; ?>
    <?php if(!$start && $end && !$contain && !$length && !$harfler): ?>
        <title><?php echo e(mb_strtoupper($end, 'UTF-8')); ?> ile biten kelimeler | Kelime Bulma Oyun Yardımcısı</title>
        <meta property="og:description" content="<?php echo e(mb_strtoupper($end, 'UTF-8')); ?> ile biten kelimeler nelerdir? Sözlükte, sonu <?php echo e(mb_strtoupper($end, 'UTF-8')); ?> olan <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
        content='<?php echo e(mb_strtoupper($end, 'UTF-8')); ?> ile biten kelimeler | Kelime Bulma Oyun Yardımcısı'/>
        <meta name="description" content="<?php echo e(mb_strtoupper($end, 'UTF-8')); ?> ile biten kelimeler nelerdir? Sözlükte, sonu <?php echo e(mb_strtoupper($end, 'UTF-8')); ?> olan <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    <?php endif; ?>
    <?php if(!$start && !$end && !$contain && $length && !$harfler): ?>
        <title><?php echo e($length); ?> harfli kelimeler | Kelime Bulma Oyun Yardımcısı</title>
        <meta property="og:description" content="<?php echo e($length); ?> harfli kelimeler nelerdir? Sözlükte, <?php echo e($length); ?> harfi olan <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='<?php echo e($length); ?> harfli kelimeler | Kelime Bulma Oyun Yardımcısı'/>
        <meta name="description" content="<?php echo e($length); ?> harfli kelimeler nelerdir? Sözlükte, <?php echo e($length); ?> harfi olan <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    <?php endif; ?>
    <?php if($start && !$end && !$contain && !$length && !$harfler): ?>
        <title><?php echo e(mb_strtoupper($start, 'UTF-8')); ?> ile başlayan kelimeler | Kelime Bulma Oyun Yardımcısı</title>
        <meta property="og:description" content="<?php echo e(mb_strtoupper($start, 'UTF-8')); ?> ile başlayan kelimeler nelerdir? Sözlükte, başında <?php echo e(mb_strtoupper($start, 'UTF-8')); ?> olan <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='<?php echo e(mb_strtoupper($start, 'UTF-8')); ?> ile başlayan kelimeler | Kelime Bulma Oyun Yardımcısı'/>
        <meta name="description" content="<?php echo e(mb_strtoupper($start, 'UTF-8')); ?> ile başlayan kelimeler nelerdir? Sözlükte, başında <?php echo e(mb_strtoupper($start, 'UTF-8')); ?> olan <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    <?php endif; ?>


    <?php if($start && $contain && !$length && !$end && !$harfler): ?>
        <title><?php echo e(mb_strtoupper($start, 'UTF-8')); ?> ile başlayan, içinde <?php echo e(mb_strtoupper($contain, 'UTF-8')); ?> olan kelimeler | Kelimelodi</title>
        <meta property="og:description" content="<?php echo e(mb_strtoupper($start, 'UTF-8')); ?> ile başlayan, içinde <?php echo e(mb_strtoupper($contain, 'UTF-8')); ?> olan kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='<?php echo e(mb_strtoupper($start, 'UTF-8')); ?> ile başlayan, içinde <?php echo e(mb_strtoupper($contain, 'UTF-8')); ?> olan kelimeler | Kelimelodi'/>
        <meta name="description" content="<?php echo e(mb_strtoupper($start, 'UTF-8')); ?> ile başlayan, içinde <?php echo e(mb_strtoupper($contain, 'UTF-8')); ?> olan kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    <?php endif; ?>
    <?php if($start && !$contain && !$length && $end && !$harfler): ?>
        <title><?php echo e(mb_strtoupper($start, 'UTF-8')); ?> ile başlayan, <?php echo e(mb_strtoupper($end, 'UTF-8')); ?> ile biten kelimeler | Kelimelodi</title>
        <meta property="og:description" content="<?php echo e(mb_strtoupper($start, 'UTF-8')); ?> ile başlayan, <?php echo e(mb_strtoupper($end, 'UTF-8')); ?> ile biten kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='<?php echo e(mb_strtoupper($start, 'UTF-8')); ?> ile başlayan, <?php echo e(mb_strtoupper($end, 'UTF-8')); ?> ile biten kelimeler | Kelimelodi'/>
        <meta name="description" content="<?php echo e(mb_strtoupper($start, 'UTF-8')); ?> ile başlayan, <?php echo e(mb_strtoupper($end, 'UTF-8')); ?> ile biten kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    <?php endif; ?>
    <?php if($start && !$contain && $length && !$end && !$harfler): ?>
        <title><?php echo e(mb_strtoupper($start, 'UTF-8')); ?> ile başlayan, <?php echo e($length); ?> harfli kelimeler | Kelimelodi</title>
        <meta property="og:description" content="<?php echo e(mb_strtoupper($start, 'UTF-8')); ?> ile başlayan, <?php echo e($length); ?> harfli kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='<?php echo e(mb_strtoupper($start, 'UTF-8')); ?> ile başlayan, <?php echo e($length); ?> harfli kelimeler | Kelimelodi'/>
        <meta name="description" content="<?php echo e(mb_strtoupper($start, 'UTF-8')); ?> ile başlayan, <?php echo e($length); ?> harfli kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    <?php endif; ?>
    <?php if(!$start && $contain && !$length && $end && !$harfler): ?>
        <title>İçinde <?php echo e(mb_strtoupper($contain, 'UTF-8')); ?> olan, <?php echo e(mb_strtoupper($end, 'UTF-8')); ?> ile biten kelimeler | Kelimelodi</title>
        <meta property="og:description" content="İçinde <?php echo e(mb_strtoupper($contain, 'UTF-8')); ?> olan, <?php echo e(mb_strtoupper($end, 'UTF-8')); ?> ile biten kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='İçinde <?php echo e(mb_strtoupper($contain, 'UTF-8')); ?> olan, <?php echo e(mb_strtoupper($end, 'UTF-8')); ?> ile biten kelimeler | Kelimelodi'/>
        <meta name="description" content="İçinde <?php echo e(mb_strtoupper($contain, 'UTF-8')); ?> olan, <?php echo e(mb_strtoupper($end, 'UTF-8')); ?> ile biten kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    <?php endif; ?>
    <?php if(!$start && $contain && $length && !$end && !$harfler): ?>
        <title>İçinde <?php echo e(mb_strtoupper($contain, 'UTF-8')); ?> olan, <?php echo e($length); ?> harfli kelimeler | Kelimelodi</title>
        <meta property="og:description" content="İçinde <?php echo e(mb_strtoupper($contain, 'UTF-8')); ?> olan, <?php echo e($length); ?> harfli kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='İçinde <?php echo e(mb_strtoupper($contain, 'UTF-8')); ?> olan, <?php echo e($length); ?> harfli kelimeler | Kelimelodi'/>
        <meta name="description" content="İçinde <?php echo e(mb_strtoupper($contain, 'UTF-8')); ?> olan, <?php echo e($length); ?> harfli kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    <?php endif; ?>
    <?php if(!$start && !$contain && $length && $end && !$harfler): ?>
        <title><?php echo e(mb_strtoupper($end)); ?> ile biten, <?php echo e($length); ?> harfli kelimeler | Kelimelodi</title>
        <meta property="og:description" content="<?php echo e(mb_strtoupper($end)); ?> ile biten, <?php echo e($length); ?> harfli kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='<?php echo e(mb_strtoupper($end)); ?> ile biten, <?php echo e($length); ?> harfli kelimeler | Kelimelodi'/>
        <meta name="description" content="<?php echo e(mb_strtoupper($end)); ?> ile biten, <?php echo e($length); ?> harfli kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    <?php endif; ?>


    <?php if($start && $contain && !$length && $end && !$harfler): ?>
        <title><?php echo e(mb_strtoupper($start)); ?> ile başlayan, içinde <?php echo e(mb_strtoupper($contain)); ?>, <?php echo e(mb_strtoupper($end)); ?> ile biten kelimeler | Kelimelodi</title>
        <meta property="og:description" content="<?php echo e(mb_strtoupper($start)); ?> ile başlayan, içinde <?php echo e(mb_strtoupper($contain)); ?>, <?php echo e(mb_strtoupper($end)); ?> ile biten kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='<?php echo e(mb_strtoupper($start)); ?> ile başlayan, içinde <?php echo e(mb_strtoupper($contain)); ?>, <?php echo e(mb_strtoupper($end)); ?> ile biten kelimeler | Kelimelodi'/>
        <meta name="description" content="<?php echo e(mb_strtoupper($start)); ?> ile başlayan, içinde <?php echo e(mb_strtoupper($contain)); ?>, <?php echo e(mb_strtoupper($end)); ?> ile biten kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    <?php endif; ?>
    <?php if($start && $contain && $length && !$end && !$harfler): ?>
        <title><?php echo e(mb_strtoupper($start)); ?> ile başlayan, içinde <?php echo e(mb_strtoupper($contain)); ?>, <?php echo e($length); ?> harfli kelimeler | Kelimelodi</title>
        <meta property="og:description" content="<?php echo e(mb_strtoupper($start)); ?> ile başlayan, içinde <?php echo e(mb_strtoupper($contain)); ?>, <?php echo e($length); ?> harfli kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='<?php echo e(mb_strtoupper($start)); ?> ile başlayan, içinde <?php echo e(mb_strtoupper($contain)); ?>, <?php echo e($length); ?> harfli kelimeler | Kelimelodi'/>
        <meta name="description" content="<?php echo e(mb_strtoupper($start)); ?> ile başlayan, içinde <?php echo e(mb_strtoupper($contain)); ?>, <?php echo e($length); ?> harfli kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    <?php endif; ?>
    <?php if($start && !$contain && $length && $end && !$harfler): ?>
        <title><?php echo e(mb_strtoupper($start)); ?> ile başlayan, <?php echo e(mb_strtoupper($end)); ?> ile biten, <?php echo e($length); ?> harfli kelimeler | Kelimelodi</title>
        <meta property="og:description" content="<?php echo e(mb_strtoupper($start)); ?> ile başlayan, <?php echo e(mb_strtoupper($end)); ?> ile biten, <?php echo e($length); ?> harfli kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='<?php echo e(mb_strtoupper($start)); ?> ile başlayan, <?php echo e(mb_strtoupper($end)); ?> ile biten, <?php echo e($length); ?> harfli kelimeler | Kelimelodi'/>
        <meta name="description" content="<?php echo e(mb_strtoupper($start)); ?> ile başlayan, <?php echo e(mb_strtoupper($end)); ?> ile biten, <?php echo e($length); ?> harfli kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    <?php endif; ?>
    <?php if(!$start && $contain && $length && $end && !$harfler): ?>
        <title>İçinde <?php echo e(mb_strtoupper($contain)); ?>, <?php echo e(mb_strtoupper($end)); ?> ile biten, <?php echo e($length); ?> harfli kelimeler | Kelimelodi</title>
        <meta property="og:description" content="İçinde <?php echo e(mb_strtoupper($contain)); ?>, <?php echo e(mb_strtoupper($end)); ?> ile biten, <?php echo e($length); ?> harfli kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='İçinde <?php echo e(mb_strtoupper($contain)); ?>, <?php echo e(mb_strtoupper($end)); ?> ile biten, <?php echo e($length); ?> harfli kelimeler | Kelimelodi'/>
        <meta name="description" content="İçinde <?php echo e(mb_strtoupper($contain)); ?>, <?php echo e(mb_strtoupper($end)); ?> ile biten, <?php echo e($length); ?> harfli kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    <?php endif; ?>
    <?php if($start && $contain && $length && $end && !$harfler): ?>
        <title><?php echo e(mb_strtoupper($start)); ?> ile başlayan, içinde <?php echo e(mb_strtoupper($contain)); ?>, <?php echo e(mb_strtoupper($end)); ?> ile biten, <?php echo e($length); ?> harfli kelimeler | Kelimelodi</title>
        <meta property="og:description" content="<?php echo e(mb_strtoupper($start)); ?> ile başlayan, içinde <?php echo e(mb_strtoupper($contain)); ?>, <?php echo e(mb_strtoupper($end)); ?> ile biten, <?php echo e($length); ?> harfli kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='<?php echo e(mb_strtoupper($start)); ?> ile başlayan, içinde <?php echo e(mb_strtoupper($contain)); ?>, <?php echo e(mb_strtoupper($end)); ?> ile biten, <?php echo e($length); ?> harfli kelimeler | Kelimelodi'/>
        <meta name="description" content="<?php echo e(mb_strtoupper($start)); ?> ile başlayan, içinde <?php echo e(mb_strtoupper($contain)); ?>, <?php echo e(mb_strtoupper($end)); ?> ile biten, <?php echo e($length); ?> harfli kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    <?php endif; ?>




    <?php if($harfler_meta && $maxWildcards): ?>
        <title><?php echo e(mb_strtoupper($harfler_meta, 'UTF-8')); ?> ve <?php echo e($maxWildcards); ?> joker harflerden kelime türetme | Kelimelodi</title>
        <meta property="og:description" content="<?php echo e(mb_strtoupper($harfler_meta, 'UTF-8')); ?> ve <?php echo e($maxWildcards); ?> joker harflerden oluşan kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='<?php echo e(mb_strtoupper($harfler_meta, 'UTF-8')); ?> ve <?php echo e($maxWildcards); ?> joker harflerden kelime türetme | Kelimelodi'/>
        <meta name="description" content="<?php echo e(mb_strtoupper($harfler_meta, 'UTF-8')); ?> ve <?php echo e($maxWildcards); ?> joker harflerden oluşan kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    <?php endif; ?>
    <?php if($harfler_meta): ?>
        <title><?php echo e(mb_strtoupper($harfler_meta, 'UTF-8')); ?> harflerden kelime türetme | Kelimelodi</title>
        <meta property="og:description" content="<?php echo e(mb_strtoupper($harfler_meta, 'UTF-8')); ?> harflerden oluşan kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='<?php echo e(mb_strtoupper($harfler_meta, 'UTF-8')); ?> harflerden kelime türetme | Kelimelodi'/>
        <meta name="description" content="<?php echo e(mb_strtoupper($harfler_meta, 'UTF-8')); ?> harflerden oluşan kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    <?php endif; ?>
    <?php if($harfler_meta==='' && $maxWildcards): ?>
        <title><?php echo e($maxWildcards); ?> joker harflerden kelime türetme | Kelimelodi</title>
        <meta property="og:description" content="<?php echo e($maxWildcards); ?> joker harflerden oluşan kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='<?php echo e($maxWildcards); ?> joker harflerden kelime türetme | Kelimelodi'/>
        <meta name="description" content="<?php echo e($maxWildcards); ?> joker harflerden oluşan kelimeler nelerdir? Sözlükte tam <?php echo e($count); ?> kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('frontEnd.includes.resultat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontEnd.layoutResult', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/unscrambleMeta.blade.php ENDPATH**/ ?>