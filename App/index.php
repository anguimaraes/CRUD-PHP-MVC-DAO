<?php

include 'Controller/PessoaController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/mvc-dao-final/App/':
        ?>
        <a href="/mvc-dao-final/App/pessoa/">lista</a>
        <?php
    break;

    case '/mvc-dao-final/App/pessoa/':

        PessoaController::index();
    break;

    case '/mvc-dao-final/App/pessoa/form':
        PessoaController::form();
    break;

    case '/mvc-dao-final/App/pessoa/form/save':
        PessoaController::save();
    break;

    case '/mvc-dao-final/App/pessoa/delete':
        PessoaController::delete();
    break;

    default:
        echo "Erro 404";
    break;
}