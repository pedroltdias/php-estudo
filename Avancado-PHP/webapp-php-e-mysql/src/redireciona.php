<?php

function redireciona (string $url) 
{
    header("Location: $url");
    die();
}