<?php

namespace Drupal\spaker_mod\Plugin\Layout\Sections;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\FormatageModels;
/**
 * A Header Layout for vesperr theme : By TMC 
 * 
 * @Layout (
 * 
 *  id = "vesperr_faq",
 *  label = @Translation("Vesperr faq by TMC"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/sections",
 *  template = "vesperr_faq",
 *  library = "spaker_mod/vesperr_faq",
 *  default_region = "main",
 *  regions = {
 *     "title" = {
 *       "label" = @Translation("title"),
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
 *  }
 * )
 * 
 * 
 */
class VesperrAskSection extends FormatageModels
{

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/Vessper_faq_map.jpg");
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
                            'value' => 'Frequently Asked Questions'
                        ]
                    ],
                    'title_one' => [
                        'text_html' => [
                            'label' => 'titre 1',
                            'value' => 'Non consectetur a erat nam at lectus urna duis?'
                        ]
                    ],
                    'title_two' => [
                        'text_html' => [
                            'label' => 'titre 2',
                            'value' => 'Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?'
                        ]
                    ],
                    'title_three' => [
                        'text_html' => [
                            'label' => 'titre 3',
                            'value' => 'Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?Wb Universe'
                        ]
                    ],
                    'title_four' => [
                        'text_html' => [
                            'label' => 'titre 4',
                            'value' => 'Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?'
                        ]
                    ],
                    'title_five' => [
                        'text_html' => [
                            'label' => 'titre 5',
                            'value' => 'Tempus quam pellentesque nec nam aliquam sem et tortor consequat?'
                        ]
                    ],
                    'text_one' => [
                        'text_html' => [
                            'label' => 'texte 1',
                            'value' => 'Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.Wb Universe'
                        ]
                    ],
                    'text_two' => [
                        'text_html' => [
                            'label' => 'texte 2',
                            'value' => 'Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.'
                        ]
                    ],
                    'text_three' => [
                        'text_html' => [
                            'label' => 'texte 3',
                            'value' => 'Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.'
                        ]
                    ],
                    'text_four' => [
                        'text_html' => [
                            'label' => 'texte 4',
                            'value' => 'Aperiam itaque sit optio et deleniti eos nihil quidem cumque. Voluptas dolorum accusantium sunt sit enim. Provident consequuntur quam aut reiciendis qui rerum dolorem sit odio. Repellat assumenda soluta sunt pariatur error doloribus fuga.'
                        ]
                    ],
                    'text_five' => [
                        'text_html' => [
                            'label' => 'texte 5',
                            'value' => 'Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in'
                        ]
                    ],
                ]
            ]

                ];
    }
}