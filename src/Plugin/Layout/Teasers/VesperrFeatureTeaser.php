<?php

namespace Drupal\spaker_mod\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * 
 * Fast models fn controls teaser 
 * 
 * @Layout (
 *  id = "spaker_mod_feature_teaser",
 *  label = @Translation("Vesperr_feature_teaser"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/teasers",
 *  template = "vesperr_feature_teaser",
 *  library = "spaker_mod/vesperr_feature_teaser",
 *  default_region = "feature_svg",
 *  regions = {
 *      "feature_svg" = {
 *          "label" = @Translation("feature_svg"),     
 *      },
 *      "feature_title" = {
 *          "label" = @Translation("feature_title"),     
 *      },
 *  }
 * )
 * 
 */
class VesperrFeatureTeaser extends FormatageModelsTeasers
{

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager)
    {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/teasers/spaker_mod_vesperr_feature_teaser.png");
    }

    /**
     * 
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels:build()
     * 
     */
    public function build(array $regions) 
    {
        
        // TODO Auto-generated method stub
        $build = parent::build($regions);
        FormatageModelsThemes::formatSettingValues($build);
        
        return $build;
    }

    /**
     * 
     * {@inheritdoc}
     */
    public function defaultConfiguration()
    {
        return parent::defaultConfiguration() + [
            'css' => '',
            'fmct' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'feature_svg' => [
                        'text_html' => [
                            'label' => 'SVG',
                            'value' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" preserveaspectratio="xMidYMid meet" viewbox="0 0 24 24"><path d="M21 11.646V21a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-9.354A3.985 3.985 0 0 1 2 9V3a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v6a3.99 3.99 0 0 1-1 2.646zm-2 1.228a4.007 4.007 0 0 1-4-1.228A3.99 3.99 0 0 1 12 13a3.99 3.99 0 0 1-3-1.354a3.99 3.99 0 0 1-4 1.228V20h14v-7.126zM14 9a1 1 0 0 1 2 0a2 2 0 1 0 4 0V4H4v5a2 2 0 1 0 4 0a1 1 0 1 1 2 0a2 2 0 1 0 4 0z" fill="#ffbb2c"/>
                                        </svg>'
                        ]
                    ],
                    'feature_title' => [
                        'text_html' => [
                            'label' => 'Title',
                            'value' => 'Feature'
                        ]
                    ],
                ]
            ]
        ];
    }

}