<?php
	include('component/init.php');
    if (isset($_POST['page'])) $page = $_POST['page']; else $page = '';
	
    switch($page){
		/* check login */
        case 'login':
            include('modules/login/controller/main.php');
            break;
		 case 'danhsach':
            include('modules/danhsach/controller/main.php');
            break;
		default: 
            echo 'page is not found1';
            break;
	}//end switch


?>