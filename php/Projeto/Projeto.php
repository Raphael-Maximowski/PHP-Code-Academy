<?php 
date_default_timezone_set('America/Sao_Paulo');
// Inicializando Variaveis para Login
$login = 0;
$contador_login = 0;
$name_login = array("admin");
$senha_login = array("1234");
$contador_login = 4;

// Variaveis para Categorias
$categorias = array();
$description = array();
$produtos = array();
$produto_name = array();
$produto_price = array();
$produto_qtd = array();
$produto_id = array();
$compra = array();

// Variaveis para Caixa
$caixa_atual = 0;
$caixa_vendas = 0;
$caixa_troco = 0;
$inserir_dinheiro;

// Variaveis para Log
$log = array();
$data_hora_atual = date("Y-m-d H:i:s");


function vendas ()
{
    // Inicializando Variaveis e as Definindo como Globais
    global $produto_name;
    global $produto_price;
    global $produto_qtd;
    global $categorias;
    global $produto_id;
    global $compra;
    global $caixa_troco;
    global $caixa_atual;
    global $caixa_vendas;
    global $log;
    global $data_hora_atual;
    $interesse = "";
    $interesse_quantidade = "";
    $saida = false;
    $escolha_menu = 0;
    $valor_compra = 0;  
    // Mantem o Usuario no Loop até sair
    while (!$saida)
    {
        echo "==========================================\n";
        echo "REALIZANDO VENDAS . . .\n";
        echo "==========================================\n";

        // Retorna o Loop caso o Usuario não tenha nada Cadastrado Ainda
        if (count($produto_id) == 0)
        {
            echo "Sem Produtos Cadastrados . . .\n";
            echo "[1] Retornar\n";
            $escolha_menu = readline("Insira sua escolha: ");
            sleep(2);
            system("clear");
            if ($escolha_menu == 1)
            {
                $saida = true;
            }
        }

        // Loop Caso Existam Produtos Cadastrados
        if (count($produto_id) != 0)
        {

            // Printando Itens Cadastrados
            for ($i = 0; $i <= count($categorias) - 1; $i++)
            {
                echo "[" . $i + 1 . "] " . $categorias[$i] . "\n";
            }
            
            // Exibe Opção de Retornar do Menu
            echo "[" . count($categorias) + 1 . "] Retornar\n";
            $escolha_menu = readline("Insira sua escolha: ");
            sleep(2);
            system("clear");

            // Exibe os Produtos Disponiveis dependendo da Categoria que ele Escolhe
            if ($escolha_menu > 0 && $escolha_menu < count($categorias) + 1)
            {
                echo "==========================================\n";
                echo "Produtos disponiveis na categoria " . $categorias[$escolha_menu - 1] . "\n";    
                echo "==========================================\n";

                // Loop para Exibir Itens Cadastrados na Categoria
                for ($i = 0; $i <= count($produto_id) - 1; $i++)
                {
                    // Printa o Item Somente se o ID Bater com a escolha do Usuario
                    if ((int) $escolha_menu - (int) $produto_id[$i]  ==  0)
                    {
                        echo "Nome: " . $produto_name[$i] . "\n";
                        echo "Preço: R$ " . $produto_price[$i] . "\n";
                        echo "Quantidade Disponivel: " . $produto_qtd[$i] . "\n\n";
                    }
                }

                // Transforma os Caracteres em Minusculos para facilitar a compra para o usuario
                $produto_name_lower = array_map('strtolower', $produto_name);
                // Produto que a pessoa quer Comprar
                $interesse  =  readline("Digite qual item foi vendido: ");
                // Transforma os Caracteres em Minusculos para facilitar a compra para o usuario
                $interesse_lower = strtolower($interesse);
                // Quantidade que a pessoa quer comprar
                $interesse_quantidade = readline("Insira a quantidade que foi Vendida: ");

                $valor_compra = readline("Insira Qual valor a pessoa pagou: ");
                system("clear");

                // Cancela Compra se não tiver troco o suficiente
                if ($valor_compra > $caixa_troco)
                {
                    echo "==========================================\n";
                    echo "COMPRA CANCELADA\n";
                    echo "==========================================\n";
                    echo "SEM TROCO DISPONIVEL!\n";
                    $log [] = "Compra Cancelada Sem Troco " . $data_hora_atual . "\n";
                    sleep(5);
                    system("clear");
                }

                // Cancela compra ao não ter produto suficiente para venda
                else if ($valor_compra <= $caixa_troco)
                {
                // Confere se o item Cadastrado confere com o que foi Digitado
                $comparacao = array_search($interesse_lower, $produto_name_lower);

                if ($interesse_quantidade > $produto_qtd[$comparacao])
                {
                    echo "==========================================\n";
                    echo "COMPRA CANCELADA\n";
                    echo "==========================================\n";
                    echo "SEM QUANTIDADE DISPONIVEL!\n";
                    $log [] = "Compra Cancelada Unidades Insuficiente" . $data_hora_atual . "\n";
                    sleep(5);
                    system("clear");      
                    break;     
                }

                // Finaliza a Venda se existir o valor digitado pelo cliente  
                if ($comparacao != false || ($comparacao == 0 && $produto_id[0] != 0))
                {
                    echo "==========================================\n";
                    echo "Item Vendido . . .\n";
                    echo "==========================================\n";
                    echo "Nome: " . $produto_name[$comparacao] . "\n";
                    echo "Unidades Compradas: " . $interesse_quantidade . "\n";
                    echo "Preço total: R$" . $produto_price[$comparacao] * $interesse_quantidade . "\n";
                    echo "Valor do troco: R$ " . ($produto_price[$comparacao] * $interesse_quantidade - $valor_compra) * -1;

                    // Diminuir a Quantidade dos Produtos
                    $produto_qtd[$comparacao] = $produto_qtd[$comparacao] - $interesse_quantidade;
                    // Atualiza o Valor do Caixa De Vendas
                    $caixa_vendas = $caixa_vendas + ($produto_price[$comparacao] * $interesse_quantidade);
                    // Atualiza Valor do Caixa Atual
                    $caixa_atual = $caixa_atual + $caixa_vendas;
                    // Atualiza o Valor do Caixa com Trocos
                    $caixa_troco = $caixa_troco + ($produto_price[$comparacao] * $interesse_quantidade - $valor_compra);

                    // Logs
                    $log [] = "Item Vendido " .$produto_name[$comparacao] . " - " . $data_hora_atual . "\n";
                    $log [] = "Entrada Dinheiro " . $produto_price[$comparacao] * $interesse_quantidade . " - " . $data_hora_atual . "\n";
                    $log [] = "Saida Troco " . ($produto_price[$comparacao] * $interesse_quantidade - $valor_compra) * -1 . " - " .$data_hora_atual. "\n";
                    
                    sleep(4);
                    system("clear");
                }
            }
            }
            // Escolha para a Pessoa Sair do Menu
            if ($escolha_menu == count($categorias) + 1)
            {
                $saida = true;
            }
        }
    }
    echo "Retornando para Menu Anterior . . .\n";
    sleep(2);
    system("clear");
}



