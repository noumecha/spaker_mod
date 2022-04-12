<?php

namespace Drupal\spaker_mod\Plugin\Layout\Sections;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\FormatageModels;
/**
 * A Header Layout for vesperr theme : By TMC 
 * 
 * @Layout (
 * 
 *  id = "vesperr_price",
 *  label = @Translation("Vesperr price by TMC"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/sections",
 *  template = "vesperr_price",
 *  library = "spaker_mod/vesperr_price",
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
 *     "subtitle_one" = {
 *       "label" = @Translation("subtitle_one"),
 *     },
 *     "subtitle_two" = {
 *       "label" = @Translation("subtitle_two"),
 *     },
 *     "subtitle_three" = {
 *       "label" = @Translation("subtitle_three"),
 *     },
 *     "link_one" = {
 *       "label" = @Translation("link_one"),
 *     },
 *     "link_two" = {
 *       "label" = @Translation("link_two"),
 *     },
 *     "link_three" = {
 *       "label" = @Translation("link_three"),
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
 *     "list_five" = {
 *       "label" = @Translation("list_five"),
 *     },
 *     "list_six" = {
 *       "label" = @Translation("list_six"),
 *     },
 *     "list_seven" = {
 *       "label" = @Translation("list_seven"),
 *     },
 *     "list_height" = {
 *       "label" = @Translation("list_height"),
 *     },
 *     "list_nine" = {
 *       "label" = @Translation("list_nine"),
 *     },
 *     "list_ten" = {
 *       "label" = @Translation("list_ten"),
 *     },
 *     "list_eleven" = {
 *       "label" = @Translation("list_eleven"),
 *     },
 *     "list_twelve" = {
 *       "label" = @Translation("list_twelve"),
 *     },
 *     "list_thirthteen" = {
 *       "label" = @Translation("list_thirthteen"),
 *     },
 *     "list_fourthteen" = {
 *       "label" = @Translation("list_fourthteen"),
 *     },
 *     "list_fifteen" = {
 *       "label" = @Translation("list_fifteen"),
 *     },
 *  }
 * )
 * 
 * 
 */
class VesperrPriceSection extends FormatageModels
{

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/Vessper_price_map.jpg");
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

            'titre' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu titre',
                    'loader' => 'static'
                ],
                'fields' => [
                    'title' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => 'Pricing'
                        ]
                    ],
                    'text' => [
                        'text_html' => [
                            'label' => 'Paragraphe par défaut',
                            'value' => 'Sit sint consectetur velit nemo qui impedit suscipit alias ea'
                        ]
                    ],
                    'link_one' => [
                        'text_html' => [
                            'label' => 'lien 1',
                            'value' => 'Buy Now'
                        ]
                    ],
                    'link_two' => [
                        'text_html' => [
                            'label' => 'lien 2',
                            'value' => 'Buy Now'
                        ]
                    ],
                    'link_three' => [
                        'text_html' => [
                            'label' => 'lien 3',
                            'value' => 'Buy Now'
                        ]
                    ],
                ]
            ],
            'card_one' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Price card 1',
                    'loader' => 'static'
                ],
                'fields' => [
                    'title_one' => [
                        'text_html' => [
                            'label' => 'titre 1',
                            'value' => 'Free'
                        ]
                    ],
                    'subtitle_one' => [
                        'text_html' => [
                            'label' => 'sous titre 1',
                            'value' => '<sup>$</sup>0<span> / month</span>'
                        ]
                    ],
                    'list_one' => [
                        'text_html' => [
                            'label' => 'elément 1',
                            'value' => 'Aida dere'
                        ]
                    ],
                    'list_two' => [
                        'text_html' => [
                            'label' => 'elément 2',
                            'value' => 'Nec feugiat nisl'
                        ]
                    ],
                    'list_three' => [
                        'text_html' => [
                            'label' => 'elément 3',
                            'value' => 'Nulla at volutpat dola'
                        ]
                    ],
                    'list_four' => [
                        'text_html' => [
                            'label' => 'elément 4',
                            'value' => 'Pharetra massa'
                        ]
                    ],
                    'list_five' => [
                        'text_html' => [
                            'label' => 'elément 5',
                            'value' => 'Massa ultricies mi'
                        ]
                    ],
                ]
            ],
            'card_two' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Price card two',
                    'loader' => 'static'
                ],
                'fields' => [
                    'title_two' => [
                        'text_html' => [
                            'label' => 'titre 2',
                            'value' => 'Business'
                        ]
                    ],
                    'subtitle_two' => [
                        'text_html' => [
                            'label' => 'sous titre 2',
                            'value' => '<sup>$</sup>0<span> / month</span>'
                        ]
                    ],
                    'list_six' => [
                        'text_html' => [
                            'label' => 'elément 1',
                            'value' => 'Aida dere'
                        ]
                    ],
                    'list_seven' => [
                        'text_html' => [
                            'label' => 'elément 2',
                            'value' => 'Nec feugiat nisl'
                        ]
                    ],
                    'list_height' => [
                        'text_html' => [
                            'label' => 'elément 3',
                            'value' => 'Nulla at volutpat dola'
                        ]
                    ],
                    'list_nine' => [
                        'text_html' => [
                            'label' => 'elément 4',
                            'value' => 'Pharetra massa'
                        ]
                    ],
                    'list_ten' => [
                        'text_html' => [
                            'label' => 'elément 5',
                            'value' => 'Massa ultricies mi'
                        ]
                    ],
                ]
            ],
            'card_three' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Price card three',
                    'loader' => 'static'
                ],
                'fields' => [
                    'title_three' => [
                        'text_html' => [
                            'label' => 'titre 3',
                            'value' => 'Developer'
                        ]
                    ],
                    'subtitle_three' => [
                        'text_html' => [
                            'label' => 'sous titre 3',
                            'value' => '<sup>$</sup>29<span> / month</span>'
                        ]
                    ],
                    'list_eleven' => [
                        'text_html' => [
                            'label' => 'elément 1',
                            'value' => 'Aida dere'
                        ]
                    ],
                    'list_twelve' => [
                        'text_html' => [
                            'label' => 'elément 2',
                            'value' => 'Nec feugiat nisl'
                        ]
                    ],
                    'list_thirthteen' => [
                        'text_html' => [
                            'label' => 'elément 3',
                            'value' => 'Nulla at volutpat dola'
                        ]
                    ],
                    'list_fourthteen' => [
                        'text_html' => [
                            'label' => 'elément 4',
                            'value' => 'Pharetra massa'
                        ]
                    ],
                    'list_fifteen' => [
                        'text_html' => [
                            'label' => 'elément 5',
                            'value' => 'Massa ultricies mi'
                        ]
                    ],
                ]
            ]

        ];
    }
}