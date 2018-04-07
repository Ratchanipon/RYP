<?php
/*
 * php code///////////**********************************************************
 */
$db = new database();
$option_pc = array(
    "table" => "project",
    "condition" => "project_id='{$_GET['id']}' "
);
$query_pc = $db->select($option_pc);
$query_cate = $db->select($option_pc);
$rs_pc = $db->get($query_pc);


$sql_pc = "SELECT t2.category_id,t2.province as province FROM project t1 inner join category t2 on t1.category_id = t2.category_id WHERE t1.project_id= '{$_GET['id']}'";

$query_pc = $db->query($sql_pc);
$get_pc = $db->get($query_pc);



$sql_cate = "SELECT * FROM category";
$query_cate = $db->query($sql_cate);


$title = 'รายละเอียดโครงการ: ';
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
<script type="text/javascript" src="<?php echo $baseUrl; ?>/js/jquery.form-validator.min.js"></script>
<div id="page-warpper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">รายละเอียดข้อมูล : <?php echo $rs_pc['name']; ?></h1>
        </div>
    </div>
    
    <form id="product-form" action="<?php echo $baseUrl; ?>/back/project/form_update/<?php echo $rs_pc['project_id']; ?>" method="post">
                    
    <div class="row">
        <div class="col-lg-12">
            <div class="form-horizontal" style="margin-top: 10px;">
                
                    <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">ชื่อ-นามสกุล</label>
                        <div class="col-sm-4">
                            <lable> <?php echo $rs_pc['name'];?></lable>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">email</label>
                        <div class="col-sm-4">
                            <lable> <?php echo $get_pc['province'];?></lable>
                        </div>
                    </div>
                    
                  
                    <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">รายละเอียดโครงการ</label>
                        <div class="col-sm-4">
                            <lable> <?php echo $rs_pc['detail']; ?></lable>
                        </div>
                    </div>
                
                  <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">ที่ตั้ง</label>
                        <div class="col-sm-4">
                            <lable> <?php echo $rs_pc['location'];?></lable>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">รูปภาพโครงการ</label>
                        <div class="col-sm-4">
                            <lable> <?php echo $rs_pc['images'];?></lable>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">วิดีโอโครงการ</label>
                        <div class="col-sm-4">
                           <lable> <?php echo $rs_pc['video'];?></lable> 
                        </div>
                    </div>
                
                         <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">ข้อมูลติดต่อ</label>
                        <div class="col-sm-4">
                           <lable> <?php echo $rs_pc['contact'];?></lable> 
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">ร้านค้าโครงการ</label>
                        <div class="col-sm-4">
                            <lable> <?php echo $rs_pc['store']; ?></lable>
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">ที่พักใกล้เคียง</label>
                        <div class="col-sm-4">
                            <lable> <?php echo $rs_pc['hostelry'];?></lable>
                        </div>
                    </div>
                
                 <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">ข้อมูลการท่องเที่ยว</label>
                        <div class="col-sm-4">
                            <lable> <?php echo $rs_pc['Travel_program']; ?></lable>
                        </div>
                    </div>

            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="submit">
<!--                <input role="button" id="save" type="submit"  class="btn btn-success btn-xs new-data" href="#" value="บันทึก"class="glyphicon glyphicon-floppy-save">-->
               
                <a role="button" class="btn btn-warning btn-xs new-data" href="<?php echo $baseUrl; ?>/back/project">
                    <i class="glyphicon glyphicon-share-alt"></i>
                    กลับ
                </a>
            </div>
        </div>
    </div>
 </form>

</div>

<script>
$("#product-form").validate();
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

