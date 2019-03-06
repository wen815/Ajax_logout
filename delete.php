<?php
include'includes/conn.php';
$id=$_GET['id'];
$q = "DELETE FROM gbook WHERE ID=$id LIMIT 1";
$r= mysqli_query($dbc, $q);

