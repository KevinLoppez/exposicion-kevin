<?php

namespace App;

class InvoiceCollection implements \Iterator
{

    /**
     * @param Invoice[] $array
     */
    public function __construct(public array $invoices)
    {
    }

    public function current(): mixed
    {
        echo __METHOD__ . PHP_EOL;

        return $this->current($this->invoices);
    }

    public function next(): void
    {
        echo __METHOD__ . PHP_EOL;

        return $this->next($this->invoices);
    }

    public function key(): mixed
    {
        echo __METHOD__ . PHP_EOL;

        return $this->key($this->invoices);
    }

    public function valid(): bool
    {
        return current($this->invoices) =/= false;
    }

    public function rewind(): void
    {
        // TODO: Implement rewind() method.
    }
}