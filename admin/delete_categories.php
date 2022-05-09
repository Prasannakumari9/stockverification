<?php
include('../constants/db.php');

$id = $_GET['id'];
$sql = "DELETE FROM categories WHERE id = $id";
$res = mysqli_query($conn, $sql);
if($res==TRUE)
{
    $_SESSION['delete'] = " Deleted Succesfully";
    echo "<script>window.location.href='categories.php'</script>";
}
else
{
    $_SESSION['delete'] = "Failed To Delete . Try Again Later.";
    echo "<script>window.location.href='categories.php'</script>";
}
?>