// Função Para Categorias e Produtos
function new_products()
{
    // Inicializando Variaveis e Ajustando Escopo
    global $categorias;
    global $description;
    global $produto_name;
    global $produto_price;
    global $produto_qtd;
    global $produto_id;
    global $data_hora_atual;
    $escolha = 0;
    global $log;
    $new_categoria = array();
    $new_description = array();
    $confirm_categoria = 0;
    $saida = false;

    // Loop para Manter menu até a pessoa desejar sair 
    while ($saida = true)
    {
        // Exibindo Opçoes do Menu
        echo "==========================================\n";
        echo "Cadastrando Produtos . . .\n";
        echo "==========================================\n";
        echo "[1] Cadastrar Categoria\n";

        // Loop Para Repetição das Categorias Cadastradas
        if (count($categorias) != 0)
        {
            // Inicializa em Zero e Vai até o tamanho menos 1 por iniciar em 0 o indice
            for($i = 0; $i <= count($categorias) - 1; $i++)
            {
                // $i + 2 para ajustar o menu as Opções Anteriores
                echo "[" . $i + 2 . "] " . $categorias[$i] . "\n";
            }

            // $i + 2 para ajustar o menu as Opções Anteriores
            echo "[" . count($categorias) + 2 . "] Sair\n";
            $escolha = readline("Insira sua escolha: ");
            system("clear");
        }

        // Opções do Menu caso não exista nenhuma Categoria Cadastrada
        else if (count($categorias) == 0) 
        {
            echo "[" . count($categorias) + 2 . "] Sair\n";
            $escolha = readline("Insira sua escolha: ");
            system("clear");
        }

        // Inicializando Cadastro de Categorias
        if ($escolha == 1)
        {
            echo "==========================================\n";
            echo "Cadastrando Categorias . . .\n";
            echo "==========================================\n";
            // Nome Nova Categoria
            $new_categoria = readline("Insira o nome da Nova Categoria: ");
            // Descrição Nova Categoria
            $new_description = readline("Insira a Descrição de sua nova Categoria: ");
            sleep(2);
            system("clear");

            // Confirmação de Nova Categoria Cadastrada
            echo "Tem certeza que deseja Cadastrar Sua Categoria?\n";
            echo "Nome: $new_categoria \n";
            echo "Descrição: $new_description \n";
            echo "[1] SIM  \n[2] NAO\n";
            $confirm_categoria = readline("Insira sua escolha: ");
            system("clear");

            // Confirmando Cadastro e Salvando Dados
            if ($confirm_categoria == 1)
            {
                echo "Categoria Cadastrada!\n";
                $categorias [] = $new_categoria;
                $description [] = $new_description;
                $log [] = "Categoria Cadastrada " . $new_categoria . " - " . $data_hora_atual . "\n";
                sleep(2);
                system("clear");
            }

            // Cancelando Cadastro de Dados
            else if ($confirm_categoria == 2)
            {
                echo "Cadastro Cancelado!\n";
                sleep(2);
                system("clear");
            }

            // Opções Invalidas
            else if ($confirm_categoria < 1 || $confirm_categoria > 2)
            {
                echo "Escolha Invalida . . .\n";
                sleep(2);
                system("clear");
            }
        }  

        // Cadastrando Produtos
        if ($escolha > 1 && $escolha <= count($categorias) + 1)
        {
            echo "==========================================\n";
            echo "Cadastrando Produtos . . .\n";
            echo "==========================================\n";
            echo "Categoria escolhida: " . $categorias[$escolha -2] . "\n";
            $nome = readline("Insira o Nome do Produto: "); // Nome Produto
            $preco = readline("Insira o Preço do Produto: R$ "); // Preço Produto
            $unidades = readline("Insira quantas unidades existem disponiveis: "); // Unidades Disponiveis
            echo "==========================================\n";
            echo "Produto Cadastrado com Sucesso . . .\n";
            sleep(2);
            system("clear");
            $produto_id [] = $escolha - 1; // Armazenando ID
            $produto_name [] = $nome; // Armazenando Nome
            $produto_price[] = $preco; // Armazenando Preço
            $produto_qtd[] = $unidades; // Armazenando Dados

            $log [] = "Produto Cadastradado " . $nome . " - " . $data_hora_atual . "\n";
            $log [] = "Preço Produto " . $preco . " - " . $data_hora_atual . "\n";
            $log [] = "Unidades disponvieis " . $unidades . " - " . $data_hora_atual . "\n";
        }


        // Quebrando Loop a Desejo do Usuario!
        if (( $escolha == count($categorias) + 2))
        {
            echo "Quebrando Loop\n";
            break;
        }
    }
}


