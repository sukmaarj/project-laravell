<!DOCTYPE html>
<html>
<head>
	<title>Membuat Web Blog </title>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>	
	<style type="text/css"></style>
        <!-- membuat menu navigasi -->
    <nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <body>  
            <!-- membuat menu navigasi -->
           <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Film or Movies</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Genre</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Negara</a>
                </li>
                </ul>
              </ul>

            </div>
            <ul class="navbar-nav navbar-right">
                    <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#modal-login">Login</a></li>
        
                    <li class="nav-item"><button type="button" class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#modal-daftar">Daftar</button></li>
                </ul>
          </div>
        </nav> 
                      
		<div class="container">			
    <!-- membuat jumbotron -->
    <div class="jumbotron">
        <center>	
            <h2>Welcome to My Film or Movies Blog</h2>
            <p>Blog aman dan terpercaya</p><br/><br/>
			<img src="{{asset('assets/img/1.jpg')}}"style="width:400px;"><br>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Rekomendasi !</a></p>
        </center>

        
    </div>
    <!-- akhir jumbotron -->
       <!-- end slide gambar -->

        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card">
              <img src="{{asset('assets/img/4.jpg')}}"style="width:350px;"><br> 
              <div class="card-body">
                <h5 class="card-title">The Avengers</h5>
                <p class="card-text">Ketika musuh yang tak terduga muncul, mengancam keselamatan dan keamanan dunia, Nick Fury, direktur Badan Perdamaian Internasional, dikenal sebagai S.H.I.E.L.D. , membutuhkan tim untuk menyelamatkan dunia dari bencana. Usaha perekrutan pun dimulai Iron Man, Captain America, Hulk, Thor, Black Widow</p>
                <p><a href="theavengers.html" class="btn btn-primary" role="button">More</a></p>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="{{asset('assets/img/3.jpg')}}" style="width:400px;"><br> 
              <div class="card-body">
                <h5 class="card-title">Squid Game</h5>
                <p class="card-text">Ratusan pemain yang butuh uang menerima undangan aneh untuk bertanding dalam permainan anak-anak. Di permainan ini, hadiah menggiurkan menanti—dengan taruhan mematikan.</p>
                <p><a href="https://www.netflix.com/id/title/81040344" class="btn btn-primary" role="button">More</a></p>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="{{ asset('assets/img/2.jpg') }}" style="width:400px;"><br>
              <div class="card-body"> 
                <h5 class="card-title">Extraction</h5>
                <p class="card-text">A hardened mercenary's mission becomes a soul-searching race to survive when he's sent into Bangladesh to rescue a drug lord's kidnapped son.</p>
                <p><a href="https://www.netflix.com/id-en/title/80230399" class="btn btn-primary" role="button">Lihat</a></p>
          </div>
          </div>
         

          

</div>
<br/>
    
    </body>
    </html>