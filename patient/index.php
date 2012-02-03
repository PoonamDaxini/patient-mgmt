<?php
session_start();
require_once '../config/config.php';
require_once CLASS_DIR . 'mysqlDatabaseClass.php';
require_once CLASS_DIR . 'userClass.php';
if (isset($_REQUEST['action'])) {
    switch ($_REQUEST['action']) {

        case 'query':
            include_once 'view/patientQuery.php';
            break;
        case 'addForm':
            include_once 'view/queryForm.php';
            break;
    }
} else {
    include_once 'view/patientPage.php';
}
?>