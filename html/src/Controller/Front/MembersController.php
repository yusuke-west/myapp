<?php
declare(strict_types=1);

namespace App\Controller\Front;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


class MembersController extends AppFrontController
{
    public function signup()
    {
        var_dump($this->Model);
    }

    public function login()
    {
        
    }

    public function logout()
    {
        
    }

    public function confirm()
    {
        $postData = $this->request->getData();
        $this->set(compact('postData'));
    }

    public function complete()
    {
        $members = TableRegistry::getTableLocator()->get('Members');
        $entity = $members->newEntity($this->request->getData());
        $members->save($entity);
    }

    
}