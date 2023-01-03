<?php

namespace Drupal\spaker_mod\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
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
 *  default_region = "first_list",
 *  regions = {
 *     "first_list" = {
 *       "label" = @Translation("first_list"),
 *     },
 *     "second_list" = {
 *       "label" = @Translation("second_list"),
 *     },
 *     "third_list" = {
 *       "label" = @Translation("third_list"),
 *     },
 *     "fourth_list" = {
 *       "label" = @Translation("fourth_list"),
 *     },
 *     "teaser_container_one" = {
 *       "label" = @Translation("teaser_container_one"),
 *     },
 *     "teaser_container_two" = {
 *       "label" = @Translation("teaser_container_two"),
 *     },
 *     "teaser_container_three" = {
 *       "label" = @Translation("teaser_container_three"),
 *     },
 *     "teaser_container_four" = {
 *       "label" = @Translation("teaser_container_four"),
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
   
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
         $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/Vessper_portfolio_map.png");
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
                    'first_list' => [
                        'text_html' => [
                            'label' => 'liste 1',
                            'value' => 'All'
                        ]
                    ],
                    'second_list' => [
                        'text_html' => [
                            'label' => 'liste 2',
                            'value' => 'App'
                        ]
                    ],
                    'third_list' => [
                        'text_html' => [
                            'label' => 'liste 3',
                            'value' => 'Card'
                        ]
                    ],
                    'fourth_list' => [
                        'text_html' => [
                            'label' => 'liste 4',
                            'value' => 'Web'
                        ]
                    ],
                    'teaser_container_one' => [
                        'text_html' => [
                            'label' => 'Teaser Container One',
                            'value' => ''
                        ]
                    ],
                    'teaser_container_two' => [
                        'text_html' => [
                            'label' => 'Teaser Container Two',
                            'value' => ''
                        ]
                    ],
                    'teaser_container_three' => [
                        'text_html' => [
                            'label' => 'Teaser Container Three',
                            'value' => ''
                        ]
                    ],
                    'teaser_container_four' => [
                        'text_html' => [
                            'label' => 'Teaser Container Four',
                            'value' => ''
                        ]
                    ],
                ]
            ]

                ];
    }
}