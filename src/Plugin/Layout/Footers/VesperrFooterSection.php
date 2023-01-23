<?php

namespace Drupal\spaker_mod\Plugin\Layout\Footers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A Header Layout for vesperr theme : By TMC
 *
 * @Layout (
 *
 *  id = "vesperr_footer",
 *  label = @Translation("Vesperr footer by TMC"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/footers",
 *  template = "vesperr_footer",
 *  library = "spaker_mod/vesperr_footer",
 *  default_region = "copyright",
 *  regions = {
 *     "copyright" = {
 *       "label" = @Translation("copyright"),
 *     },
 *     "footer_links" = {
 *       "label" = @Translation("footer_links"),
 *     },
 *  }
 * )
 *
 *
 */
class VesperrFooterSection extends FormatageModelsSection {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/Vessper_footer_map.jpg");
  }
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels:build()
   */
  public function build(array $regions) {
    
    // TODO Auto-generated method stub
    $build = parent::build($regions);
    FormatageModelsThemes::formatSettingValues($build);
    
    return $build;
  }
  
  public function defaultConfiguration() {
    return parent::defaultConfiguration() + [
      
      'tmc' => [
        'builder-form' => true,
        'info' => [
          'title' => 'Contenu 1',
          'loader' => 'static'
        ],
        'fields' => [
          'footer_links' => [
            'text_html' => [
              'label' => 'lien 1',
              'value' => '<a href="#intro" class="scrollto"> Home </a> 
                        <a href="#about" class="scrollto"> About </a> 
                        <a href="#"> Services </a> 
                        <a href="#"> Contacts </a>'
            ]
          ],
          'copyright' => [
            'text_html' => [
              'label' => 'Copyright',
              'value' => '© Copyright Vesperr All Rights Reserved Designed by Noumecha Spaker'
            ]
          ]
        ]
      ]
    ];
  }
  
}