<?php

namespace BeeDelivery\Ebanx;

use BeeDelivery\Ebanx\src\Auth;
use BeeDelivery\Ebanx\src\BackgroundCheck;
use BeeDelivery\Ebanx\src\Biometria;
use BeeDelivery\Ebanx\src\ComprovanteResidencia;
use BeeDelivery\Ebanx\src\OCR;
use BeeDelivery\Ebanx\src\QuatroCampos;

class Ebanx
{
    public function auth() {
        return new Auth();
    }

    public function quatroCampos($token) {
        return new QuatroCampos($token);
    }

    public function ocr($token) {
        return new OCR($token);
    }

    public function comprovanteResidencia($token)
    {
        return new ComprovanteResidencia($token);
    }

    public function biometria($token)
    {
        return new Biometria($token);
    }

    public function backgroundCheck($token)
    {
        return new BackgroundCheck($token);
    }

}
