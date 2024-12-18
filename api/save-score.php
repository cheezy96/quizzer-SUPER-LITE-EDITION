<?php

$dsn = "mysql:
        host=localhost;
        dbname=quizzer4;
        user=root;
        password=;
";

$conn = new PDO($dsn);

$name = $_GET['name'];
$score = $_GET['score'];

$results = $conn->query("INSERT INTO `scores` (`id`, `name`, `score`, `date`) VALUES (NULL, '$name', '$score', current_timestamp());");
                