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
 *  default_region = "main",
 *  regions = {
 *     "author_link" = {
 *       "label" = @Translation("author_link"),
 *     },
 *     "strong_text" = {
 *       "label" = @Translation("strong_text"),
 *     },
 *     "link_one" = {
 *       "label" = @Translation("link_one"),
 *     },
 *     "link_two" = {
 *       "label" = @Translation("link_two"),
 *     },
 *     "link_three" = {
 *       "label" = @Translation("link_three"),
 *     },
 *     "link_four" = {
 *       "label" = @Translation("link_four"),
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
                    'link_one' => [
                        'text_html' => [
                            'label' => 'lien 1',
                            'value' => 'Home'
                        ]
                    ],
                    'link_two' => [
                        'text_html' => [
                            'label' => 'lien 2',
                            'value' => 'About'
                        ]
                    ],
                    'link_three' => [
                        'text_html' => [
                            'label' => 'lien 3',
                            'value' => 'Privacy Policy'
                        ]
                    ],
                    'link_four' => [
                        'text_html' => [
                            'label' => 'lien 4',
                            'value' => 'Terms of use'
                        ]
                    ],
                    'author_link' => [
                        'text_html' => [
                            'label' => 'nom auteur',
                            'value' => 'Noumecha Spaker'
                        ]
                    ],
                    'strong_text' => [
                        'text_html' => [
                            'label' => 'en gras',
                            'value' => 'Vesperr'
                        ]
                    ],
                ]
            ]

                ];
    }
}