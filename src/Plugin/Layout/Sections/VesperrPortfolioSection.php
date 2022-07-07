<?php

namespace Drupal\spaker_mod\Plugin\Layout\Sections;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;
/**
 * A Header Layout for vesperr theme : By TMC 
 * 
 * @Layout (
 * 
 *  id = "vesperr_portfolio",
 *  label = @Translation("Vesperr portfolio by TMC"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/sections",
 *  template = "vesperr_portfolio",
 *  library = "spaker_mod/vesperr_portfolio",
 *  default_region = "main",
 *  regions = {
 *     "title" = {
 *       "label" = @Translation("title"),
 *     },
 *     "text" = {
 *       "label" = @Translation("text"),
 *     },
 *     "list_one" = {
 *       "label" = @Translation("list_one"),
 *     },
 *     "list_two" = {
 *       "label" = @Translation("list_two"),
 *     },
 *     "list_three" = {
 *       "label" = @Translation("list_three"),
 *     },
 *     "list_four" = {
 *       "label" = @Translation("list_four"),
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
 *     "title_five" = {
 *       "label" = @Translation("title_five"),
 *     },
 *     "title_six" = {
 *       "label" = @Translation("title_six"),
 *     },
 *     "title_seven" = {
 *       "label" = @Translation("title_seven"),
 *     },
 *     "title_height" = {
 *       "label" = @Translation("title_height"),
 *     },
 *     "title_nine" = {
 *       "label" = @Translation("title_nine"),
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
 *     "text_seven" = {
 *       "label" = @Translation("text_seven"),
 *     },
 *     "text_height" = {
 *       "label" = @Translation("text_height"),
 *     },
 *     "text_nine" = {
 *       "label" = @Translation("text_nine"),
 *     },
 *  }
 * )
 * 
 * 
 */
class VesperrPortfolioSection extends FormatageModelsSection
{


    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/Vessper_portfolio_map.jpg");
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
                            'value' => 'Portfolio'
                        ]
                    ],
                    'text' => [
                        'text_html' => [
                            'label' => 'Paragraphe',
                            'value' => 'Necessitatibus eius consequatur ex aliquid fuga eum quidem'
                        ]
                    ],
                    'list_one' => [
                        'text_html' => [
                            'label' => 'liste 1',
                            'value' => 'All'
                        ]
                    ],
                    'list_two' => [
                        'text_html' => [
                            'label' => 'liste 2',
                            'value' => 'App'
                        ]
                    ],
                    'list_three' => [
                        'text_html' => [
                            'label' => 'liste 3',
                            'value' => 'Card'
                        ]
                    ],
                    'list_four' => [
                        'text_html' => [
                            'label' => 'liste 4',
                            'value' => 'Web'
                        ]
                    ],
                    'title_one' => [
                        'text_html' => [
                            'label' => 'titre 1',
                            'value' => 'App 1'
                        ]
                    ],
                    'title_two' => [
                        'text_html' => [
                            'label' => 'titre 2',
                            'value' => 'Web 3'
                        ]
                    ],
                    'title_three' => [
                        'text_html' => [
                            'label' => 'titre 3',
                            'value' => 'App 2'
                        ]
                    ],
                    'title_four' => [
                        'text_html' => [
                            'label' => 'titre 4',
                            'value' => 'Card 2'
                        ]
                    ],
                    'title_five' => [
                        'text_html' => [
                            'label' => 'titre 5',
                            'value' => 'Web 2'
                        ]
                    ],
                    'title_six' => [
                        'text_html' => [
                            'label' => 'titre 6',
                            'value' => 'App 3'
                        ]
                    ],
                    'title_seven' => [
                        'text_html' => [
                            'label' => 'titre 7',
                            'value' => 'Card 1'
                        ]
                    ],
                    'title_height' => [
                        'text_html' => [
                            'label' => 'titre 8',
                            'value' => 'Card 3'
                        ]
                    ],
                    'title_nine' => [
                        'text_html' => [
                            'label' => 'titre 9',
                            'value' => 'Web 3'
                        ]
                    ],
                    'text_one' => [
                        'text_html' => [
                            'label' => 'Paragraphe 1',
                            'value' => 'App'
                        ]
                    ],
                    'text_two' => [
                        'text_html' => [
                            'label' => 'Paragraphe 2',
                            'value' => 'Web'
                        ]
                    ],
                    'text_three' => [
                        'text_html' => [
                            'label' => 'Paragraphe 3',
                            'value' => 'App'
                        ]
                    ],
                    'text_four' => [
                        'text_html' => [
                            'label' => 'Paragraphe 4',
                            'value' => 'Card'
                        ]
                    ],
                    'text_five' => [
                        'text_html' => [
                            'label' => 'Paragraphe 5',
                            'value' => 'Web'
                        ]
                    ],
                    'text_six' => [
                        'text_html' => [
                            'label' => 'Paragraphe 6',
                            'value' => 'App'
                        ]
                    ],
                    'text_seven' => [
                        'text_html' => [
                            'label' => 'Paragraphe 7',
                            'value' => 'Card'
                        ]
                    ],
                    'text_height' => [
                        'text_html' => [
                            'label' => 'Paragraphe 8',
                            'value' => 'Card'
                        ]
                    ],
                    'text_nine' => [
                        'text_html' => [
                            'label' => 'Paragraphe 9',
                            'value' => 'Web'
                        ]
                    ],
                ]
            ]

                ];
    }
}