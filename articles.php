<?php

/** @var \Symfony\Component\DependencyInjection\ContainerBuilder $container */
$container = require __DIR__.'/bootstrap.php';

dump($container->get('doctrine'));

/*
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