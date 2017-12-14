<?php

\Cake\Event\EventManager::instance()->on(
    new \PhpBenchmarksCakePhp\Event\RandomizeLocaleListener()
);
