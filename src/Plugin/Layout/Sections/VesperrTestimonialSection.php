<?php

namespace Drupal\spaker_mod\Plugin\Layout\Sections;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;
/**
 * A Header Layout for vesperr theme : By TMC 
 * 
 * @Layout (
 * 
 *  id = "vesperr_testimonial",
 *  label = @Translation("Vesperr testimonial by TMC"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/sections",
 *  template = "vesperr_testimonial",
 *  library = "spaker_mod/vesperr_testimonial",
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
 *     "subtitle_one" = {
 *       "label" = @Translation("subtitle_one"),
 *     },
 *     "text_one" = {
 *       "label" = @Translation("text_one"),
 *     },
 *     "title_two" = {
 *       "label" = @Translation("title_two"),
 *     },
 *     "subtitle_two" = {
 *       "label" = @Translation("subtitle_two"),
 *     },
 *     "text_two" = {
 *       "label" = @Translation("text_two"),
 *     },
 *     "title_three" = {
 *       "label" = @Translation("title_three"),
 *     },
 *     "subtitle_three" = {
 *       "label" = @Translation("subtitle_three"),
 *     },
 *     "text_three" = {
 *       "label" = @Translation("text_three"),
 *     },
 *     "title_four" = {
 *       "label" = @Translation("title_four"),
 *     },
 *     "subtitle_four" = {
 *       "label" = @Translation("subtitle_four"),
 *     },
 *     "text_four" = {
 *       "label" = @Translation("text_four"),
 *     },
 *     "title_five" = {
 *       "label" = @Translation("title_five"),
 *     },
 *     "subtitle_five" = {
 *       "label" = @Translation("subtitle_five"),
 *     },
 *     "text_five" = {
 *       "label" = @Translation("text_five"),
 *     },
 *     "title_six" = {
 *       "label" = @Translation("title_six"),
 *     },
 *     "subtitle_six" = {
 *       "label" = @Translation("subtitle_six"),
 *     },
 *     "text_six" = {
 *       "label" = @Translation("text_six"),
 *     },
 *     "title_seven" = {
 *       "label" = @Translation("title_seven"),
 *     },
 *     "subtitle_seven" = {
 *       "label" = @Translation("subtitle_seven"),
 *     },
 *     "text_seven" = {
 *       "label" = @Translation("text_seven"),
 *     },
 *     "title_height" = {
 *       "label" = @Translation("title_height"),
 *     },
 *     "subtitle_height" = {
 *       "label" = @Translation("subtitle_height"),
 *     },
 *     "text_height" = {
 *       "label" = @Translation("text_height"),
 *     },
 *     "title_nine" = {
 *       "label" = @Translation("title_nine"),
 *     },
 *     "subtitle_nine" = {
 *       "label" = @Translation("subtitle_nine"),
 *     },
 *     "text_nine" = {
 *       "label" = @Translation("text_nine"),
 *     },
 *  }
 * )
 * 
 * 
 */
