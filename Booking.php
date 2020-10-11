<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Booking</title>
  </head>
  
  <body>
  <div class="row">
  <div class="col-sm-6">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="Home.php">EAD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Booking.php">Booking</a>
      </li>
      </ul>
  </div>
</nav>
</body>
<body>
    <!--Formulir--->

 <h1>Formulir Booking</h1>
    <div class="container">
    <div class="row align-items-start">
    <div class="form">

    <form>
                           <div class="form-group">
                            <label for="nama" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">Nama</label>
                            <input type="text" name="fname">
                           </div>

                            <div class="form-group">
                                <label for="checkin">Check-in</label>
                                <input type="datetime-local" class="form-control" id="checkin" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label for="duration">Duration</label>
                                <input type="number" class="form-control" id="inputnama"  placeholder="">
                            </div>

                            <p>Add Service(s)</p>
                            <small>$20/services</small>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="roomservice">
                                <label class="form-check-label" for="exampleCheck1">Room Service</label>
                            </div>

                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="breakfast">
                                <label class="form-check-label" for="exampleCheck1">Breakfast</label>
                            </div>

                            <div class="form-group">
                                <label for="telepon">Phone</label>
                                <input type="name" class="form-control" id="phone"  placeholder="">
                            </div>
                            
                            <a href="mybooking.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Submit</a>
     </form>
</div>
                    <div class="row align-items-end">
                    <div class="card" style="width: 18rem;">
                    <img src="img/room1.jpg" class="card-img-left" alt="...">
                    </div>
   </div>                   
   </div>

   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>