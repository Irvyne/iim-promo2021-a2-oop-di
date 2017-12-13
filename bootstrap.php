<?php
require __DIR__ . '/vendor/autoload.php';

$params = require __DIR__ . '/parameters.php';

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$container = new ContainerBuilder();

/***************
 * SWIFTMAILER *
 ***************/

$container
    ->register('mailer_transport', Swift_SmtpTransport::class)
    ->addArgument('smtp.example.org')
    ->addArgument(25)
    ->addMethodCall('setUsername', 'username')
    ->addMethodCall('setPassword', 'password');

// 2. Create the service `mailer` with configuration
$container
    ->register('mailer', Swift_Mailer::class)
    ->addArgument(new Reference('mailer_transport'));

/************
 * DOCTRINE *
 ************/
$container
    ->register('doctrine', ...)

/*
$paths         = [__DIR__ . "/Entity"];
$isDevMode     = true;
$config        = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
$entityManager = EntityManager::create($params['db'], $config);
*/

/*
$repo          = $container->get('article_repository');//$container->get('doctrine')->getRepository(Article::class);
$articles      = $repo->loadAll(Article::MAX_PER_PAGE, ($page - 1) * Article::MAX_PER_PAGE);
$count         = $repo->count();
*/
