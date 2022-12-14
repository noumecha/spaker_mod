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
 *  id = "spaker_mod_porto_teaser",
 *  label = @Translation("vesperr_porto_teaser"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/teasers",
 *  template = "vesperr_porto_teaser",
 *  library = "spaker_mod/vesperr_porto_teaser",
 *  default_region = "porto_teaser_image",
 *  regions = {
 *      "porto_teaser_image" = {
 *          "label" = @Translation("teaser_image"),     
 *      },
 *      "porto_teaser_title" = {
 *          "label" = @Translation("teaser_links"),     
 *      },
 *      "porto_teaser_links" = {
 *          "label" = @Translation("teaser_links"),     
 *      },
 *  }
 * )
 * 
 */
class VesperrPortoTeaser extends FormatageModelsTeasers
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/teasers/spaker_mod_vesperr_porto_teaser.png");
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
                    'porto_teaser_image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => '<img src="https://bootstrapmade.com/demo/templates/Vesperr/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""> '
                        ]
                    ],
                    'porto_teaser_title' => [
                        'text_html' => [
                            'label' => 'Title',
                            'value' => 'Feature'
                        ]
                    ],
                    'porto_teaser_links' => [
                        'text_html' => [
                            'label' => 'Links Container',
                            'value' => '<a href="https://bootstrapmade.com/demo/templates/Vesperr/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1">
                                            <i class="bx bx-plus"></i>
                                        </a>
                                        <a href="portfolio-details.html" title="More Details">
                                            <i class="bx bx-link"></i>
                                        </a>'
                        ]
                    ],
                ]
            ]
        ];
    }

}