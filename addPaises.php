<?php
require_once 'init.php';
$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
if (empty($nome))
{
    echo "Volte e preencha todos os campos";
}
?>