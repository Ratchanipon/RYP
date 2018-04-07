<?php
/*
 * php code///////////**********************************************************
 */
$title = 'ระบบจัดการข้อมูลแอปพลเคชัน';
$db = new database();
$option_user = array(
    "table" => "user"
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
            <h1 class="page-header">ยินดีต้อนรับ!</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-info" role="alert">ยินดีต้อนรับ คุณ Ratchanipon Teepala
ควบคุม ปกป้อง และรักษาบัญชีของคุณให้ปลอดภัย ทั้งหมดนี้ในที่เดียว
บัญชีของฉันช่วยให้คุณเข้าถึงการตั้งค่าได้อย่างรวดเร็ว รวมถึงเครื่องมือที่ช่วยให้คุณปกป้องข้อมูล ปกป้องความเป็นส่วนตัว และเลือกว่าจะให้ข้อมูลของคุณทำให้บริการต่างๆ ของ Google ทำงานให้คุณดีขึ้นได้อย่างไร</div>
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