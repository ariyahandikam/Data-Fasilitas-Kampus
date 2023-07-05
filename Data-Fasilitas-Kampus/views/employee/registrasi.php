<?php 
require '../../models/functions.php';

if( isset($_POST["register"]) ) {

	if( registrasi($_POST) > 0 ) {
		echo "<script>
				alert('user baru berhasil ditambahkan!');
			  </script>";
	} else {
		echo mysqli_error($conn);
	}

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<!-- Bootstrap Icons CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">



<!-- Custom CSS -->
<style type="text/css">
  .wave {
    position: fixed;
    bottom: 0;
    left: 0;
    height: 100%;
    z-index: -1;
  }
</style>

  </head>
<body>




<div class="container-fluid">
  <img class="wave" src="http://localhost/Data-Fasilitas-Kampus/img/wave.png">

  <div class="row">
    <div class="col-md-6">
      <div class="row">
        <img src="http://localhost/Data-Fasilitas-Kampus/img//bg.svg" alt="" width="200">
      </div>
    </div>

    <div class="col-md-5">
      <div class="row ms-3 text-center">
        <h3>Daftar</h3>
      </div>

      <form action="" method="post" class="justify-content-center rounded-4 shadow p-3 mt-4">
       <div class="row mb-3 justify-content-center">
          <div class="col-1">
            <a href="#"><i class="bi bi-facebook"></i></a>
      </div>
      <div class="col-1">
        <a href="#" class="text-danger"><i class="bi bi-google"></i></a>
      </div>
    </div>
      

        <div class="row mb-4 mt-4 justify-content-center">
          <div class="col-1">
            <label for="email"><i class="bi bi-person fs-5 text-body-secondary"></i></label>
          </div>
          <div class="col-10">
            <input type="text" class="form-control rounded-pill" placeholder="username" name="username"  id="username" autofocus required>
          </div>
        </div>

        <div class="row mt-4 justify-content-center">
          <div class="col-1">
            <label for="pwd"><i class="bi bi-lock-fill fs-5 text-body-secondary"></i></label>
          </div>
          <div class="col-10">
            <input type="password" placeholder="password" class="form-control rounded-pill" name="password" id="password" autofocus required>
          </div>
        </div>
          <div class="row mt-4 justify-content-center">
          <div class="col-1">
            <label for="password"><i class="bi bi-lock-fill fs-5 text-body-secondary"></i></label>
          </div>
          <div class="col-10">
            <input type="password" placeholder="ulangi password" class="form-control rounded-pill" name="password2" id="passwor2" autofocus required>
          </div>
        </div>      
       
		<div class="row mt-4 justify-content-center text-center">
     <div class="col d-grid gap-2 col-6 mx-auto">
    <button class="btn btn-primary mb-2 rounded-pill" style="background-color: #593fbd; "type="submit" name="register">Daftar</button>
  </div>
</div>  
  
<div class="row text-center">

<div class="text-center">
<a class="small" href="http://localhost/Data-Fasilitas-Kampus/views/employee/login.php">Login? </a>
  </div>
</div>

   
   </div>
   
  
   

  </div>
</form>
        </div>
       
      </div>
   
</div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>