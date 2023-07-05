<?php 
require  '../../models/functions.php';

?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
        <title>Data Fasilitas Kampus</title>
    </head>
    <body>

<nav class="navbar navbar-dark fixed-top"style="background-color:#4B0082">
  <div class="container-fluid">
       <a class="navbar-brand"><img src="http://localhost/Data-Fasilitas-Kampus/Img/Univ.png" width="50">
         <img src="http://localhost/Data-Fasilitas-Kampus/Img/Teknik.png" width="50"></a>
    <button class="navbar-toggler text-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start text-light" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel"style="background-color:#4B0082">
    <div class="offcanvas-header">

                 <span class="border-bottom"> 
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="http://localhost/Data-Fasilitas-Kampus/Img/Admin.png" width="50">
     <p>Selamat datang...</p>
     
    </h5> </span>

        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link text-warning" aria-current="page" href="#"><i class="bi bi-house-door-fill"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" aria-current="page" href="#"><i class="bi bi-clipboard-data-fill"></i> Data Fasilitas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning" href="http://localhost/Data-Fasilitas-Kampus/views/employee/login.php"><i class="bi bi-arrow-left-circle-fill"></i> Logout</a>
          </li>

        </ul>

      </div>
    </div>
  </div>
</nav>
					<div class="row mt-5">
						<div class="col-md-12 mt-4">

										<center>
											      <h3 class="container text-center mt-2">Data Fasilitas Kampus</h3>
											<img src="http://localhost/Data-Fasilitas-Kampus/Img/Univ.png" width="100">
											<br>
											<b>Universitas Galuh Ciamis</b>
										</center>
									</div>
									<div class="card-category">
										<center>
