<?php
declare(strict_types=1);

namespace App\Controller\Cms;

use App\Controller\AppController;

class UsersController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->allowUnauthenticated(['login','logout']);
    }

    public function login()
    {
        $viewBuilder = $this->viewBuilder();
        $result = $this->Authentication->getResult();
        // $viewBuilder->setTemplate('Pages/login');
        // 認証成功
        if ($result->isValid()) {
            $target = $this->Authentication->getLoginRedirect() ?? '/cms/tops';
            return $this->redirect($target);
        }
        // ログインできなかった場合
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error('Invalid username or password');
        }
    }

    public function logout()
    {
        $this->Authentication->logout();
        return $this->redirect(['action' => 'login']);
    }
}