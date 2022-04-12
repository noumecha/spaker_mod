<?php

namespace Drupal\spaker_mod\Plugin\Layout\Sections;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\FormatageModels;
/**
 * A Header Layout for vesperr theme : By TMC 
 * 
 * @Layout (
 * 
 *  id = "vesperr_feature",
 *  label = @Translation("Vesperr feature by TMC"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/sections",
 *  template = "vesperr_feature",
 *  library = "spaker_mod/vesperr_feature",
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
 *     "title_ten" = {
 *       "label" = @Translation("title_ten"),
 *     },
 *     "title_eleven" = {
 *       "label" = @Translation("title_eleven"),
 *     },
 *     "title_twelve" = {
 *       "label" = @Translation("title_twelve"),
 *     },
 *  }
 * )
 * 
 * 
 */
class VesperrFeaturesSection extends FormatageModels
{

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/Vessper_feature_map.jpg");
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
                            'value' => 'Features'
                        ]
                    ],
                    'text' => [
                        'text_html' => [
                            'label' => 'Paragraphe',
                            'value' => 'Necessitatibus eius consequatur ex aliquid fuga eum quidem'
                        ]
                    ],
                    'title_one' => [
                        'text_html' => [
                            'label' => 'titre 1',
                            'value' => 'Lorem Ipsum'
                        ]
                    ],
                    'title_two' => [
                        'text_html' => [
                            'label' => 'titre 2',
                            'value' => 'Dolor Sitema'
                        ]
                    ],
                    'title_three' => [
                        'text_html' => [
                            'label' => 'titre 3',
                            'value' => 'Sed perspiciatis'
                        ]
                    ],
                    'title_four' => [
                        'text_html' => [
                            'label' => 'titre 4',
                            'value' => 'Magni Dolores'
                        ]
                    ],
                    'title_five' => [
                        'text_html' => [
                            'label' => 'titre 5',
                            'value' => 'Nemo Enim'
                        ]
                    ],
                    'title_six' => [
                        'text_html' => [
                            'label' => 'titre 6',
                            'value' => 'Eiusmod Tempor'
                        ]
                    ],
                    'title_seven' => [
                        'text_html' => [
                            'label' => 'titre 7',
                            'value' => 'Midela Teren'
                        ]
                    ],
                    'title_height' => [
                        'text_html' => [
                            'label' => 'titre 8',
                            'value' => 'Pira Neve'
                        ]
                    ],
                    'title_nine' => [
                        'text_html' => [
                            'label' => 'titre 9',
                            'value' => 'Dirada Pack'
                        ]
                    ],
                    'title_ten' => [
                        'text_html' => [
                            'label' => 'titre 10',
                            'value' => 'Moton Ideal'
                        ]
                    ],
                    'title_eleven' => [
                        'text_html' => [
                            'label' => 'titre 11',
                            'value' => 'Verdo Park'
                        ]
                    ],
                    'title_twelve' => [
                        'text_html' => [
                            'label' => 'titre 12',
                            'value' => 'Flavor Nivelanda'
                        ]
                    ],
                ]
            ]

                ];
    }
}