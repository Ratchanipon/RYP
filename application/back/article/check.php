<?php
/*
 * php code///////////**********************************************************
 */
$title = 'ระบบจัดการบทความ';
$db = new database();
$option_article = array(
    "table" => "article"
);
$query_article = $db->select($option_article);

$sql_article1 = "SELECT t2.name,t1.article_id,t1.article_name,t1.content,t1.images,t1.video FROM `article` t1 INNER JOIN user t2 ON t1.owner = t2.user_id WHERE status = 0";
$query_article1 = $db->query($sql_article1);

require 'template/back/header.php';
/*
 * header***********************************************************************
 */
?>

<div id="page-warpper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">ตรวจสอบบทความ </h1>
        </div>
    </div>
    <div class="row">
        
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="search-form" style="display:none">

                
            </div><!-- search-form -->
            
            <form id="arc-form" action="<?php echo $baseUrl; ?>/back/article/form_update/
                                        <?php echo $rs_article['article_id']; ?>" method="post">
                
            <div id="user-grid" class="grid-view">
                <table class="table table-striped table-custom">
                    <thead>
                        <tr>
                            
                            <th id="user-grid_c1">
                                <a class="sort-link" href="<?php echo $baseUrl; ?>/back/article/index?User_sort=name">ชื่อบทความ</a>
                            </th>
                            <th id="user-grid_c1">
                                <a class="sort-link" href="<?php echo $baseUrl; ?>/back/article/index?User_sort=name">เนื้อหา</a>
                            </th>

                            <th id="user-grid_c1">
                                <a class="sort-link" href="<?php echo $baseUrl; ?>/back/article/index?User_sort=name">รูปภาพ</a>
                            </th>
                            <th id="user-grid_c1">
                                <a class="sort-link" href="<?php echo $baseUrl; ?>/back/article/index?User_sort=name">วิดีโอ</a>
                            </th>

                            <th id="user-grid_c1">
                                <a class="sort-link" href="<?php echo $baseUrl; ?>/back/article/index?User_sort=name">เจ้าของบทความ</a>
                            </th>

                            <th class="button-column" id="user-grid_c6">&nbsp;</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        while ($rs_article = $db->get($query_article1)) {
                            $tr = ($i % 2 == 0) ? "odd" : "even";       
                        ?>
                            <tr class="<?php echo $tr; ?>">
                                <td><?php echo $rs_article['article_name']; ?></td>
                                <td><?php echo $rs_article['content']; ?></td>
                                <td><?php echo $rs_article['images']; ?></td>
                                <td><iframe width="150" height="80" src="https://www.youtube.com/embed/<?php echo $rs_article['video']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></td>
                                <td><?php echo $rs_article['name']; ?></td>

                                <td class="button-column">
                                    <a role="button" class="btn btn-success btn-xs confirm" href="<?php echo $baseUrl; ?>/back/article/form_update/<?php echo $rs_article['article_id']; ?>"><i class="glyphicon glyphicon-ok"></i> อนุมัติ</a>
                                                                                             
                                    <a class="btn btn-danger btn-xs confirm" title="" href="#" data-toggle="modal" data-target="#deleteModal<?php echo $rs_article['article_id'];?>"><i class="glyphicon glyphicon-remove"></i>ปฏิเสธ</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModal<?php echo $rs_article['article_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">แจ้งเตือนการปฏิเสธบทความ</h4>
                                                </div>
                                                <div class="modal-body">
                                                    คุณยืนยันต้องการจะปฏิเสธบทความนี้ ใช่หรือไม่?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">ไม่ใช่</button>
                                                    <a role="button" class="btn btn-primary" href="<?php echo $baseUrl; ?>/back/article/delete/<?php echo $rs_article['article_id']; ?>">ใช่ ยืนยันการปฏิเสธ</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="keys" style="display:none" title="<?php echo $baseUrl; ?>/back/article"><span>2</span><span>3</span></div>
            </div>
        </form>
        </div>
    </div>
    <script type="text/javascript">
        $("#arc-form").validate();
            $(document).ready(function) {
                $("#save").submit();
            }
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
