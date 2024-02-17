<?php
$cf_title_var = "title_" . @Helper::currentLanguage()->code;
$cf_title_var2 = "title_" . env('DEFAULT_LANGUAGE');

$title_var = "title_" . @Helper::currentLanguage()->code;
$title_var2 = "title_" . env('DEFAULT_LANGUAGE');
if ($WebmasterSection->$title_var != "") {
    $WebmasterSectionTitle = $WebmasterSection->$title_var;
} else {
    $WebmasterSectionTitle = $WebmasterSection->$title_var2;
}
?>
<html lang="<?php echo e(@Helper::currentLanguage()->code); ?>" dir="<?php echo e(@Helper::currentLanguage()->direction); ?>">
<head>
    <meta charset="UTF-8">
    <title><?php echo e($WebmasterSectionTitle); ?> | <?php echo e(__('backend.print')); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/dashboard/css/print.css')); ?>" type="text/css"/>
</head>
<body class="<?php echo e(@Helper::currentLanguage()->direction); ?>">

<?php if(count($Topics) >0): ?>
    <div class="container" id="container">
        <table class="responsive-table center-table" style="width: 100%">
            <thead class="dker">
            <th>#</th>
            <?php if($WebmasterSection->title_status): ?>
                <th style="text-align: <?php echo e(@Helper::currentLanguage()->left); ?> !important;"><?php echo e(__('backend.topicName')); ?></th>
            <?php endif; ?>
            <?php if($WebmasterSection->date_status): ?>
                <th style="width:100px;"><?php echo e(__('backend.topicDate')); ?></th>
            <?php endif; ?>
            <?php if($WebmasterSection->expire_date_status): ?>
                <th style="width:100px;"><?php echo e(__('backend.expireDate')); ?></th>
            <?php endif; ?>
            <?php if($WebmasterSection->visits_status): ?>
                <th style="width:80px;"><?php echo e(__('backend.visits')); ?></th>
            <?php endif; ?>
            <?php if($WebmasterSection->case_status): ?>
                <th style="width:80px;"><?php echo e(__('backend.status')); ?></th>
            <?php endif; ?>
            <?php $__currentLoopData = $WebmasterSection->customFields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customField): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                // check permission
                $view_permission_groups = [];
                if ($customField->view_permission_groups != "") {
                    $view_permission_groups = explode(",", $customField->view_permission_groups);
                }
                if (in_array(Auth::user()->permissions_id, $view_permission_groups) || in_array(0, $view_permission_groups) || $customField->view_permission_groups == "") {
                // have permission & continue
                ?>
                <?php if($customField->lang_code == "all" || $customField->lang_code == @Helper::currentLanguage()->code): ?>
                    <?php
                    if ($customField->$cf_title_var != "") {
                        $cf_title = $customField->$cf_title_var;
                    } else {
                        $cf_title = $customField->$cf_title_var2;
                    }
                    ?>
                    <th class="text-center"><?php echo e($cf_title); ?></th>
                <?php endif; ?>
                <?php
                }
                ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </thead>
            <tbody>
            <?php $__currentLoopData = $Topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo $Topic->id; ?></td>
                    <?php
                    if ($Topic->$title_var != "") {
                        $title = $Topic->$title_var;
                    } else {
                        $title = $Topic->$title_var2;
                    }

                    // Get Categories list
                    $section = "";
                    if ($WebmasterSection->sections_status != 0) {
                        foreach ($Topic->categories as $category) {
                            try {
                                if (@$category->section->$title_var != "") {
                                    $cat_title = @$category->section->$title_var;
                                } else {
                                    $cat_title = @$category->section->$title_var2;
                                }
                                if ($cat_title != "") {
                                    $section .= "<span class='label dker b-a text-sm'>" . $cat_title . "</span> ";
                                }

                            } catch (Exception $e) {

                            }

                        }
                        if ($section == "") {
                            $section = "<span style='color: orangered'><i>" . __('backend.topicDeletedSection') . "</i></span>";
                        }
                    }

                    //comments
                    $comments = "";
                    if (count($Topic->newComments) > 0) {
                        $comments = "<div><a href='" . route('topicsComments', [$WebmasterSection->id, $Topic->id]) . "'><span style='color:red'>" . __('backend.comments') . " <span class='label rounded label-sm danger'>" . count($Topic->newComments) . "</span></span></a></div>";
                    }


                    $photo = "";
                    if ($Topic->photo_file != "") {
                        $photo = " <div class=\"pull-right\"><img src=\"" . asset('uploads/topics/' . $Topic->photo_file) . "\" style=\"height: 40px\" alt=\"" . $title . "\"></div>";
                    }

                    $icon = "";
                    if ($Topic->icon != "") {
                        $icon = "<i class=\"fa " . $Topic->icon . "\"></i> ";
                    }
                    ?>
                    <?php if($WebmasterSection->title_status): ?>
                        <td style="text-align: <?php echo e(@Helper::currentLanguage()->left); ?> !important;"><?php echo $photo . "<div class='h6'>" . $icon . $title . "</div>" . $section . $comments; ?></td>
                    <?php endif; ?>
                    <?php if(@$Topic->webmasterSection->date_status): ?>
                        <td><?php echo Helper::formatDate($Topic->date); ?></td>
                    <?php endif; ?>
                    <?php if(@$Topic->webmasterSection->expire_date_status): ?>
                        <td><?php echo $Topic->expire_date; ?></td>
                    <?php endif; ?>
                    <?php if($WebmasterSection->visits_status): ?>
                        <td><?php echo $Topic->visits; ?></td>
                    <?php endif; ?>
                    <?php if($WebmasterSection->case_status): ?>
                        <td><?php echo (($Topic->status == 1) ? "&#10003;" : "&#10005;"); ?></td>
                    <?php endif; ?>
                    <?php
                    foreach (@$Topic->webmasterSection->customFields as $customField) {
                        // check permission
                        $view_permission_groups = [];
                        if ($customField->view_permission_groups != "") {
                            $view_permission_groups = explode(",", $customField->view_permission_groups);
                        }
                        if (in_array(Auth::user()->permissions_id, $view_permission_groups) || in_array(0, $view_permission_groups) || $customField->view_permission_groups == "") {
                            // have permission & continue

                            $cf_saved_val = "";
                            $cf_saved_val_array = array();
                            $TField = $Topic->fields->where("field_id", $customField->id)->first();
                            if (!empty($TField)) {
                                if ($customField->type == 7) {
                                    // if multi check
                                    $cf_saved_val_array = explode(", ", $TField->field_value);
                                } else {
                                    $cf_saved_val = $TField->field_value;
                                }
                            } else {
                                $cf_saved_val = " ";
                            }

                            $cf_data = "";
                            if (($cf_saved_val != "" || count($cf_saved_val_array) > 0) && ($customField->lang_code == "all" || $customField->lang_code == @Helper::currentLanguage()->code)) {
                                if ($customField->type == 12) {
                                    $CF_Vimeo_id = Helper::Get_vimeo_video_id($cf_saved_val);
                                    $cf_data = "<a target='_blank' href='https://player.vimeo.com/video/$CF_Vimeo_id?title=0&amp;byline=0'><i class='fa fa-play'></i></a>";

                                } elseif ($customField->type == 11) {
                                    $CF_Youtube_id = Helper::Get_youtube_video_id($cf_saved_val);
                                    $cf_data = "<a target='_blank' href='https://www.youtube.com/embed/$CF_Youtube_id'><i class='fa fa-play'></i></a>";

                                } elseif ($customField->type == 10) {
                                    $cf_data = "<a target='_blank' href='" . URL::to('uploads/topics/' . $cf_saved_val) . "'><i class='fa fa-play'></i></a>";
                                } elseif ($customField->type == 9) {
                                    $cf_data = "<a target='_blank' href='" . URL::to('uploads/topics/' . $cf_saved_val) . "'><i class='fa fa-play'></i></a>";
                                } elseif ($customField->type == 8) {
                                    $cf_data = "<a target='_blank' href='" . URL::to('uploads/topics/' . $cf_saved_val) . "'><i class='fa fa-picture-o'></i></a>";
                                } elseif ($customField->type == 14) {
                                    $cf_data = (($cf_saved_val == 1) ? ("&check; ". __('backend.yes')) : ("&#x2A09; ". __('backend.no')));
                                } elseif ($customField->type == 7) {
                                    $cf_details_var = "details_" . @Helper::currentLanguage()->code;
                                    $cf_details_var2 = "details_" . env('DEFAULT_LANGUAGE');
                                    if ($customField->$cf_details_var != "") {
                                        $cf_details = $customField->$cf_details_var;
                                    } else {
                                        $cf_details = $customField->$cf_details_var2;
                                    }
                                    $cf_details_lines = preg_split('/\r\n|[\r\n]/', $cf_details);
                                    $line_num = 1;
                                    foreach ($cf_details_lines as $cf_details_line) {
                                        if (in_array($line_num, $cf_saved_val_array)) {
                                            $cf_data .= "<span class=\"label\">" . $cf_details_line . "</span> ";
                                        }
                                        $line_num++;
                                    }
                                } elseif ($customField->type == 6 || $customField->type == 13) {
                                    $cf_details_var = "details_" . @Helper::currentLanguage()->code;
                                    $cf_details_var2 = "details_" . env('DEFAULT_LANGUAGE');
                                    if ($customField->$cf_details_var != "") {
                                        $cf_details = $customField->$cf_details_var;
                                    } else {
                                        $cf_details = $customField->$cf_details_var2;
                                    }
                                    $cf_details_lines = preg_split('/\r\n|[\r\n]/', $cf_details);
                                    $line_num = 1;
                                    foreach ($cf_details_lines as $cf_details_line) {
                                        if ($line_num == $cf_saved_val) {
                                            $cf_data .= "<span class=\"label text-sm\">" . $cf_details_line . "</span> ";
                                        }
                                        $line_num++;
                                    }
                                } elseif ($customField->type == 5) {
                                    $cf_data = Helper::dateForDB($cf_saved_val, 1);
                                } elseif ($customField->type == 4) {
                                    $cf_data = Helper::dateForDB($cf_saved_val);
                                } else {
                                    $cf_data = $cf_saved_val;
                                }
                                echo "<td class='" . $customField->css_class . "'>" . "<div class=\"text-center\">" . $cf_data . "</div>" . "</td>";
                            }

                        }
                    }
                    ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <?php if(@$stat == "excel"): ?>
        <script src="<?php echo e(asset('assets/dashboard/js/xlsx.full.min.js')); ?>"></script>
        <script type="text/javascript">
            var elt = document.getElementById('container');
            var wb = XLSX.utils.table_to_book(elt, {sheet: "sheet1"});
            XLSX.writeFile(wb, '<?php echo e($WebmasterSectionTitle); ?>.xlsx');
            window.onfocus = function () {
                setTimeout(function () {
                    window.close();
                }, 100);
            }
        </script>
    <?php elseif(@$stat == "pdf"): ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js"></script>
        <script type="text/javascript">
            var pdf_content = document.getElementById("container");
            var options = {
                margin: 1,
                filename: '<?php echo e($WebmasterSectionTitle); ?>.pdf',
                image: {type: 'jpeg', quality: 0.99},
                html2canvas: {scale: 2},
                jsPDF: {unit: 'in', format: 'letter', orientation: 'landscape'}
            };
            html2pdf(pdf_content, options);
            window.onfocus = function () {
                setTimeout(function () {
                    window.close();
                }, 100);
            }
        </script>
    <?php else: ?>
        <script type="text/javascript">
            setTimeout(function () {
                window.print();
            }, 200);
            window.onfocus = function () {
                setTimeout(function () {
                    window.close();
                }, 100);
            }
        </script>
    <?php endif; ?>
<?php else: ?>
    <div style="border: 1px solid #ddd;padding: 10px 20px;text-align: center;">
        <h5><?php echo e(trans("backend.noData")); ?></h5>
    </div>
<?php endif; ?>
</body>
</html>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/topics/print.blade.php ENDPATH**/ ?>