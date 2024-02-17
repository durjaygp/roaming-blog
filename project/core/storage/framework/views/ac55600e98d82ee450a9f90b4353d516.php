



<link rel="shortcut icon" href="<?php echo e(url('assets/images/kelimelodi-kelime-bulucu-favicon.png')); ?>"/>
<link rel="stylesheet" href="<?php echo e(url('assets/css/bootstrap.min.css')); ?>"/>



<link rel="stylesheet" href="<?php echo e(url('assets/css/style.css')); ?>"/>
<link rel="stylesheet" href="<?php echo e(url('assets/css/customStyle.css')); ?>"/>
<script src="https://kit.fontawesome.com/0bdece9f0d.js" crossorigin="anonymous"></script>
<style>
    .stickyPosition {
        position: sticky;
        top: 5%;
    }
    .ms-n5 {
        margin-left: -59px;
    }
    .ms-n4 {
        margin-left: -25px;
    }
    .form-floating-group input {
        border-bottom-right-radius: 0;
        border-top-right-radius: 0;
    }
    .dropdown-toggle::after {
        content: none;
    }
    .tableFixHead          { overflow: auto; max-height: 100%; }
    .tableFixHead::-webkit-scrollbar {
        width: 3px;
    }

    .tableFixHead::-webkit-scrollbar-track {
        background-color: #f1f1f1; /* Grey color for the track */
    }

    .tableFixHead::-webkit-scrollbar-thumb {
        background-color: #888; /* Grey color for the handle */
    }

    .tableFixHead::-webkit-scrollbar-thumb:hover {
        background-color: #555; /* Darker grey color on hover */
    }
    .tableFixHead thead th { position: sticky; top: 0; z-index: 1; }

    /* Just common table stuff. Really. */
    table  { border-collapse: collapse; width: 100%; }
    th, td { padding: 8px 16px; }
    th     { background:#eee; }

    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
    .input-mysize{
        font-size: 1.5rem;
    }
</style>
<style>
    .form-floating > label {
        font-size:15px;
    }
    @media (min-width: 768px) {
        .form-floating > label {
            font-size:13px;
        }
    }
    .btn-ss{
        margin-top:2px;
        height:55px; width:10px; display: flex; align-items: center; justify-content: center;
    }
    @media only screen and (min-width: 998px) {
        .btn-ss {
            border-radius:0 !important;
            border-right:solid 1px #dee2e6 !important;
        }
    }
    @media only screen and (min-width: 780px) {
        .div11 {
            max-width:350px!important;
            width:260px!important;
        }
        .div12 {
            max-width:350px!important;
            width:320px!important;
        }
        .div13 {
            /*max-width: 350px!important;*/
            /*width: 304px!important;*/
            max-width:350px!important;
            width:300px!important;
            position: sticky;
            top: 0%;
            max-height: 1200px;
        }
    }
    .btnsearch{
        height:60px;
        width:300px;
    }
    .btnreset{
        height:60px;
        width:55px;
    }
    @media only screen and (max-width: 400px) {
        .btnsearch{
            height:60px;
            width: 250px;
        }
        .btnreset{
            height:60px;
            width:45px;
        }
    }

    @media only screen and (max-width: 350px) {
        .btnsearch{
            height:50px;
            width: 200px;
        }
        .btnreset{
            height:50px;
            width:40px;
        }
    }
    @media (max-width: 767px){
        .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
            background-color: transparent !important;
        }
    }
</style>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/frontEnd/includes/keliheader.blade.php ENDPATH**/ ?>