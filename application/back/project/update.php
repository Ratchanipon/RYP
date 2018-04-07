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


$title = 'แก้ไขโครงการ : ';
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
            <h1 class="page-header">แก้ไขข้อมูล : <?php echo $rs_pc['name']; ?></h1>
        </div>
    </div>
    
    <form id="product-form" action="<?php echo $baseUrl; ?>/back/project/form_update/<?php echo $rs_pc['project_id']; ?>" method="post">
                    
    <div class="row">
        <div class="col-lg-12">
            <div class="form-horizontal" style="margin-top: 10px;">
                
                    <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">ชื่อโครงการ</label>
                        <div class="col-sm-4">
                            <input type="text" id="name" name="name" class="form-control input-sm" 
                                   value="<?php echo $rs_pc['name'];?>" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">หมวดหมู่</label>
                        <div class="col-sm-4">
                            <select id="category_id" name="category_id" class="form-control input-sm" required>     
                                <option value="<?php echo $get_pc['category_id']; ?>"><?php echo $get_pc['province'];?></option>
                                    <?php
                                        $i = 0;
                                            while ($get_cate = $db->get($query_cate)) {
                                                    $tr = ($i % 2 == 0) ? "odd" : "even";
                                    ?>
                                <option value="<?php echo $get_cate['category_id']; ?>"><?php echo $get_cate['province']; ?></option>
                                    <?php } ?>   
                            </select> 
                        </div>
                    </div>
                    
                 <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">รายละเอียดโครงการ</label>
                        <div class="col-sm-4">
                            <textarea id="detail" name="detail" class="form-control input-sm" required
                                      rows="5" ><?php echo $rs_pc['detail']; ?></textarea>
                        </div>
                    </div>
                
                 <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">พิกัดแผนที่</label>
                        <div class="col-sm-4">
                            <input type="text" id="location" name="location" class="form-control input-sm" required
                                   value="<?php echo $rs_pc['location'];?>">
                        </div>
                    </div>
                
<!--
                    <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">รูปภาพโครงการ</label>
                        <div class="col-sm-4">
                            <input type="file" id="images" name="images" class="form-control input-sm" 
                                   value="<?php echo $rs_pc['images'];?>" required>
                        </div>
                    </div>
-->
                
                  <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">วิดีโอโครงการ</label>
                        <div class="col-sm-4">
                            <input type="text" id="video" name="video" class="form-control input-sm" 
                                   value="<?php echo $rs_pc['video'];?>">
                        </div>
                    </div>
                
                 <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">ข้อมูลติดต่อ</label>
                        <div class="col-sm-4">
                            <input type="text" id="contact" name="contact" class="form-control input-sm" 
                                   value="<?php echo $rs_pc['contact'];?>">
                        </div>
                    </div>
                    
                  
                <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">ข้อมูลร้านค้า</label>
                        <div class="col-sm-4">
                            <textarea id="store" name="store" class="form-control input-sm" 
                                      rows="5" ><?php echo $rs_pc['store']; ?></textarea>
                        </div>
                    </div>
                
                  <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">ข้อมูลที่พักใกล้เคียง</label>
                        <div class="col-sm-4">
                            <textarea id="hostelry" name="hostelry" class="form-control input-sm" 
                                      rows="5" ><?php echo $rs_pc['hostelry']; ?></textarea>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">ข้อมูลการท่องเที่ยว</label>
                        <div class="col-sm-4">
                            <textarea id="Travel_program" name="Travel_program" class="form-control input-sm" 
                                      rows="5" ><?php echo $rs_pc['Travel_program']; ?></textarea>
                        </div>
                    </div>
              
                
                    
                    

            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="submit">
                <input role="button" id="save" type="submit"  class="btn btn-success btn-xs new-data" href="#" value="บันทึก"class="glyphicon glyphicon-floppy-save">
               
                <a role="button" class="search-button btn btn-default btn-xs" href="<?php echo $baseUrl; ?>/back/project">
                    <i class="glyphicon glyphicon-remove-circle"></i>
                    ยกเลิก
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

