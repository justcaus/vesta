<?php
// Init
error_reporting(NULL);
ob_start();
session_start();
include($_SERVER['DOCUMENT_ROOT']."/inc/main.php");

//if (!empty($_GET['domain'])) {
//    $v_username = escapeshellarg($user);
//    $v_domain = escapeshellarg($_GET['domain']);
//    exec (VESTA_CMD."v_delete_web_domain ".$v_username." ".$v_domain, $output, $return_var);
//    if ($return_var != 0) {
//        $error = implode('<br>', $output);
//        if (empty($error)) $error = 'Error: vesta did not return any output.';
//            $_SESSION['error_msg'] = $error;
//    }
//    unset($output);
//}
echo "<pre>";
print_r($_POST);
echo "</pre>";


//header("Location: /list/web/");
