<?php

namespace Drupal\spaker_mod\Form;

use Drupal\Core\Form\ConfirmFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
 * Defines a configuration form to confirm deletion of something by id
 */
class ConfirmDeleteForm extends ConfirmFormBase
{
    /**
     * ID of the item to delete deletion
     * 
     * 
     * @var int
     */
    protected $id;
    /**
     * 
     * {@inheritdoc}
     * 
     */
    public function buildForm(array $form, FormStateInterface $form_state, string $id = null)
    {
        $form['id'] = [
            '#type' => 'textfield',
            '#title' => $this->t('put the id here please : '),
        ];
        $this->id = $id;
        return parent::buildForm($form, $form_state);
    }
    
    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        // @todo : Do the deletion
    }

    /**
     * 
     * {@inheritdoc}
     * 
     */
    public function getFormId() : string {
        return 'Confirm_delete_form';
    }

    /**
     * 
     * {@inheritdoc}
     * 
     */
    public function getCancelUrl()
    {
        return new Url('spaker_mod.another_path');
    }

    /**
     * 
     * {@inheritdoc}
     * 
     */
    public function getQuestion()
    {
        return $this->t('Do you want to delete %id ?', ['%id' => $this->id]);
    }

}