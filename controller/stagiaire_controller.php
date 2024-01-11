<?php
require_once('model/stagiaire_model.php');

function ListStagiaireAction(){
    $stagiaires=Liste_stagiaires();
    require_once('views/liste_stagiaires.php');

};
function createAction(){
    require_once "views/create.php";
}
function storAction(){
    create();    
    header('location:index.php?action=list');
}
function editAction(){
    $id=$_GET["id"];
    $stagiaire =view($id);
    require_once 'views/edit.php';
  
}
function updateAction(){
    extract ( $_POST);
    edit($id,$nom,$prenom,$age,$login,$password);
    header('location:index.php?action=list');
}

function deleteAction(){
    $id=$_GET["id"];
    require_once 'views/delete.php';
    
}

function destroyAction(){
    $id=$_GET["id"];
    destroy($id);
    header('location:index.php?action=list');
}




?>