<?php

namespace Drupal\spaker_mod\Plugin\Layout\Footer;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\FormatageModels;
use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
/**
 * A Header Layout for vesperr theme : By TMC 
 * 
 * @Layout (
 * 
 *  id = "vesperr_footer",
 *  label = @Translation("Vesperr footer by TMC"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/footer",
 *  template = "vesperr_footer",
 *  library = "spaker_mod/vesperr_footer",
 *  default_region = "footer_copy",
 *  regions = {
 *     "author_link" = {
 *       "label" = @Translation("author_link"),
 *     },
 *     "footer_copy" = {
 *       "label" = @Translation("footer_copy"),
 *     },
 *     "footer_links_container" = {
 *       "label" = @Translation("footer_links_container"),
 *     },
 *  }
 * )
 * 
 * 
 */
class VesperrFooterSection extends FormatageModels
{

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/Vessper_footer_map.jpg");
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
                    'footer_copy' => [
                        'text_html' => [
                            'label' => 'Copyright text',
                            'value' => '© Copyright <strong> Vesperr </strong>. All Rights Reserved'
                        ]
                    ],
                    'footer_links_container' => [
                        'text_html' => [
                            'label' => 'Links container',
                            'value' => ''
                        ]
                    ],
                    'author_link' => [
                        'text_html' => [
                            'label' => 'Author Link',
                            'value' => 'Designed by tmc--Spaker'
                        ]
                    ],
                ]
            ]

        ];
    }
}