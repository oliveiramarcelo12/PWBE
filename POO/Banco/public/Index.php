<!-- public/index.php -->
<?php
require_once '../classes/ContaBancaria.php';
require_once '../includes/Menu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Bancária</title>
</head>
<body>

<script>
    function exibirMenu() {
        alert("Menu:\n1. Abrir conta\n2. Consultar saldo\n3. Sacar\n4. Depositar\n5. Consultar dados do cliente\n6. Sair");
        escolherOpcao();
    }

    function escolherOpcao() {
        var opcao = prompt("Escolha uma opção (1-6):");

        $conta = new ContaBancaria($nome,$numeroConta);

        switch (opcao) {
            case '1':
                var nome = prompt("Digite o nome:");
                var numeroConta = prompt("Digite o número da conta:");
                // Chame a lógica para abrir conta (pode ser AJAX se desejar interagir com o servidor)
                alert("Conta aberta com sucesso para " + nome + ". Número da conta: " + numeroConta);
                break;
            case '2':
                // Chame a lógica para consultar saldo
                alert("Saldo atual: R$100.00"); // Substitua pela chamada adequada
                break;
            case '3':
                var valorSaque = prompt("Digite o valor a sacar:");
                // Chame a lógica para sacar
                alert("Saque de R$" + valorSaque + " realizado com sucesso"); // Substitua pela chamada adequada
                break;
            case '4':
                var valorDeposito = prompt("Digite o valor a depositar:");
                // Chame a lógica para depositar
                alert("Depósito de R$" + valorDeposito + " realizado com sucesso"); // Substitua pela chamada adequada
                break;
            case '5':
                // Chame a lógica para consultar dados do cliente
                alert("Nome: João\nNúmero da conta: 123456\nSaldo: R$100.00"); // Substitua pela chamada adequada
                break;
            case '6':
                alert("Saindo do programa. Obrigado!");
                break;
            default:
                alert("Opção inválida. Tente novamente.");
                escolherOpcao(); // Permite que o usuário escolha novamente
        }
    }

    exibirMenu(); // Chama a função para exibir o menu assim que a página carrega
</script>

</body>
</html>
