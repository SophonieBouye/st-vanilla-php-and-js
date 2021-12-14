<?php

if(isset($_POST)) {
    try {
        $connect = new PDO("mysql:host=localhost; dbname=testing", "root", "root");
    } catch (PDOException $e) {
        echo 'Error  :' . $e;
    }

    $data = [
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "message" => $_POST['message'],
    ];


    $query = "
        INSERT INTO contact_data(name, email, message)
        VALUES(:name, :email, :message)
    ";

    $statement = $connect->prepare($query);
    $statement->execute($data);

    echo '<div class="alert alert-success">Message sended</div>';
}