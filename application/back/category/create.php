<?php
/*
 * php code///////////**********************************************************
 */
$db = new database();


$sql_cate = "SELECT * FROM province";
$query_cate = $db->query($sql_cate);

$title = 'เพิ่มหมวดหมู่';
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
            <h1 class="page-header">เพิ่มหมวดหมู่</h1>
        </div>
    </div>
    
    <form id="cat-form" action="<?php echo $baseUrl; ?>/back/category/form_create" method="post">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-horizontal" style="margin-top: 10px;">
                
<!--
                    <div class="form-group">
                        <label class="col-sm-2 control-label required" for="User_name">ลำดับ<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input maxlength="100" class="form-control input-sm" name="Category_id" id="Category_id" type="text" data-validation="required" />
                        </div>
                    </div>
-->
<!--
                    <div class="form-group">
                        <label class="col-sm-2 control-label required" for="User_name">จังหวัด<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input minlength="2" class="form-control input-sm" name="province" id="province" type="text" required/>
                           
                        </div>
                    </div>
-->
                    <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">จังหวัด<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <select id="province" name="province" class="form-control input-sm" required>     
                                    <?php
                                        $i = 0;
                                            while ($get_prov = $db->get($query_cate)) {
                                                    $tr = ($i % 2 == 0) ? "odd" : "even";
                                    ?>
                                <option value="<?php echo $get_prov['province_name']; ?>"><?php echo $get_prov['province_name']; ?></option>
                                    <?php } ?>   
                            </select> 
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
             <div class="submit">
                <input role="button" id="save" type="submit"  class="btn btn-success btn-xs new-data" href="#" value="บันทึก"class="glyphicon glyphicon-floppy-save">
               
                <a role="button" class="search-button btn btn-default btn-xs" href="<?php echo $baseUrl; ?>/back/category">
                    <i class="glyphicon glyphicon-remove-circle"></i>
                    ยกเลิก
                </a>
            </div>
        </div>
    </div>
            </form>    

</div>

<script>
$("#cat-form").validate();
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

