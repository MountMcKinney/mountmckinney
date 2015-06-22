<?php
      require 'vendor/autoload.php';
      date_default_timezone_set('America/New_York');

      //$log = new Monolog\Logger('name');
      //$log->pushHandler(new Monolog\Handler\StreamHandler('app.txt', Monolog\Logger::WARNING));
      //$log->addWarning('Oh Noes.');

      $app = new \Slim\Slim( array(
        'view' => new \Slim\Views\Twig()
      ));

      $view = $app->view();
      $view->parserOptions = array(
          'debug' => true
      );
      $view->parserExtensions = array(
          new \Slim\Views\TwigExtension(),
      );

      $app->get('/', function() use($app){
        $app->render('main.twig');
      })->name('home');

      $app->get('/contact', function() use($app){
        $app->render('contact.twig');
      })->name('contact');

      $app->get('/portfolio', function() use($app){
        $app->render('portfolio.twig');
      })->name('portfolio');

      $app->get('/example', function() use($app){
        $app->render('example.twig');
      })->name('example');

      $app->get('/subscribe', function() use($app){
        $app->render('subscribe.twig');
      })->name('subscribe');

      $app->get('/twocents', function() use($app){
        $app->render('twocents.twig');
      })->name('twocents');

      $app->get('/tcblog', function() use($app){
        $app->render('tcblog.twig');
      })->name('tcblog');

      $app->get('/campfirestories', function() use($app){
        $app->render('campfirestories.twig');
      })->name('campfirestories');

      $app->get('/campfire', function() use($app){
        $app->render('campfire.twig');
      })->name('campfire');

      $app->post('/portfolio', function() use($app){
        $name = $app->request->post('name');
        $email = $app->request->post('email');
        $msg = $app->request->post('msg');

        if(!empty($name) && !empty($email) && !empty($msg)) {
          $cleanName = filter_var($name, FILTER_SANITIZE_STRING);
          $cleanEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
          $cleanMsg = filter_var($msg, FILTER_SANITIZE_STRING);
        } else {
          //message the user there was a problem
          $app->redirect('/contact');
        }

        $transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');
        $mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance();
        $message->setSubject('Email From Our Website');

        //setFrom and setTo will be flipped in the way I will be using the mailer
        $message->setFrom(array(
          'john@mountmckinney.com' => 'John McKinney'
        ));
        $message->setTo(array($cleanEmail => $cleanName));
        //This would be a message I created thanking them for subscribing, and doing a call to action in the email to our social pages and back to the website
        $message->setBody($contactThankYou);


        $result = $mailer->send($message);

        if($result > 0) {
          //send Thank you message to page
          $app->redirect('/');
        } else {
          //send message to user that message failed to send
          //log error
          $app->redirect('/portfolio');
        }
      });

      $app->post('/contact', function() use($app){
        $name = $app->request->post('name');
        $email = $app->request->post('email');
        $msg = $app->request->post('msg');

        if(!empty($name) && !empty($email) && !empty($msg)) {
          $cleanName = filter_var($name, FILTER_SANITIZE_STRING);
          $cleanEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
          $cleanMsg = filter_var($msg, FILTER_SANITIZE_STRING);
        } else {
          //message the user there was a problem
          $app->redirect('/contact');
        }

        $transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');
        $mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance();
        $message->setSubject('Email From Our Website');

        //setFrom and setTo will be flipped in the way I will be using the mailer
        $message->setFrom(array(
          'john@mountmckinney.com' => 'John McKinney'
        ));
        $message->setTo(array($cleanEmail => $cleanName));
        //This would be a message I created thanking them for subscribing, and doing a call to action in the email to our social pages and back to the website
        $message->setBody($contactThankYou);


        $result = $mailer->send($message);

        if($result > 0) {
          //send Thank you message to page
          $app->redirect('/');
        } else {
          //send message to user that message failed to send
          //log error
          $app->redirect('/contact');
        }
      });

      $app->run();
