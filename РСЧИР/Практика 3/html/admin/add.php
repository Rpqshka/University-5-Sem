<?php
    $book = $_GET['book'];
    $name= $_GET['name'];
    $mysqli = new mysqli("mysql", "user", "sayhi", "appDB2");
    $result = $mysqli->query("INSERT INTO books VALUE (NULL, '$name', '$book')");
    header("Location: http://localhost:8080/index.php");
    exit();
?>