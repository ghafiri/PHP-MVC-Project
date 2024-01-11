<?php 
$title ="Modifier stagiaire";



ob_start();

?>
<form method="post" action="index.php?action=update">
<div class="form-group">

        <input type="hidden" class="form-control" name="id" value="<?= $stagiaire->id ?>"><br>
    </div>
    <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control" name="nom" value="<?= $stagiaire->nom ?>"><br>
    </div>
    <div class="form-group">
        <label>First Name</label>
        <input type="text" class="form-control" name="prenom" value="<?= $stagiaire->prenom ?>"><br>
    </div>
    <div class="form-group">
        <label>Age</label>
        <input type="number" class="form-control" name="age" value="<?= $stagiaire->age ?>"><br>
    </div>
    <div class="form-group">
        <label>Login</label>
        <input type="text" class="form-control" name="login" value="<?= $stagiaire->login ?>"><br>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" value="<?= $stagiaire->password ?>"><br>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-success my-2" value="Edit Student" name="modifier"><br>
    </div>
</form>
<?php
$content =ob_get_clean();
?>
<?php include_once 'views/layout.php';?>
