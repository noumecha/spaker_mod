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
 *     "teaser_container" = {
 *       "label" = @Translation("teaser_container"),
 *     },
 *  }
 * )
 * 
 * 
 */
class VesperrFeaturesSection extends FormatageModelsSection
{

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
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
                    'teaser_container' => [
                        'text_html' => [
                            'label' => 'titre 1',
                            'value' => ''
                        ]
                    ],
                ]
            ]

                ];
    }
}