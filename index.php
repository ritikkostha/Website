<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Website</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Ritik Kostha</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html"> Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacted</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>


  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img3.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>



  <section class="my-5">
    <div class="py-5">
      <h3 class="about"> About us</h3>

    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="img3.jpg" alt="" class="img-fluid" height="500px " width="500px">
        </div>


        <div class="col-lg-6 col-md-6 col-12">
          <h1>Ritik kostha</h1>
          <p class="py-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque, porro cum enim perspiciatis
            earum tenetur maxime corporis ipsa itaque omnis, praesentium qui iure explicabo ullam rem ea accusamus a
            dolore.</p>
          <a href="about.php" class="btn-btn-success">View More</a>

        </div>
      </div>
    </div>
    </div>
  </section>


 

  <section class="py-5">
    <div class="my-5">
      <h3 class="ser">Our Services</h3>
    </div>

    <div class="container-fluid">
      <div class="row" >
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="img4.jpg" alt="Card image cap" height="325px">
            <div class="card-body">
              <h5 class="card-title">Beautiful Nature</h5>
              <p class="card-text">Some more know about the nature.</p>
            </div>

            <div class="card-body">
              <a href="about.php" class="card-link">Read More</a>
            </div>
          </div>
        </div>

        <!-- <div class="row"> -->
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
              <img class="card-img-top" src="img1.jpg" alt="Card image cap" height="325px">
              <div class="card-body">
                <h5 class="card-title">Beautiful Nature</h5>
                <p class="card-text">Some more know about the nature.</p>
              </div>
  
              <div class="card-body">
                <a href="about.php" class="card-link">Read More</a>
              </div>
            </div>
          </div>

          <!-- <div class="row"> -->
            <div class="col-lg-4 col-md-4 col-12">
              <div class="card">
                <img class="card-img-top" src="img2.jpg" alt="Card image cap" height="325px">
                <div class="card-body">
                  <h5 class="card-title">Beautiful Nature</h5>
                  <p class="card-text">Some more know about the nature.</p>
                </div>
    
                <div class="card-body">
                  <a href="about.php" class="card-link">Read More</a>
                </div>
              </div>
            </div>

      </div>
    </div>


  </section>

  <section class="py-3">
    <div class="my-3">
      <h3 class="gal">Gallery</h3>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <img class="img-fluid pb-3" src="img6.jpg" >
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <img class="img-fluid pb-3" src="img10.jpg" >
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <img class="img-fluid pb-3" src="img8.jpg" >
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <img class="img-fluid pb-3" src="img9.jpg" >
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <img class="img-fluid pb-3" src="img10.jpg" >
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <img class="img-fluid pb-3" src="img11.jpg" >
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <img class="img-fluid pb-3" src="img12.jpg">
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <img class="img-fluid pb-3" src="img13.jpg" >
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <img class="img-fluid pb-3" src="img14.jpg" >
        </div>
      </div>
    </div>
  </section>


  <section class="py-5">
    <div class="mr-5">
      <h3 class="form">Contact Us</h3>
    </div>
<div class="w-50 m-auto">
    <form  action="userinfo.php" method="post">
        <div class="form-row  ">
          <!-- <div class="form-group col-md-6"> -->
            <label for="inputEmail4">User Name</label>
            <input type="text" class="form-control" id="inputname" name="user" placeholder="Username">
          <!-- </div> -->
          <!-- <div class="form-group col-md-6"> -->
            <label>Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="email">
          <!-- </div> -->
        </div>
        <div class="form-group">
          <label for="inputAddress1">Address 1</label>
          <input type="text" class="form-control" id="inputAddress1" name="address1" placeholder="1234 Main St">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Address 2</label>
          <input type="text" class="form-control" id="inputAddress2" name="address2" placeholder="Apartment">
        </div>
        <div class="form-row">
          <!-- <div class="form-group col-md-6"> -->
            <label for="inputCity">City</label>
            <input type="text" class="form-control" name="city" id="inputCity">
          <!-- </div> -->
          <!-- <div class="form-group col-md-4"> -->
            <label for="inputState">State</label>
            <select id="inputState" class="form-control" name="stat">
              <option selected>Choose</option>
              <option>Uttar Pradesh</option>
              <option>Uttarakhand</option>
              <option>Delhi</option>
              <option>Madhya Pradesh</option>
              <option>Rajasthan</option>
              <option>Andra Pradesh</option>
              <option>Punjab</option>
            </select>
          <!-- </div> -->
          <!-- <div class="form-group col-md-2"> -->
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip" name="zip">
          <!-- </div> -->

          <label class="form-group"> Comment</label>
              <textarea name="comment" id="" class="form-control" name="comment"></textarea>
        </div>

        <button type="submit" class="btn btn-success m-2">Submit</button>
    </form>
  </div>

  <footer class="foot text-white">ritikkostha9@gmail.com</footer>

  </section>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>