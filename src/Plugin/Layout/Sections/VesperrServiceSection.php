<?php

namespace Drupal\spaker_mod\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;
/**
 * A Header Layout for vesperr theme : By TMC 
 * 
 * @Layout (
 * 
 *  id = "vesperr_service",
 *  label = @Translation("Vesperr service by TMC"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/sections",
 *  template = "vesperr_service",
 *  library = "spaker_mod/vesperr_service",
 *  default_region = "main",
 *  regions = {
 *     "title" = {
 *       "label" = @Translation("title"),
 *     },
 *     "text" = {
 *       "label" = @Translation("text"),
 *     },
 *     "title_one" = {
 *       "label" = @Translation("title_one"),
 *     },
 *     "title_two" = {
 *       "label" = @Translation("title_two"),
 *     },
 *     "title_three" = {
 *       "label" = @Translation("title_three"),
 *     },
 *     "title_four" = {
 *       "label" = @Translation("title_four"),
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
 *  }
 * )
 * 
 * 
 */
class VesperrServiceSection extends FormatageModelsSection
{


        /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
 
     public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
       $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/Vessper_service_map.jpg");
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
                            'label' => 'Titre',
                            'value' => 'Services'
                        ]
                    ],
                    'text' => [
                        'text_html' => [
                            'label' => 'Paragraphe titre',
                            'value' => 'Magnam dolores commodi suscipit eius consequatur ex aliquid fug'
                        ]
                    ],
                    'title_one' => [
                        'text_html' => [
                            'label' => 'Titre 1',
                            'value' => 'Lorem Ipsum'
                        ]
                    ],
                    'title_two' => [
                        'text_html' => [
                            'label' => 'Titre 2',
                            'value' => 'Sed ut perspiciatis'
                        ]
                    ],
                    'title_three' => [
                        'text_html' => [
                            'label' => 'Titre 3',
                            'value' => 'Magni Dolores'
                        ]
                    ],
                    'title_four' => [
                        'text_html' => [
                            'label' => 'Titre 4',
                            'value' => 'Nemo Enim'
                        ]
                    ],
                    'text_one' => [
                        'text_html' => [
                            'label' => 'Paragraphe 1',
                            'value' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi'
                        ]
                    ],
                    'text_two' => [
                        'text_html' => [
                            'label' => 'Paragraphe 2',
                            'value' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore'
                        ]
                    ],
                    'text_three' => [
                        'text_html' => [
                            'label' => 'Paragraphe 3',
                            'value' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia'
                        ]
                    ],
                    'text_four' => [
                        'text_html' => [
                            'label' => 'Paragraphe 4',
                            'value' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis'
                        ]
                    ],
                ]
            ]

                ];
    }
}