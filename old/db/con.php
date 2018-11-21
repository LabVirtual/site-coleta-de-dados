<?php
	/* 
		-- TABELA DO EXEMPLO:
		
		CREATE TABLE `cadastro` (
		`ID` INT(11) NOT NULL AUTO_INCREMENT,
		`nome` VARCHAR(100) NOT NULL COLLATE 'utf8_general_ci',
		`arquivo` BLOB NULL,
		PRIMARY KEY (`ID`)
		)
		COLLATE='latin1_swedish_ci'
		ENGINE=InnoDB
		;
		
	*/	
	$conn = false;
	function conecta(&$conn){
		if($conn !== false) return;
		$servername = "0.0.0.0"; // Endereço do banco de dados
		$username = "root"; // usuario do banco de dados 
		$password = "12345678"; // senha do banco de dados
		$dbname = "dataset";
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "<p><span class='badge badge-success'>Conetado com sucesso!</span></p>"; 
	}
?>
<!doctype html>
<html lang="en">
	
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Font Awesome -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		
        <title>Teste</title>
		<style>
			.table_calendario_links{
			margin-bottom:0px !important;
			}
		</style>
	</head>
	
    <body>
        <div class="container">
            <div class="row">
				<div class="col-md-6">
					<form action="" method="post" enctype='multipart/form-data'>
						<div class="form-group">
							<label for="nome">Nome</label>
							<input type="text"  class="form-control" name="nome" id="nome">
						</div>
						<div class="form-group">
							<label for="arquivo">Arquivo</label>
							<input type="file" name="arquivo" id="arquivo">
							<p class="help-block">O arquivo é opcional</p>
						</div>
						<button type="submit" class="btn btn-default">Enviar</button>
					</form>
				</div>
				<div class="col-md-6">
					<?php 
						if(isset($_POST['nome'])){ // se o nome for postado
							conecta($conn);
							
							try {
								$arquivo = isset($_FILES['arquivo']) && $_FILES['arquivo']['error'] == 0 ? base64_encode(file_get_contents($_FILES['arquivo']['tmp_name'])) : NULL;
								$nome = $_POST['nome'];
								$sql = "INSERT INTO cadastro (nome, arquivo) VALUES (?, ?)";
								$sth =$conn->prepare($sql);
								$sth->execute(array($nome, $arquivo)); // executa o SQL
								echo "<p><span class='badge badge-success'>Registro adicionado com sucesso!</span></p>";
								}catch(PDOException $e) {
								echo "<p><span class='badge badge-danger'>Erro ao conectar: {$e->getMessage()}</span></p>"; 
							}
						}
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Nome</th>
								<th>Arquivo</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								conecta($conn);
								$sql = "SELECT id,nome,arquivo FROM cadastro";
								$result = $conn->query($sql);
								#echo "<pre>";print_r($result);exit;
								
									foreach($conn->query($sql) as $row) {
									?>
									<tr>
										<td><?php echo $row["id"] ?></td>
										<td><?php echo $row["nome"] ?></td>
										<td><?php echo $row["arquivo"] ? "Tem arquivo!" : "Não tem arquivo" ?></td>
									</tr>
									<?php 
									}
								
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
	
</html>
