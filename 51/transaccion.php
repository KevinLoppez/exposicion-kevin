<?php

namespace App;

class transaccion
{
    /**@var Customer */
    private $customer;
    
    /**@var float */
    private $amount;

    /**
     * @param Customer[] $arr
     */
    public function foo(array $arr)
    {
        foreach ($arr as $obj) {
            $obj->name;
        }
    }
}
//@var Customer $obi */ //es usado para documentar el tipo de las variables y constantes de las propiedades, util principalmente para los bucles
//y en caso de estar recorriendo una coleccion