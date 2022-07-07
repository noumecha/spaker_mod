<?php

namespace Drupal\spaker_mod\Plugin\Layout\Sections;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;
/**
 * A Header Layout for vesperr theme : By TMC 
 * 
 * @Layout (
 * 
 *  id = "vesperr_team",
 *  label = @Translation("Vesperr team by TMC"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/sections",
 *  template = "vesperr_team",
 *  library = "spaker_mod/vesperr_team",
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
class VesperrTeamSection extends FormatageModelsSection
{

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/Vessper_team_map.jpg");
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
                            'value' => 'Team'
                        ]
                    ],
                    'text' => [
                        'text_html' => [
                            'label' => 'Paragraphe titre',
                            'value' => 'Necessitatibus eius consequatur ex aliquid fuga eum quidem'
                        ]
                    ],
                    'title_one' => [
                        'text_html' => [
                            'label' => 'Titre 1',
                            'value' => 'Walter White'
                        ]
                    ],
                    'title_two' => [
                        'text_html' => [
                            'label' => 'Titre 2',
                            'value' => 'Sarah Jhonson'
                        ]
                    ],
                    'title_three' => [
                        'text_html' => [
                            'label' => 'Titre 3',
                            'value' => 'William Anderson'
                        ]
                    ],
                    'title_four' => [
                        'text_html' => [
                            'label' => 'Titre 4',
                            'value' => 'Amanda Jepson'
                        ]
                    ],
                    'text_one' => [
                        'text_html' => [
                            'label' => 'Paragraphe 1',
                            'value' => 'Chief Executive Officer'
                        ]
                    ],
                    'text_two' => [
                        'text_html' => [
                            'label' => 'Paragraphe 2',
                            'value' => 'Product ManagerWb Universe'
                        ]
                    ],
                    'text_three' => [
                        'text_html' => [
                            'label' => 'Paragraphe 3',
                            'value' => 'CTO'
                        ]
                    ],
                    'text_four' => [
                        'text_html' => [
                            'label' => 'Paragraphe 4',
                            'value' => 'Accountant'
                        ]
                    ],
                ]
            ]

                ];
    }
}