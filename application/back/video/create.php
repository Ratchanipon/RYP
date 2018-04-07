<?php
/*
 * php code///////////**********************************************************
 */
$db = new database();
$option_category = array(
    "table" => "project"
);
$query_category = $db->select($option_category);

$title = 'เพิ่มหมวดหมู่รายจ่ายคงที่';

require 'template/back/header.php';

?>
<script type="text/javascript" src="<?php echo $baseUrl; ?>/js/jquery.form-validator.min.js"></script>
<div id="page-warpper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">เพิ่มวิดีโอแนะนำ</h1>
        </div>
    </div>
    <form id="vi-form" action="<?php echo $baseUrl; ?>/back/video/form_create" method="post">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-horizontal" style="margin-top: 10px;">

                <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">ชื่อวีดีโอ<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" id="name_video" name="name_video" class="form-control input-sm" required >
                        </div>
                    </div>

                <div class="form-group">
                    <label for="Product_name" class="col-sm-2 control-label required">รายละเอียดวิดีโอ<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <textarea id="detail_video" name="detail_video" class="form-control input-sm" required 
                            rows="5" ></textarea>
                        </div>
                </div> 
                <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">Link<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" id="link" name="link" class="form-control input-sm" required >
                        </div>
                    </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
           <div class="submit">
                <input role="button" id="save" type="submit"  class="btn btn-success btn-xs new-data" href="#" value="บันทึก" class="glyphicon glyphicon-floppy-save">
               
                <a role="button" class="search-button btn btn-default btn-xs" href="<?php echo $baseUrl; ?>/back/video">
                    <i class="glyphicon glyphicon-remove-circle"></i>
                    ยกเลิก
                </a>
            </div>
        </div>
    </div>
    </form>

</div>

<script>
$("#vi-form").validate();
$(document).ready(function) {
    $("#save").submit();
}
</script>
<?php
/*
 * footer***********************************************************************
 */
require 'template/back/footer.php';
/*
 * footer***********************************************************************
 */

