<?php
declare(strict_types=1);

namespace App\Controller;

class HomeController extends AppController
{
    public function index()
    {
        echo '<h1>1. Authentication コンポーネントで取得</h1>';
        $user = $this->Authentication->getIdentity();
        debug($user);
        debug($user->username);
    
        echo '<h1>2. request で取得</h1>';
        $user = $this->request->getAttribute('identity');
        debug($user);
        debug($user->username);
    
        exit;
    }
}