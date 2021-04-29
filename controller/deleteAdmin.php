<?php 
include "../model/db_connection.php"; 
$id=$_GET["id"];
$delete_qry="delete from admin where id=$id";
mysqli_query($link,$delete_qry);
?>

<script type="text/javascript">
window.location="../view/viewAllUsers.php";
</script>