Jalan R. E. Martadinata nomor 150 Ciamis 46274, Jawa Barat
	<br>Telp.+085624440728
										</center>

						</div>
                        </div>

       <div class="container mt-3">

            <div id="message">
            </div>

            <span id="message"></span>
            <div class="card shadow-lg">
                <div class="card-header" style="background-color: #4B0082;">
                                  
                    <div class="row">
                        <div class="col col-sm-9 text-light">Daftar Fasilitas</div>
                        <div class="col col-sm-3">
                            <button type="button" id="add_data" class="btn btn-primary btn-sm float-end"><i class="bi bi-plus-circle-fill"></i> Tambah</button>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="sample_data">
                            <thead>
                                <tr>
                                  
                                    <th>Nama Fasilitas</th>
                                    <th>Lokasi</th>
                                    <th>Deskripsi</th>
                                    <th>Kapasitas</th>
                                    <th>Jumlah Alat</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" tabindex="-1" id="action_modal">
            <div class="modal-dialog ">
                <div class="modal-content ">
                    <form method="post" id="sample_form">
                        <div class="modal-header " style="background-color: #4B0082;">
                            <h5 class="modal-title text-light" id="dynamic_modal_title"></h5>
                            <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Nama Tempat</label>
                                <input type="text" name="nama" id="nama" class="form-control"required >
                                <span id="nama_error" class="text-danger"></span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Lokasi</label>
                                <input type="text " name="lokasi" id="lokasi" class="form-control" required>
                                <span id="lokasi_error" class="text-danger"></span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                    <input type="text" name="deskripsi" id="deskripsi" class="form-control" required>
                                    <span id="deskripsi_error" class="text-danger"></span>
                                </div>
                            <div class="mb-3">
                                <label class="form-label">Kapasitas</label>
                                <input type="text" name="kapasitas" id="kapasitas" class="form-control" required>
                                <span id="kapasitas_error" class="text-danger"></span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah Alat</label>
                                <input type="number" name="jumlah_alat" id="jumlah_alat" class="form-control" required>
                                <span id="jumlah_alat_error" class="text-danger"></span>
                            </div>
                                                        <div class="mb-3">
                                <label class="form-label">Created</label>
                                <input type="date" name="created" id="created" class="form-control" required>
                                <span id="created_error" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id" id="id" />
                            <input type="hidden" name="action" id="action" value="Add" />
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="action_button">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <script>
        $(document).ready(function() {
            showAll();
            $('#add_data').click(function(){

                $('#dynamic_modal_title').text('Add Data');

                $('#sample_form')[0].reset();

                $('#action').val('Add');

                $('#action_button').text('Add');

                $('.text-danger').text('');

                $('#action_modal').modal('show');

            });

            $('#sample_form').on('submit', function(event){

                event.preventDefault();
                
                if($('#action').val() == "Add"){
                    var formData = {
                        'nama': $('#nama').val(),
                        'lokasi': $('#lokasi').val(),
                        'deskripsi': $('#deskripsi').val(),
                        'kapasitas': $('#kapasitas').val(),
                        'jumlah_alat': $('#jumlah_alat').val(), 
                         'created': $('#created').val()
                    }
                    $.ajax({
                        url:"http://localhost/Data-Fasilitas-Kampus/api/employee/create.php",
                        method:"POST",
                        data: JSON.stringify(formData),
                        success:function(data){
                            $('#action_button').attr('disabled', false);
                            $('#message').html('<div class="alert alert-success">'+data.message+'</div>');
                            $('#action_modal').modal('hide');
                            $('#sample_data').DataTable().destroy();
                            showAll();
                        },
                        error: function(err) {
                            console.log(err);
                    }
                });
                }else if($('#action').val() == "Update"){
                    var formData = {
                        'id': $('#id').val(),
                        'nama': $('#nama').val(),
                        'lokasi': $('#lokasi').val(),
                        'deskripsi': $('#deskripsi').val(),
                        'kapasitas': $('#kapasitas').val(),
                        'jumlah_alat': $('#jumlah_alat').val(), 
                        'created': $('#created').val()
                    }
                    $.ajax({
                        url:"http://localhost/Data-Fasilitas-Kampus/api/employee/update.php",
                        method:"PUT",
                        data: JSON.stringify(formData),
                        success:function(data){
                            $('#action_button').attr('disabled', false);
                            $('#message').html('<div class="alert alert-success">'+data.message+'</div>');
                            $('#action_modal').modal('hide');
                            $('#sample_data').DataTable().destroy();
                            showAll();
                        },
                        error: function(err) {
                            console.log(err);
                        }
                    });
                }
                
            });
        });

        function showAll() {
            $.ajax({
                    type: "GET",
                    contentType: "application/json",
                    url: "http://localhost/Data-Fasilitas-Kampus/api/employee/read.php",
                    success: function(response) { 
                        // console.log(response);
                        var json = response.body;
                        
                        var dataSet=[];
                        for (var i = 0; i < json.length; i++) {
                            var sub_array = {
                                'nama' : json[i].nama,
                                'lokasi' : json[i].lokasi,
                                'deskripsi' : json[i].deskripsi,
                                'kapasitas' : json[i].kapasitas,
                                'jumlah_alat' : json[i].jumlah_alat,
                                'created' : json[i].created,        
                                'action' : '<button onclick="showOne('+json[i].id+')" class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i> Edit </button>'+
                                            '<button onclick="deleteOne('+json[i].id+')" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</button>'  
                            };
                            dataSet.push(sub_array);
                        }
                        $('#sample_data').DataTable({
                            data: dataSet,
                            columns : [
                                { data : "nama" },
                                { data : "lokasi" },
                                { data : "deskripsi" },
                                { data : "kapasitas" },
                                { data : "jumlah_alat" },
                                { data : "created" },       
                                { data : "action" }
                            ]
                        });
                    },
                    error: function(err) {
                        console.log(err);
                    }
            });
        } 
        function showOne(id) {
            $('#dynamic_modal_title').text('Edit Data');

            $('#sample_form')[0].reset();

            $('#action').val('Update');

            $('#action_button').text('Update');

            $('.text-danger').text('');

            $('#action_modal').modal('show');

            $.ajax({
                    type: "GET",
                    contentType: "application/json",
                    url: "http://localhost/Data-Fasilitas-Kampus/api/employee/read.php?id="+id,
                    success: function(response) { 
                        $('#id').val(response.id);
                        $('#nama').val(response.nama);
                        $('#lokasi').val(response.lokasi);
                        $('#deskripsi').val(response.deskripsi);
                        $('#kapasitas').val(response.kapasitas);
                        $('#jumlah_alat').val
                        (response.jumlah_alat);
                        $('#created').val(response.created);
                    },
                    error: function(err) {
                        console.log(err);
                    }
            });


        }
        function deleteOne(id) {
            alert('Yakin untuk hapus data ?');
            $.ajax({
                url:"http://localhost/Data-Fasilitas-Kampus/api/employee/delete.php",
                method:"DELETE",
                data: JSON.stringify({"id" : id}),
                success:function(data){
                    $('#action_button').attr('disabled', false);
                    $('#message').html('<div class="alert alert-success">'+data+'</div>');
                    $('#action_modal').modal('hide');
                    $('#sample_data').DataTable().destroy();
                    showAll();
                },
                error: function(err) {
                    console.log(err);
                }
            });
        }
    </script>
      <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>