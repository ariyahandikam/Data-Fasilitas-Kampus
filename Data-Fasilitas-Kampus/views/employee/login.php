<?php 
require  '../../models/functions.php';

if( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	// cek username
	if( mysqli_num_rows($result) === 1 ) {

		// cek password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {
			header("Location: http://localhost/Data-Fasilitas-Kampus/views/employee/index.php");
			exit;
		}
	}

	$error = true;

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <style type="text/css" media="">
      .wave {
        position: fixed;
        bottom: 0;
        left: 0;
        height: 100%;
        z-index: -1;
      }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  </head>
<body>
  

<?php if( isset($error) ) : ?>
 <div class="row text-center justify-content-center">
        <div class="col-md-5">    
<div class="alert alert-danger" role="alert">
  	<p class="fs-3">Username / Password salah!</p>
  	</div>
  	</div>
</div>
<?php endif; ?>

<div class="container-fluid">
      <img class="wave" src="http://localhost/Data-Fasilitas-Kampus/img/wave.png">

      					<div class="row mt-1">
						<div class="col-md-12">

										<center>

											<img src="http://localhost/Data-Fasilitas-Kampus/Img/Univ.png" width="100">
											<br>
											      <h2 class="container text-center">Data Fasilitas Kampus</h2>
											<b>Universitas Galuh Ciamis</b>
										</center>
									</div>
                        </div>
      <div class="row">
        <div class="col-md-6">        
          <div class="row">
            <img src="http://localhost/Data-Fasilitas-Kampus/img/Bg.svg" alt="" width="200"/>
          </div>
        </div>
        <div class="col-md-5 ">
          <div class="row  text-center">
            <h3>Login</h3>
          </div>
        <form action="" method="post" class="justify-content-center rounded-4 shadow p-3 mt-4">
           <div class="row mt-4 justify-content-center">
              <div class="col-1">
                <a href="#"><i class="bi bi-facebook"></i></a>
              </div>
              <div class="col-1">
                <a href="#" class="text-danger"><i class="bi bi-google"></i></a>
              </div>
            </div>
            <div class="row mb-4 mt-4 justify-content-center">
              <div class="col-1">
                <label for=""><i class="bi bi-envelope fs-5 text-body-secondary"></i></label>
              </div>
              <div class="col-11">
                <input type="text" class="form-control rounded-pill" placeholder="Username" name="username" id="username" autofocus required>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-1">
                <label for=""><i class="bi bi-lock fs-5 text-body-secondary"></i></label> 
              </div>
              <div class="col-11">
                <input type="password" placeholder="password" class="form-control rounded-pill" name="password" id="password" autofocus required>
              </div>
            </div>
            
            
            <div class="row mt-4 mb-4 text-center">
              <div class="col d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn mb-2 rounded-pill text-light" name="login" id="login"style="background-color: #593fbd;">Login</button>
                  </div>
               </div>
    
          <div class="text-center mt-4">
            <a class="small" href="http://localhost/Data-Fasilitas-Kampus/views/employee/registrasi.php">Buat Akun?</a>
          </div>
    </form>
      </div>
    </div>
  </div> 


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>




</body>
</html>