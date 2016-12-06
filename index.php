<!DOCTYPE html>
<html lang="en">
<head>
  <title>Criptograpy base64 </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
      <div class="row col-xs-12">
      <br/>
       <div class="panel panel-primary" style="border-radius: 0px">
          <div class="panel-heading" style="border-radius: 0px">
          	<h2 class="panel-title text-center"> - - - Buat Encryption - - - </h2>
          </div>
          <div class="panel-body">
          <form action="" method="POST"> 
           	<div class="row col-sm-5"> 
              <div class="form-group">
			    <label >Masukan Code Encripsi / Code Decripsi </label>
			    <textarea placeholder="Masukan Code" id="val_enc" class="form-control" rows="15"></textarea>
			  </div>
           	</div>
           	<div class="col-sm-2">
           	<br>
           		<button id="p_enc" type="button" class="btn btn-danger  btn-block">Encripsi &nbsp; >> </button>         	
           		<button id="p_dec" type="button" class="btn btn-success btn-block">Decripsi  &nbsp; >> </button>
           		<button id="p_cls" type="reset" class="btn btn-primary btn-block">Bersihkan </button>
           	<br>
           	</div>          	

           	<div class="col-sm-offset-7"> 
              <div class="form-group">
			    <label >Hasil</label>
			    <textarea placeholder="Hasil Code" class="form-control" id="result_code" rows="15"></textarea>
			  </div>
           	</div>
           </form>
           	<div class="col-xs-12 "><hr/><p class="text-center"> POWERED BY : TOOR</p></div>
          </div>
        </div>        
      </div>
</div>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
