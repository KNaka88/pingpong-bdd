<?php

    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongGenerator.php";

    $app = new Silex\Application();


    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        "twig.path" => __DIR__.'/../views'
    ));
    $app['debug'] = true;

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/display_pingpong", function() use ($app) {
        $new_ping_pong = new PingPongGenerator;
        $number = $new_ping_pong->generatePingPongArray(intval($_GET['number']));
        return $app['twig']->render('display_pingpong.html.twig', array('results' => $number));
    });



    return $app;
