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
 *  id = "vesperr_price",
 *  label = @Translation("Vesperr price by TMC"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/sections",
 *  template = "vesperr_price",
 *  library = "spaker_mod/vesperr_price",
 *  default_region = "main",
 *  regions = {
 *     "title" = {
 *       "label" = @Translation("title"),
 *     },
 *     "desc" = {
 *       "label" = @Translation("desc"),
 *     },
 *     "contenu" = {
 *       "label" = @Translation("contenu"),
 *     }
 *  }
 * )
 *
 *
 */
class VesperrPriceSection extends FormatageModelsSection
{

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */

    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/Vessper_price_map.jpg");
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

            'header' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu header',
                    'loader' => 'static'
                ],
                'fields' => [
                    'title' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => 'Pricing'
                        ]
                    ],
                    'desc' => [
                        'text_html' => [
                            'label' => 'description',
                            'value' => 'Sit sint consectetur velit nemo qui impedit suscipit alias ea'
                        ]
                    ],
                    'contenu' => [
                        'text_html' => [
                            'label' => 'contenu',
                            'value' => '<ul>
                                    <li>Aida dere</li>
                                    <li>Nec feugiat nisl</li>
                                    <li>Nulla at volutpat dola Nulla at volutpat dolaNulla at volutpat dola</li>
                                    <li>Pharetra massa</li>
                                    <li>Aida dere</li>
                                    <li>Nec feugiat nisl</li>
                                    <li>Nulla at volutpat dola</l
                                    <li>Aida dere</li>
                                    <li>Nec feugiat nisl</li>
                                    <li>Nulla at volutpat dola</li>
                                    <li class="na">Massa ultricies mi</li>
                                </ul>'
                        ]
                    ]
                ]
            ]
        ];
    }
}