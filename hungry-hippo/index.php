<?php
$hostname = "localhost";
$db_username = "root";
$db_password ="bhawanaadk";
$db_name ="hungry_hippo";

$conn = mysqli_connect($hostname,$db_username,$db_password,$db_name);

$query = "SELECT * FROM foods order by createdAt DESC";
$result = mysqli_query($conn, $query);
$rows =  mysqli_fetch_all($result, MYSQLI_ASSOC);

// echo"<pre>";
// var_dump($rows);
// echo"</pre>";


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hungry Hippo | Roshan Shrestha</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</head>

<body class="container">
      <!-- <div>
        <h1>"Hungry Hippo"</h1>
      </div> -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="http://localhost:8000/add-product.php">addproduct</a>
        
      </div>
    </div>
  </div>
</nav>
<div class=row>

      <?php foreach($rows as $data ): ?>
        <div class="card" style="width: 15rem;">
        <img src= <?= $data['imageURL'];?> class="card-img-top" alt="..." height = "200px" width = "200px">
        <div class="card-body">
        <h4 class="card-title"><?= $data['name'];?></h4>
        <h4 class="card-title"><?= $data['category'];?></h4>
       

       

        <?php if ($data['recommendedForKid'] == 1) {
          echo '<span class="badge text-bg-info">Recommended for kids</span>';
        } else {
          echo '<span class="badge text-bg-warning">Not Recommended for kids</span>';
        } ?>
      
      
      <p class="card-text"><?= $data["nutritionInfo"];?></p>
      <p class="card-text"><?=  "Rs ". $data["price"]*100 ;?></p>

        

        <div class="btn">
          <button class="btn btn-primary">Edit</button>
          <button class="btn btn-primary">Delete</button>
        </div>
      

      </div>
    </div>
  



     <?php endforeach; ?>

   







    
      </div>
</body>

</html>