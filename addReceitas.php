<?php
require_once 'init.php';
//pega os dados do forms
$id = isset($_POST['selectTipo']) ? $_POST['selectTipo'] : null;
$descReceita = isset($_POST['descricao']) ? $_POST['descricao'] : null;
$paisId = isset($_POST['selectTipo']) ? $_POST['selectTipo'] : null;

//validação
if(empty($descReceita) || empty($id) || empty($status))
{
    echo "Volte e preencha todos os campos";
    exit;
}
//insere no banco
$PDO = db_connect();
$sql = "INSERT INTO Receitas(descReceita, id)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':descricao', $descricao);
$tmt->bindParam(':id', $id);

if ($stmt->execute())
{
    header('LOcation: msgSucesso.html');
}
else 
{

    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}

?>