
<?php date_default_timezone_set("Asia/Muscat"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <!-- Internal Style -->
    <!-- <style>
        body{
            background-color: rgb(129, 228, 228);
        }
    </style> -->
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    
    <!-- Inline Style -->
     <div class="container-fluid">
      <?php 
      date_default_timezone_set("Asia/Muscat");

      echo date_default_timezone_get();


      echo "<br>";

      echo time();

      echo "<br>";


      echo  date("Y-m-d H:i:s a", time());

      echo "<br>";

      $nextMonth= time() + 30 * 24 * 60 * 60;

      $date = strtotime("+1 month", strtotime(datetime: "1995-12-20"));

      $afterThreeMonths = strtotime("+1 month");

      echo "<h1>Welcome to Ministray of Education Training" . date("Y-m-d H:i:s", $afterThreeMonths) ."</h1>";

      echo "<h1>Date after One Month from 1995-12-20 <br>" . date("Y-m-d H:i:s", $date) ."</h1>";

      ?>
     </div>

     <hr>

     <div class="container-fluid">

     <div class="box">

        <div>
            <img src="./imgs/cat.webp" alt="">
        </div>

          <div>
            <img src="./imgs/cat.webp" alt="">
        </div>

          <div>
            <img src="./imgs/cat.webp" alt="">
        </div>

          <div>
            <img src="./imgs/cat.webp" alt="">
        </div>


        <button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>

<button type="button" class="btn btn-link">Link</button>

     </div>
     </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>