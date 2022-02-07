<?php 

namespace Drupal\spaker_mod\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Formulaire pour la configuration de mon module 
 * 
*/

class SpakerModConfigurationForm extends ConfigFormBase
{
    /**
     * {@inheritdoc}
     */
    public function getFormId() {

        return 'spaker_mod_admin_settings';

    }

    /**
     * {@inheritdoc}
     */
    protected function getEditableConfigNames()
    {
        return [
            'spaker_mod.settings',
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $config = $this->config('spaker_mod.settings');
        $form['configuration de base'] = [
            '#type' => 'textfield',
            '#title' => $this->t('configuration de base'),
            '#default_value' => $config->get('name'),
        ];

        return parent::buildForm($form, $form_state);
    }
    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $this->config('spaker_mod.setting')->set('name', $form_state->getValue('config de base spaker_mod'))->save();
        parent::submitForm($form, $form_state);
    }
}