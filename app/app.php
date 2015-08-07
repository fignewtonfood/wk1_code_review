<?php
  //dependencies
  //--opens autoload.php which loads Silex files in vendor folder
    require_once __DIR__."/../vendor/autoload.php";
  //--opens Contact.php
    require_once __DIR__."/../src/Contact.php";

  //creates and checks cookie
    session_start();
    if (empty($_SESSION['list_of_contacts'])){
        $_SESSION['list_of_contacts'] = array();
    }

  //instantiates the Silex and Twig application objects
    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigService\Provider(), array('twig.path' => __DIR__.'/../views'));

  //routes
  //--homepage--
  //creates a route by calling the get method on $app object
    $app->post("/", function use ($app){
      //constructs contact data by instantiation
        $contact = new Contact($_POST['name'], $_POST['phone'], $_POST['street'], $_POST['city'], $_POST['state'], $_POST['zip'])
      //tells $app to use twig to render contacts page
        return $app['twig']->render('contacts.html.twig');
    });

    return $app;
?>




private $name;
private $phone;
private $street;
private $city;
private $state;
private $zip;
