<?php
session_start();

if($_SESSION['logado'] == false){
    header("Location: login");
}else{}
?>
<?php include("partials/header.php")?>


<table class="table table-striped">
            <thead>
                <tr>
                    <th>NOME</th>
                    <th>CPF</th>
                    <th>SENHA</th>
                    <th>LATITUDE</th>
                    <th>LONGITUDE</th>
                    <th>TELEFONE</th>
                    <th>CEP</th>
                    <th>AÇÕES</th>
                </tr>
            </thead>
            <tbody>

        <?php
        

            /* DELETE */
            if(isset($_GET['delete'])){
                $id = $_GET['delete'];
                $pdo->exec("DELETE FROM clientes WHERE id=$id");
            }
            /* $pdo = new PDO('mysql:host=localhost;dbname=u696959633_caixatem','u696959633_root','Caixatem1*'); */
            $sql = $pdo->prepare("SELECT * FROM clientes");
            $sql->execute();
            $fetchClientes = $sql->fetchAll();
            foreach($fetchClientes as $cliente):
        ?>

        <tr>
        <td><?=$cliente['nome']?></td>
        <td><?=$cliente['cpf']?></td>
        <td><?=$cliente['senha']?></td>
        <td><?=$cliente['lat']?></td>
        <td><?=$cliente['long']?></td>
        <td><?=$cliente['tel']?></td>
        <td><?=$cliente['cep']?></td>        
        <td class="acao">
            <a class="btn-apagar btn-acao red" href="?delete=<?=$cliente['id']?>"> <i class="fa-solid fa-trash"></i> </a>
        </td>
        </tr>


        <?php endforeach ?>

            </tbody>
</table>




<?php include("partials/footer.php")?>
