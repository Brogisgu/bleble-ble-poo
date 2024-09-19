<?php
    class CadastroGeral{
        public $nome;
        public $endereço;
        public $fone;
        public $tipo;
        public $idade;
        public $email;
        public $cpf;
    
        function Professor($no,$en,$te,$ti,$id,$em,$cpf){
            echo "<h1> Dados do professor </h1>";
            echo "Prof: " . $this -> nome = $no . "<br>";
            echo "Endereço: " . $this -> endereço = $en . "<br>";
            echo "Telefone: " . $this -> fone = $te . "<br>";
            echo "Tipo: " . $this -> tipo = $ti . "<br>";
            echo "Idade: " . $this -> idade = $id . "<br>";
            echo "Email: " . $this -> email = $em . "<br>";
            echo "CPF: " . $this -> cpf = $cpf . "<br>";
        }

        function Aluno($no,$en,$te,$ti,$id,$em,$cpf){
            echo "<h1> Dados do aluno </h1>";
            echo "Aluno: " . $this -> nome = $no . "<br>";
            echo "Endereço: " . $this -> endereço = $en . "<br>";
            echo "Telefone: " . $this -> fone = $te . "<br>";
            echo "Tipo: " . $this -> tipo = $ti . "<br>";
            echo "Idade: " . $this -> idade = $id . "<br>";
            echo "Email: " . $this -> email = $em . "<br>";
            echo "CPF: " . $this -> cpf = $cpf . "<br>";
    }
}
?>