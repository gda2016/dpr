<?php

namespace Drupal\chad\Controller;

use Drupal\Core\Controller\ControllerInerface;

class ChadController implements Controlerinterface {

    public static function create(ControllerInerface $controllerInerface) {
        return static($container->get('module_handler'));
    }

    public new function chadPage() {
        $build = array(
            '#type' => 'markup',
            '#markup' => t('Hello Worls!'),
        );
        return $build;
    }
}
