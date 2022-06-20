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
 *     }
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
                    ]
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
                            'label' => 'list 1',
                            'value' => '<ul>
                                            <li>Aida dere</li>
                                            <li>Nec feugiat nisl</li>
                                            <li>Nulla at volutpat dola Nulla at volutpat dolaNulla at volutpat dola</li>
                                            <li>Nulla at volutpat dola</li>
                                            <li class="na">Massa ultricies mi</li>
                                        </ul>'
                        ]
                    ],
                    'link_one' => [
                        'text_html' => [
                            'label' => 'lien 1',
                            'value' => '<a href="#" class="btn-buy">Buy Now</a>'
                        ]
                    ]
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
                    'list_two' => [
                        'text_html' => [
                            'label' => 'list 2',
                            'value' => '<ul>
                                            <li>Aida dere</li>
                                            <li>Nec feugiat nisl</li>
                                            <li>Nulla at volutpat dola Nulla at volutpat dolaNulla at volutpat dola</li>
                                            <li>Nulla at volutpat dola</li>
                                            <li class="na">Massa ultricies mi</li>
                                        </ul>'
                        ]
                    ],
                    'link_two' => [
                        'text_html' => [
                            'label' => 'lien card 2',
                            'value' => '<a href="#" class="btn-buy">Buy Now</a>'
                        ]
                    ]
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
                    'list_three' => [
                        'text_html' => [
                            'label' => 'list 3',
                            'value' => '<ul>
                                            <li>Aida dere</li>
                                            <li>Nec feugiat nisl</li>
                                            <li>Nulla at volutpat dola Nulla at volutpat dolaNulla at volutpat dola</li>
                                            <li>Nulla at volutpat dola</li>
                                            <li class="na">Massa ultricies mi</li>
                                        </ul>'
                        ]
                    ],
                    'link_three' => [
                        'text_html' => [
                            'label' => 'lien card 3',
                            'value' => '<a href="#" class="btn-buy">Buy Now</a>'
                        ]
                    ]
                ]
            ]

        ];
    }
}