<?php
include_once "../control/cadastrogeral.php";
    $cadastro = new CadastroGeral;
    $cadastro -> Professor(' Anselmo ', ' Rua: 12-123 ', '(00) 99999 9999', 'Professor Técnico', '42 anos', 'anselmoprof@gmail.com','123.456.789.00');
    $cadastro -> Aluno(' Lambih pawn ', ' Rua: Aquino Rego da Silva, 146 ', '(00) 99999 9999', 'Estudante', '17 anos', 'lambipawn123@gmail.com','123.456.789.00');
    ?>