<?php
/*
 * php code///////////**********************************************************
 */
$title = 'ระบบจัดการข้อมูลแอปพลิเคชัน : ผู้ใช้';
$db = new database();
$option_category = array(
    "table" => "video"/*,
    "condition" => "username != 'guest'"*/
);
$query_category = $db->select($option_category);

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
            <h1 class="page-header">จัดการวิดีโอแนะนำ</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="subhead">
                <a role="button" class="btn btn-success btn-xs new-data"
                   href="<?php echo $baseUrl; ?>/back/video/create">
                    <i class="glyphicon glyphicon-plus-sign"></i>
                    เพิ่มใหม่
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <div id="user-grid" class="grid-view">
                <table class="table table-striped table-custom">
                    <thead>
                        <tr>
                            <th id="user-grid_c1">
                                <lable class="sort-link" href="<?php echo $baseUrl; ?>/back/category/index?User_sort=name">ชื่อวีดีโอ</lable>
                            </th>
                            <th id="user-grid_c1">
                                <lable class="sort-link" href="<?php echo $baseUrl; ?>/back/category/index?User_sort=name">รายละเอียด</lable>
                            </th>
                            <th id="user-grid_c1">
                                <lable class="sort-link" href="<?php echo $baseUrl; ?>/back/category/index?User_sort=name">ลิงค์</lable>
                            </th>
                            <th class="button-column" id="user-grid_c6">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        while ($rs_user = $db->get($query_category)) {
                            $tr = ($i % 2 == 0) ? "odd" : "even";
                            ?>
                            <tr class="<?php echo $tr; ?>">
                               
                                <td><?php echo $rs_user['name_video']; ?></td>
                                <td><?php echo $rs_user['detail_video']; ?></td>
                                <td><iframe width="150" height="80" src="https://www.youtube.com/embed/<?php echo $rs_user['link']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></td>
                                <td class="button-column">
                                   
                                    <a class="btn btn-warning btn-xs load_data" title="" href="<?php echo $baseUrl; ?>/back/video/update/<?php echo $rs_user['video_id']; ?>"><i class="glyphicon glyphicon-edit"></i> แก้ไข
                                    </a>
                                    
                                    <a class="btn btn-danger btn-xs confirm" title="" href="#" data-toggle="modal" data-target="#deleteModal<?php echo $rs_user['video_id'];?>"><i class="glyphicon glyphicon-remove"></i> ลบ</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModal<?php echo $rs_user['video_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">แจ้งเตือนการลบข้อมูล</h4>
                                                </div>
                                                <div class="modal-body">
                                                    คุณยืนยันต้องการจะลบข้อมูลนี้ ใช่หรือไม่?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">ไม่ใช่</button>
                                                    <a role="button" class="btn btn-primary" href="<?php echo $baseUrl; ?>/back/video/delete/<?php echo $rs_user['video_id']; ?>">ใช่ ยืนยันการลบ</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="keys" style="display:none" title="<?php echo $baseUrl; ?>/back/category"><span>2</span><span>3</span></div>
            </div>
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
