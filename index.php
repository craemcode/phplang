<?php
//this is not the optimal method just a demonstration

//Create a connection to the database
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //error handling


$statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC'); //prepare returns a statement
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);






















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
    <h1>Products CRUD</h1>
    <p>
        <a href="create.php" class="btn btn-success"> Add Product </a>
    </p>
    <table class="table">
         <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th> 
                <th scope="col">Create Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $i=> $products){ ?>
                <tr>
                <th scope="row"><?php echo $i+1 ?></th>
                <td><?php echo $products['image'] ?></td>
                <td><?php echo $products['title'] ?></td>
                <td><?php echo $products['price'] ?></td>
                <td><?php echo $products['create_date'] ?></td>
                <td>
                <button type="button" class="btn btn-sm btn-outline-primary">Edit</button>
                <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
                </td>
           
            </tr>
            <?php } ?>
        </tbody>
    </table>
    
  </body>
</html>