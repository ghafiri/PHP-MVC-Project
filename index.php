<?php 
require_once 'controller/stagiaire_controller.php';

if (isset($_GET['action'])){
    $action = $_GET['action'];
    switch($action){
        case "create":
            createAction();
            break;
        case "list":
            ListStagiaireAction();
            break;
        case "edit":
            editAction();
            break;
        case "store":
            storAction();
            break;
        case "update":
            updateAction();
            break;
        case "delete":
            deleteAction();
            break;
        case "destroy":
            destroyAction();
            break;
    }

}