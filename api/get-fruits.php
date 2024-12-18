<?php

$dsn = "mysql:
        host=localhost;
        dbname=quizzer4;
        user=root;
        password=;
";

$conn = new PDO($dsn);

$results = $conn->query("SELECT * FROM `fruits`")
                ->fetchAll();
                
header('Content-type: json');
echo json_encode($results);