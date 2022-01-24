<?php 

session_start();
if (!isset ($_SESSION['itens']))
{
    $_SESSION['itens'] = array();
}

if (isset($_GET['add']) && $_GET['add'] == "carrinho")
{
    /* Adicionando ao carrinho*/ 
    $idProduto = $_GET['idprod'];
    if(!isset($_SESSION['itens'][$idProduto]))
    {
        $_SESSION['itens'][$idProduto] =  1;
    }else{
        $_SESSION['itens'][$idProduto] += 1;
    }
}

/* Exibe o carrinho*/
if(count($_SESSION['itens']) == 0) {
    echo 'Carrinho Vazio <br><a href="index.php">Adicionar Itens</a>';
}else{
    $conexao = new PDO('mysql:host=localhost;dbname=ttloja_tec', "root", "");
    foreach($_SESSION['itens'] as $idproduto => $quantidade)
    {
    $select = $conexao->prepare("SELECT * FROM produtos JOIN preços ON produtos.idprod = preços.idprecos WHERE idprod=?");
    $select ->bindParam(1,$idProduto);
    $select -> execute();
    $produtos = $select->fetchAll ();
    $total =  $produtos[0]["preco"] * $quantidade ;
    echo
        'Nome:' .$produtos[0]["nome"].'<br/>
        Cor:'.$produtos[0]["cor"].'<br/>
        Preço: '.number_format($produtos[0]["preco"] ,2,",",".").'<br/>
        Quantidade :'.$quantidade.'<br/>
        Total = '.number_format($total ,2,",",".").'<br/>
        <a href = "loja/remover.php?remover=carrinho&idprod='.$idProduto.'">Remover<a/><hr/>

        ';

    
    }
}

?>