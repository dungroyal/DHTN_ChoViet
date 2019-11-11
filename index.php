<?php
    ob_start();
    session_start();

    include"view/header.php";

    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'home':
                include"view/home.php";
                break;

            default:
                include"view/home.php";
                break;
        }
    }else{
            include"view/home.php";
    }
    include"view/footer.php";
?>