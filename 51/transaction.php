<?php
namespace App;
class transaction
{

    /**
     *@param Customer $customer
     *@param float $amount
     *
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     *
     * @return bool
     */
    public function process(Customer $customer, float $amount):bool
    {
        //Process transaction

        //if failed, return false

        //otherwise return true
        return true;
    }
}
//Indica que excepcion o excepciones se
//espera de este metodo o su funcionamiento.
//basicamente se especifica que escepciones se quiere hacer