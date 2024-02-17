<style>
    .h3_class{
        font-family: 'Open Sans', Arial, sans-serif;
        font-weight: 500;
        line-height: 1.2;
        font-size: 1.75rem;
    }
    .pl-custom {
        padding-left: 3%;
    }

    .stylePopOver {
        position: absolute !important;
        inset: 0px auto auto 0px !important;
        margin: 0px !important;
        transform: translate3d(145px, 614.5px, 0px) !important;
    }
    .stylePopOverArrow {
        position: absolute !important;
        left: 0px !important;
        transform: translate3d(102px, 0px, 0px) !important;
    }
    #myModal {
        display: none;
        position: fixed;
        top: 27%;
        left: 50%;
        right: -50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        border: 1px solid #ccc;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }

    #overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;
    }

    /* Styling for the close button */
    .close {
        cursor: pointer;
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 20px;
    }

    @keyframes pulseAnimation {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: .5;
        }
    }

    .cursor_h6 {
        cursor: pointer;
    }

    .form_control_main {
        padding: 0 !important;
    }

    #meaning {
        background-color: grey;
        height: 0.5rem;
        width: 6rem;
        border-radius: 0.375rem;
        margin-top: 0.75rem;
        margin-right: 2rem;
        animation: pulseAnimation 2s infinite; /* Use the animation here */
    }

    .form-floating>.form-control {
        min-height: calc(2.5rem + calc(var(--bs-border-width) * 2)) !important;
        line-height: 1.25;
    }
    #content {
        overflow-x: clip;
    }

    .form-control:focus {
        color: black; !important;
        background-color: transparent !important;
        border-color: #66afe9;
        outline: none;
        text-transform: uppercase;
    }
    .form-control {
        text-transform: uppercase;
    }

    header .navbar-collapse ul.navbar-nav{
        position: relative;
        z-index: 100;
    }

    @media (max-width: 767.99px) {
        .site-top {
            display: none;
        }
        .col-md-3 {
            flex: 0 0 auto;
            width: 20%;
        }
        .col-md-33 {
            flex: 0 0 auto;
            width: 50%;
        }
        .formInput {
            padding-right: 18% !important;
            font-size: 1.5em !important;
        }
    }

    .see-more-container{
        background: linear-gradient(180deg,rgba(246,248,249,0),#ebeff1);
        height: 101px;
        margin-top: -101px;
        padding-top: 13px;
        position: relative;
        z-index: 1;
        align-items: center;
        display: flex;
        justify-content: center;
    }
    }

    .see-less-container{
        background: linear-gradient(180deg,rgba(246,248,249,0),#ebeff1);
        height: 101px;
        padding-top: 13px;
        position: relative;
        z-index: 1;
        align-items: center;
        display: flex;
        justify-content: center;
    }
    .see-more-container .see-more-button[data-v-46309664] {

        border: 0;
        border-radius: 21px;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        font-size: 14px;
        font-weight: 400;
        height: 42px;
        letter-spacing: -.19px;
        line-height: 19px;
        outline: none;
        overflow-anchor: none;
        padding: 11px 40px 12px;
        text-align: center;
        text-decoration: none;
        text-shadow: 0 1px 1px rgba(0,0,0,.25);
        white-space: nowrap;
    }

    .see-less-container .see-less-button[data-v-46309664] {

        border: 0;
        border-radius: 21px;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        font-size: 14px;
        font-weight: 400;
        height: 42px;
        letter-spacing: -.19px;
        line-height: 19px;
        outline: none;
        overflow-anchor: none;
        padding: 11px 40px 12px;
        text-align: center;
        text-decoration: none;
        text-shadow: 0 1px 1px rgba(0,0,0,.25);
        white-space: nowrap;
    }
    .pagination {
        color: #546e7a;
        font-size: 13px;
        font-weight: 400;
        letter-spacing: 0;
        line-height: 18px;
        margin-bottom: 0;
        margin-top: 5px;
        text-align: right;
    }
    @media (max-width: 767px) {
        #HiddenInMobileV{
            display: none;
        }
        #paragraphHiddenInMobile{
            display: none;
        }
        #HiddenInMobile{
            display: none;
        }
        #closeHidden{
            display: block !important;
        }
        #containerMobileI{
            padding: 0 !important;
        }
        #containerMobileI.col-md-7 {
            /*flex: initial !important; !* Reset the flex property *!*/
            /*width: auto !important; !* Set the width property to 'auto' *!*/
            width: 100% !important;
        }
        #hiddenResult{
            display: block;
            padding-left: 3% !important;
            /*z-index: 10;*/
            /*background-color: white;*/
        }
        .pl-custom {
            padding-left: 6%;
        }
        .fontMobile{
            font-size: 17px;
            padding: 0px 16px;
        }
        .sizeButton{
            padding: 5px 16px;
        }
        .heightButtonMobile{
            height: 32px;
        }
    }
    #hiddenResult{
        display: none;
    }
    #closeHidden{
        display: none;
    }
    .showWeb{
        width: 100% !important;
    }
    #paragraphHiddenInMobile{
        width: 100% !important;
    }
    #rowWeb{
        margin-bottom: 20% !important;
    }
    #containerMobileI.col-md-7 {
        flex: 0 0 auto;
        width: 50%;
    }
    .heading78 {
        font-size: 20px;
        font-weight: 600;
        line-height: 28px;
        text-transform: capitalize;
        padding: 0;
        margin-top: -9%;
        border: transparent;
    }
