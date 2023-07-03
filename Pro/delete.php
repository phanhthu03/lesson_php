<?php
    require_once 'pdo.php';
    $id = ['id' => $_POST['id']];
    deleteProdData($id);
    header("Location: http://localhost/lesson_php/product/index.php");
?>