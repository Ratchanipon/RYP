<?php
/*
 * php code///////////**********************************************************
 */
$db = new database();
$option_category = array(
    "table" => "category"
);
$query_category = $db->select($option_category);

$title = 'เพิ่มโครงการ';

require 'template/back/header.php';

?>
<script type="text/javascript" src="<?php echo $baseUrl; ?>/js/jquery.form-validator.min.js"></script>
<div id="page-warpper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">เพิ่มโครงการ</h1>
        </div>
    </div>
    <form id="product-form" action="<?php echo $baseUrl; ?>/back/project/form_create" method="post">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-horizontal" style="margin-top: 10px;">
                

                    <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">ชื่อโครงการ<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" id="name" name="name" class="form-control input-sm" required >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">หมวดหมู่<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <select id="category_id" name="category_id" class="form-control input-sm" required>
                                    <?php
                                        $i = 0;
                                            while ($rs_user = $db->get($query_category)) {
                                                $tr = ($i % 2 == 0) ? "odd" : "even";
                                    ?>
                                <option value="<?php echo $rs_user['category_id']; ?>"><?php echo $rs_user['province']; ?></option>
                                    <?php } ?> 
                            </select>
                        </div>
                    </div>
                 <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">รายละเอียดโครงการ<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <textarea id="detail" name="detail" class="form-control input-sm" required 
                                      rows="5" ></textarea>
                        </div>
                    </div>
                
                 <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">พิกัดแผนที่<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" id="location" name="location" class="form-control input-sm"  >
                        </div>
                    </div>
                
                 <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">รูปภาพโครงการ<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="file" id="images" name="images" class="form-control input-sm" required >
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">วิดีโอโครงการ</label>
                        <div class="col-sm-4">
                            <input type="text" id="video" name="video" class="form-control input-sm"  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">ข้อมูลติดต่อ</label>
                        <div class="col-sm-4">
                            <input type="text" id="contact" name="contact" class="form-control input-sm"  >
                        </div>
                    </div>
                   
                <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">ร้านค้าโครงการ<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <textarea id="store" name="store" class="form-control input-sm" required 
                                      rows="5" ></textarea>
                        </div>
                    </div>
                 <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">ที่พักใกล้เคียง</label>
                        <div class="col-sm-4">
                            <textarea id="hostelry" name="hostelry" class="form-control input-sm" required 
                                      rows="5" ></textarea>
                        </div>
                     
                    </div>
                    <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">ข้อมูลการท่องเที่ยว</label>
                        <div class="col-sm-4">
                            <textarea id="Travel_program" name="Travel_program" class="form-control input-sm" required 
                                      rows="5" ></textarea>
                        </div>
                    </div>
                    
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
           <div class="submit">
                <input role="button" id="save" type="submit"  class="btn btn-success btn-xs new-data" href="#" value="บันทึก"class="glyphicon glyphicon-floppy-save" name="upload">
               
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
$(document).ready(function(){  
      $('#save').click(function(){  
           var image_name = $('#images').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#images').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#images').val('');  
                     return false;  
                }  
           }  
      });  
 });
</script>
<?php
/*
 * footer***********************************************************************
 */
require 'template/back/footer.php';
/*
 * footer***********************************************************************
 */

