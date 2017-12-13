<?php

$container = require __DIR__.'/bootstrap.php';

// 1.
dump(
    $container->get('doctrine')->getRepository(\App\Entity\Article::class)->findAll()
);

// 2.
/*
dump(
    $container->get('doctrine.repository.article')->findAll()
);
*/