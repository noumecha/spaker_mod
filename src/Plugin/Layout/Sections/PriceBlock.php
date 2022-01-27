<?php

namespace Drupal\spaker_mod\Plugin\Layout\Sections;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\FormatageModels;
/**
 * A team section by TMC 
 * 
 * @Layout (
 * 
 *  id = "price_section",
 *  label = @Translation("Price Section (rc-web) by TMC"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/sections",
 *  template = "price_section_rcweb",
 *  library = "spaker_mod/price_section_rcweb",
 *  default_region = "title",
 *  regions = {
 *     "title_one" = {
 *       "label" = @Translation("title_one"),
 *     },
 *     "title_two" = {
 *       "label" = @Translation("title_two"),
 *     },
 *     "title_three" = {
 *       "label" = @Translation("title_three"),
 *     },
 *     "title_four" = {
 *       "label" = @Translation("title_four"),
 *     },
 *     "title_five" = {
 *       "label" = @Translation("title_five"),
 *     },
 *  }
 * )
 * 
 * 
 */
class PriceBlock extends FormatageModels
{

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
                    'title' => 'configuration du contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'title_one' => [
                        'text_html' => [
                            'label' => 'titre un',
                            'value' => 'GESTION DE VOS RÉSEAUX SOCIAUX ET CRÉATION DE VOTRE STRATEGIE'
                        ]
                    ],
                    'title_two' => [
                        'text_html' => [
                            'label' => 'titre deux',
                            'value' => 'GESTION DE VOS RÉSEAUX SOCIAUX ET CRÉATION DE VOTRE STRATEGIE'
                        ]
                    ],
                    'title_three' => [
                        'text_html' => [
                            'label' => 'titre trois',
                            'value' => 'GESTION DE VOS RÉSEAUX SOCIAUX ET CRÉATION DE VOTRE STRATEGIE'
                        ]
                    ],
                    'title_four' => [
                        'text_html' => [
                            'label' => 'titre quatre',
                            'value' => 'GESTION DE VOS RÉSEAUX SOCIAUX ET CRÉATION DE VOTRE STRATEGIE'
                        ]
                    ],
                    'title_five' => [
                        'text_html' => [
                            'label' => 'titre cinq',
                            'value' => 'GESTION DE VOS RÉSEAUX SOCIAUX ET CRÉATION DE VOTRE STRATEGIE'
                        ]
                    ],
                ]
            ]

                ];
    }
}