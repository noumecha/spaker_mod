<?php

namespace Drupal\spaker_mod\Plugin\Layout\Sections;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;
use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;

/**
 * A Header Layout for vesperr theme : By TMC
 *
 * @Layout (
 *
 *  id = "vesperr_hero",
 *  label = @Translation("Vesperr Hero by TMC"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/sections",
 *  template = "vesperr_hero",
 *  library = "spaker_mod/vesperr_hero",
 *  default_region = "title",
 *  regions = {
 *     "image" = {
 *       "label" = @Translation(" Image "),
 *     },
 *     "title" = {
 *       "label" = @Translation("title")
 *     },
 *     "subtitle" = {
 *       "label" = @Translation("sub title")
 *     },
 *     "description" = {
 *       "label" = @Translation("Description")
 *     },
 *     "link" = {
 *       "label" = @Translation("link"),
 *     }
 *  }
 * )
 *
 *
 */
class VesperrHeroSection extends FormatageModelsSection {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/Vessper_hero_map.jpg");
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
      'css' => 'd-flex align-items-center',
      'tmc' => [
        'builder-form' => true,
        'info' => [
          'title' => 'Contenu 1',
          'loader' => 'static'
        ],
        'fields' => [
          'title' => [
            'text_html' => [
              'value' => " Signez plus de chantiers avec un site référencé sur Google ",
              'label' => ' Titre '
            ]
          ],
          'subtitle' => [
            'text_html' => [
              'value' => " Sans engagement / Vous n'avez rien à faire ",
              'label' => ' Sous titre '
            ]
          ],
          'description' => [
            'text_html' => [
              'value' => '<ul class="puce-check">
<li>
Un site web personnalisé pour valoriser votre entreprise : présentation de votre société, description détaillée de vos expertises, vos qualifications, photos de vos réalisations et des avis de vos clients.
</li>
<li>
Un site web personnalisé pour valoriser votre entreprise : présentation de votre société, description détaillée de vos expertises, vos qualifications, photos de vos réalisations et des avis de vos clients.
</li>
</ul>',
              'label' => ' Description '
            ]
          ],
          'image' => [
            'img_bg' => [
              'label' => " Image Bg",
              'fids' => []
            ]
          ],
          'link' => [
            'url' => [
              'label' => "button",
              "value" => [
                "link" => "#",
                "text" => "Ça m'intéresse",
                "class" => "btn d-block btn-outline-primary"
              ]
            ]
          ]
        ]
      ]
    ];
  }
  
}