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
            '#type' => 'textfield',
            '#title' => $this->t('Votre nom s il vous plait : '),
        ];
        $form['prenom'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Votre prenom ici : '),
        ];
        $form['phone_number'] = [
            '#type' => 'tel',
            '#title' => $this->t('Votre numero de telephone ici : '),
        ];
        $form['age'] = [
            '#type' => 'number',
            '#title' => $this->t('Votre age ici : '),
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
        if ($form_state->getValue('age') < 1)

        { 
            $form_state->setErrorByName('age', $this->t('Votre age est inférieure à la normale veuillez corriger.'));
        }

        if (strlen($form_state->getValue('phone_number')) > 3)

        {
            $form_state->setErrorByName('phone_number', $this->t('Le numero de telephone est trop court. veuillez le changer en entrant un complet.'));
        }

    }

    /**
     * {@inheritdoc}
     */

    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $this->messenger()->addStatus($this->t('Votre nom est : @name @prenom age et vous avez @age ans', ['@age' => $form_state->getValue('age'), '@name'=>$form_state->getValue('nom'), '@prenom'=>$form_state->getValue('prenom')]));
    }

}