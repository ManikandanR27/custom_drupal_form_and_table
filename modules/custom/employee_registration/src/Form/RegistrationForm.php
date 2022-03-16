<?php
/**
 * @file
 * Contains \Drupal\employee_registration\Form\RegistrationForm.
 */
namespace Drupal\employee_registration\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\Core\StringTranslation;
class RegistrationForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'employee_registration_form';
  }
  
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['employee_name'] = array(
      '#type' => 'textfield',
      '#title' => t('Enter Name:'),
      '#required' => TRUE,
    );
    $form['employee_rollno'] = array(
      '#type' => 'textfield',
      '#title' => t('Enter Employee Number:'),
      '#required' => TRUE,
    );
    $form['employee_mail'] = array(
      '#type' => 'email',
      '#title' => t('Enter Email ID:'),
      '#required' => TRUE,
    );
    $form['employee_phone'] = array (
      '#type' => 'tel',
      '#title' => t('Enter Contact Number'),
    );
    $form['employee_dob'] = array (
      '#type' => 'date',
      '#title' => t('Enter DOB:'),
      '#required' => TRUE,
    );
    $form['employee_gender'] = array (
      '#type' => 'select',
      '#title' => ('Select Gender:'),
      '#options' => array(
        'Male' => t('Male'),
		'Female' => t('Female'),
        'Other' => t('Other'),
      ),
    );
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Register'),
      '#button_type' => 'primary',
    );
    return $form;
  }
  
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if(strlen($form_state->getValue('employee_rollno')) < 8) {
      $form_state->setErrorByName('employee_rollno', $this->t('Please enter a valid Enrollment Number'));
    }
    if(strlen($form_state->getValue('employee_phone')) < 10) {
      $form_state->setErrorByName('employee_phone', $this->t('Please enter a valid Contact Number'));
    }
  }
  
  public function submitForm(array &$form, FormStateInterface $form_state) {
    \Drupal::messenger()->addMessage(t("Employee Registration Done!! Registered Values are:"));
	foreach ($form_state->getValues() as $key => $value) {
	  \Drupal::messenger()->addMessage($key . ': ' . $value);
    }
  }

}