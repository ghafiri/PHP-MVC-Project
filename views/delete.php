<?php
$title ="Delete Student";


ob_start();




echo "Do you really want to delete the student?";
?>
<br>
<br>

<a class="btn btn-danger" href="index.php?action=destroy&id=<?= $id?>">Validate deletion</a>
<a class="btn btn-warning" href="index.php?action=list">Undo deletion</a>

<?php
$content =ob_get_clean();
include_once 'views/layout.php';