<?php

namespace Drupal\spaker_mod\Plugin\Layout\Sections;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\FormatageModels;
/**
 * A team section by TMC 
 * 
 * @Layout (
 * 
 *  id = "price_section",
 *  label = @Translation("Price Section (rc-web) by TMC"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/sections",
 *  template = "price_section_rcweb",
 *  library = "spaker_mod/price_section_rcweb",
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
 *     "title_twelwe" = {
 *       "label" = @Translation("title_twelwe"),
 *     },
 *     "title_thirtheen" = {
 *       "label" = @Translation("title_thirtheen"),
 *     },
 *     "title_fourthteen" = {
 *       "label" = @Translation("title_fourthteen"),
 *     },
 *     "btn" = {
 *       "label" = @Translation("btn"),
 *     },
 *  }
 * )
 * 
 * 
 */
class PriceBlock extends FormatageModels
{
    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/rc-web_price_map.jpg");
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
                    'title' => 'configuration du contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'title' => [
                        'text_html' => [
                            'label' => 'titre',
                            'value' => 'BOUTIQUE PROFESSIONNELLE SHOPIFY'
                        ]
                    ],
                    'title_one' => [
                        'text_html' => [
                            'label' => 'titre un',
                            'value' => 'Cr??ation de votre boutique cl?? en main avec Shopify'
                        ]
                    ],
                    'title_two' => [
                        'text_html' => [
                            'label' => 'titre deux',
                            'value' => 'Installation d un th??me professionnel'
                        ]
                    ],
                    'title_three' => [
                        'text_html' => [
                            'label' => 'titre trois',
                            'value' => 'Mise en forme de vos contenus pour 5 pages'
                        ]
                    ],
                    'title_four' => [
                        'text_html' => [
                            'label' => 'titre quatre',
                            'value' => '+ Vos pages de mentions l??gales et RGPD '
                        ]
                    ],
                    'title_five' => [
                        'text_html' => [
                            'label' => 'titre cinq',
                            'value' => '1 formulaire de contact'
                        ]
                    ],
                    'title_six' => [
                        'text_html' => [
                            'label' => 'titre six',
                            'value' => 'Site modifiable par vos soins'
                        ]
                    ],
                    'title_seven' => [
                        'text_html' => [
                            'label' => 'titre sept',
                            'value' => 'Ajout de 5 collections et 30 produits '
                        ]
                    ],
                    'title_height' => [
                        'text_html' => [
                            'label' => 'titre huit',
                            'value' => 'Cr??ation du compte client'
                        ]
                    ],
                    'title_nine' => [
                        'text_html' => [
                            'label' => 'titre neuf',
                            'value' => 'Votre site reli?? ?? vos r??seaux sociaux'
                        ]
                    ],
                    'title_ten' => [
                        'text_html' => [
                            'label' => 'titre neuf',
                            'value' => 'Pages suppl??mentaires possibles'
                        ]
                    ],
                    'title_eleven' => [
                        'text_html' => [
                            'label' => 'titre neuf',
                            'value' => 'Mise ?? jour et maintenance du site durant une ann??e '
                        ]
                    ],
                    'title_twelwe' => [
                        'text_html' => [
                            'label' => 'titre neuf',
                            'value' => 'R??f??rencement SEO simple'
                        ]
                    ],
                    'title_thirtheen' => [
                        'text_html' => [
                            'label' => 'titre neuf',
                            'value' => 'Installation de Google Analytics'
                        ]
                    ],
                    'title_fourthteen' => [
                        'text_html' => [
                            'label' => 'titre neuf',
                            'value' => 'Option : Multilingue +190&thinsp;??? '
                        ]
                    ],
                    'btn' => [
                        'text_html' => [
                            'label' => 'titre neuf',
                            'value' => 'Nous Contacter'
                        ]
                    ],
                ]
            ]

                ];
    }
}