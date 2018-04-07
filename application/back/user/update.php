<?php
/*
 * php code///////////**********************************************************
 */
$db = new database();
$option_user = array(
    "table" => "user",
    "condition" => "user_id='{$_GET['id']}'"
);
$query_user = $db->select($option_user);
$rs_user = $db->get($query_user);


$title = 'แก้ไขข้อมูลผู้ใช้งาน ';
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
            <h1 class="page-header">แก้ไขข้อมูลผู้ใช้งาน</h1>
        </div>
    </div>
    <form id="user-form" action="<?php echo $baseUrl; ?>/back/user/form_update/<?php echo $rs_user['user_id']; ?>" method="post">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-horizontal" style="margin-top: 10px;">
               
                    
                    <!-- <div class="form-group">
                        <label class="col-sm-2 control-label required" for="User_id">ลำดับผู้ใช้<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input maxlength="100" class="form-control input-sm" name="user_id" id="user_id" type="text" pattern="^[0-9]{1,}$" value="<?php echo $rs_user['user_id'];?>" />
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label required" for="User_firstname">ชื่อ-นามสกุล <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input minlength="2" class="form-control input-sm" name="name" id="name" type="text" value="<?php echo $rs_user['name'];?>" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label required" for="User_email">email <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input class="form-control input-sm" maxlength="50" name="email" id="email" type="email" value="<?php echo $rs_user['email'];?>" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="User_age">อายุ</label>
                        <div class="col-sm-4">
                            <input class="form-control input-sm" maxlength="3" minlength="1" name="age" id="age" type="text" pattern="^[0-9]{1,}$" 
                                   value="<?php echo $rs_user['age'];?>" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="User_sex">เพศ</label>
                        <div class="col-sm-4">
                        <select class="form-control input-sm" name="sex" id="sex" required>
                                <option value="<?php echo $rs_user['sex'];?>"><?php echo $rs_user['sex'];?></option>
                                <option value="ชาย">ชาย</option>
                                <option value="หญิง">หญิง</option>
                        </select>
                        </div>
                    </div>
                                    
                   <!-- <div class="form-group">
                        <label class="col-sm-2 control-label" for="User_career">อาชีพ</label>
                        <div class="col-sm-4">
                            <input class="form-control input-sm" maxlength="100" name="career" id="career" type="text" value="<?php echo $rs_user['career'];?>" />
                        </div>
                    </div>-->
                    
               <!--     <div class="form-group">
                        <label class="col-sm-2 control-label" for="User_email">email</label>
                        <div class="col-sm-4">
                            <input class="form-control input-sm" maxlength="200" name="email" id="email" type="text" value="<?php echo $rs_user['email'];?>" />
                        </div>
                    </div>
-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="User_permission">สิทธิ์การใช้งาน</label>
                        <div class="col-sm-4">
                            <select class="form-control input-sm" name="permission" id="permission" required>
                                <option value="<?php echo $rs_user['permission'];?>" ><?php if($rs_user['permission']=="member"){echo"สมาชิก";}else{echo"ผู้ดูแลระบบ";}?></option>
                                <option value="member">สมาชิก</option>
                                <option value="admin">ผู้ดูแลระบบ</option>
                            </select>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="User_password">รหัสผ่าน</label>
                        <div class="col-sm-4">
                            <input class="form-control input-sm" minlength="8" name="password" id="password" type="password" 
                                   value="<?php echo $rs_user['password'];?>" required/>
                        </div>
                    </div>
               
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col-lg-12">
            <div class="submit">
                <input role="button" id="save" type="submit"  class="btn btn-success btn-xs new-data" href="#" value="บันทึก"class="glyphicon glyphicon-floppy-save">
                    
                

                <a role="button" class="search-button btn btn-default btn-xs" href="<?php echo $baseUrl; ?>/back/user">
                    <i class="glyphicon glyphicon-remove-circle"></i>
                    ยกเลิก
                </a>
            </div>
            <!--<input class="submit" id="save" type="submit" value="Submit">-->
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
