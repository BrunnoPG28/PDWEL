<?php
echo("<body>");
echo nl2br('<p style= "text-align:center; color:red"> <strong><u>Exs Semana 6</strong></u></p>
<strong>1) Usando os códigos das aulas anteriores você deve implementar o seguinte:</strong>

a) uma função para calcular o fatorial usando while

b) uma função para retorna se um numero é primo ou composto usando do...while

c) uma função para retornar se um numero é perfeito. Observação um número natural é perfeito se e somente se a soma de seus divisores é o próprio número.
<hr>
<strong>2)  Dadas as funções do exercício 1 faça o seguinte: </strong>

a) armazene em um vetor os primeiros n fatoriais dado que n é o parâmetro da função fatorial. Exiba no cliente os elementos do vetor.

b) armazene em um vetor os primeiros n primo dado. Exiba no cliente os elementos do vetor.

c) armazene em um vetor os primeiros n perfeitos encontrados. Exiba no cliente os elementos do vetor
<hr>
<br><br>
<strong>RESPOSTAS: </strong>');

function fatorial($numero)
{
	$i = $numero - 1;
	$j = $numero;
	while($i >= 2){
		$j = $j * $i;
		$i = $i - 1;
	}
	return $j;
}


function defPrimo($numero)
{
	$result = 0;
	$i = 2;
	do{
		if($numero % $i == 0){
			$result++;
			break;
		}
		$i = $i + 1;
	}
	while($i <= $numero / 2);
	
	if($result == 0){
		return true;
	}
	else{
		return false;
	}
}

function numPerfeito($numero){
	if($numero <= 1){
		return false;
	}
	$divisores = array();
	$i = $numero - 1;
	do{
		if($numero % $i == 0){
			$divisores[] = $i;
		}
		$i = $i - 1;
	}
	while($i >= 1);
	$somadivisores = 0;
	$size = count($divisores);
	$i = 0;
	while($i < $size){
		$somadivisores = $somadivisores + $divisores[$i];
		$i = $i + 1;
	}
	
	if($somadivisores == $numero){
		return true;
	}
	else{
		return false;
	}
}

function vetor_fatoriais($numero){
	$i = 1;
	$fatoriais = array();
	while($i <= $numero){
		$fatoriais[] = fatorial($i);
		$i = $i + 1;
	}
	$i = 0;
	$size = count($fatoriais);
    echo('<br><br>');
    echo('EXERCÍCIO 2-a');
	while($i < $size){
		$j = $i + 1;
		echo "<p> $j! = $fatoriais[$i]</p>";
		$i = $i + 1;
	}
}
vetor_fatoriais(10);

function vetor_primos($numero){
	$i = 1;
	$primos = array();
	while($i <= $numero){
		if(defPrimo($i)){
			$primos[] = $i;
		}
		$i = $i + 1;
	}
	$i = 0;
	$size = count($primos);
    echo('<br><hr>');
    echo('EXERCÍCIO 2-b');
	echo "<p> Números primos de 1 a $numero:</p>";
	while($i < $size){
		echo $primos[$i];
		echo " ";
		$i = $i + 1;
	}
}

vetor_primos(500);

function vetor_nums_perfeitos($numero){
	$i = 1;
	$perfeitos = array();
	while($i <= $numero){
		if(numPerfeito($i)){
			$perfeitos[] = $i;
		}
		$i = $i + 1;
	}
	$i = 0;
	$size = count($perfeitos);
    echo('<br><hr>');
    echo('EXERCÍCIO 2-c');
	echo "<p> Números perfeitos de 1 a $numero:</p>";
	while($i < $size){
		echo $perfeitos[$i];
		echo " ";
		$i = $i + 1;
	}
}

vetor_nums_perfeitos(10000);
echo("</body>")
?>