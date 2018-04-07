 <?php  
$db = new database();
$sql_pc = "SELECT m1.id,m1.name_img,m1.project_id,m2.name FROM `tbl_images`m1 INNER JOIN project m2 ON m1.project_id = m2.project_id WHERE m2.project_id= '{$_GET['id']}'";

$query_pc = $db->query($sql_pc);
$get_pc = $db->get($query_pc);


$option_pc = array(
    "table" => "project",
    "condition" => "project_id='{$_GET['id']}' "
);
$query_pc1 = $db->select($option_pc);
$rs_pc1 = $db->get($query_pc1);




 $connect = mysqli_connect("localhost", "root", "", "dss");  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
     $project_id = mysqli_real_escape_string($connect, $_POST['project_id']);
     
     
      $query = "INSERT INTO tbl_images(name_img,project_id) VALUES ('$file', '$project_id')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 } 

 ?>  

 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>เพิ่มรูปภาพ : <?php echo $rs_pc1['name']; ?></title>  
          
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
            <script type="text/javascript" src="<?php echo $baseUrl; ?>/js/jquery.form-validator.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
          <?php 
            require 'template/back/header.php';
          ?>
      </head>  
      <body>  
           <br /><br /> 
          <div id="page-warpper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">เพิ่มรูปภาพ : <?php echo $rs_pc1['name']; ?></h1>
                </div>
            </div>
           <div class="container" style="width:500px;">  
                <h3 align="center">กรุณาเลือกรูปภาพ</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <br /> 
                    <input type="hidden" name="project_id" id="project_id"  
                           value= "<?php echo $rs_pc1['project_id']; ?>"/>  
                     <br />
                     <input type="submit" name="insert" id="insert" value="เพิ่มรูปภาพ" class="btn btn-success btn-sm load_data" />  
                </form>  
                <br />
                <br />
                <table class="table table-bordered">
                     <tr>  
                          <th>รูปภาพเกี่ยวกับ : <?php echo $rs_pc1['name']; ?></th>
                     </tr>  
                <?php  
                $query = "SELECT m1.id,m1.name_img,m1.project_id,m2.name FROM `tbl_images`m1 INNER JOIN project m2 ON m1.project_id = m2.project_id WHERE m2.project_id= '{$_GET['id']}' ORDER by id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  <center>
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name_img'] ).'" height="250" width="400" class="img-thumnail" />  
                                    </center>
                               </td>
                               
                              
                          </tr>  
                     ';
            
                }  
                ?> 
                    
                </table>
               
               
           </div> 
               <div class="row">
        <div class="col-lg-12">
            <div class="submit">
               
                <a role="button" class="btn btn-warning btn-xs new-data" href="<?php echo $baseUrl; ?>/back/project">
                    <i class="glyphicon glyphicon-chevron-left"></i>
                    กลับ
                </a>
            </div>
        </div>
    </div>
              </div>
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
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