<?php 
if (!empty($_POST['codigo'])) {
    $codigo = $_POST['codigo'];

    if ($codigo == 'debinha') {
        header("Location: page2.php");
    } else {
        echo 'Acesso negado!!!';
    }
}
?>

<h1>Página 1</h1>

<form method="POST" >
    Digite "debinha" para passar!<br/><br/>

    <input type="text" name="codigo" /><br/><br/>

    <input type="submit" value="Entrar" />


</form>

<!--esse codigo se for escrito o html e depois escrever o php dar erro no redirecionamneto do header.-->