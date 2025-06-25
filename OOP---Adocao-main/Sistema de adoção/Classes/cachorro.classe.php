<?php
include_once './Classes/animal.classe.php';
class cachorro extends animal{
    public $nome;
    public $raca;
    public $porte;
    public $nivelEnergia;
    public $vacinado;
    public $vermifugado;
    public $sociavel;
    public $adestrado;

    public function exibirCachorro():string{
        return "O {$this->nome} é um {$this->raca}. Porte: {$this->porte}; Nível de energia: {$this->nivelEnergia}; É vacinado? {$this->vacinado}; É vermifugado? {$this->vermifugado}; Sociavel? {$this->sociavel}; Adestrado? {$this->adestrado}; Status de adoção: {$this->status}.";
    }

    public function vacinar():string{
        return "O {$this->nome} foi vacinado.";
    }

    public function verificarAdestramento():string{
        return "{$this->adestrado}.";
    }

    public function atualizarNivelEnergia():string{
        return "O novo nível de energia é {$this->nivelEnergia}.";
    }

    public function indicarPorte():string{
        return "O seu porte é {$this->porte}.";
    }

    public function socializar():string{
        return "O {$this->nome} é {$this->sociavel}";
    }

    public function indicarAdestramento():string{
        return "O {$this->nome} é {$this->adestrado}";
    }

    public function resumoCachorro():string{
        return "{$this->nome} {$this->raca} {$this->porte}";
    }
}