<?php
/**
 *  Arquivo para registrar os dados de um aluno no banco de dados.
 */

try
{    
        if(isset($_REQUEST['atualizar']))
        {
           
        include 'includes/conexao.php';
        $sql - "UPDATE alunos SET nome - ?, data_nascimento - ?, sexo -?,
                                  genero = ?, cpf = ?, cidade = ?, estado = ?,
                                  bairro = ?, rua = ?, cep = ?
                WHERE id - ?";

        $stmt - $conexao >prepare($sql);
        $stmt ->bindParam(1, $_REQUEST['nome']);
        $stmt ->bindParam(2, $_REQUEST['data_nascimento']);
        $stmt ->bindParam(3, $_REQUEST['sexo']);
        $stmt ->bindParam(3, $_REQUEST['genero']);
        $stmt ->bindParam(4, $_REQUEST['cpf']);
        $stmt ->bindParam(5, $_REQUEST['cidade']);
        $stmt ->bindParam(6, $_REQUEST['estado']);
        $stmt ->bindParam(7, $_REQUEST['bairro']);
        $stmt ->bindParam(8, $_REQUEST['rua']);
        $stmt ->bindParam(9, $_REQUEST['cep']);
        $stmt ->bindParam(10, $_REQUEST['id_alunoi']);
        $stmt ->execute();

    }

    if(isset($_REQUEST['excluir']))
    {
        $stmt - $conexao->prepare("DELETE FROM aluno WHERE id - ?");
        $stmt->bindParam(1,$_REQUEST['id aluno']);
        $stmt->execute();
        header("location: lista alunos.php");
    }

    $stmt - $conexao->prepare("SELECT * FROM aluno WHERE id - ?");
    $stmt->bindParam(1,$_REQUEST['id aluno']);
    $stmt->execute();
    $aluno = $stmt->fechObject();

}catch(Exception $e) {
    echo $e ->getMessage();
}   
?>
<link href="css/estilos.css" type="text/css" rel="stylesheet" />
<?php include_once 'includes/cabecalho.php' ?>
<div>
<fieldset>
    <legend>Cadastro de Aluno</legend>
       <form action="editar_alunos.php?atualizar=true">
           <label>Nome: 
           <input type="text" name="nome" required /> 
           </label>

           <label>Cidade:
            <input type="text" name="cidade" required value ="<?= $aluno->cidade ?>" />
           <label>

           <label>CEP:
            <input type="text" name="cpf" required value ="<?= $aluno->cep ?>" />
           <label>

           <label>Bairro
            <input type="text" name="bairro" required value ="<?= $aluno->bairro ?>" />
             </label>

           <label>Estado: 
           <input type="text" name="estado" required value ="<?= $aluno->estado ?>" />
            <label>

            <label>Rua: 
           <input type="text" name="rua" required value ="<?= $aluno->rua?>" />
            <label>

           <label>Data Nasc:
            <input type="text" name="data_nascimento" required value ="<?= $aluno->data_nascimento ?>" />
             <label>

          <a href="editar alunos.php?excluir -true&id-<?- $aluno->id ?>">Excluir</a>

           <button type="submit">Salvar</button>
        </form>
      </legend>
</div>  