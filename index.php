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

            case 'product':
                include"view/product.php";
                break;

            case 'product_detail':
                include"view/product_detail.php";
                break;

            case 'contact':
                include"view/contact.php";
                break;

            case 'cart':
                include"view/cart.php";
                break;


            case 'about':
                include"view/about.php";
                break;

            case 'dangkithanhvien':
                include"view/dangkithanhvien.php";
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