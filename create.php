<?php
//Create a connection to the database
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //error handling

//getting information from post superglobal

echo '<pre>';
var_dump($_FILES);
echo'</pre>';





if ($_SERVER['REQUEST_METHOD']==='POST'){
    $title = $_POST['title'];
    $desription = $_POST['description'];
    $price = $_POST['price'];
    $date = date('Y-m-d H:i:s');

    $image = $_FILES['image'] ?? null;
    if($image){
        move_uploaded_file($image['tmp_name'], 'uplpoad.bmp');
    }
    exit;

    $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
                    VALUES (:title, :image, :description, :price, :date)");

    //security against sql injection

    $statement->bindValue(':title', $title);
    $statement->bindValue(':image', '');
    $statement->bindValue(':description', $desription);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':date', $date);
    $statement->execute();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css"
    <title>Products CRUD</title>
  </head>
  <body>
    <h1>Create Product</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Image</label><br>
            <input type="file" name="image"> 
        </div>
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title"  class="form-control"> 
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="number" name="price" step = ".01" class="form-control"> 
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
