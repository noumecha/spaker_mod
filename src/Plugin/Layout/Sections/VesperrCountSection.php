<?php

namespace Drupal\spaker_mod\Plugin\Layout\Sections;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;
/**
 * A Header Layout for vesperr theme : By TMC 
 * 
 * @Layout (
 * 
 *  id = "vesperr_count",
 *  label = @Translation("Vesperr count by TMC"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/sections",
 *  template = "vesperr_count",
 *  library = "spaker_mod/vesperr_count",
 *  default_region = "main",
 *  regions = {
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
 *  }
 * )
 * 
 * 
 */
class VesperrCountSection extends FormatageModelsSection
{

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/Vessper_count_map.jpg");
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
                    'text_one' => [
                        'text_html' => [
                            'label' => 'paragraphe 1',
                            'value' => '<strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.'
                        ]
                    ],
                    'text_two' => [
                        'text_html' => [
                            'label' => 'paragraphe 2',
                            'value' => '<strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan'
                        ]
                    ],
                    'text_three' => [
                        'text_html' => [
                            'label' => 'paragraphe 3',
                            'value' => '<strong>Years of experience</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel'
                        ]
                    ],
                    'text_four' => [
                        'text_html' => [
                            'label' => 'paragraphe 4',
                            'value' => '<strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der'
                        ]
                    ],
                ]
            ]

                ];
    }
}