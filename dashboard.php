<?php 
require_once 'environment.php';

$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {
	//My Profile
    case 'myprofile-calendar' :
        $title="Checklist";  
        $content='pages/sys_user_dashboard/myprofile/calendar.php';        
        break;

    case 'checklist-symptoms' :
        $title="Checklist";  
        $content='pages/sys_user_dashboard/checklist_symptoms.php';        
        break;
    
    case 'checklist-symptoms-all' :
        $title="All Checklist";  
        $content='pages/sys_user_dashboard/checklist_symptoms_all.php';        
        break;

    //Impex
    case 'impex-seafreight-forwarders' :
        $title="Accredited Seafreight Forwarders";  
        $content='pages/sys_user_dashboard/impex/accredited_seafreightforwarders.php';        
        break;

    default :
        $title="Home";  
        $content ='pages/sys_user_dashboard/home.php';     
}

require_once 'template/sys_user_dashboard/body.php';
?>