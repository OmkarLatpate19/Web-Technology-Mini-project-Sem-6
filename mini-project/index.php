<?php
// Start the session
session_start();

// Check if the user is not logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // Redirect to the login page
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <title>WTL Mini Project</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>

  <?php include 'menu.php'; ?>


  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/Raigad.jpg" alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Raigad</h3>
          <p>Capital of Maratha Empire</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/Shivneripic5.jpg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Shivneri Fort</h3>
          <p>Birth place of Chhatrapati Shivaji Maharaj</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/Gadancha_Raja,_Rajancha_Gad.jpg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Rajgad</h3>
          <p>Gadancha_Raja,_Rajancha_Gad</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/Pratapgad.jpg" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Pratapgad</h3>
          <!-- <p>Harihar Gad</p> -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/Murud_Janjira_Fort.jpeg" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Murud Janjira Fort</h3>
          <!-- <p>Harihar Gad</p> -->
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">About Us</h2>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 cpl-12">
          <img src="images/Suvela_machi.jpg" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 cpl-12">
          <h2 class="display-4">MAJESTIC MAHARASHTRA</h2>
          <p class="py-3">Discover Maharashtra's historic legacy in its majestic forts, where tales of valor and
            resilience echo through time. Experience the pride of our heritage as you traverse ancient stones and
            unravel stories of triumph. Each fort stands tall, a testament to our ancestors' courage, inviting you to
            immerse yourself in the grandeur of our past. Explore Maharashtra Forts Tourism and embrace a journey filled
            with history, pride, and awe-inspiring beauty.</p>
          <a href="about.php" class=" btn btn-success">Check More</a>
        </div>
      </div>
    </div>

  </section>

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Our Services</h2>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" style="width:400px">
            <img class="card-img-top" src="images/mtdc.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Stay At MTDC</h4>
              <p class="card-text">MTDC Resort Raigad</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" style="width:400px">
            <img class="card-img-top" src="images/The_Deccan_Odyssey.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">The Deccan Odyssey Train</h4>
              <p class="card-text">A traditional welcome ceremony in Mumbai before boarding</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" style="width:400px">
            <img class="card-img-top" src="images/modak.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Traditional Marathi Food</h4>
              <p class="card-text">The Famous Ukdiche Modek</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Galary</h2>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/Lohagad_fort.jpg" class="img-fluid pb-4">
          <div class="carousel-caption">
            <h4>Lohagad</h4>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/DaulatabadFort.jpeg" class="img-fluid pb-4">
          <div class="carousel-caption">
            <h4>Daulatabad Fort</h4>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/Tungi_Peak_Sunrise.jpg" class="img-fluid pb-4">
          <div class="carousel-caption">
            <h4>Tungi Peak Sunrise Peak</h4>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/Sajjangad.jpg" class="img-fluid pb-4">
          <div class="carousel-caption">
            <h4>Sajjangad Entrance</h4>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/Ajinkytara.jpg" class="img-fluid pb-4">
          <div class="carousel-caption">
            <h4>Ajinkytara Entrance</h4>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/Korigad.jpeg" class="img-fluid pb-4">
          <div class="carousel-caption">
            <h4>Korigad</h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Add Fort Information</h2>
    </div>

    <div class="w-50 m-auto">
      <form action="create.php" method="post">
        <div class="form-group">
          <label>Fort Name</label>
          <input type="text" name="fort_name" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="btn-group" role="group" aria-label="CRUD Operations">
          <button type="submit" class="btn btn-primary mb-2">Submit</button>
          <a href="read.php" class="btn btn-success mb-2 mx-1">Read</a>
          <a href="update.php" class="btn btn-warning mb-2 mx-1">Update</a>
          <a href="delete.php" class="btn btn-danger mb-2 mx-1">Delete</a>
          <!-- <button type="button" class="btn btn-danger mb-2 mx-1">Delete</button> -->
        </div>
      </form>
    </div>
  </section>




  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Contact Us</h2>
    </div>

    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <label>Your Name</label>
          <input type="text" name="name" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Email ID</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Mobile Number</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Comments/Questions</label>
          <textarea class="form-control" name="comment"></textarea>
        </div>
        <button type="submit" class="btn btn-success mb-2">Submit</button>
      </form>
    </div>
  </section>


  <footer>
    <p class="p-3 bg-dark text-white text-center">@MaharashtraTourism</p>
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <p class="mb-0 text-dark">Follow us on social media:</p>
          <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>