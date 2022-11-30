<?php
$page = (isset($_GET['page'])) ? $_GET['page'] : '';
switch ($page) {
    
    case 'add':
        include "page/kerjasama.php";
        break;

    case 'more-praktik':
        include "page/praktik.php";
        break;

    // case 'detail':
    //     include "page/kerjasama-detail.php";
    //     break;

    case 'detail-praktik':
        include "page/praktik-detail.php";
        break;

}
