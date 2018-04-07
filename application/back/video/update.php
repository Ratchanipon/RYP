<?php
/*
 * php code///////////**********************************************************
 */
$db = new database();
$option_user = array(
    "table" => "video",
    "condition" => "video_id='{$_GET['id']}'"
);
$query_user = $db->select($option_user);
$rs_user = $db->get($query_user);


$title = 'แก้ไขวิดีโอแนะนำ ';
/*
 * php code///////////**********************************************************
 */

/*
 * header***********************************************************************
 */
require 'template/back/header.php';
/*
 * header***********************************************************************
 */
?>

<div id="page-warpper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">แก้ไขวิดีโอแนะนำ</h1>
        </div>
    </div>
    <form id="user-form" action="<?php echo $baseUrl; ?>/back/video/form_update/<?php echo $rs_user['video_id']; ?>" method="post">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-horizontal" style="margin-top: 10px;">
               
                
                    <div class="form-group">
                        <label class="col-sm-2 control-label required" for="User_firstname">ชื่อวิดีโอ<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input minlength="2" class="form-control input-sm" name="name_video" id="name_video" type="text" value="<?php echo $rs_user['name_video'];?>" required />
                        </div>
                    </div>
                    
                 
                 <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">รายละเอียดโครงการ</label>
                        <div class="col-sm-4">
                            <textarea id="detail_video" name="detail_video" class="form-control input-sm" required
                                      rows="5" ><?php echo $rs_user['detail_video']; ?></textarea>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="User_age">ลิงค์</label>
                        <div class="col-sm-4">
                            <input class="form-control input-sm" name="link" id="link" type="text"  
                                   value="<?php echo $rs_user['link'];?>" required/>
                        </div>
                    </div>                            
               
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col-lg-12">
            <div class="submit">
                <input role="button" id="save" type="submit"  class="btn btn-success btn-xs new-data" href="#" value="บันทึก"class="glyphicon glyphicon-floppy-save">
                    
                

                <a role="button" class="search-button btn btn-default btn-xs" href="<?php echo $baseUrl; ?>/back/video">
                    <i class="glyphicon glyphicon-remove-circle"></i>
                    ยกเลิก
                </a>
            </div>
        </div>
    </div>
        </form>
</div>
<script type="text/javascript">
   $("#user-form").validate();
$(document).ready(function) {
    $("#save").submit();
}
  
</script>
<?php
/*
 * footer***********************************************************************
 */
require 'template/back/footer.php';
