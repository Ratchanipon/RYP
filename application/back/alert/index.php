<?php
/*
 * php code///////////**********************************************************
 */
$title = 'ระบบจัดการข้อมูลแอปพลเคชัน';
$db = new database();
$option_user = array(
    "table" => "admin"
);
$query_user = $db->select($option_user);

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
            <h1 class="page-header">บันทึกข้อมูลสำเร็จ!</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-info" role="alert">ระบบบันทึกการแก้ไขข้อมูลของคุณเรียบร้อยแล้ว</div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.search-button').click(function () {
                $('.search-form').toggle();
                return false;
            });
        });
    </script>
</div>

<?php
/*
 * footer***********************************************************************
 */
require 'template/back/footer.php';
/*
 * footer***********************************************************************
 */