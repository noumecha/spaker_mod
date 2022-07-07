<?php

namespace Drupal\spaker_mod\Plugin\Layout\Sections;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;
/**
 * A Header Layout for vesperr theme : By TMC 
 * 
 * @Layout (
 * 
 *  id = "vesperr_contact",
 *  label = @Translation("Vesperr contact by TMC"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/sections",
 *  template = "vesperr_contact",
 *  library = "spaker_mod/vesperr_contact",
 *  default_region = "main",
 *  regions = {
 *     "title" = {
 *       "label" = @Translation("title"),
 *     },
 *     "sub_title" = {
 *       "label" = @Translation("sub_title"),
 *     },
 *     "text_one" = {
 *       "label" = @Translation("text_one"),
 *     },
 *     "text_two" = {
 *       "label" = @Translation("text_two"),
 *     },
 *     "text_three" = {
 *       "label" = @Translation("text_three"),
 *     },
 *     "text_four" = {
 *       "label" = @Translation("text_four"),
 *     },
 *     "text_five" = {
 *       "label" = @Translation("text_five"),
 *     },
 *     "text_six" = {
 *       "label" = @Translation("text_six"),
 *     },
 *     "link" = {
 *       "label" = @Translation("link"),
 *     },
 *  }
 * )
 * 
 * 
 */
class VesperrContactSection extends FormatageModelsSection
{

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/Vessper_contact_map.jpg");
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
                    'title' => 'Contenu 1',
                    'loader' => 'static'
                ],
                'fields' => [
                    'title' => [
                        'text_html' => [
                            'label' => 'titre',
                            'value' => 'Contact Us'
                        ]
                    ],
                    'sub_title' => [
                        'text_html' => [
                            'label' => 'sous titre',
                            'value' => 'Vesperr'
                        ]
                    ],
                    'text_one' => [
                        'text_html' => [
                            'label' => 'paragraphe 1',
                            'value' => 'Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.'
                        ]
                    ],
                    'text_two' => [
                        'text_html' => [
                            'label' => 'paragraphe 2',
                            'value' => 'A108 Adam Street<br>New York, NY 535022'
                        ]
                    ],
                    'text_three' => [
                        'text_html' => [
                            'label' => 'paragraphe 3',
                            'value' => 'info@example.com'
                        ]
                    ],
                    'text_four' => [
                        'text_html' => [
                            'label' => 'paragraphe 4',
                            'value' => '+1 5589 55488 55s'
                        ]
                    ],
                    'text_five' => [
                        'text_html' => [
                            'label' => 'texte 1',
                            'value' => 'Loading'
                        ]
                    ],
                    'text_six' => [
                        'text_html' => [
                            'label' => 'texte 2',
                            'value' => 'Your message has been sent. Thank you!'
                        ]
                    ],
                    'link' => [
                        'text_html' => [
                            'label' => 'lien',
                            'value' => 'Send Message'
                        ]
                    ],
                ]
            ]

                ];
    }
}