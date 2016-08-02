<?php
/**
 * @file
 * Contains \Drupal\demo\Controller\DemoController.
 */

namespace Drupal\demo\Controller;

/**
 * DemoController.
 */
class DemoController {
  /**
   * Генерирует пример страницы.
   */
  public function demo() {
    return array(
      '#markup' => t('Привет, Мир!'),
    );
  }
}
