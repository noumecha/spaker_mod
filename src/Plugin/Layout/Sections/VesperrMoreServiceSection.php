<?php

namespace Drupal\spaker_mod\Plugin\Layout\Sections;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;
/**
 * A Header Layout for vesperr theme : By TMC 
 * 
 * @Layout (
 * 
 *  id = "vesperr_more_service",
 *  label = @Translation("Vesperr more service by TMC"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/sections",
 *  template = "vesperr_more_service",
 *  library = "spaker_mod/vesperr_more_service",
 *  default_region = "main",
 *  regions = {
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
 *     "link_one" = {
 *       "label" = @Translation("link_one"),
 *     },
 *      "link_two" = {
 *       "label" = @Translation("link_two"),
 *     },
 *      "link_three" = {
 *       "label" = @Translation("link_three"),
 *     },
 *      "link_four" = {
 *       "label" = @Translation("link_four"),
 *     },
 *     "image_one" = {
 *       "label" = @Translation("image_one"),
 *     },
 *     "image_two" = {
 *       "label" = @Translation("image_two"),
 *     },
 *     "image_three" = {
 *       "label" = @Translation("image_three"),
 *     },
 *     "image_four" = {
 *       "label" = @Translation("image_four"),
 *     }
 * 
 *  }
 * )
 * 
 * 
 */
class VesperrMoreServiceSection extends FormatageModelsSection
{


    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/Vessper_more_service_map.jpg");
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
                    'title' => 'Card 1',
                    'loader' => 'static'
                ],
                'fields' => [
                    'image_one' => [
                        'text_html' => [
                            'label' => 'image 1',
                            'value' => '<img src="https://bootstrapmade.com/demo/templates/Vesperr/assets/img/more-services-1.jpg" alt="">'
                        ]
                    ],
                    'title_one' => [
                        'text_html' => [
                            'label' => 'titre 1',
                            'value' => '<a href="">Lobira Duno</a>'
                        ]
                    ],
                    'text_one' => [
                        'text_html' => [
                            'label' => 'Paragraphe 1',
                            'value' => 'Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua.'
                        ]
                    ],
                    'link_one' => [
                        'text_html' => [
                            'label' => 'lien 1',
                            'value' => '<a href="#">Read More</a>'
                        ]
                    ]
                ]
            ],
            'card_two' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Card 2',
                    'loader' => 'static'
                ],
                'fields' => [
                    'image_two' => [
                        'text_html' => [
                            'label' => 'image 2',
                            'value' => '<img src="https://bootstrapmade.com/demo/templates/Vesperr/assets/img/more-services-2.jpg" alt="">'
                        ]
                    ],
                    'title_two' => [
                        'text_html' => [
                            'label' => 'titre 2',
                            'value' => '<a href="">Lobira Duno</a>'
                        ]
                    ],
                    'text_two' => [
                        'text_html' => [
                            'label' => 'Paragraphe 2',
                            'value' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem.'
                        ]
                    ],
                    'link_two' => [
                        'text_html' => [
                            'label' => 'link 2',
                            'value' => '<a href="#">Read More</a>'
                        ]
                    ]
                ]
            ],
            'card_three' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'card 3',
                    'loader' => 'static'
                ],
                'fields' => [
                   'image_three' => [
                        'text_html' => [
                            'label' => 'image 3',
                            'value' => '<img src="https://bootstrapmade.com/demo/templates/Vesperr/assets/img/more-services-3.jpg" alt="">'
                        ]
                    ],
                    'title_three' => [
                        'text_html' => [
                            'label' => 'titre 3',
                            'value' => '<a href="">Lobira Duno</a>'
                        ]
                    ],
                    'text_three' => [
                        'text_html' => [
                            'label' => 'Paragraphe 3',
                            'value' => 'Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores.'
                        ]
                    ],
                    'link_three' => [
                        'text_html' => [
                            'label' => 'link 2',
                            'value' => '<a href="#">Read More</a>'
                        ]
                    ]
                ]
            ],
            'card_four' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Card 4',
                    'loader' => 'static'
                ],
                'fields' => [
                    'image_four' => [
                        'text_html' => [
                            'label' => 'image 4',
                            'value' => '<img src="https://bootstrapmade.com/demo/templates/Vesperr/assets/img/more-services-4.jpg" alt="">'
                        ]
                    ],
                    'title_four' => [
                        'text_html' => [
                            'label' => 'titre 4',
                            'value' => '<a href="">Lobira Duno</a>'
                        ]
                    ],
                    'text_four' => [
                        'text_html' => [
                            'label' => 'Paragraphe 4',
                            'value' => 'Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.'
                        ]
                    ],
                    'link_four' => [
                        'text_html' => [
                            'label' => 'lien 2',
                            'value' => '<a href="#">Read More</a>'
                        ]
                    ]
                ]
            ]

        ];
    }
}