<?php

function db_connection(){
    return  new PDO('mysql:host=localhost;dbname=ofppt','root','');
}

function Liste_stagiaires(){
    $pdo = db_connection();
    return  $pdo->query('SELECT * FROM stagiaire')->fetchAll(PDO::FETCH_OBJ);
}
function create(){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $age=$_POST['age'];
    $login=$_POST['login'];
    $password=$_POST['password'];

    $pdo = db_connection();
    $sqlState=$pdo->prepare("INSERT INTO stagiaire(`nom`, `prenom`, `age`, `login`, `password`) VALUES(?,?,?,?,?)");
    return $sqlState->execute([$nom,$prenom,$age,$login,$password]);
}
function edit($id,$nom,$prenom,$age,$login,$password){
    $pdo = db_connection();
    $sqlState=$pdo->prepare("UPDATE stagiaire SET nom =?,
                                                 prenom =?,
                                                 age =?,
                                                 login =?
                                                 ,password =? WHERE id =? ");
    return $sqlState->execute([$nom,$prenom,$age,$login,$password,$id]);

}
function destroy($id){
    $pdo = db_connection();
    $req=$pdo->prepare("DELETE from stagiaire where id=?");
    return $req->execute([$id]);

}
function view($id){
    $pdo = db_connection();
    $req=$pdo->prepare("SELECT * from stagiaire where id=?");
    $req->execute([$id]);
    return $req->Fetch(PDO::FETCH_OBJ) ;
    


}
?>