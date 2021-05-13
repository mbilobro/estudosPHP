<?php
//Define o host da base de dados
define('DB_HOST'        , "localhost");

//Nome do usuário para acessar a base de dados, sa é o nome padrão no SQL Server
//Caso um não tenha sido criado
define('DB_USER'        , "sa");

//Senha de acesso a base de dados
define('DB_PASSWORD'    , "devmedia");

//Nome da base de dados
define('DB_NAME'        , "devmedia");

//Nome do driver de conexão, no caso do SQL Server
define('DB_DRIVER'      , "sqlsrv");

require_once "Conexao.php";

try{

    $Conexao    = Conexao::getConnection();
    $query      = $Conexao->query("SELECT nome, preco, quantidade FROM produto");
    $produtos   = $query->fetchAll();

}catch(Exception $e){
    echo $e->getMessage();
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Conexão PDO SQL Server</title>
</head>
<body>
<form>
    <table border=1>
        <tr>
            <td>Nome</td>
            <td>Preço</td>
            <td>Quantidade</td>
        </tr>
        <?php
        foreach($produtos as $produto) {
            ?>
            <tr>
                <td><?php echo $produto['nome']; ?></td>
                <td>R$ <?php echo $produto['preco']; ?></td>
                <td><?php echo $produto['quantidade']; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</form>
</body>
</html>