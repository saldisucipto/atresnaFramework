<?php

namespace Atresna\Atresnaframework\controllers;

use Atresna\Atresnaframework\core\Application;
use Atresna\Atresnaframework\core\Controllers;
use Atresna\Atresnaframework\core\Request;
use Atresna\Atresnaframework\core\utils\Debug;



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
        return Application::$app->view->renderView('contact', $params);
    }
    public function Handlecontact(Request $request)
    {
        $body = $request->getBody();
        Debug::debugInfo($body);
        return "Handling Submitted Data";
    }
}
