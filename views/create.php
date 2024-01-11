<?php 
$title ="Add student";

ob_start();

?>
<form method="post" action="index.php?action=store">
    <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control" name="nom"><br>
    </div>
    <div class="form-group">
        <label>First Name</label>
        <input type="text" class="form-control" name="prenom"><br>
    </div>
    <div class="form-group">
        <label>Age</label>
        <input type="number" class="form-control" name="age"><br>
    </div>
    <div class="form-group">
        <label>Login</label>
        <input type="text" class="form-control" name="login"><br>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password"><br>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-success my-2" value="Add Student" name="ajouter"><br>
    </div>
</form>
<?php
$content =ob_get_clean();
?>
<?php include_once 'views/layout.php';?>
