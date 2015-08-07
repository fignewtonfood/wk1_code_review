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
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

  //----routes----
  //--homepage--
  //creates a route to homepage by calling the get method on $app object
    $app->get("/", function() use ($app){
      //tells $app to use twig to render contacts page and passes through the class Contacts as contact for Twig to use
        return $app['twig']->render('contacts.html.twig', array('contacts' => Contact::getAll()));
    });

  //--contact created--
  //creates a route to contacts page by calling the get method on $app object
    $app->post("/contacts", function() use ($app){
      //constructs contact data by instantiation
        $contact = new Contact($_POST['name'], $_POST['phone'], $_POST['street'], $_POST['city'], $_POST['state'], $_POST['zip']);
      //pushes instantiated contact to session array
        $contact->save();
      //tells $app to use twig to render contacts page and passes through the instantiated array variable as newcontact for Twig to use
        return $app['twig']->render('contact_created.html.twig', array('newcontact' => $contact));
    });

  //--delete all--
  //creates a route to delete contacts page by calling the get method on $app object
    $app->post('/delete_contacts', function() use ($app){
      //calls static method delete all and writes contact object to blank array
        Contact::deleteAll();
      //tells $app to use twig to render contacts deleted page
        return $app['twig']->render('contacts_deleted.html.twig');
    })

    return $app;
?>
