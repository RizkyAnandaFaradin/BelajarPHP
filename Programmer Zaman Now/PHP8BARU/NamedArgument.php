<?php

function sayHello(string $first, string $middle = "s", string $last): void
{
   echo "Hello $first $middle $last";
}
sayHello(first: "Rizky", middle: "Ananda", last: "Faradin");
sayHello(first: "Rizky", last: "Faradin");
