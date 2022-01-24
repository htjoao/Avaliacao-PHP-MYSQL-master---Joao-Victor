<?php include("loja/config.php");

$consultaVrm = "SELECT produtos.nome, produtos.cor, preços.preco FROM produtos 
JOIN preços ON produtos.idprod = preços.idprecos WHERE cor LIKE '%vermelha%'";
$conVrl = $conexao -> query($consultaVrm) or die ($conexao -> error);

$consultaAzl = "SELECT produtos.nome, produtos.cor, preços.preco FROM produtos 
JOIN preços ON produtos.idprod = preços.idprecos WHERE cor LIKE '%azul%'";
$conAzl = $conexao -> query($consultaAzl) or die ($conexao -> error);

$consultaAml = "SELECT produtos.nome, produtos.cor, preços.preco FROM produtos 
JOIN preços ON produtos.idprod = preços.idprecos WHERE cor LIKE '%amarela%'";;
$conAml = $conexao -> query($consultaAml) or die ($conexao -> error);

?>

<!DOCTYPE html>
<!--PHP & HTML

1)	Crie uma página com dois campos PRODUTOS, PREÇOS, COR.
2)	Crie botões de INSERÇÃO, ATUALIZAÇÃO e de EXCLUSÃO.
3)	Monte uma tabela (HTML) para Listar os Produtos.
4)	Bônus: Crie um Filtro Básico para a página.
a)	Filtrar por Nome
b)	Filtrar por Cor. Em um campo de SELECT.
c)	Filtrar por preço. Quando for MAIOR, MENOR OU IGUAL.

-->
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Loja online</title>
    <link rel="stylesheet" href="loja/css/styles.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
 
    <header>
    </header>
    <main>
        <div class="modelo-area">
        <h3>Buscar produto</h3>
        <form action="loja/busca.php" method="GET">
        <label>Produto</label>
        <input type="text" name="nome_produto" aria-setsize="50" aria-placeholder="Escreva o produto"></imput>
        <button style="width: 100px">Buscar</button>
            <table class="tabela1"  border="1">
                <tr>
                    <h5 class="H1">20% de Desconto acima de $50 desconto de 5%</h5>
                    <td>Produto</td>
                    <td> Cor</td>
                    <td> Preço</td>
                </tr>
                <?php while($dadoVrl = $conVrl-> fetch_array()){?>
                <tr>
                    <td><?php echo $dadoVrl["nome"]?></td>
                    <td><?php echo $dadoVrl["cor"]?></td>
                    <td> R$: <?php echo number_format( $dadoVrl["preco"], 2,',','.');?></td>
                    <td><a href = "loja/carrinho.php?add=carrinho&idprod='.$produto['idprod'].'">Inserir no carrinho</a></td>
                </tr>
                <?php }?>
                
            </table>
            <table class="tabela2 " border="1">
                <h4 class="H2">20% de Desconto</h4>
                <tr>
                    <td>Produto</td>
                    <td> Cor</td>
                    <td> Preço</td>
                </tr>
                <?php while($dadoAzl = $conAzl->fetch_array()){?>
                <tr>
                    <td><?php echo $dadoAzl["nome"]?></td>
                    <td><?php echo $dadoAzl["cor"]?></td>
                    <td> R$: <?php echo number_format( $dadoAzl["preco"], 2,',','.');?></td>
                    <td><a href = "loja/carrinho.php?add=carrinho&idprod='.$produto['idprod'].'">Inserir no carrinho</a></td>
                </tr>
                <?php }?>
            </table>
            <table class="tabela3" border="1">
                <tr>
                    <h4 class="H3">10% de Desconto</h4>
                    <td>Produto</td>
                    <td> Cor</td>
                    <td> Preço</td>
                </tr>
                <?php while($dadoAml = $conAml-> fetch_array()){?>
                <tr>
                    <td><?php echo $dadoAml["nome"]?></td>
                    <td><?php echo $dadoAml["cor"]?></td>
                    <td> R$: <?php echo number_format( $dadoAml["preco"], 2,',','.');?></td>
                    <td><a href = "loja/carrinho.php?add=carrinho&idprod='.$produto['idprod'].'">Inserir no carrinho</a></td>
                </tr>
                <?php }?>
            </table>
</body>
</html>