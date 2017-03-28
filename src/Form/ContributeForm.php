<?php
/**
 * @file
 * Contains \Drupal\resume\Form\ResumeForm.
 */
namespace Drupal\contactus\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\UrlHelper;
   * {@inheritdoc}
   */
   class ContributeForm extends FormBase {
	   
  public function getFormId() {
    return 'contactus_contribute_form';
  }
  
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['name'] = array(
      '#type' => 'textfield',
      '#title' => t('Name:'),
      '#required' => TRUE,
    );
    $form['mail'] = array(
      '#type' => 'email',
      '#title' => t('Email ID:'),
      '#required' => TRUE,
    );
    
    
    
    $form['message'] = array (
      '#type' => 'textarea',
      '#title' => ('Message'),
      '#required' => TRUE,
      ),
    );
   
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
      '#button_type' => 'primary',
    );
    return $form;
  }
  
    public function submitForm(array &$form, FormStateInterface $form_state) {

    foreach ($form_state->getValues() as $key => $value) {
      drupal_set_message($key . ': ' . $value);
    }
  
	}
	
	public function validateForm(array &$form, FormStateInterface $form_state) {
		if (strlen($form_state->getValue('name')) >10) {
        $form_state->setErrorByName('name', $this->t('name is too long.'));
      }

		
		
		
		
  }

	
	
	
	
	
	
	}
	?>
  