<?php
class adotante{
    public $nome; 
    public $idade;
    public $telefone;
    public $email;
    public $endereco;
    public $temOutrosAnimais;
    public $experienciaComPets;
    public $animalAdotado;

    public function exibirAdotante():string{
        return "O nome do adotante {$this->nome}, ele tem {$this->idade}. Seu número de contato é {$this->telefone} e seu email é {$this->email}. Seu endereço é {$this->endereco}.";
    }

    public function adotarAnimal():string{
        return "O {$this->animalAdotado} foi adotado.";
    } 

    public function verificarIdade():string{
        return "Sua idade é {$this->idade}.";
    }

    public function temExperiencia():string{
        return "{$this->experienciaComPets}.";
    }

    public function listarContato():string{
        return "Seu telefone é {$this->telefone} e seu email é {$this->email}.";
    }

    public function verificarOutrosAnimais():string{
        return "{$this->temOutrosAnimais}";
    }

    public function cancelarAdocao():string{
        return "A adoção foi cancelada";
    }

    public function resumoAdotante():string{
        return "O nome do adotante é {$this->nome} e seu animal é {$this->animalAdotado}";
    }

}