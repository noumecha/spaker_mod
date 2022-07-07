<?php

namespace Drupal\spaker_mod\Plugin\Layout\Sections;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;
/**
 * A Header Layout for vesperr theme : By TMC 
 * 
 * @Layout (
 * 
 *  id = "vesperr_client",
 *  label = @Translation("Vesperr Client by TMC"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/sections",
 *  template = "vesperr_client",
 *  library = "spaker_mod/vesperr_client",
 *  default_region = "main",
 *  regions = {
 *     "icon_list" = {
 *       "label" = @Translation("link"),
 *     },
 *  }
 * )
 * 
 * 
 */
class VesperrClientSection extends FormatageModelsSection
{

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/Vessper_client_map.jpg");
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
                    'icon_list' => [
                        'text_html' => [
                            'label' => 'lien',
                            'value' => '  <div class="row">

                            <div class="col-lg-2 col-md-4 col-6">

                            <img src="https://bootstrapmade.com/demo/templates/Vesperr/assets/img/clients/client-1.png" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in">

                            </div>

                            <div class="col-lg-2 col-md-4 col-6">

                            <img src="https://bootstrapmade.com/demo/templates/Vesperr/assets/img/clients/client-2.png" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in" data-aos-delay="100">

                            </div>

                            <div class="col-lg-2 col-md-4 col-6">

                            <img src="https://bootstrapmade.com/demo/templates/Vesperr/assets/img/clients/client-3.png" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in" data-aos-delay="200">

                            </div>

                            <div class="col-lg-2 col-md-4 col-6">

                            <img src="	https://bootstrapmade.com/demo/templates/Vesperr/assets/img/clients/client-4.png" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in" data-aos-delay="300">

                            </div>
                            
                            <div class="col-lg-2 col-md-4 col-6">

                            <img src="https://bootstrapmade.com/demo/templates/Vesperr/assets/img/clients/client-5.png" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in" data-aos-delay="400">

                            </div>


                            <div class="col-lg-2 col-md-4 col-6">

                            <img src="https://bootstrapmade.com/demo/templates/Vesperr/assets/img/clients/client-6.png" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in" data-aos-delay="500">
                            
                            </div>
                        </div>'
                        ]
                    ]
                ]
            ]

        ];
    }
}