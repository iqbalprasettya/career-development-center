<?php
$page = (isset($_GET['page'])) ? $_GET['page'] : '';
switch ($page) {


    // Page
    case 'home':
        include "page/home.php";
        break;

    case 'more':
        include "page/kerjasama.php";
        break;

    case 'detail':
        include "page/kerjasama-detail.php";
        break;

    case 'lowongan-admin':
        include "page/admin/lowongan.php";
        break;

    case 'kerjasama-admin':
        include "page/admin/kerjasama.php";
        break;

    case 'praktik-admin':
        include "page/admin/praktik.php";
        break;

    case 'organisasi-admin':
        include "page/admin/organisasi.php";
        break;

    case 'struktural-admin':
        include "page/admin/struktural.php";
        break;

    case 'logonav-admin':
        include "page/admin/logonav.php";
        break;

    case 'interface-admin':
        include "page/admin/interface.php";
        break;

    // interface

    case 'tambah-interface':
        include "page/admin/add-interface.php";
        break;
        
    case 'edit-interface':
        include "page/admin/edit-interface.php";
        break;
    


    
    // Proses keluar masuk Data
    case 'tambah':
        include "page/admin/add-lowongan.php";
        break;

    case 'tambah2':
        include "page/admin/add-kerjasama.php";
        break;

    case 'tambah3':
        include "page/admin/add-praktik.php";
        break;

    case 'tambah4':
        include "page/admin/add-organisasi.php";
        break;

    case 'tambah5':
        include "page/admin/add-dosen.php";
        break;

    case 'edit':
        include "page/admin/edit-lowongan.php";
        break;

    case 'edit2':
        include "page/admin/edit-kerjasama.php";
        break;

    case 'edit3':
        include "page/admin/edit-praktik.php";
        break;

    case 'edit4':
        include "page/admin/edit-organisasi.php";
        break;

    case 'edit5':
        include "page/admin/edit-dosen.php";
        break;

    default:
        include "page/admin/lowongan.php";
}
