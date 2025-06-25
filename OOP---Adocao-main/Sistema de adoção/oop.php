<?php
include_once './Classes/adotante.classe.php';
include_once './Classes/animal.classe.php';
include_once './Classes/cachorro.classe.php';
include_once './Classes/gato.classe.php';

$adotante = new adotante();
$adotante->nome = "Bernardo Nassr Conte";
$adotante->idade = 17;
$adotante->telefone = 51991839410;
$adotante->email = "bernardonassrconte@gmail.com";
$adotante->endereco = "Av Porto Alegre Nº666, Porto Alegre ";
$adotante->temOutrosAnimais = "Sim";
$adotante->experienciaComPets = "Sim";
$adotante->animalAdotado = "Gato";


$animal = new animal();
$animal->nome = "Miau";
$animal->especie = "Mamífero";
$animal->idade = "1 ano";
$animal->sexo = "Masculino";
$animal->peso = "5kg";
$animal->cor = "Laranja";
$animal->status = "Para adoção";
$animal->novoStatus = "Adotado";
$animal->chipado = "Não chipado";

$cachorro = new cachorro();
$cachorro->nome = "Auau";
$cachorro->raca = "Vira-lata";
$cachorro->porte = "Médio";
$cachorro->nivelEnergia = "Alto";
$cachorro->vacinado = "Vacinado";
$cachorro->vermifugado = "Vermifugado";
$cachorro->sociavel = "Pouco Sociável";
$cachorro->adestrado = "Adestrado";
$cachorro->status = "Para adoção";

$gato = new gato();
$gato->nome = "Miau";
$gato->pelagem = "Laranja";
$gato->castrado = "Sim";
$gato->independente = "Muito independente";
$gato->vacinado = "Vacinado";
$gato->curioso = "Muito curioso";
$gato->adoraColo = "Não gosta de colo";
$gato->usaCaixaAreia = "Usa caixa de areia";
$gato->status = "Para adoção";

echo "<h2>Informações sobre o gato</h2>";
echo $gato->exibirGato();

echo "<h2>Informações sobre o cachorro</h2>";
echo $cachorro->exibirCachorro();

echo "<h2>Informações sobre o adotante</h2>";
echo $adotante->exibirAdotante();
?>