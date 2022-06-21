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
 *     "desc_one" = {
 *       "label" = @Translation("desc_one"),
 *     },
 *     "desc_two" = {
 *       "label" = @Translation("desc_two"),
 *     },
 *     "desc_three" = {
 *       "label" = @Translation("desc_three"),
 *     },
 *     "icon_one" = {
 *       "label" = @Translation("icon_one"),
 *     },
 *     "icon_two" = {
 *       "label" = @Translation("icon_two"),
 *     },
 *     "icon_three" = {
 *       "label" = @Translation("icon_three"),
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
                    'icon_one' => [
                        'text_html' => [
                            'label' => 'Icon Card 1',
                            'value' => '  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                    d="M352 128C352 198.7 294.7 256 224 256C153.3 256 96 198.7 96 128C96 57.31 153.3 0 224 0C294.7 0 352 57.31 352 128zM209.1 359.2L176 304H272L238.9 359.2L272.2 483.1L311.7 321.9C388.9 333.9 448 400.7 448 481.3C448 498.2 434.2 512 417.3 512H30.72C13.75 512 0 498.2 0 481.3C0 400.7 59.09 333.9 136.3 321.9L175.8 483.1L209.1 359.2z"
                                    fill="CurrentColor" />
                            </svg>'
                        ]
                    ],
                    'icon_two' => [
                        'text_html' => [
                            'label' => 'Icon Card 2',
                            'value' => '  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path d="M512 160c44.18 0 80-35.82 80-80S556.2 0 512 0c-44.18 0-80 35.82-80 80S467.8 160 512 160zM128 160c44.18 0 80-35.82 80-80S172.2 0 128 0C83.82 0 48 35.82 48 80S83.82 160 128 160zM319.9 320c57.41 0 103.1-46.56 103.1-104c0-57.44-46.54-104-103.1-104c-57.41 0-103.1 46.56-103.1 104C215.9 273.4 262.5 320 319.9 320zM368 400c0-16.69 3.398-32.46 8.619-47.36C374.3 352.5 372.2 352 369.9 352H270.1C191.6 352 128 411.7 128 485.3C128 500.1 140.7 512 156.4 512h266.1C389.5 485.6 368 445.5 368 400zM183.9 216c0-5.449 .9824-10.63 1.609-15.91C174.6 194.1 162.6 192 149.9 192H88.08C39.44 192 0 233.8 0 285.3C0 295.6 7.887 304 17.62 304h199.5C196.7 280.2 183.9 249.7 183.9 216zM551.9 192h-61.84c-12.8 0-24.88 3.037-35.86 8.24C454.8 205.5 455.8 210.6 455.8 216c0 21.47-5.625 41.38-14.65 59.34C462.2 263.4 486.1 256 512 256c42.48 0 80.27 18.74 106.6 48h3.756C632.1 304 640 295.6 640 285.3C640 233.8 600.6 192 551.9 192zM618.1 366.7c-5.025-16.01-13.59-30.62-24.75-42.71c-1.674-1.861-4.467-2.326-6.699-1.023l-19.17 11.07c-8.096-6.887-17.4-12.28-27.45-15.82V295.1c0-2.514-1.861-4.746-4.281-5.213c-16.56-3.723-33.5-3.629-49.32 0C484.9 291.2 483.1 293.5 483.1 295.1v22.24c-10.05 3.537-19.36 8.932-27.45 15.82l-19.26-11.07c-2.139-1.303-4.932-.8379-6.697 1.023c-11.17 12.1-19.73 26.71-24.66 42.71c-.7441 2.512 .2793 5.117 2.42 6.326l19.17 11.17c-1.859 10.42-1.859 21.21 0 31.64l-19.17 11.17c-2.234 1.209-3.164 3.816-2.42 6.328c4.932 16.01 13.49 30.52 24.66 42.71c1.766 1.863 4.467 2.328 6.697 1.025l19.26-11.07c8.094 6.887 17.4 12.28 27.45 15.82v22.24c0 2.514 1.77 4.746 4.188 5.211c16.66 3.723 33.5 3.629 49.32 0c2.42-.4648 4.281-2.697 4.281-5.211v-22.24c10.05-3.535 19.36-8.932 27.45-15.82l19.17 11.07c2.141 1.303 5.025 .8379 6.699-1.025c11.17-12.1 19.73-26.7 24.75-42.71c.7441-2.512-.2773-5.119-2.512-6.328l-19.17-11.17c1.953-10.42 1.953-21.22 0-31.64l19.17-11.17C618.7 371.8 619.7 369.2 618.1 366.7zM512 432c-17.67 0-32-14.33-32-32c0-17.67 14.33-32 32-32s32 14.33 32 32C544 417.7 529.7 432 512 432z"
                                    fill="CurrentColor" />
                                </svg>'
                        ]
                    ],
                    'icon_three' => [
                        'text_html' => [
                            'label' => 'Icon Card 3',
                            'value' => ' <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M79 96h130c5.967 0 11.37-3.402 13.75-8.662c2.385-5.262 1.299-11.39-2.754-15.59l-65-67.34c-5.684-5.881-16.31-5.881-21.99 0l-65 67.34C63.95 75.95 62.87 82.08 65.25 87.34C67.63 92.6 73.03 96 79 96zM357 91.59c5.686 5.881 16.31 5.881 21.99 0l65-67.34c4.053-4.199 5.137-10.32 2.754-15.59C444.4 3.402 438.1 0 433 0h-130c-5.967 0-11.37 3.402-13.75 8.662c-2.385 5.262-1.301 11.39 2.752 15.59L357 91.59zM448 128H64c-35.35 0-64 28.65-64 63.1v255.1C0 483.3 28.65 512 64 512h384c35.35 0 64-28.65 64-63.1V192C512 156.7 483.3 128 448 128zM352 224C378.5 224.1 400 245.5 400 272c0 26.46-21.47 47.9-48 48C325.5 319.9 304 298.5 304 272C304 245.5 325.5 224.1 352 224zM160 224C186.5 224.1 208 245.5 208 272c0 26.46-21.47 47.9-48 48C133.5 319.9 112 298.5 112 272C112 245.5 133.5 224.1 160 224zM240 448h-160v-48C80 373.5 101.5 352 128 352h64c26.51 0 48 21.49 48 48V448zM432 448h-160v-48c0-26.51 21.49-48 48-48h64c26.51 0 48 21.49 48 48V448z"
                                    fill="CurrentColor" />
                            </svg>'
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
                     'desc_one' => [
                        'text_html' => [
                            'label' => 'Desc 1',
                            'value' => 'Sit sint consectetur velit nemo qui impedit suscipit alias ea'
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
                     'desc_two' => [
                        'text_html' => [
                            'label' => 'Desc 2',
                            'value' => 'Sit sint consectetur velit nemo qui impedit suscipit alias ea'
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
                    'desc_three' => [
                        'text_html' => [
                            'label' => 'Desc 3',
                            'value' => 'Sit sint consectetur velit nemo qui impedit suscipit alias ea'
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