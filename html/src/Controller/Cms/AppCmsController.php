<?php
declare(strict_types=1);

namespace App\Controller\Cms;

use App\Controller\AppController;
use Cake\Event\EventInterface;

class AppCmsController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
    }

    public function beforeRender(EventInterface $event)
    {
        $viewBuilder = $this->viewBuilder();
        $viewBuilder->setLayout('cms');
    }
}