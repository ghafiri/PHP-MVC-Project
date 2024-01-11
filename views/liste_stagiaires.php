<?php 
$title ="List of students";



ob_start();



?>
<a href="index.php?action=create" class="btn btn-primary">Add Student</a>
<table class ="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Last Name</th>
            <th scope="col">First Nam</th>
            <th scope="col">Age</th>
            <th scope="col">Login</th>
            <th scope="col">Actions</th>

            
        </tr>
    </thead>
    <tbody>
     
    <?php  foreach($stagiaires as $stagiaire):?>
        <tr>
        <td><?php echo$stagiaire -> id;?></td> 
        <td><?php echo$stagiaire -> nom;?></td> 
        <td><?php echo$stagiaire -> prenom;?></td> 
        <td><?php echo$stagiaire -> age;?></td> 
        <td><?php echo$stagiaire -> login;?></td> 
        <td>
        <a href="index.php?action=edit&id=<?php  echo $stagiaire -> id?>" class="btn btn-success btn-sm">Edit</a>
        <a href="index.php?action=delete&id=<?php  echo $stagiaire -> id?>" class="btn btn-danger btn-sm">Delete</a>
          

        </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php
$content =ob_get_clean();
?>
<?php include_once 'views/layout.php';?>
