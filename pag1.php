<?php
if(isset($_GET["id"])){
    echo "Ati testat ".$_GET['id'];
}else{
    header("Location:index.php");
}
?>
