<?php

namespace Atresna\Atresnaframework\controllers;

use Atresna\Atresnaframework\core\Application;
use Atresna\Atresnaframework\core\Controllers;

class SiteController extends Controllers
{
    public function home()
    {
        $params = [
            'name' => "SALDI",
        ];
        return $this->render('home', $params);
    }

    public function contact()
    {
        $params = [
            'name' => "SALDI",
        ];
        return Application::$app->router->renderView('contact');
    }
    public function Handlecontact()
    {
        return "Handling Submitted Data";
    }
}
