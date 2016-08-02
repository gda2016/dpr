<?php

namespace Drupal\example\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class ExampleForm.
 *
 * @package Drupal\example\Form
 */

class ExampleForm extends \Drupal\Core\Form\FormBase {

  public function getFormID() {
    return 'example_form';
  }

  public function buildForm(array $form, array &$form_state) {
    $form['fname'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Your firdt name.')
      );

    $form['fname'] = array(
        '#type' => 'email',
        '#title' => $this->t('Your email')
      );

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
        '#type' => 'submit',
        '#value' => $this->('Искать'),
        '#button_type' => 'primary',
      );
    return $form;

  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Display result.
    foreach ($form_state->getValues() as $key => $value) {
        drupal_set_message($key . ': ' . $value);
    }

  }

}
