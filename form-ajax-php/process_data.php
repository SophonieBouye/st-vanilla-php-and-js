<?php



if(isset($_POST["name"])) {

    try {
        $connect = new PDO("mysql:host=localhost; dbname=testing", "root", "root");
        $data = [
            ':name'         => $_POST["name"],
            ':email'        => $_POST["email"],
            ':website'      => $_POST["website"],
            ':comment'      => $_POST["comment"],
            ':gender'       => $_POST["gender"],
        ];
    
    
        $query = "
            INSERT INTO data_sample(name, email, website, comment, gender)
            VALUES(:name, :email, :website, :comment, :gender)
        ";
    
        $statement = $connect->prepare($query);
    
        $statement->execute($data);

    } catch (PDOException $ex) {
        var_dump($ex);
        die();
    }
 
  

    echo '<div class="alert alert-success">Data Saved</div>';
}

?>