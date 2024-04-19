<?php

namespace Atresna\Atresnaframework\controllers;

use Atresna\Atresnaframework\core\Application;
use Atresna\Atresnaframework\core\Controllers;
use Atresna\Atresnaframework\core\Request;
use Atresna\Atresnaframework\models\ContactForm;
use Atresna\Atresnaframework\core\Response;



class SiteController extends Controllers
{
    public function home()
    {
        $params = [
            'name' => "SALDI",
        ];
        return $this->render('home', $params);
    }

    public function contact(Request $request, Response $response)
    {
        $contact = new ContactForm();
        if ($request->isPost()) {
            $contact->loadData($request->getBody());
            if ($contact->validate() && $contact->send()) {
                Application::$app->session->setFlash('success', 'Thanks for contacting us');
                return $response->redirect('/contact');
            }
        }
        return Application::$app->view->renderView('contact', [
            'model' => $contact,
        ]);
    }
}
