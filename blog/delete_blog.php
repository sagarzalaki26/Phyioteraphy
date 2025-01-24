<?php
session_start();
require 'db.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$blog_id = intval($_GET['id']);
$query = "DELETE FROM blogs WHERE id = $blog_id";
mysqli_query($conn, $query);

header("Location: blog.php");
exit();
?>