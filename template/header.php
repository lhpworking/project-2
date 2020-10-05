
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Merciado Amusement Park</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="./assets/css/UI.css">
  <link rel="stylesheet" href="./merciado//assets/css/mycss.css">
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
</head>

<body id="home">
  <section class=" header-4 header-sticky">
    <header class="absolute-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <h1><a class="navbar-brand" href="index.php"> <span class="fa fa-pagelines" aria-hidden="true"></span>
              Merciado Park
            </a></h1>
          <button class="navbar-toggler bg-gradient collapsed" type="button" data-toggle="collapse"
            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa icon-expand fa-bars"></span>
            <span class="fa icon-close fa-times"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
            <a href="./test.php" class="ml-lg-3 mt-lg-0 mt-3 book btn btn-style"> Log In </a>
          </div>
      </div>

      </nav>
      </div>
    </header>
  </section>
  <!-- <script src="./assets/js/bootstrap.min.js.map"></script> -->
  <script src="../merciado/assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
  <script src="./assets/js/jquery-3.5.1.js"></script>
  <!--bootstrap working-->
  <script src="../merciado/assets/js/bootstrap.min.js"></script>
  <!-- //bootstrap working-->
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->