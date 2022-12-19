<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="q1.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php

        //Q1
		$resposta = $_POST['questao1'];
		$acertos = 0;
		$erros = 0;

		if ($resposta == "q1"){
			$acertos=$acertos+1;
		

		}
		else{
			$erros=$erros+1;
			
		}

		 //Q2

		 if ($_POST['questao2'] == "q3"){
			 $acertos=$acertos+1;
	    	

		 }
		 else{
			 $erros=$erros+1;
		 	
		}

		//Q3

		if ($_POST['questao3'] == "q4"){
			$acertos=$acertos+1;
			
		}
		else{
			$erros=$erros+1;
			
		}



		//Q4
		if ($_POST['questao4'] == "q1"){
			$acertos=$acertos+1;
			
	
		}
		else{
			$erros=$erros+1;
			
		}
	


		//Q5
		if ($_POST['questao5'] == "q3"){
			$acertos=$acertos+1;
			
	
		}
		else{
			$erros=$erros+1;
			
		}
	
		
		//Q6
		if ($_POST['questao6'] == "q1"){
			$acertos=$acertos+1;
			
	
		}
		else{
			$erros=$erros+1;
			
		}

		//Q7
		if ($_POST['questao7'] == "q4"){
			$acertos=$acertos+1;
			
	
		}
		else{
			$erros=$erros+1;
			
		}

		//Q8

		if ($_POST['questao8'] == "q1"){
			$acertos=$acertos+1;
			
	
		}
		else{
			$erros=$erros+1;
			
		}

		//Q9
		if ($_POST['questao9'] == "q4"){
			$acertos=$acertos+1;
			
	
		}
		else{
			$erros=$erros+1;
			
		}
		
		//Q10
		if ($_POST['questao10'] == "q3"){
			$acertos=$acertos+1;
			
	
		}
		else{
			$erros=$erros+1;
			
		}

		//Q11
		
		if ($_POST['questao11'] == "q1"){
			$acertos=$acertos+1;
			
		}
		else{
			$erros=$erros+1;
			
		}

		//Q12
		if ($_POST['questao12'] == "q3"){
			$acertos=$acertos+1;
			
	
		}
		else{
			$erros=$erros+1;
			
		}
		
		echo "<div class='teste1' style='text-align:center;backdrop-filter: blur(10px);margin-top: 300px;background: rgba(255,255,255,0.1);width: 550px;height: 235px;margin-left: 475px;border-radius: 50px;'>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "Sua Pontuação foi de: </br> ";
		echo "<br>";
		echo "Acertos: $acertos </br>";
		echo "Erros: $erros";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<div>";


	?>
	<br>
	<br>
	<br>

	<center>
        <a href="questoes.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Tente Novamente</a>
    </center>

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>