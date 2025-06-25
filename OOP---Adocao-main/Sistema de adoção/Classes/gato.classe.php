<?php
include_once './Classes/animal.classe.php';
class gato extends animal{
    public $nome;
    public $pelagem;
    public $castrado;
    public $independente;
    public $vacinado;
    public $curioso;
    public $adoraColo;
    public $usaCaixaAreia;

    public function exibirGato():string{
        return "O {$this->nome} é {$this->pelagem}; É castrado? {$this->castrado}; É independente? {$this->independente}; É vacinado? {$this->vacinado}; É curioso? {$this->curioso}; Adora colo? {$this->adoraColo}; Usa caixa de areia? {$this->usaCaixaAreia}; Status de adoção: {$this->status}.";
    }

    public function castrar():string{
        return "O {$this->nome} está castrado.";
    }

    public function verificarPelagem():string{
        return "Sua pelagem é {$this->pelagem}.";
    }

    public function atualizarIndependencia($independente):string{
        $this->$independente = $independente;
        return "Seu novo nível de independência é {$this->independente}";
    }

    public function vacinar():string{
        return "O {$this->nome} está vacinado.";
    }

    public function resumoGato():string{
        return "Seu nome é {$this->nome}, sua pelagem é {$this->pelagem} e seu status é {$this->status}.";
    }
    
    public function ensinarCaixaAreia():string{
        return "Agora o {$this->nome} {$this->usaCaixaAreia}.";
    }
    
    public function verificarContato():string{
        return "O {$this->nome} {$this->adoraColo}";
    }    
}