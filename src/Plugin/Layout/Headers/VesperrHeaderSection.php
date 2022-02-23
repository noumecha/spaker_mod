<?php

namespace Drupal\spaker_mod\Plugin\Layout\Headers;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\FormatageModels;
use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;

/**
 * A Header Layout for vesperr theme : By TMC 
 * 
 * @Layout (
 * 
 *  id = "vesperr_header",
 *  label = @Translation("Vesperr Header by TMC"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/headers",
 *  template = "vesperr_header",
 *  library = "spaker_mod/vesperr_header",
 *  default_region = "navbar",
 *  regions = {
 *     "logo" = {
 *       "label" = @Translation("logo"),
 *     },
 *     "link" = {
 *       "label" = @Translation("link"),
 *     },
 *  }
 * )
 * 
 * 
 */
class VesperrHeaderSection extends FormatageModels
{

  
    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/Vessper_header_map.jpg");
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
                    'link' => [
                        'text_html' => [
                            'label' => 'lien',
                            'value' => 'Home'
                        ]
                    ],
                    'logo' => [
                        'text_html' => [
                            'label' => 'logo',
                            'value' => 'Wb Universe'
                        ]
                    ],
                ]
            ]

                ];
    }
}