<?php

namespace PhpBenchmarksCakePhp\Event;

use Cake\Event\EventListenerInterface;
use Cake\I18n\I18n;

class RandomizeLocaleListener implements EventListenerInterface
{
    const EVENT_NAME = 'phpbenchmarks.randomize_locale';

    public function implementedEvents()
    {
        return [static::EVENT_NAME => 'randomizeLocale'];
    }

    public function randomizeLocale()
    {
        $locales = ['fr_FR', 'en_GB', 'en'];
        I18n::setLocale($locales[rand(0, 2)]);
    }
}
