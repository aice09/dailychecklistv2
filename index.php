<?php 
require_once 'environment.php';

$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {
	
    /* case 'ppress-done' :
        $title="Done";  
        $content='pages/sys_user/ppress_done.php';        
        break; */
    
    default :
        $title="Home";  
        $content ='pages/sys_user/home.php';     
}

require_once 'template/sys_user/body.php';
require_once 'config/idle.php';
?>