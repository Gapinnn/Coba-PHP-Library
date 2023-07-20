<?php

namespace Gavinathawisesa;

class Customer
{

    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name = "Gavin"): string
    {
        return "Hello $name, My Name is $this->name";
    }
}