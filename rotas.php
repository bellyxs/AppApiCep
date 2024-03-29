<?php

use AppApi\Controller\EnderecoController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
        /**
     * [OK] Exemplo de Acesso :D
     */

    case '/endereco/by-cep':
        EnderecoController::getLogradouroByCep(); /*http://localhost:8000/endereco/by-cep?cep=17210580*//*OK/
        break;

    case '/logradouro/by-bairro':
        EnderecoController::getLogradouroByBairroAndCidade(); /*http://localhost:8000/logradouro/by-bairro?id_cidade=4874&bairro=Jardim América*//*OK/
        break;

    case '/cidade/by-uf':
        EnderecoController::getCidadesByUf();/*http://localhost:8000/cidade/by-uf?uf=SP*//*OK/
        break;

    case '/bairro/by-cidade':
        EnderecoController::getBairrosByIdCidade();/*http://localhost:8000/bairro/by-cidade?id_cidade=4874*//*OK*/
        break;

        default:
            http_response_code(403);
            break;

}
