<?php
$conn = mysqli_connect("localhost","root","oreo@7904","hungry_hippo"); //php driver
//var_dump($conn);

$query = "SELECT * FROM foods";
$result= mysqli_query($conn, $query);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo "<pre>";
//var_dump($rows);
echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hungry Hippo | Nysa Rai</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</head>

<body >
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./add-product.php">Add Products</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<div class="row">
<?php foreach($rows as $data): ?>
  <div class="card" style="width: 18rem; height: 20 rem;">

    <img src="<?php echo $data["imageURL"]?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h2 class="card-name"><?php echo $data["name"]?></h2>
      <p class= "card-text">
      <?php if($data["recommendedForKid"]==1){
        echo "Recommended for kids! ";
        }
        else{
         echo "Not Recomended for kids";
        }
      ?>
      </p>
      </h5>

        <?php echo $data["category"] . "<br>"?>
        <?php echo $data["nutritionInfo"] . "<br>"?>

        <h4><?php echo "Rs." . $data["price"]*134.32 . "<br>"?></h4>

        <button type="button" class="btn btn-outline-danger">Delete</button>
        <button type="button" class="btn btn-outline-secondary">Edit</button>
        <a href="#" class="btn btn-primary">ORDER NOW</a>
    
      </div>
    </div>
    <?php endforeach; ?>
      </div>
  </div>
</body>

</html>