// Função de Novo Usuario
function new_user()
{
    // Inicializando Variaveis e as Definindo como Globais
    $confirm_login = 0;
    global $name_login;
    global $senha_login;
    global $log;
    global $data_hora_atual;
    echo "==========================================\n";
    echo "Cadastrando Novo Usuario: \n";
    echo "==========================================\n";
    $new_user = readline("Insira o novo nome do Usuario: "); // Novo Nome
    $new_senha = readline("Insira a nova senha do usuario: "); // Nova Senha
    sleep(2);
    system("clear");

    while ($confirm_login != 2)
    {
        // Confirmando Inserir o Usuario
        echo "==========================================\n";
        echo "Deseja mesmo inserir esse usuário?\n";
        echo "[1] SIM \n[2] NAO\n";
        $confirm_login = readline("Insira sua escolha: ");
        system("clear");
    
        // Inicializando Validação de Dados
        if ($confirm_login == 1)
        {
            // Necessita da Senha do Usuario para Cadastrar um Novo
            $try_password = readline("Confirme sua escolha com sua senha: ");
            system("clear");

            // Verificação de Senhas
            if (in_array($try_password, $senha_login))
            {
                echo "==========================================\n";
                echo "Usuario Cadastrado com Sucesso . . .\n";
                echo "==========================================\n";
                // Atribui Usuario e Senha as Variaveis ja Existentes
                $name_login [count($name_login)] = $new_user;
                $senha_login[count($senha_login)] = $new_senha;
                $log [] = "Usuario Cadastrado" . $new_user . " - " . $data_hora_atual . "\n";
                sleep (2);
                system("clear");
                break;
            }  
        }

        // Escolha Invalida 
        if ($confirm_login < 1 || $confirm_login > 2)
        {
            echo "Escolha Invalida, Insira novamente . . .\n";
            sleep(2);
            system("clear");
        }
    }

    // Mensagem ao Cancelar Cadastro
    if ($confirm_login == 2)
    {
        echo "Dados de Login Apagados com Sucesso . . .\n";
        sleep(2);
        system("clear");
    }

}

