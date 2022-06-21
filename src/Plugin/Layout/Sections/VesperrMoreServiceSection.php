<?php

namespace Drupal\spaker_mod\Plugin\Layout\Sections;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\FormatageModels;
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
 *     "link" = {
 *       "label" = @Translation("link"),
 *     },
 *  }
 * )
 * 
 * 
 */
class VesperrMoreServiceSection extends FormatageModels
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
                    'title' => 'Contenu 1',
                    'loader' => 'static'
                ],
                'fields' => [
                    'title_one' => [
                        'text_html' => [
                            'label' => 'titre 1',
                            'value' => '<a href="">Lobira Duno</a>'
                        ]
                    ],
                    'title_two' => [
                        'text_html' => [
                            'label' => 'titre 2',
                            'value' => '<a href="">Lobira Duno</a>'
                        ]
                    ],
                    'title_three' => [
                        'text_html' => [
                            'label' => 'titre 3',
                            'value' => '<a href="">Lobira Duno</a>'
                        ]
                    ],
                    'title_four' => [
                        'text_html' => [
                            'label' => 'titre 4',
                            'value' => '<a href="">Lobira Duno</a>'
                        ]
                    ],
                    'text_one' => [
                        'text_html' => [
                            'label' => 'Paragraphe 1',
                            'value' => 'Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua.'
                        ]
                    ],
                    'text_two' => [
                        'text_html' => [
                            'label' => 'Paragraphe 2',
                            'value' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem.'
                        ]
                    ],
                    'text_three' => [
                        'text_html' => [
                            'label' => 'Paragraphe 3',
                            'value' => 'Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores.'
                        ]
                    ],
                    'text_four' => [
                        'text_html' => [
                            'label' => 'Paragraphe 4',
                            'value' => 'Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.'
                        ]
                    ],
                    'link' => [
                        'text_html' => [
                            'label' => 'titre 1',
                            'value' => '<a href="#">Read More</a>'
                        ]
                    ]
                ]
            ]

        ];
    }
}