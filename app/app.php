<?php
    // Dependencies
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/ScrabbleScore.php";

    // For BSOD and other serious error debugging uncomment these lines:
    // use Symfony\Componet\Debug\Debug;
    // Debug::enable();

    // Initialize application object
    $app = new Silex\Application();

    // Uncomment line below for debug messages
    // app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    // Use 'echo' and 'var_dump($array_name)' for variable content debugging

    // Route for root directory to display entry form
    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    // // Route to display scrabble word and score
    $app->get("/results", function() use ($app) {
        $my_scrabble_score = new ScrabbleScore();
        $word = $_GET["string"];
        $results = $my_scrabble_score->calculateScore($word);

        $output_word = $results[0];
        $score = $results[1];

        return $app['twig']->render('results.html.twig', array('word' => $output_word, 'score' => $score));
    });


    return $app;

?>