function caixa()
{
    // Incializando as Variaveis do Caixa
    global $caixa_atual;
    global $caixa_vendas;
    global $caixa_troco;
    global $inserir_dinheiro;
    global $log;
    global $data_hora_atual;
    $saque = 0;
    $escolha = 0;
    $caixa = 0;

    // Mantem o Loop até o Usuario escolher Sair
    while ($escolha != 3)
    {
        echo "==========================================\n";
        echo "Conferindo Caixa . . .\n";
        echo "==========================================\n";
        echo "Caixa Atual: R$ " . $caixa_atual . "\n";
        echo "Entrada de Vendas: R$ " . $caixa_vendas . "\n";
        echo "Dinheiro Disponivel para troco: R$ " . $caixa_troco . "\n";
        echo "==========================================\n";
        echo "Opções Disponiveis :\n";
        echo "[1] Inserir Troco: \n";
        echo "[2] Sacar Caixa Atual: \n";
        echo "[3] Retornar: \n";
        $escolha = readline("Insira sua escolha: ");
        system("clear");

        // Inserindo Troco no Sistema
        if ($escolha == 1)
        {
            echo "==========================================\n";
            echo "Inserindo Troco\n";
            echo "==========================================\n";
            $caixa_troco = readline("Insira um valor para iniciar as operações da sua loja: R$ \n");
            sleep(2);
            system("clear");
            echo "Valor Inserido!\n";
            sleep(2);
            system("cls");
            // Log
            $log [] = "Inserido Valor Para Troco " . $caixa_troco . " - " . $data_hora_atual . "\n";
        }

        // Sacanado Valor
        if ($escolha == 2)
        {
            // Permite o Saque caso tenha dinheiro disponivel
            if ($caixa_atual > 0)
            {
                echo "==========================================\n";
                echo "Saque Caixa\n";
                echo "==========================================\n";
                echo "Valor Disponviel: " . $caixa_atual . "\n";
                $saque = readline("Insira o valor que deseja sacar: R$ "); 
                system("clear");
                sleep(3);  
                
                // COnfirma o Saque
                if ($saque <= $caixa_atual)
                {
                    echo "Valor Sacado! Confira sua conta!\n";
                    sleep(3);
                    system("clear");  
                    $log [] = "Valor Sacado" . $saque . " - " . $data_hora_atual . "\n";
                    $caixa_atual = $caixa_atual - $saque;
                }

                // Cancela Saque se o valor desejado for maior que o disponivel
                else if ($saque > $caixa_atual)
                {
                    echo "Operação Negada, Valor Maior que o Disponivel!\n";
                    sleep(3);
                    system("clear"); 
                }
            }

            // Sem valor de Caixa para Sacar
            else if ($caixa == 0)
            {
                echo "==========================================\n";
                echo "Saque Caixa\n";
                echo "==========================================\n";
                echo "Sem Valor para Saque Disponivel!\n";
                sleep(5);
                system("clear");
            }
        }

        // Escolha Invalida
        if ($escolha < 1 || $escolha > 3)
        {
            echo "Escolha Invalida, Insira novamente!\n";
            sleep(3);
            system("clear");
        }
    }
    echo "Retornando para Menu anterior . . .\n";
    sleep(3);
    system("clear");
}

// Logs
function logs ()
{
    // Criando Txt e imprimindo logs
    global $log;
    global $data_hora_atual;
    $fp = fopen ("logs.txt", "w");
    foreach($log as $valor){
        fwrite($fp, $valor . PHP_EOL);
    }
    fclose ($fp);

}

