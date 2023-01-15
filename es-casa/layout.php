<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css' integrity='sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==' crossorigin='anonymous' />
  <title>Pet Shop</title>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown link
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <div class="container">
    <div class="row">
      <h1>Dog Food</h1>
      <?php foreach ($arrayFood as $food) : ?>
        <div class="col-6 mb-3">
          <div class="card">
            <img src="<?php echo $food->image ?>" class="thumbnail card-img-top">
            <div class="card-body">
              <h3 class="card-title"><?php echo $food->name ?></h3>
              <p class="card-text"><?php echo $food->pruductor ?></p>
              <p class="card-text">Ingredients: <?php echo $food->getIngredients() ?></p>
              <p class="card-text"><?php echo $food->getWeight() ?></p>
              <p class="card-text"><?php echo $food->price ?>&euro;</p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <h1>Dog Toys</h1>
      <?php foreach ($arrayToy as $toys) : ?>
        <div class="col-6 mb-3">
          <div class="card">
            <img src="<?php echo $toys->image ?>" class="thumbnail card-img-top">
            <div class="card-body">
              <h3 class="card-title"><?php echo $toys->name ?></h3>
              <p class="card-text"><?php echo $toys->pruductor ?></p>
              <p class="card-text">Hardness:<?php echo $toys->hardness ?></p>
              <p class="card-text">Size:<?php echo $toys->size ?></p>
              <p class="card-text"><?php echo $toys->price ?>&euro;</p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>


</body>

</html>