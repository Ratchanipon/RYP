<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/css/defaults.css" />
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/js/jquery.1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/js/loading.js"></script>
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <div id="warpper">
            <nav class="navbar navbar-default navbar-fixed-top" style="margin-bottom: 0;" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="">ระบบจัดการข้อมูลแอปพลิเคชันโครงการหลวง</a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i> <span class="caret"></span>
                        </a>
                        <ul class="dropdown dropdown-menu">
                            <li>
                                <a href="<?php echo $baseUrl; ?>/back/user/profile"><i class="glyphicon glyphicon-user"></i>
                                    ข้อมูลส่วนตัว
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $baseUrl; ?>/back/user/changepassword"><i class="glyphicon glyphicon-pencil"></i>
                                    เปลี่ยนรหัสผ่าน
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo $baseUrl; ?>/back/user/logout"><i class="glyphicon glyphicon-log-out"></i>
                                    ออกจากระบบ
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="navbar-default navbar-static-side" role="navigation">
                    <div class="sidebar-collapse">
                        <ul id="side-menu" class="nav">
                            <li>
                                <a href="<?php echo $baseUrl; ?>/itoffside-admin"><i class="glyphicon glyphicon-home">&nbsp;</i> หน้าแรก</a>
                            </li>
                             <li>
                                <a href="<?php echo $baseUrl; ?>/back/user"><i class="glyphicon glyphicon-user">&nbsp;</i>บัญชีผู้ใช้งานสมาชิก</a>
                            </li>
                            <li>
                                <a href="<?php echo $baseUrl; ?>/back/category"><i class="glyphicon glyphicon-th-list">&nbsp;</i>จัดการหมวดหมู่</a>
                            </li>
                            <li>
                                <a href="<?php echo $baseUrl; ?>/back/project"><i class="glyphicon glyphicon-folder-open">&nbsp;</i> จัดการข้อมูลโครงการ</a>
                            </li>
                            
                            <li>
                              <a href="<?php echo $baseUrl; ?>/back/article"><i class=" glyphicon glyphicon-align-left">&nbsp;</i> จัดการบทความ</a>
                            </li>
                              <li>
                              <a href="<?php echo $baseUrl; ?>/back/video"><i class=" glyphicon glyphicon-film">&nbsp;</i> จัดการวิดีโอแนะนำ</a>
                            </li>
                           
                            <li>
                                <a href="<?php echo $baseUrl; ?>/back/about"><i class="glyphicon glyphicon-hdd">&nbsp;</i> เกี่ยวกับเรา</a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </nav>
