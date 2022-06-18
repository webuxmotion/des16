<?php

namespace app\controllers;

use core\Tone;

class MainController extends AppController {
    
    public function indexAction() {
    
       $this->setMeta(
           Tone::$app->getProperty('site_name') . ' | Digital Agency',
           'DES16 - Digital Agency',
           'Digital Agency'
       );
    }
}