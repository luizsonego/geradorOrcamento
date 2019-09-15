<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
		<script
			  src="https://code.jquery.com/jquery-1.12.4.min.js"
			  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
			  crossorigin="anonymous"></script>
    <!--<script src="jquery.mask.js"></script>-->
    <title>Cadastro Orçamento</title>
  </head>
  <body>

  	<hr>

  	<div class="container">
  		
  		<form action="orcamento.php" method="post" name="fomrPdf" enctype="multipart/form-data">
				
	  		<div class="row">
	  			<div class="col-md-12">
					<div class="form-group">
		  				<label>Cliente</label>
		  				<input class="form-control" type="text" name="cliente"  required>
		  			</div>
		  		</div>
	  		</div>

	  		<div class="row">
	  			<div class="col-md-12">
					<div class="form-group">
		  				<label>Serviço</label>
		  				<textarea class="form-control" cols="" rows="5" name="servico"  required></textarea>
		  			</div>
		  		</div>
	  		</div>

	  		<div class="row">
	  			<div class="col-md-12">
					<div class="form-group">
		  				<label>valor</label>
		  				<input class="form-control money" type="text" name="valor" required>
		  			</div>
		  		</div>
	  		</div>

	  		<div class="row">
	  			<div class="form-group">
		  			<div class="col-md-12">
						    <input type="file" class="" id="validatedCustomFile" name="file1"  accept="image/png, image/jpeg" onchange="">
								<div class="custom-file">
						    <!-- <input type="file" class="custom-file-input" id="validatedCustomFile" name="file1"  accept="image/png, image/jpeg" onchange="input.value"> -->
						    <!-- <label class="custom-file-label" for="validatedCustomFile">Mandar Foto...</label> -->
						    <!-- <div class="invalid-feedback">Imagem 1</div> -->
					  	</div>
			  		</div>
		  		</div>
	  		</div>
	  		<div class="row">
	  			<div class="form-group">
		  			<div class="col-md-12">
						    <input type="file" class="" id="validatedCustomFile" name="file2" accept="image/png, image/jpeg">
						<div class="custom-file">
						    <!-- <input type="file" class="custom-file-input" id="validatedCustomFile" name="file2" accept="image/png, image/jpeg"> -->
						    <!-- <label class="custom-file-label" for="validatedCustomFile">Mandar Foto...</label> -->
						    <!-- <div class="invalid-feedback">Imagem 2</div> -->
					  	</div>
			  		</div>
		  		</div>
	  		</div>
	  		<div class="row">
	  			<div class="form-group">
		  			<div class="col-md-12">
						    <input type="file" class="" id="validatedCustomFile" name="file3" accept="image/png, image/jpeg">
						<div class="custom-file">
						    <!-- <input type="file" class="custom-file-input" id="validatedCustomFile" name="file3" accept="image/png, image/jpeg"> -->
						    <!-- <label class="custom-file-label" for="validatedCustomFile">Mandar Foto...</label> -->
						    <!-- <div class="invalid-feedback">Imagem 3</div> -->
					  	</div>
			  		</div>
		  		</div>
	  		</div>

	  		<div class="row">
				<div class="form-group">
		  			<div class="col-md-12">
		  				<input type="submit" class="btn btn-lg btn-success text-center" name="gerarPdf" value="Gerar PDF ">
		  			</div>
		  		</div>
	  		</div>


  		</form>

  	</div>
	<hr>


	<script src="js/jQuery-Mask-Plugin/dist/jquery.mask.js"></script>
<script>
 $('.money').mask("#.##0,00", {reverse: true});
</script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>