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
 *  default_region = "menu_nav",
 *  regions = {
 *     "logo" = {
 *       "label" = @Translation("logo"),
 *     },
 *    "button" = {
 *       "label" = @Translation("button"),
 *     },
 *    "menu_nav" = {
 *       "label" = @Translation("menu_nav"),
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
   *
   */
  public function build(array $regions) {

    // TODO Auto-generated method stub
    $build = parent::build($regions);
    FormatageModelsThemes::formatSettingValues($build);
    if (is_array($build['menu_nav']))
      $build['menu_nav'] = $this->getMenus($build['menu_nav']);
    //dump($build['menu_nav']);
    //dump($build);
    return $build;
  }
  /**
   * {@inheritdoc}
   */
  private function getMenus(array $menu_nav) {
      foreach ($menu_nav as $k => $m) {
          if (isset($m['#base_plugin_id']) && $m['#base_plugin_id'] === 'system_menu_block') {
              // set new theme.
              $menu_nav[$k]['content']['#theme'] = 'layoutmenu_vesperr_header_menu';
            
              // add class
              $menu_nav[$k]['content']['#attributes'] = [
                  'class' => [
                      'nav-list'
                  ]
              ];
              // format-it if is not empty
              if (!empty($menu_nav[$k]['content']['#items'])) 
              {
                  $this->formatListMenus($menu_nav[$k]['content']['#items']);
                  //dump($menu_nav[$k]['content']['#items']);
              }
          }
      }
      return $menu_nav;
  }
  /**
   * {@inheritdoc}
   */
  private function formatListMenus(array &$items) {
      foreach ($items as $k => $item) {
          if (!empty($item['attributes'])) {
              /**
               *
               * @var \Drupal\Core\Template\Attribute $attribute
               */
              $attribute = $item['attributes'];
              $attribute->addClass('nav-item');
              // add sub menu
              if ($item['is_expanded']) {
                  $attribute->addClass('sub-alt');
              }
              // menu actif
              if ($item['in_active_trail']) {
                  $attribute->addClass('nav-item--active');
              }
              $items[$k]['attributes'] = $attribute;
              //
              if (!empty($item['below'])) {
                  $this->formatListMenus($item['below']);
                  $items[$k]['below'] = $item['below'];
              }
          }
      }
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
          'button' => [
            'text_html' => [
              'label' => 'button',
              'value' => 'Commencer ici'
            ]
          ],
          'menu_nav' => [
            'text_html' => [
              'label' => 'Navbar container',
              'value' => ''
            ]
          ],
          'logo' => [
            'text_html' => [
              'label' => 'logo',
              'value' => 'Wb Universe'
            ]
          ]
        ]
      ]
    ];
  }
  
}