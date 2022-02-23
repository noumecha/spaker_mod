<?php

namespace Drupal\spaker_mod\Plugin\Layout\Sections;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\FormatageModels;
/**
 * A team section by TMC 
 * 
 * @Layout (
 * 
 *  id = "contact_section",
 *  label = @Translation("Contact Section by TMC"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/sections",
 *  template = "contact_section_rcweb",
 *  library = "spaker_mod/contact_section_rcweb",
 *  default_region = "title",
 *  regions = {
 *     "title" = {
 *       "label" = @Translation("title"),
 *     },
 *     "description" = {
 *       "label" = @Translation("description"),
 *     },
  *     "button" = {
 *       "label" = @Translation("button"),
 *     },
 *  }
 * )
 * 
 * 
 */
class ContactSection extends FormatageModels
{

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/rc-web_contact_map.jpg");
    }

    /**
     * 
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels:build()
     */

    public function build(array $regions) 
    {

        // TODO Auto-generated method stub
        $build = parent::build($regions);
        FormatageModelsThemes::formatSettingValues($build);

        return $build;

    }

    public function defaultConfiguration()
    {
        return parent::defaultConfiguration() + [

            'tmc' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'configuration du contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'title' => [
                        'text_html' => [
                            'label' => 'titre',
                            'value' => 'Vous souhaitez connaitre nos tarifs ?'
                        ]
                    ],
                    'description' => [
                        'text_html' => [
                            'label' => 'Description',
                            'value' => "

                                N'attendez plus, appelez-nous au 06 89 20 78 17 ou cliquez sur le
                                bouton ci-dessous.
                            "
                        ]
                    ],
                    'button' => [
                        'text_html' => [
                            'label' => 'boutton',
                            'value' => 'Appeler !'
                        ]
                    ],
                ]
            ]

                ];
    }
}