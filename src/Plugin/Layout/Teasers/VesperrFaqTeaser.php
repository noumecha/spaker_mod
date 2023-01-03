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
 *  id = "spaker_mod_faq_teaser",
 *  label = @Translation("VesperrFaqTeaser"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/teasers",
 *  template = "vesperr_faq_teaser",
 *  library = "spaker_mod/vesperr_faq_teaser",
 *  default_region = "faq_teaser_svg",
 *  regions = {
 *      "faq_teaser_svg" = {
 *          "label" = @Translation("faq_teaser_svg"),     
 *      },
 *      "faq_teaser_title" = {
 *          "label" = @Translation("faq_teaser_title"),     
 *      },
 *      "faq_teaser_text" = {
 *          "label" = @Translation("faq_teaser_text"),     
 *      },
 *  }
 * )
 * 
 */
class VesperrFaqTeaser extends FormatageModelsTeasers
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/teasers/spaker_mod_vesperr_faq_teaser.png");
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
                    'faq_teaser_svg' => [
                        'text_html' => [
                            'label' => 'contenu',
                            'value' => '<svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                            role="img" width="40" height="40"
                            preserveaspectratio="xMidYMid meet" viewbox="0 0 24 24">
                            <path
                                d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10zm0-2a8 8 0 1 0 0-16a8 8 0 0 0 0 16zm-1-5h2v2h-2v-2zm2-1.645V14h-2v-1.5a1 1 0 0 1 1-1a1.5 1.5 0 1 0-1.471-1.794l-1.962-.393A3.501 3.501 0 1 1 13 13.355z"
                                fill="#8bc4ea" />
                            </svg>'
                        ]
                    ],
                    'faq_teaser_title' => [
                        'text_html' => [
                            'label' => 'contenu',
                            'value' => 'Non consectetur a erat nam at lectus urna duis?'
                        ]
                    ],
                    'faq_teaser_text' => [
                        'text_html' => [
                            'label' => 'contenu',
                            'value' => 'Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.Wb Universe'
                        ]
                    ],
                ]
            ]
        ];
    }

}