</style>
<div id="content" class="p-0">
    <div class="slider-block style-one">
        <div class="container">
            <div class="row">
                <div class="div11 p-0" id="divMobile">
                    <h3 id="hiddenResult" class="text-left pl-4 h3_class">
                        <?php echo $message; ?>

                    </h3>
                    <!-- The Modal -->
                    <div id="myModal">
                        <div class="text-center bg-light p-2 py-3 div16" style="border-radius:10px;">
                            <div class="row mx-2">
                                <div class="col-1 btn btn-primary" id="closeHidden_"
                                     style="padding-left: 9px !important;padding-right: 9px !important;max-height: 32px;">
                                    <p>
                                        X
                                    </p>
                                </div>
                                <div class="col heading4 showWeb mt-2" style="line-height: 24px;">
                                    <center><?php echo e(__('frontend.unscramble_Letters')); ?></center>
                                </div>
                            </div>
                            <div class="body2" style="margin-top: 2%;font-size: 16px;"><?php echo e(__('frontend.unscramble_SubHeader')); ?></div>
                            <form action="<?php echo e(route('kelimebulucu')); ?>" method="get" id="myformModal" style="margin-top: 3%">
                                <!-- <?php echo csrf_field(); ?> -->
                                <div class="input-group" id="InputGroupModal">
                                    <input class="form-control form_control_main rounded-pill input-mysize" type="search" id="searchInputModal" name="harfler" minLength="2" value="<?php echo e($harfler); ?>" autocomplete="off" id="example-search-input"
                                           style="text-align: center;font-size: 1.75em;color: #000000; font-weight:bold;height: 60px" >
                                </div>
                                <div class="row justify-content-center">
                                    <div class="row mx-3 mt-2">
                                        <div class="col-md-33 col-sm-6 col-6 mt-2">
                                            <div class="input-group">
                                                <div class="form-floating form-floating-group flex-grow-1">
                                                    <input class="form-control turkish-english-input rounded formInput" type="search" name="baslayan" autocomplete="off" placeholder="A" value="<?php echo e($start); ?>"  id="startInputModal"
                                                           style="text-align: center;  color: #000000; font-weight:bold;height:60px;" >
                                                    <label for="baslayan" class="text-uppercase" style="color: black;"><?php echo e(__('frontend.starts')); ?></label>
                                                </div>
                                                <span class="input-group-append">
                                                    <button class="btn bg-white ms-n4 btn-ss popover-trigger-custom" type="button" style="margin-top:-2%; width:10px; display: flex; align-items: center; justify-content: center; background: transparent"
                                                            data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content='<p class="text-grey col pr-0"><?php echo e(__('frontend.startsDetails')); ?></p>' >
                                                          <i class="fa-regular fa-circle-question"></i>
                                                        </button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-33 col-sm-6 col-6 mt-2">
                                            <div class="input-group">
                                                <div class="form-floating form-floating-group flex-grow-1">
                                                    <input class="form-control turkish-english-input rounded formInput" type="search" name="iceren" autocomplete="off" placeholder="A_B" value="<?php echo e($contain); ?>" id="containInputModal"
                                                           style="text-align: center;  color: #000000; font-weight:bold;height:60px;">
                                                    <label for="iceren" class="text-uppercase" style="color: black;"><?php echo e(__('frontend.contains')); ?></label>
                                                </div>
                                                <span class="input-group-append">
                                                      <button class="btn bg-white ms-n4 btn-ss popover-trigger-custom" type="button" style="height:55px; margin-top:2px; width:10px; display: flex; align-items: center; justify-content: center;background: transparent; margin-top: -2%"
                                                              data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content='<p class="text-grey col pr-0"><?php echo e(__('frontend.containsDetails')); ?></p>' >
                                                            <i class="fa-regular fa-circle-question"></i>
                                                      </button>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="col-md-33 col-sm-6 col-6 mt-2">
                                            <div class="input-group">
                                                <div class="form-floating form-floating-group flex-grow-1">
                                                    <input class="form-control turkish-english-input rounded formInput" type="search" name="biten" autocomplete="off" placeholder="B" value="<?php echo e($end); ?>"  id="endInputModal"
                                                           style="text-align: center;  color: #000000; font-weight:bold;height:60px;">
                                                    <label for="biten" class="text-uppercase" style="color: black;"><?php echo e(__('frontend.ends')); ?></label>
                                                </div>
                                                <span class="input-group-append">
                                                      <button class="btn bg-white ms-n4 btn-ss popover-trigger-custom" type="button" style="height:55px; margin-top:2px; width:10px; display: flex; align-items: center; justify-content: center;background: transparent; margin-top: -2%"
                                                              data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content='<p class="text-grey col pr-0"><?php echo e(__('frontend.endsDetails')); ?></p>' >
                                                            <i class="fa-regular fa-circle-question"></i>
                                                      </button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-33 col-sm-6 col-6 mt-2">
                                            <div class="input-group">
                                                <div class="form-floating form-floating-group flex-grow-1">
                                                    <input class="form-control rounded formInput" type="search" name="uzunluk" min="2" max="70" autocomplete="off" placeholder="LENGTH" value="<?php echo e($length); ?>" id="lengthInputModal" pattern="\d{1,2}"
                                                           style="text-align: center;  color: #000000; font-weight:bold; height:60px;">
                                                    <label for="uzunluk" class="text-uppercase" style="color: black;margin-top: -4%;"><?php echo e(__('frontend.lenght')); ?></label>
                                                </div>
                                                <span class="input-group-append">
                                                      <button class="btn bg-white ms-n4 btn-ss popover-trigger-custom" type="button" style="height:55px; margin-top:2px; width:10px; display: flex; align-items: center; justify-content: center;background: transparent; margin-top: -2%"
                                                              data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content='<p class="text-grey col pr-0"><?php echo e(__('frontend.lenghtDetails')); ?></p>' >
                                                              <i class="fa-regular fa-circle-question"></i>
                                                      </button>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center text-center" style="margin-top: 3%">
                                    <div class="col-md-9 col-sm-6 col-9"> <!-- Adjust the column size based on your layout -->
                                        <button type="submit" id="searchButtonModal" class="btn btn-success btn-lg btn-block fw-bold" style="height:50px;width:100%;font-size: 15px;"><?php echo e(__('frontend.search')); ?></button>
                                    </div>
                                    <div class="col-md-3 col-sm-1 col-3"> <!-- Adjust the column size based on your layout -->
                                        <button type="reset" id="resetButtonModal" class="btn btn-warning btn-lg btn-block fw-bold" style="height:50px;width:100%;font-size: 15px;">X</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="text-center bg-light p-2 py-3 div16" id="divMobile2" style="border-radius:10px; position: sticky; top: 0%">
                        <div id="HiddenInMobile">
                            <div class="row mx-2">
                                <div class="col-1 btn btn-primary" id="closeHidden"
                                     style="padding-left: 9px !important;padding-right: 9px !important;max-height: 32px;">
                                    <p>
                                        X
                                    </p>
                                </div>
                                <div class="col-9 heading6 showWeb" style="line-height: 24px;font-size: 1rem;">
                                    <center><?php echo e(__('frontend.unscramble_Letters')); ?></center>
                                </div>
                            </div>
                            <div class="body2" style="margin-top: 2%;font-size: 14px;"><?php echo e(__('frontend.unscramble_SubHeader')); ?></div>
                        </div>
                        <form action="<?php echo e(route('kelimebulucu')); ?>" method="get" id="myform" style="margin-top: 3%">
                            <!-- <?php echo csrf_field(); ?> -->
                            <div class="input-group" id="InputGroup">
                                <input class="form-control form_control_main rounded-pill input-mysize" type="search" id="searchInput" name="harfler" minLength="2" value="<?php echo e($harfler); ?>" autocomplete="off" id="example-search-input"
                                       style="text-align: center;font-size: 1.375rem;color: #000000; font-weight:bold;max-height: 50px;" >
                            </div>
                            <div id="HiddenInMobileV">
                                <div class="row d-flex flex-row justify-content-center align-items-center" style="margin-top: 5%">
                                    </span>
                                    <div class="col-md-6 col-sm-6 col-6 p-0">
                                        <div class="input-group" style="max-height: 50px; padding-left: 12%; padding-right: 4%">
                                            <div class="form-floating form-floating-group flex-grow-1" style="max-height: 50px">
                                                <input class="form-control turkish-english-input rounded stickyPosition" type="search" name="baslayan" autocomplete="off" placeholder="A" value="<?php echo e($start); ?>"  id="startInput"
                                                       style="text-align: center;  color: #000000; font-weight:bold; max-height: 50px " >
                                                <label for="baslayan" class="text-uppercase" style="color: black;margin-top: -4%;"><?php echo e(__('frontend.starts')); ?></label>
                                            </div>
                                            <span class="input-group-append">
                                                    <button class="btn bg-white ms-n4 btn-ss popover-trigger-custom" type="button" style="height:50px;margin-top:-2%; width:10px; display: flex; align-items: center; justify-content: center; background: transparent"
                                                            data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content='<p class="text-grey col pr-0"><?php echo e(__('frontend.startsDetails')); ?></p>' >
                                                          <i class="fa-regular fa-circle-question"></i>
                                                        </button>
                                                </span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-6 p-0">
                                        <div class="input-group" style="max-height: 50px; padding-right: 12%; padding-left: 4%">
                                            <div class="form-floating form-floating-group flex-grow-1" style="max-height: 50px">
                                                <input class="form-control turkish-english-input rounded" type="search" name="iceren" autocomplete="off" placeholder="A_B" value="<?php echo e($contain); ?>" id="containInput"
                                                       style="text-align: center;  color: #000000; font-weight:bold; max-height: 50px">
                                                <label for="iceren" class="text-uppercase" style="color: black;max-height: 50px;"><?php echo e(__('frontend.contains')); ?></label>
                                            </div>
                                            <span class="input-group-append">
                                                      <button class="btn bg-white ms-n4 btn-ss popover-trigger-custom" type="button" style="height:50px; margin-top:2px; width:10px; display: flex; align-items: center; justify-content: center;background: transparent; margin-top: -2%"
                                                              data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content='<p class="text-grey col pr-0"><?php echo e(__('frontend.containsDetails')); ?></p>' >
                                                            <i class="fa-regular fa-circle-question"></i>
                                                      </button>
                                                    </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row d-flex flex-row justify-content-center align-items-center" style="margin-top: 5%">
                                    <div class="col-md-6 col-sm-6 col-6 p-0">
                                        <div class="input-group" style="max-height: 50px; padding-left: 12%; padding-right: 4%">
                                            <div class="form-floating form-floating-group flex-grow-1" style="max-height: 50px">
                                                <input class="form-control turkish-english-input rounded" type="search" name="biten" autocomplete="off" placeholder="B" value="<?php echo e($end); ?>"  id="endInput"
                                                       style="text-align: center;  color: #000000; font-weight:bold;max-height: 50px;">
                                                <label for="biten" class="text-uppercase" style="color: black;max-height: 50px;"><?php echo e(__('frontend.ends')); ?></label>
                                            </div>
                                            <span class="input-group-append">
                                                      <button class="btn bg-white ms-n4 btn-ss popover-trigger-custom" type="button" style="height:50px; margin-top:2px; width:10px; display: flex; align-items: center; justify-content: center;background: transparent; margin-top: -2%"
                                                              data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content='<p class="text-grey col pr-0"><?php echo e(__('frontend.endsDetails')); ?></p>' >
                                                            <i class="fa-regular fa-circle-question"></i>
                                                      </button>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-6 p-0">
                                        <div class="input-group" style="max-height: 50px; padding-right: 12%; padding-left: 4%">
                                            <div class="form-floating form-floating-group flex-grow-1" style="max-height: 50px">
                                                <input class="form-control rounded" type="search" name="uzunluk" min="2" max="70" autocomplete="off" placeholder="LENGTH" value="<?php echo e($length); ?>" id="lengthInput" pattern="\d{1,2}"
                                                       style="text-align: center;  color: #000000; font-weight:bold; text-transform:uppercase;max-height: 50px;">
                                                <label for="uzunluk" class="text-uppercase" style="color: black;max-height: 50px;"><?php echo e(__('frontend.lenght')); ?></label>
                                            </div>
                                            <span class="input-group-append">
                                                      <button class="btn bg-white ms-n4 btn-ss popover-trigger-custom" type="button" style="height:50px; margin-top:2px; width:10px; display: flex; align-items: center; justify-content: center;background: transparent; margin-top: -2%"
                                                              data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content='<p class="text-grey col pr-0"><?php echo e(__('frontend.lenghtDetails')); ?></p>' >
                                                              <i class="fa-regular fa-circle-question"></i>
                                                      </button>
                                                    </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center text-center" style="margin-top: 5%">
                                    <div class="col-md-9 col-sm-6 col-9"> <!-- Adjust the column size based on your layout -->
                                        <button type="submit" id="searchButton" class="btn btn-success btn-lg btn-block fw-bold" style="height:45px;width:100%;font-size: 15px;"><?php echo e(__('frontend.search')); ?></button>
                                    </div>
                                    <div class="col-md-3 col-sm-1 col-3"> <!-- Adjust the column size based on your layout -->
                                        <button type="reset" id="resetButton" class="btn btn-warning btn-lg btn-block fw-bold" style="height:45px;width:100%;font-size: 20px; padding: 1%">X</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-7" id="containerMobileI">
                    <div id="paragraphHiddenInMobile" class="text-left">
                        <?php if(count($paginator)==0): ?>
                            <p class="fs-5">
                                <?php echo e(__('frontend.notFoundText1')); ?>

                            </p>
                            <p class="fs-6">
                                <?php echo e(__('frontend.notFoundText2')); ?>

                            </p>
                        <?php endif; ?>
                        <h1 class="h3_class">
                            <?php echo $message; ?>

                        </h1>
                    </div>
                    <div class="row" id="rowWeb">
                        <div class="col-12">
                            <div class="row">
                                <?php if(count($paginator)==0): ?>
                                    <p class="text-danger text-center"><?php echo e(__('frontend.no_result_found')); ?></p>
                                <?php else: ?>
                                    <h6 class="mt-2 pl-custom bg-white" id="hideMobileCount" style="display:block; position: sticky; top: 0%; z-index: 100">
                                        <?php echo e($count); ?> <?php echo e(__('frontend.showing_numbers_words')); ?>

                                    </h6>
                                <?php endif; ?>
                                <?php $__currentLoopData = $paginator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $i=0;
                                    ?>
                                    <div class="col-12 mt-1">
                                        <div>
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th colspan="3" id="headerMobile<?php echo e($item['key']); ?>" style="padding-left: 3%;background-color:#<?php echo e($item['key']%10); ?>e662b; color: #ffffff; min-width:200px; position: sticky; top: 2.5%; z-index: 15"><?php echo e($item['key']); ?> <?php echo e(__('frontend.letter_word')); ?>

                                                            <span style="float: right;"><?php echo e($item['tot']); ?> <?php echo e(__('frontend.words')); ?> </span></th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tableBody_">
                                                <?php $__currentLoopData = $item['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr <?php if($i++>10): ?> style="display:none;" class="tr<?php echo e($item['key']); ?>" <?php endif; ?> >
                                                        <td class="fontMobile"><?php echo e($product->mots); ?></td>
                                                        <td class="text-end sizeButton">
                                                            <button type="button" class="btn btn-light popover-trigger heightButtonMobile" style="text-transform: lowercase;"
                                                                    data-bs-toggle="popover" data-bs-placement="bottom" data-word="<?php echo e($product->mots); ?>"
                                                                    data-bs-content='<p class="text-grey" id="meaning"></p>'>
                                                                <?php echo e(__('frontend.definition')); ?>

                                                            </button>
                                                        </td>
                                                        <td class="text-end sizeButton">
                                                            <div class="d-flex flex-row justify-content-end">
                                                                <button class="btn btn-light heightButtonMobile" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                                </button>
                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                    <li class="dropdown-item">
                                                                        <button type="button" class="btn btn-ligth" data-toggle="modal" data-target="#exampleModal">
                                                                            <i class="fa-solid fa-flag"></i> <?php echo e(__('frontend.report_invalid_word')); ?>

                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                            <?php if($i>10): ?>
                                                <div data-v-46309664="" id="bm<?php echo e($item['key']); ?>" data-v-e1a24138="" class="see-more-container see-more-container--overlay">
                                                    <button style="background:#<?php echo e($item['key']%10); ?>e662b;"  data-v-46309664="" data-testid="<?php echo e($item['key']); ?>" data-tot="<?php echo e($item['tot']); ?>" class="see-more-button"><div data-v-46309664="" class="loading-wrapper" style="display: none;"><img data-v-46309664="" src="/static/images/ico-loading.svg" width="30" height="30" alt="Loading..." class="loading-image"></div> <span data-v-46309664="" data-testid="see_more_button_label">
                                                                        <?php echo e(__('frontend.see_more_words')); ?>

                                                                    </span>
                                                    </button>
                                                </div>

                                                <div data-v-46309664="" id="bl<?php echo e($item['key']); ?>" data-v-e1a24138="" class="d-none see-less-container see-more-container--overlay d-flex flex-row justify-content-center">
                                                    <button style="background:#<?php echo e($item['key']%10); ?>e662b;"  data-v-46309664="" data-testid="<?php echo e($item['key']); ?>" class="see-less-button"><div data-v-46309664="" class="loading-wrapper" style="display: none;"><img data-v-46309664="" src="/static/images/ico-loading.svg" width="30" height="30" alt="Loading..." class="loading-image"></div> <span data-v-46309664="" data-testid="see_more_button_label">
                                                                        <?php echo e(__('frontend.see_less_words')); ?>

                                                                    </span>
                                                    </button>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            const buttonShowMore = document.getElementById('bm<?php echo e($item['key']); ?>');
                                            const buttonShowLess = document.getElementById('bl<?php echo e($item['key']); ?>');

                                            if(buttonShowMore && buttonShowLess){
                                                buttonShowMore.addEventListener('click', function () {
                                                    document.getElementById('show_more_text<?php echo e($item['key']); ?><?php echo e($i); ?>').style.display = 'block';
                                                    document.getElementById('show_less_text<?php echo e($item['key']); ?><?php echo e($i); ?>').style.display = 'none';
                                                });

                                                buttonShowLess.addEventListener('click', function () {
                                                    document.getElementById('show_more_text<?php echo e($item['key']); ?><?php echo e($i); ?>').style.display = 'none';
                                                    document.getElementById('show_less_text<?php echo e($item['key']); ?><?php echo e($i); ?>').style.display = 'block';
                                                });
                                            }
                                        });
                                    </script>
                                    <p class="pagination d-block">
                                        <span id="show_more_text<?php echo e($item['key']); ?><?php echo e($i); ?>" style="display: none"><?php echo e($i); ?>/<?php echo e($i); ?> <?php echo e(__('frontend.words')); ?></span>
                                        <?php if($i>10): ?>
                                            <span id="show_less_text<?php echo e($item['key']); ?><?php echo e($i); ?>" style="display:block;"><?php echo e(($i>10)?'10':$i); ?> / <?php echo e($i); ?> <?php echo e(__('frontend.words')); ?></span>
                                        <?php else: ?>
                                            <span id="show_less_text<?php echo e($item['key']); ?><?php echo e($i); ?>" style="display:block;"><?php echo e($i); ?>/<?php echo e($i); ?> <?php echo e(__('frontend.words')); ?></span>
                                        <?php endif; ?>
                                    </p>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(isset($paginator->links)): ?>
                                        <div class="d-flex flex-row justify-content-center">
                                            <?php echo e($paginator->links()); ?>

                                        </div>
                                    <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3"></div>
                </div>
                <div class="div13 p-0" id="adsGoogle">
                    <div class="stickyPosition">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4691302050848766"
                                crossorigin="anonymous">
                        </script>
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4691302050848766" data-ad-slot="2136936498" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        <script>(adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- The Overlay -->
    <div id="overlay" onclick="closeModal()"></div>
    <script>
        // JavaScript to handle modal functionality
        function openModal() {
            document.getElementById('overlay').style.zIndex = '10';
            document.getElementById('myModal').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
            document.getElementById('divMobile2').style.display = 'none';
            document.getElementById('divMobile2').style.zIndex = '1000';
        }

        function closeModal() {
            document.getElementById('myModal').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
            document.getElementById('divMobile2').style.display = 'block';
        }

        function handleScroll(){
            if (window.scrollY > 10) {
                document.getElementById('hiddenResult').style.display = 'none';
            }else{
                document.getElementById('hiddenResult').style.display = 'block';
            }
        }

        if (window.innerWidth <= 767) {
            document.getElementById('adsGoogle').style.display = 'none';
            // Add an event listener for the scroll event
            window.addEventListener('scroll', handleScroll);
            document.getElementById('InputGroup').addEventListener('click', function() {
                openModal();
                document.getElementById('HiddenInMobile').style.display = 'none';
                document.getElementById('HiddenInMobileV').style.display = 'none';
            });
            document.getElementById('closeHidden_').addEventListener('click', function() {
                closeModal();
            });
            document.getElementById('divMobile').style.position = 'sticky';
            document.getElementById('divMobile').style.top = '0%';
            document.getElementById('divMobile').style.zIndex = '100';
            document.getElementById('divMobile').style.borderRadius = '0';
            document.getElementById('hideMobileCount').style.display = 'block';
            document.getElementById('hideMobileCount').style.position = 'sticky';
            document.getElementById('hideMobileCount').style.zIndex = '50';
            document.getElementById('hideMobileCount').style.top = '9%';
            <?php $__currentLoopData = $paginator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            document.getElementById('headerMobile'+'<?php echo e($item['key']); ?>').style.top = '10.9%';
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            // Call the handleScroll function initially in case the initial scroll position meets the condition
            handleScroll();
        }

        document.addEventListener("DOMContentLoaded", function() {
            var popoverTriggers = document.querySelectorAll('.popover-trigger');

            popoverTriggers.forEach(function(trigger) {
                var popover = new bootstrap.Popover(trigger, {
                    content: '<div> <a class="btn close-popover float-end heading78" style="cursor: pointer">&times;</a>'
                        + trigger.getAttribute('data-bs-content') +
                        '</div>',
                    html: true
                });

                trigger.addEventListener('inserted.bs.popover', async function () {
                    // Wrap the $.ajax call in a function that returns a promise
                    const fetchMeaning = function () {
                        return $.ajax({
                            type: "GET",
                            url: '<?php echo e(url('/')); ?>' + '/getMeaning',
                            data: { word: trigger.getAttribute('data-word') },
                        });
                    };

                    try {
                        const response = await fetchMeaning();
                        // Update the appropriate element based on the response
                        // Select the element with the id "meaning"
                        var meaningElement = $("#meaning");
                        if (response.meaning.length > 0) {
                            meaningElement.css("color", "black");
                            meaningElement.css("background-color", "transparent");
                            meaningElement.css("height", "auto");
                            meaningElement.css("width", "auto");
                            meaningElement.css("border", "0");
                            meaningElement.css("animation", "none");
                            meaningElement.html('<p>' + trigger.getAttribute('data-word'));
                            response.meaning.forEach(function(meaning) {
                                meaningElement.append('<p>' + meaning.WM_meaning + '</p>');
                            });
                        } else {
                            meaningElement.css("color", "red");
                            meaningElement.css("background-color", "transparent");
                            meaningElement.css("height", "auto");
                            meaningElement.css("width", "auto");
                            meaningElement.css("border", "0");
                            meaningElement.css("animation", "none");
                            $("#meaning").html('<?php echo e(__('frontend.no_definition_found')); ?>');
                        }
                    } catch (error) {
                        console.error("Error fetching meaning:", error);
                    }
                    var closeButtons = document.querySelectorAll('.close-popover');
                    closeButtons.forEach(function(btn) {
                        btn.addEventListener('click', function() {
                            popover.hide();
                        });
                    });
                });
            });
        });
        document.addEventListener("DOMContentLoaded", function() {
            var popoverTriggers = document.querySelectorAll('.popover-trigger-custom');
            popoverTriggers.forEach(function(trigger) {
                var popover = new bootstrap.Popover(trigger, {
                    content: '<div class="row">' + trigger.getAttribute('data-bs-content') + '<a class="col-1 close-popover float-end heading6 d-flex flex-row justify-content-center cursor_h6 pl-0">&times;</a>'
                        + '</div>',
                    html: true
                });

                trigger.addEventListener('inserted.bs.popover', function() {
                    var closeButtons = document.querySelectorAll('.close-popover');
                    closeButtons.forEach(function(btn) {
                        btn.addEventListener('click', function() {
                            popover.hide();
                        });
                    });
                });

                // Close popover when clicking outside
                document.addEventListener('click', function(event) {
                    var isClickInsidePopover = trigger.contains(event.target) || popover._element.contains(event.target);
                    if (!isClickInsidePopover) {
                        popover.hide();
                    }
                });
            });
        });
    </script>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/frontEnd/includes/resultat.blade.php ENDPATH**/ ?>