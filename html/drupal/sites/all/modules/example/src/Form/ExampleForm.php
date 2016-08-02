<?php

namespace Drupal\example\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class ExampleForm.
 *
 * @package Drupal\example\Form
 */
class ExampleForm extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'example_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['your_first_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Your first name.'),
      '#maxlength' => 64,
      '#size' => 16,
    ];

    $form['email'] = array(
        '#type' => 'email',
        '#title' => $this->t('Your email'),
        '#maxlength' => 64,
        '#size' => 16,
      );

    $form['submit'] = [
        '#type' => 'submit',
        '#value' => t('Искать'),
    ];

    return $form;
  }

  /**
    * {@inheritdoc}
    */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Display result.
    // foreach ($form_state->getValues() as $key => $value) {
    //     drupal_set_message($key . ': ' . $value);
    // }
      $dk = db_insert('exampleform')
    ->fields(array(
        'fname' => $form_state['values']['fname'],
        'phone_number' => $form_state['values']['phone_number'],
        'email' => $form_state['values']['email'],
      ))
    ->execute();
      dsm($dk);
  }

}