class VesperrTestimonialSection extends FormatageModelsSection
{

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/Vessper_testimonial_map.jpg");
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
                    'title' => 'Contenu Titre',
                    'loader' => 'static'
                ],
                'fields' => [
                    'title' => [
                        'text_html' => [
                            'label' => 'Titre ',
                            'value' => 'Testimonials'
                        ]
                    ],
                    'text' => [
                        'text_html' => [
                            'label' => 'Paragraphe descriptif',
                            'value' => 'Magnam dolores commodi suscipit eum quidem consectetur velit'
                        ]
                    ],
                ]
            ],
            'card one' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu 1',
                    'loader' => 'static'
                ],
                'fields' => [
                    'title_one' => [
                        'text_html' => [
                            'label' => 'Titre 1',
                            'value' => 'Matt Brandon'
                        ]
                    ],
                    'subtitle_one' => [
                        'text_html' => [
                            'label' => 'Sous titre 1',
                            'value' => 'Freelancer'
                        ]
                    ],
                    'text_one' => [
                        'text_html' => [
                            'label' => 'Paragraphe 1',
                            'value' => 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.'
                        ]
                    ],
                ]
            ],
            'card two' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu 2',
                    'loader' => 'static'
                ],
                'fields' => [
                    'title_two' => [
                        'text_html' => [
                            'label' => 'Titre 2',
                            'value' => 'John Larson'
                        ]
                    ],
                    'subtitle_two' => [
                        'text_html' => [
                            'label' => 'Sous titre 2',
                            'value' => 'Entrepreneur'
                        ]
                    ],
                    'text_two' => [
                        'text_html' => [
                            'label' => 'Paragraphe 2',
                            'value' => 'Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.'
                        ]
                    ],
                ]
            ],
            'card three' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu 3',
                    'loader' => 'static'
                ],
                'fields' => [
                    'title_three' => [
                        'text_html' => [
                            'label' => 'Titre 3',
                            'value' => 'Saul Goodman'
                        ]
                    ],
                    'subtitle_three' => [
                        'text_html' => [
                            'label' => 'Sous titre 3',
                            'value' => 'Ceo &amp; Founder'
                        ]
                    ],
                    'text_three' => [
                        'text_html' => [
                            'label' => 'Paragraphe 3',
                            'value' => 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.'
                        ]
                    ],
                ]
            ],
            'card four' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu 4',
                    'loader' => 'static'
                ],
                'fields' => [
                    'title_four' => [
                        'text_html' => [
                            'label' => 'Titre 4',
                            'value' => 'Sara Wilsson'
                        ]
                    ],
                    'subtitle_four' => [
                        'text_html' => [
                            'label' => 'Sous titre 4',
                            'value' => 'Designer'
                        ]
                    ],
                    'text_four' => [
                        'text_html' => [
                            'label' => 'Paragraphe 4',
                            'value' => 'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.'
                        ]
                    ],
                ]
            ],
            'card five' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu 5',
                    'loader' => 'static'
                ],
                'fields' => [
                    'title_five' => [
                        'text_html' => [
                            'label' => 'Titre 5',
                            'value' => 'Jena Karlis'
                        ]
                    ],
                    'subtitle_five' => [
                        'text_html' => [
                            'label' => 'Sous titre 5',
                            'value' => 'Store Owner'
                        ]
                    ],
                    'text_five' => [
                        'text_html' => [
                            'label' => 'Paragraphe 5',
                            'value' => 'Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.'
                        ]
                    ],
                ]
            ],
            'card six' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu 6',
                    'loader' => 'static'
                ],
                'fields' => [
                    'title_six' => [
                        'text_html' => [
                            'label' => 'Titre 6',
                            'value' => 'Matt Brandon'
                        ]
                    ],
                    'subtitle_six' => [
                        'text_html' => [
                            'label' => 'Sous titre 6',
                            'value' => 'Freelancer'
                        ]
                    ],
                    'text_six' => [
                        'text_html' => [
                            'label' => 'Paragraphe 6',
                            'value' => 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.'
                        ]
                    ],
                ]
            ],
            'card seven' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu 7',
                    'loader' => 'static'
                ],
                'fields' => [
                    'title_seven' => [
                        'text_html' => [
                            'label' => 'Titre 7',
                            'value' => 'John Larson'
                        ]
                    ],
                    'subtitle_seven' => [
                        'text_html' => [
                            'label' => 'Sous titre 7',
                            'value' => 'Entrepreneur'
                        ]
                    ],
                    'text_seven' => [
                        'text_html' => [
                            'label' => 'Paragraphe 7',
                            'value' => 'Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.'
                        ]
                    ],
                ]
            ],
            'card height' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu 8',
                    'loader' => 'static'
                ],
                'fields' => [
                    'title_height' => [
                        'text_html' => [
                            'label' => 'Titre 8',
                            'value' => 'Saul Goodman'
                        ]
                    ],
                    'subtitle_height' => [
                        'text_html' => [
                            'label' => 'Sous titre 8',
                            'value' => 'Ceo &amp; Founder'
                        ]
                    ],
                    'text_height' => [
                        'text_html' => [
                            'label' => 'Paragraphe 8',
                            'value' => 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.'
                        ]
                    ],
                ]
            ],
            'card nine' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu 9',
                    'loader' => 'static'
                ],
                'fields' => [
                    'title_nine' => [
                        'text_html' => [
                            'label' => 'Titre 9',
                            'value' => 'Sara Wilsson'
                        ]
                    ],
                    'subtitle_nine' => [
                        'text_html' => [
                            'label' => 'Sous titre 9',
                            'value' => 'Designer'
                        ]
                    ],
                    'text_nine' => [
                        'text_html' => [
                            'label' => 'Paragraphe 9',
                            'value' => ' Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.'
                        ]
                    ],
                ]
            ],

        ];
    }
}