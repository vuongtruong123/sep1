<?php
 
$title_error_404 = 'Không tìm thấy trang';
 
// Url bài viết
if (isset($_GET['sp']) && isset($_GET['id'])) {
    $slug_post = trim(htmlspecialchars($_GET['sp']));
    $id_post = trim(htmlspecialchars($_GET['id']));
 
    // Kiểm tra bài viết tồn tại
    $sql_check_post = "SELECT id_post, slug, title FROM posts WHERE slug = '$slug_post' AND id_post = '$id_post'";
    if ($db->num_rows($sql_check_post)) {
        $data_post = $db->fetch_assoc($sql_check_post, 1);
 
        $title = $data_post['title'];
        // ...
    } else {
        $title = $title_error_404;
    }
// Url chuyên mục
} else if (isset($_GET['sc'])) {
    $slug_cate = trim(htmlspecialchars($_GET['sc']));
 
    // Kiểm tra chuyên mục tồn tại
    $sql_check_cate = "SELECT url, label FROM categories WHERE url = '$slug_cate'";
    if ($db->num_rows($sql_check_cate)) {
        $data_cate = $db->fetch_assoc($sql_check_cate, 1);
 
        $title = $data_cate['label'];
        // ...
    } else {
        $title = $title_error_404;
    }
} else {
    $title = $data_web['title'];
    // ...
}
 
?>
<html lang="en" dir="ltr">
<head>
    <title>MEETING ROOM BOOKING - ?</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex"/>
            <!--meta http-equiv="REFRESH"
              content="1800;URL=logout.php?redirect=%2FSEP%2FSep1%2FWeb%2Fnews.php"-->
        <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="icon" href="favicon.ico"/>
    <!-- JavaScript -->
        <script type="text/javascript" src="../scripts/js/jquery-3.3.1.min.js?v=2.7.6"></script>
        <script type="text/javascript" src="../scripts/js/jquery-migrate-3.0.1.min.js?v=2.7.6"></script>
        <script type="text/javascript" src="../scripts/js/jquery-ui.1.12.1.custom.min.js?v=2.7.6"></script>
        <script type="text/javascript" src="../scripts/bootstrap/js/bootstrap.min.js?v=2.7.6"></script>
    
    <!-- End JavaScript -->

    <!-- CSS -->
            <link rel='stylesheet' type='text/css' href='../scripts/css/smoothness/jquery-ui.1.12.1.custom.min.css?v=2.7.6'/>
        <link rel='stylesheet' type='text/css' href='../css/font-awesome-4.7.0/css/font-awesome.min.css?v=2.7.6'/>
        <link rel='stylesheet' type='text/css' href='../scripts/bootstrap/css/bootstrap.css?v=2.7.6'/>
                        
                    
    <script type="text/javascript" src="../scripts/js/jquery-ui-timepicker-addon.js?v=2.7.6"></script>
    <link rel='stylesheet' type='text/css' href='../scripts/css/jquery-ui-timepicker-addon.css?v=2.7.6'/>
    <link rel='stylesheet' type='text/css' href='../css/booked.css?v=2.7.6'/>
                                <link rel='stylesheet' type='text/css' href='https://cdn.rawgit.com/afeld/bootstrap-toc/v0.4.1/dist/bootstrap-toc.min.css?v=2.7.6'/>
        
                <link rel='stylesheet' type='text/css' href='../css/custom-style.css?v=2.7.6'/>
        
        <!-- End CSS -->
</head>
<body >

    <nav class="navbar navbar-default navbar-fixed-top"
         role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#booked-navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"
                   href="../view-schedule.php"><img src="booked.png?2.7.6" title="MEETING ROOM BOOKING - ?" alt="MEETING ROOM BOOKING - ?"  class="logo"  /></a>
            </div>
            <div class="collapse navbar-collapse" id="booked-navigation">
                <ul class="nav navbar-nav">
                    <li class="dropdown" id="navHelpDropdown">
                            <li id="navschedule"><a href="../view-schedule.php">Trang chủ</a></li>
                            
                            <!-- <li id="navAbout"><a href="../help.php?ht=about">Liên hệ</a></li>
                            <li id="navHelp"><a href="../help.php">Hướng dẫn</a></li>
                            <li id="navNews"><a href="../news.php">News</a></li> -->
                                                </li>
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                                                            
                                            <li id="navLogIn"><a href="../index.php">Quay lại</a></li>
                                    </ul>
            </div>
        </div>
    </nav>
