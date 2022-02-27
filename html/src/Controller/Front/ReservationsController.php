<?php
declare(strict_types=1);

namespace App\Controller\Front;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


class ReservationsController extends AppFrontController
{
    public function index()
    {

    }

    public function form()
    {
        
    }

    public function confirm()
    {
        $postData = $this->request->getData();
        $this->set(compact('postData'));
    }

    public function complete()
    {
        $reservation = TableRegistry::getTableLocator()->get('Reservations');
        $entity = $reservation->newEntity($this->request->getData());
        $reservation->save($entity);
    }

}