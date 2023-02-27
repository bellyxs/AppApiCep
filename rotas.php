<?php

use AppApi\Controller\EnderecoController;

$url = parse_url($_SERVER['REQUEST_URl'], PHP_URL_PATH);

switch ($url) {
        /**
     * [OK] Exemplo de Acesso :D
     */

    case '/endereco/by-cep':
        EnderecoController::getLogradouroByCep();
        break;

    case '/logradouro/by-bairro':
        EnderecoController::getLogradouroByBairroAndCidade();
        break;

    case '/cidade/by-uf':
        EnderecoController::getCidadesByUf();
        break;

    case '/bairro/by-cidade':
        EnderecoController::getBairrosByCidade();
        break;

        default:
            http_response_code(403);
            break;

}
