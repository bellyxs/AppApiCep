<?php

namespace AppApi\Controller;

include 'Controller.php';

class EnderecoController extends Controller

{
    public static function teste()
    {
        $cidades = ['Jaú', 'Bariri', 'Itapuí', 'DC'];

        parent::getRespondeAsJSON($cidades);
    }

    public static function getLogradouroByCep():void
    {

    }

    public static function getLogradouroByBairroAndCidade()
    {

    }

    public static function getCidadesByUf()
    {

    }

    public static function getBairrosByCidade()
    {
        
    }
}