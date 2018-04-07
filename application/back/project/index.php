<?php
/*
 * php code///////////**********************************************************
 */
$title = 'จัดการโครงการ';
$db = new database();
$option_project = array(
    "table" => "project"
);
$query_project = $db->select($option_project);


$sql_pc1 = "SELECT t1.name,t2.province,t1.project_id FROM project t1 inner join category t2
	on t1.category_id = t2.category_id";

$query_pc1 = $db->query($sql_pc1);

require 'template/back/header.php';
/*
 * header***********************************************************************
 */
?>

<div id="page-warpper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">จัดการโครงการ</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="subhead">
                <a role="button" class="btn btn-success btn-xs new-data"
                   href="<?php echo $baseUrl; ?>/back/project/create">
                    <i class="glyphicon glyphicon-plus-sign"></i>
                    เพิ่มใหม่
                </a>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="search-form" style="display:none">

                <form id="yw0" action="<?php echo $baseUrl; ?>/back/project/index" method="get"><div class="form-horizontal" style="margin-top: 10px;">
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-4">
                                <button type="submit" class="btn btn-primary searchbtn"><i class="glyphicon glyphicon-search"></i> ค้นหาเดี๋ยวนี้!</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div><!-- search-form -->
            <div id="user-grid" class="grid-view">
                <table class="table table-striped table-custom">
                    <thead>
                        <tr>
                            <th id="user-grid_c1">
                                <lable class="sort-link" href="<?php echo $baseUrl; ?>/back/project/index?User_sort=name">ชื่อโครงการ</lable>
                            </th>

                             <th id="user-grid_c1">
                                <lable class="sort-link" href="<?php echo $baseUrl; ?>/back/project/index?User_sort=name">หมวดหมู่</lable>
                            </th>

                            <th class="button-column" id="user-grid_c6">&nbsp;</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        while ($rs_user = $db->get($query_pc1)) {
                            $tr = ($i % 2 == 0) ? "odd" : "even";
                            ?>
                            <tr class="<?php echo $tr; ?>">
                                <td><?php echo $rs_user['name']; ?></td>
                                <td><?php echo $rs_user['province']; ?></td>

                                <td class="button-column">
                                    
                                    
                                    <a class="btn btn-info btn-xs load_data" title="" href="<?php echo $baseUrl; ?>/back/project/view/<?php echo $rs_user['project_id']; ?>"><i class="glyphicon glyphicon-list-alt"></i> รายละเอียด
                                    </a>
                                    <a class="btn btn-success btn-xs load_data" title="" href="<?php echo $baseUrl; ?>/back/project/ima/<?php echo $rs_user['project_id']; ?>"><i class="glyphicon glyphicon-camera"></i> เพิ่มรูปภาพ
                                    </a>
                                    <a class="btn btn-warning btn-xs load_data" title="" href="<?php echo $baseUrl; ?>/back/project/update/<?php echo $rs_user['project_id']; ?>"><i class="glyphicon glyphicon-edit"></i> แก้ไข
                                    </a>
                                 
                                    
                                    <a class="btn btn-danger btn-xs confirm" title="" href="#" data-toggle="modal" data-target="#deleteModal<?php echo $rs_user['project_id'];?>"><i class="glyphicon glyphicon-remove"></i> ลบ</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModal<?php echo $rs_user['project_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                                    <a role="button" class="btn btn-primary" href="<?php echo $baseUrl; ?>/back/project/delete/<?php echo $rs_user['project_id']; ?>">ใช่ ยืนยันการลบ</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="keys" style="display:none" title="<?php echo $baseUrl; ?>/back/project"><span>2</span><span>3</span></div>
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
