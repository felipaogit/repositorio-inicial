<?php

function calcula_imc(float $peso, float $altura): float
{
	return $peso / ($altura * $altura);
}

//echo calcula_imc(75, 1.85);

function km2milhas($km)
{
	return $km * 0.6;
}

//echo km2milhas(100);

// static $total retém o valor entre uma chamada e outra
function percorre($km)
{
	static $total;
	$total += $km;
	print "percorreu mais $km de $total <br>";
}

//percorre(100);
//percorre(100);
//percorre(100);


// exemplo de funcao com passagem de parâmetro
// por referência (&), onde a variável utilizada
// para chamar a função tem o seu valor alterado
function incrementa(&$variavel, $valor)
{
	$variavel += $valor;
}

$teste = 100;
incrementa($teste, 20);

//var_dump($teste);
$lista = ['a', 'c', 'b'];
sort($lista);
//var_dump($lista);

// função anônima (como variável)
$remove_acento = function($str) {
	return str_replace( ['á', 'é', 'í', 'ó', 'ú'],
						['a', 'e', 'i', 'o', 'u'], 
						$str);
};

// a função pode ser passada como parâmetro
function teste($palavra, $funcao) 
{
	$palavra = $funcao($palavra); // chama a função anônima
	return strtoupper($palavra);
}

var_dump(teste('blábléblíblóblú', $remove_acento));