// Loop de Repetição para Login Interativo
while ($login != 2)
{
    echo "==========================================\n";
    echo "Bem vindo ao seu Controle de Caixa . . .\n";
    echo "==========================================\n";
    echo "Opções Disponiveis: \n";
    echo "[1] Login\n";
    echo "[2] Finalizar Sistema\n";
    $login = readline("Insira sua escolha: ");
    system("clear");

    // Inicializando Login No sistema
    if ($login == 1)
    {
        $log [] = "Sistema Inicialiado " . $data_hora_atual . "\n";
        $log [] = $try_name . "Logou no Sistema " . $data_hora_atual . "\n";
        // Tentativas de Login até Bloquear Sistema
        while ($contador_login != 0)
        {
            echo "==========================================\n";
            $try_name = readline("Insira seu nome de Usuario: "); // Login
            $try_password = readline("Insira sua senha: "); // Senha
            system("clear");
            
            // Verificação se Login e Senhas Cadastradas Coincidem
            if (in_array($try_name, $name_login) && in_array($try_password, $senha_login))
            {
                // Loop de Repetição Para Manter o Menu
                while ($escolha != 6)
                {
                    // Funcionalidades do Sistema
                    echo "Bem Vindo $try_name!\n";
                    echo "Dica: Insira qual seu dinheiro em caixa para\nrealizar as Operações Antes de tudo!\n";
                    echo "==========================================\n";
                    echo "FUNCIONALIDADES DISPONIVEIS:\n";
                    echo "[1] Realizar Venda\n"; // Ok
                    echo "[2] Cadastrar Produto\n"; // OK
                    echo "[3] Cadastrar Usuarios\n"; // OK
                    echo "[4] Verificar Caixa Atual\n"; // OK
                    echo "[5] Verificar Log Sistema\n";
                    echo "[6] Deslogar\n"; // OK
                    echo "==========================================\n";
                    // Escolha do Usuario
                    $escolha = readline("Insira sua escolha: ");
                    system("clear");


                    if ($escolha == 1)
                    {
                        // Permite Venda Apenas se tiver troco disponivel
                        if ($caixa_troco > 0)
                        {
                            vendas();
                        }

                        // Retorna ao Menu para Cadastrar Troco
                        else if ($caixa_troco <= 0)
                        {
                            echo "Venda Indisponivel! Insira um valor para utilizar como troco antes!\n";
                            sleep(5);
                            system("cls");
                        }
                    }

                    // Cadastra Categorias e Produtos
                    if ($escolha == 2)
                    {
                        new_products();
                    }

                    // Cadastrando Novo Usuario
                    if ($escolha == 3)
                    {
                        new_user();
                    }

                    // Acessa o Sistema de Caixa
                    if ($escolha == 4)
                    {
                        caixa();
                    }

                    // Inicializa as Logs
                    if ($escolha == 5)
                    {
                        logs();
                    }

                    // Deslogando do Sistema
                    if ($escolha == 6)
                    {
                        echo "==========================================\n";
                        echo "Deslogando da Conta . . .\n";
                        echo "==========================================\n";
                        sleep(2);
                        system("clear");
                        $log [] = "Saindo do Usuario " . $try_name . " - " . $data_hora_atual . "\n";
                        break;
                    }

                    // Mensagem para escolhas Invalidas
                    if ($escolha < 1 || $escolha > 6)
                    {
                        echo "Escolha Invalida, Insira novamente . . .\n";
                        sleep(3);
                        system("clear");
                    }
                }

                // Redefinindo Variavel Para novo Login
                $escolha = 0;
            }  
            
            // Iniciando Sistema de Tentativas
            else {

                // Finaliza Sistema ao zerar tentativas
                if ($contador_login == 0)
                {
                    echo "Usuario Bloqueado, Finalizando Sistema . . .\n";
                    return 0;
                }

                // Decremento ao Errar
                $contador_login--;
                echo "Senha ou Usuario Incorreto, Insira novamente!\n";
                echo "Tentativas Restantes $contador_login!\n";
            }
            break;
        }
    }
    

    // Finalizando Sistema
    else if ($login == 2)
    {
        break;
    }
    
    // Escolha Invalida Digitada pelo usuario
    else if ($login < 1 || $login > 2)
    {
        echo "Escolha Invalida, Insira novamente . . .\n";
        sleep(3);
        system("clear");
    }
}

// Finalizando Sistema
echo "Finalizando Sistema, Até a próxima . . .\n";

