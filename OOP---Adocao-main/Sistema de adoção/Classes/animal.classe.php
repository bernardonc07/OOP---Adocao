<?php

class animal{
    public $nome;
    public $especie;
    public $idade;
    public $sexo;
    public $peso;
    public $cor;
    public $status;
    public $novoStatus;
    public $chipado;

    public function exibirFicha():string{
        return "O animal se chama {$this->nome}, ele é da espécie {$this->especie}, ele tem {$this->idade} anos, é do sexo {$this->sexo} e é de cor {$this->cor}.";
    }

    public function atualizarPeso($peso):string{
        $this->peso = $peso;
        return "O peso atualizado é {$this->peso}.";
    }

    public function alterarStatus($novoStatus):string{
        $this->$status = $novoStatus;
        return "Seu novo status é {$this->status}.";
    }

    public function verificarIdade():string{
        return "Sua idade é {$this->idade}.";
    }

    public function marcarComoChipado():string{
        return "O {$this->nome} está chipado.";
    }

    public function desmarcarChipado():string{
        return "O {$this->nome} não está chipado.";
    }

    public function resumoAnimal():string{
        return "Seu nome é {$this->nome}, ele é da espécie {$this->especie} e {$this->status}.";
    }

    public function retornarSexo():string{
        return "Ele é do sexo {$this->sexo}.";
    }


}
