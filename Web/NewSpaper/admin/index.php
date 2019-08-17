<?php

// Require database & thông tin chung
require_once 'core/init.php';

// if (isset($_POST['user_signin']) && isset($_POST['pass_signin']))
// {

//     $user_signin = trim(htmlspecialchars(addslashes($_POST['user_signin'])));
//     $pass_signin = trim(htmlspecialchars(addslashes($_POST['pass_signin'])));
//     echo $show_alert.$user_signin;
//         $sql_check_user_exist = "SELECT username FROM accounts WHERE username = '$user_signin'";

//         // Nếu tồn tại username
//         if ($db->num_rows($sql_check_user_exist))
//         {
//             $pass_signin = md5($pass_signin);
//             // echo $show_alert.$pass_signin;
//             $sql_check_signin = "SELECT username, password FROM accounts WHERE username = '$user_signin' AND password = '$pass_signin'";
//             if ($db->num_rows($sql_check_signin))
//             {
//                 $sql_check_stt = "SELECT username, password, status FROM accounts WHERE username = '$user_signin' AND password = '$pass_signin' AND status = '0'";
//                 if ($db->num_rows($sql_check_stt))
//                 {
//                     
//                     echo $show_alert.$success.'Đăng nhập thành công.';

//                 }
//             }
//             else
//             {
//                 echo $show_alert.'Mật khẩu không chính xác.';
//             }
//         }
//         else
//         {
//             echo $show_alert.'Tên đăng nhập không tồn tại.';
//         }
// }
  $user = "admin";
// Require header
require_once 'includes/header.php';
 
 // Nếu đăng nhập

if ($user)
{
 // Hiển thị sidebar
require_once 'templates/sidebar.php';
 
// Hiển thị sidebar
require_once 'templates/content.php';
}
// Nếu không đăng nhập
else
{
    // Hiển thị form đăng nhập
    require_once 'templates/signin.php';
}

// Require footer
require_once 'includes/footer.php';
 
?>