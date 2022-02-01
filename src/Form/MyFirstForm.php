<?php 

namespace Drupal\spaker_mod\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements my first form in drupal 
 */

class MyFirstForm extends FormBase
{
    /**
     * {@inheritdoc}
     */
    public function getFormId()
    {
        return 'first_form';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['nom'] = [
            '#type' => 'name',
            '#title' => $this->t('Votre nom s il vous plait'),
        ];
        $form['prenom'] = [
            '#type' => 'surname',
            '#title' => $this->t('Votre prenom ici'),
        ];
        $form['age'] = [
            '#type' => 'age',
            '#title' => $this->t('Votre age ici'),
        ];
        $form['actions']['#type'] = 'actions';
        $form['actions']['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Save'),
            '#button_type' => 'primary',
        ];

        return $form;
    }
    
    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form, FormStateInterface $form_state)
    {
        if(strlen($form_state->getValue('age')) < 0) 
        {
            $form_state->setErrorByName('age',$this->t('Votre age est inférieure à la normale veuillez corriger.'));
        }
    }

    /**
     * {@inheritdoc}
     */

    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $this->messenger()->addStatus($this->t('Votre age est @age', ['@age' => $form_state->getValue('age')]));
    }

}