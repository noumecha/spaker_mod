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
 *  id = "vesperr_about",
 *  label = @Translation("Vesperr About by TMC"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/sections",
 *  template = "vesperr_about",
 *  library = "spaker_mod/vesperr_about",
 *  default_region = "main",
 *  regions = {
 *     "title" = {
 *       "label" = @Translation("title"),
 *     },
 *     "text_one" = {
 *       "label" = @Translation("text_one"),
 *     },
 *     "text_two" = {
 *       "label" = @Translation("text_two"),
 *     },
 *     "list_item_1" = {
 *       "label" = @Translation("list_item_1"),
 *     },
 *     "list_item_2" = {
 *       "label" = @Translation("list_item_2"),
 *     },
 *     "list_item_3" = {
 *       "label" = @Translation("list_item_3"),
 *     },
 *     "link" = {
 *       "label" = @Translation("link"),
 *     },
 *  }
 * )
 * 
 * 
 */
class VesperrAboutSection extends FormatageModelsSection
{

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */

public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/Vessper_about_map.jpg");
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
                            'value' => 'About Us'
                        ]
                    ],
                    'text_one' => [
                        'text_html' => [
                            'label' => 'paragraphe 1',
                            'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua.Wb Universe'
                        ]
                    ],
                    'text_two' => [
                        'text_html' => [
                            'label' => 'titre',
                            'value' => 'About Us'
                        ]
                    ],
                    'list_item_1' => [
                        'text_html' => [
                            'label' => 'élément 1',
                            'value' => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat'
                        ]
                    ],
                    'list_item_2' => [
                        'text_html' => [
                            'label' => 'élément 2',
                            'value' => 'Duis aute irure dolor in reprehenderit in voluptate velit'
                        ]
                    ],
                    'list_item_3' => [
                        'text_html' => [
                            'label' => 'élément 3',
                            'value' => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat'
                        ]
                    ],
                    'text_two' => [
                        'text_html' => [
                            'label' => 'paragraphe 2',
                            'value' => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.'
                        ]
                    ],
                    'link' => [
                        'text_html' => [
                            'label' => 'lien',
                            'value' => 'Learn More'
                        ]
                    ],
                ]
            ]

                ];
    }
}