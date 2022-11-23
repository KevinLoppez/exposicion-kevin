<?php

use App\Customer;
use App\Invoice;

require_once __DIR__. '/../vendor/autoload.php';

var_dump(process());

function foo()
{
    echo 'foo' . PHP_EOL;

    return false;
}

function process()
{
    $invoice = new Invoice(new Customer('foo' => 'bar'));

    try{
        $invoice->process(25);
        return true;
    } catch(\Exception $e) {
        echo $e->getMessage() . PHP_EOL;

        return foo();
    } finally {
        echo 'Finally block' . PHP_EOL;

        return -1;
    }
}