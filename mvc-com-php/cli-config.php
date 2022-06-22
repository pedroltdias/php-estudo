<?php

require_once '/vendor/autoload.php';

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet(
    (new \Alura\Cursos\Infra\EntitymanagerCreator())->getEntityManager()
);
