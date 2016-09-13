<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/CoinCombo.php";

    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('homepage.html.twig');
    });

    $app->get('/loosechange', function() use ($app) {
        $newCoins = new CoinCombo();
        $pennies = $newCoins->makeChange($_GET["change"]);
        return $app['twig']->render('results.html.twig', array('results'=>$pennies));
    });

    return $app;
?>
