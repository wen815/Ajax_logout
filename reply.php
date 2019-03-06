<?php
include'includes/conn.php';
$id=$_GET['id'];
$reply=$_GET['reply'];
$q="UPDATE gbook SET reply='$reply' WHERE ID='$id'";
$r= mysqli_query($dbc, $q);


