<?php

namespace Drupal\spaker_mod\Plugin\Layout\Headers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

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
 *     "link_one" = {
 *       "label" = @Translation("link_one"),
 *      },
 *     "link_two" = {
 *       "label" = @Translation("link_two"),
 *      },
 *     "link_three" = {
 *       "label" = @Translation("link_three"),
 *      },
 *     "link_four" = {
 *       "label" = @Translation("link_four"),
 *      },
 *     "link_five" = {
 *       "label" = @Translation("link_five"),
 *     },
 *     "link_six" = {
 *       "label" = @Translation("link_six"),
 *     },
 *     "sub_link" = {
 *       "label" = @Translation("sub_link"),
 *     },
 *     "sub_link_one" = {
 *       "label" = @Translation("sub_link_one"),
 *     },
 *     "sub_link_two" = {
 *       "label" = @Translation("sub_link_two"),
 *     },
 *     "sub_sub_link_one" = {
 *       "label" = @Translation("sub_sub_link_one"),
 *     },
 *     "sub_sub_link_two" = {
 *       "label" = @Translation("sub_sub_link_two"),
 *     },
 *     "sub_sub_link_three" = {
 *       "label" = @Translation("sub_sub_link_three"),
 *     },
 *     "sub_sub_link_four" = {
 *       "label" = @Translation("sub_sub_link_four"),
 *     },
 *     "sub_sub_link_five" = {
 *       "label" = @Translation("sub_sub_link_five"),
 *     },
 *     "sub_link_three" = {
 *       "label" = @Translation("sub_link_three"),
 *     },
 *     "sub_link_four" = {
 *       "label" = @Translation("sub_link_four"),
 *     },
 *     "sub_link_five" = {
 *       "label" = @Translation("sub_link_five"),
 *     },
 *    "boutton" = {
 *       "label" = @Translation("boutton"),
 *     },
 *  }
 * )
 *
 *
 */
class VesperrHeaderSection extends FormatageModelsSection {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/Vessper_header_map.jpg");
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
          'link' => [
            'text_html' => [
              'label' => 'lien',
              'value' => 'Home'
            ]
          ],
          'link_one' => [
            'text_html' => [
              'label' => 'lien_1',
              'value' => 'About Us'
            ]
          ],
          'link_two' => [
            'text_html' => [
              'label' => 'lien_2',
              'value' => 'Services'
            ]
          ],
          'link_three' => [
            'text_html' => [
              'label' => 'lien_3',
              'value' => 'Portfolio'
            ]
          ],
          'link_four' => [
            'text_html' => [
              'label' => 'lien_4',
              'value' => 'Team'
            ]
          ],
          'link_five' => [
            'text_html' => [
              'label' => 'lien_5',
              'value' => 'Pricing'
            ]
          ],
          'link_six' => [
            'text_html' => [
              'label' => 'lien_6',
              'value' => 'Contact'
            ]
          ],
          'boutton' => [
            'text_html' => [
              'label' => 'boutton',
              'value' => 'Commencer ici'
            ]
          ],
          'logo' => [
            'text_html' => [
              'label' => 'logo',
              'value' => 'Wb Universe'
            ]
          ],
          'sub_link' => [
            'text_html' => [
              'label' => 'sous menu',
              'value' => 'Premier niveau'
            ]
          ],
          'sub_link_one' => [
            'text_html' => [
              'label' => 'sous menu 1',
              'value' => 'sous menu 1'
            ]
          ],
          'sub_link_two' => [
            'text_html' => [
              'label' => 'sous menu 2',
              'value' => 'Deuxième niveau'
            ]
          ],
          'sub_sub_link_one' => [
            'text_html' => [
              'label' => 'sous sous menu 1',
              'value' => 'sous menu 1'
            ]
          ],
          'sub_sub_link_two' => [
            'text_html' => [
              'label' => 'sous sous menu 2',
              'value' => 'sous menu 2'
            ]
          ],
          'sub_sub_link_three' => [
            'text_html' => [
              'label' => 'sous sous menu 3',
              'value' => 'sous menu 3'
            ]
          ],
          'sub_sub_link_four' => [
            'text_html' => [
              'label' => 'sous sous menu 4',
              'value' => 'sous menu 4'
            ]
          ],
          'sub_sub_link_five' => [
            'text_html' => [
              'label' => 'sous sous menu 5',
              'value' => 'sous menu 5'
            ]
          ],
          'sub_link_three' => [
            'text_html' => [
              'label' => 'sous menu 3',
              'value' => 'menu 3'
            ]
          ],
          'sub_link_four' => [
            'text_html' => [
              'label' => 'sous menu 4',
              'value' => 'menu 4'
            ]
          ],
          'sub_link_five' => [
            'text_html' => [
              'label' => 'sous menu 5',
              'value' => 'menu 5'
            ]
          ]
        ]
      ]
    ];
  }
  
}