<?php

function sayhello(string $name, callable $filter)
{
   $filtername = call_user_func($filter, $name);
   echo "Halo $filtername";
}
sayhello("Nanda", "strtoupper");
