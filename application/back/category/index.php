<?php
/*
 * php code///////////**********************************************************
 */
$title = 'จัดการหมวดหมู่โครงการ';
$db = new database();
$option_category = array(
    "table" => "category"/*,
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
            <h1 class="page-header">จัดการหมวดหมู่โครงการ</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="subhead">
                <a role="button" class="btn btn-success btn-xs new-data"
                   href="<?php echo $baseUrl; ?>/back/category/create">
                    <i class="glyphicon glyphicon-plus-sign"></i>
                    เพิ่มใหม่
                </a>
                <!-- <a role="button" class="search-button btn btn-default btn-xs" href="#">
                    <i class="glyphicon glyphicon-search"></i>
                    ค้นหา ขั้นสูง
                </a>
                <a role="button" class="btn btn-default btn-xs" 
                   href="<?php echo $baseUrl; ?>/back/category">
                    <i class="glyphicon glyphicon-refresh"></i>
                    โหลดหน้าจอใหม่
                </a> -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!--<div class="search-form" style="display:none">

                <form id="yw0" action="<?php echo $baseUrl; ?>/back/category/index" method="get"><div class="form-horizontal" style="margin-top: 10px;">
                        <!--<div class="form-group">
                            <label for="Username" class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-4">
                                <input size="50" maxlength="50" class="form-control input-sm" name="User[username]" id="User_username" type="text" />        </div>
                        </div>-->

                        <!--<div class="form-group">
                            <label for="Username" class="col-sm-2 control-label">ชื่อ-นามสกุล</label>
                            <div class="col-sm-4">
                                <input size="60" maxlength="100" class="form-control input-sm" name="User[name]" id="User_name" type="text" />        </div>
                        </div>

                        <div class="form-group">
                            <label for="Username" class="col-sm-2 control-label">ประเภท</label>
                            <div class="col-sm-4">
                                <select class="form-control input-sm" name="User[permission]" id="User_permission">
                                    <option value="" selected="selected">All</option>
                                    <option value="user">ผู้ใช้</option>
                                    <option value="admin">ผู้ดูแลระบบ</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-4">
                                <button type="submit" class="btn btn-primary searchbtn"><i class="glyphicon glyphicon-search"></i> ค้นหาเดี๋ยวนี้!</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div> search-form -->
            <div id="user-grid" class="grid-view">
                <table class="table table-striped table-custom">
                    <thead>
                        <tr>
                            <!-- <th id="user-grid_c0">
                                <a class="sort-link" href="<?php echo $baseUrl; ?>/back/category/index?User_sort=username">ลำดับ</a>
                            </th> -->
                            <th id="user-grid_c1">
                                <lable class="sort-link" href="<?php echo $baseUrl; ?>/back/category/index?User_sort=name">จังหวัด</lable>
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
                                <!-- <td>
                                    <?php echo $rs_user['category_id']; ?>
                                </td> -->
                                <td><?php echo $rs_user['province']; ?></td>
                                <td class="button-column">
                                    <!--<a class="btn btn-info btn-xs load_data" title="" href="<?php echo $baseUrl; ?>/back/user/<?php echo $rs_user['Category_id']; ?>"><i class="glyphicon glyphicon-zoom-in"></i> รายละเอียด</a>-->
                                    <a class="btn btn-warning btn-xs load_data" title="" href="<?php echo $baseUrl; ?>/back/category/update/<?php echo $rs_user['category_id']; ?>"><i class="glyphicon glyphicon-edit"></i> แก้ไข
                                    </a>
                                    
                                    <a class="btn btn-danger btn-xs confirm" title="" href="#" data-toggle="modal" data-target="#deleteModal<?php echo $rs_user['category_id'];?>"><i class="glyphicon glyphicon-remove"></i> ลบ</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModal<?php echo $rs_user['category_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                                    <a role="button" class="btn btn-primary" href="<?php echo $baseUrl; ?>/back/category/delete/<?php echo $rs_user['category_id']; ?>">ใช่ ยืนยันการลบ</a>
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
