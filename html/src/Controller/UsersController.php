<?php
declare(strict_types=1);

namespace App\Controller;

class UsersController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->allowUnauthenticated(['login']);
    }

    public function login()
    {
        $result = $this->Authentication->getResult();
        // 認証成功
        if ($result->isValid()) {
            $target = $this->Authentication->getLoginRedirect() ?? '/home';
            return $this->redirect($target);
        }
        // ログインできなかった場合
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error('Invalid username or password');
        }
    }
}