<?php

namespace PhpBenchmarksCakePhp\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use PhpBenchmarksCakePhp\Event\RandomizeLocaleListener;
use PhpBenchmarksCakePhp\Transformer\RestApiTransformer;
use PhpBenchmarksRestData\Service;

class RestApiController extends Controller
{
    public function rest()
    {
        $this->getEventManager()->dispatch(
            new Event(RandomizeLocaleListener::EVENT_NAME, $this)
        );

        $this->viewBuilder()->setClassName('Json');

        $transformer = new RestApiTransformer();
        $this->set('users', $transformer->usersToArray(Service::getUsers()));
        $this->set('_serialize', 'users');
    }
}
