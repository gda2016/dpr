<?php

namespace Drupal\hello_world\Controller;

class HelloWorldController {
    public function hello() {
        return array(
            '#type' => 'markup',
            '#markup' => t('Hello World!'),
        );
    }
}