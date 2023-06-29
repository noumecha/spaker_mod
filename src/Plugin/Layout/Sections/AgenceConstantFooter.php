<?php

namespace Drupal\spaker_mod\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Agence constant footer section by TMC
 *
 * @Layout (
 *  id = "agence_constant_footer_section",
 *  label = @Translation("Agence Constant Footer Section"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/sections",
 *  template = "agence_constant_footer",
 *  library = "spaker_mod/agence_constant_footer",
 *  default_region = "content",
 *  regions = {
 *     "video_bg" = {
 *       "label" = @Translation("video_bg"),
 *     },
 *      "first_one" = {
 *       "label" = @Translation("Call to action"),
 *     },
 *      "first_two" = {
 *       "label" = @Translation("Titre 2"),
 *     },
 *     "content_two" = {
 *       "label" = @Translation("Content 2 "),
 *     },
 *      "first_three" = {
 *       "label" = @Translation("Titre 3"),
 *     },
 *     "content_three" = {
 *       "label" = @Translation("Content 3 "),
 *     },
 *      "first_four" = {
 *       "label" = @Translation("Titre 4"),
 *     },
 *     "content_four" = {
 *       "label" = @Translation("Content 3 "),
 *     },
 *      "logo" = {
 *       "label" = @Translation("logo"),
 *     },
 *      "form" = {
 *       "label" = @Translation("form"),
 *     },
 *      "copyright" = {
 *       "label" = @Translation("copyright"),
 *     },
 *      "list_menu" = {
 *       "label" = @Translation("list_menu"),
 *     }
 *  }
 * )
 *
 *
 */
class AgenceConstantFooter extends FormatageModelsSection {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/agence_constant_footer_map.jpg");
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
    return [
      'copyright' => 'col-md-4',
      'list_menu' => 'col-md-8',
      'tmc' => [
        'builder-form' => true,
        'info' => [
          'title' => 'first content & bg',
          'loader' => 'static'
        ],
        'fields' => [
          'video_bg' => [
            'text_html' => [
              'label' => 'video background',
              'value' => '<video class="elementor-background-video-hosted bgvideo elementor-html5-video" autoplay="" muted=""
                                        playsinline="" loop=""
                                        src="https://demo.detheme.com/faber/wp-content/uploads/sites/114/2020/03/highway.webm"
                                        class="bgvideo">
                                    </video>'
            ]
          ],
          'first_one' => [
            'text_html' => [
              'label' => 'column one',
              'value' => '<a href="#">Contactez nous</a>'
            ]
          ],
          'first_two' => [
            'text' => [
              'label' => 'column two',
              'value' => 'Contact'
            ]
          ],
          'content_two' => [
            'text_html' => [
              'label' => 'content_two',
              'value' => '<ul class="fac-ul">
                                            <li class="fac-ul-li">
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="13"
                                                    height="14.86" preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512">
                                                    <path
                                                        d="M436 480h-20V24c0-13.255-10.745-24-24-24H56C42.745 0 32 10.745 32 24v456H12c-6.627 0-12 5.373-12 12v20h448v-20c0-6.627-5.373-12-12-12zM128 76c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12V76zm0 96c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40zm52 148h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12zm76 160h-64v-84c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v84zm64-172c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40zm0-96c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40zm0-96c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12V76c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40z" />
                                                </svg>
                                                <span> Agence Web Universe</span>
                                            <li class="fac-ul-li">
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="13"
                                                    height="23.12" preserveAspectRatio="xMidYMid meet" viewBox="0 0 288 512">
                                                    <path
                                                        d="M112 316.94v156.69l22.02 33.02c4.75 7.12 15.22 7.12 19.97 0L176 473.63V316.94c-10.39 1.92-21.06 3.06-32 3.06s-21.61-1.14-32-3.06zM144 0C64.47 0 0 64.47 0 144s64.47 144 144 144s144-64.47 144-144S223.53 0 144 0zm0 76c-37.5 0-68 30.5-68 68c0 6.62-5.38 12-12 12s-12-5.38-12-12c0-50.73 41.28-92 92-92c6.62 0 12 5.38 12 12s-5.38 12-12 12z" />
                                                </svg>
                                                <span> Hugo de Senger 1205 Yaoundé</span>
                                            </li>
                                            <li class="fac-ul-li">
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="13"
                                                    height="13"
                                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512">
                                                    <path
                                                        d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464c0-11.2-7.7-20.9-18.6-23.4z" />
                                                </svg>
                                                <a href="#"> 076 583 2271</a>
                                            </li>
                                            <li class="fac-ul-li">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                    <path
                                                        d="M191.9 448.6c-9.766 0-19.48-2.969-27.78-8.891L32 340.2V480c0 17.62 14.38 32 32 32h256c17.62 0 32-14.38 32-32v-139.8L220.2 439.5C211.7 445.6 201.8 448.6 191.9 448.6zM192 192c0-35.25 28.75-64 64-64h224V32c0-17.62-14.38-32-32-32H128C110.4 0 96 14.38 96 32v192h96V192zM320 256H64C46.38 256 32 270.4 32 288v12.18l151 113.8c5.25 3.719 12.7 3.734 18.27-.25L352 300.2V288C352 270.4 337.6 256 320 256zM576 160H256C238.4 160 224 174.4 224 192v32h96c33.25 0 60.63 25.38 63.75 57.88L384 416h192c17.62 0 32-14.38 32-32V192C608 174.4 593.6 160 576 160zM544 288h-64V224h64V288z" />
                                                </svg>
                                                <a href="#">wbuniverse@hotmail.com</a>
                                            </li>
                                        </ul>'
            ]
          ],
          'first_three' => [
            'text' => [
              'label' => 'column three',
              'value' => 'Nos services'
            ]
          ],
          'content_three' => [
            'text_html' => [
              'label' => 'content_three',
              'value' => '<ul class="fac-ul">
                                        <li class="fac-ul-li">
                                            <a href="#">Création Site Web</a>
                                        </li>

                                        <li class="fac-ul-li">
                                            <a href="#">Référencement SEO</a>
                                        </li>
                                        <li class="fac-ul-li">
                                            <a href="#">E-Commerce</a>
                                        </li>
                                        <li class="fac-ul-li">
                                            <a href="#">Office 365</a>
                                        </li>
                                        <li class="fac-ul-li">
                                            <a href="#">Sage</a>
                                        </li>

                                        </ul>'
            ]
          ],
          'first_four' => [
            'text_html' => [
              'label' => 'column four',
              'value' => '<div class="col-sm-6 col-lg-3">
                                    <div class="fac-menu">
                                        <h4 class="fac-title">Lien utiles</h4>
                                        <ul class="fac-ul">
                                            <li class="fac-ul-li">
                                                <a href="#">Contact</a>
                                            </li>

                                            <li class="fac-ul-li">
                                                <a href="#">Boutique</a>
                                            </li>
                                            <li class="fac-ul-li">
                                                <a href="#">Nos références</a>
                                            </li>
                                            <li class="fac-ul-li">
                                                <a href="#">Nos tarifs</a>
                                            </li>
                                        </ul>
                                        </div>
                                    </div>'
            ]
          ]
        ]
      ],
      'second' => [
        'builder-form' => true,
        'info' => [
          'title' => 'second content',
          'loader' => 'static'
        ],
        'fields' => [
          'logo' => [
            'text_html' => [
              'label' => 'logo',
              'value' => '<img src="http://agenceconstant.fr/wp-content/uploads/2021/06/logo-blanc-constant.png" alt="">'
            ]
          ],
          'form' => [
            'text_html' => [
              'label' => 'form',
              'value' => ' <input type="emaeil" placeholder="Ton email" class="form-control">
                                <div class="fac-btn">
                                    <a href="#">Inscription</a>
                                </div>'
            ]
          ]
        ]
      ],
      'last' => [
        'builder-form' => true,
        'info' => [
          'title' => 'last content',
          'loader' => 'static'
        ],
        'fields' => [
          'copyright' => [
            'text_html' => [
              'label' => 'copyright',
              'value' => ' <p>© 2021 <strong>Agence Wb-Universe</strong></p>'
            ]
          ],
          'list_menu' => [
            'text_html' => [
              'label' => 'list_menu',
              'value' => ' <ul class="list-menu">
                            <li class="list-menu-item">
                                <a href="#">Mention legal</a>
                            </li>
                            <li class="list-menu-item">
                                <a href="#" class="">CGV</a>
                            </li>
                            <li class="list-menu-item">
                                <a href="#">Contact</a>
                            </li>
                            </li>
                        </ul>'
            ]
          ]
        ]
      ]
    ] + parent::defaultConfiguration();
  }
  
}