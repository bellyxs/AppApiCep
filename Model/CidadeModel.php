<?php

namespace AppApi\Model;

use App\Model\EnderecoDAO;

class CidadeModel extends CidadeModel
{
    public $id_cidade, $descricao, $uf, $codigo_ibge, $ddd;

    public function getCidadesByUf($uf)
    {
        $dao = new EnderecoDAO();

        $this->rows = $dao->selectCidadeByUf($uf);
    }
}
