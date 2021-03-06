<?php

namespace BeeDelivery\Ebanx\src;



use BeeDelivery\Ebanx\Connection;

class Auth
{

    public $http;
    protected $token;

    public function __construct()
    {
        $this->http = new Connection();
    }

    /**
     * Faz login e recupera o access token para uso na API.
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#autenticacao
     * @param String email
     * @param String senha
     * @return String
     */
    public function login($data)
    {
        return $this->http->post('https://authhomolog.nxcd.com.br/v1.0/login/', ['json' => $data]);
    }

}
