<?php

namespace Drupal\spaker_mod\Plugin\Layout\Sections;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;
/**
 * Agence constant service section by TMC
 *
 * @Layout (
 *
 *  id = "agence_constant_service_section",
 *  label = @Translation("Agence Constant Service Section"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/sections",
 *  template = "agence_constant_services",
 *  library = "spaker_mod/agence_constant_services",
 *  default_region = "title",
 *  regions = {
 *     "image" = {
 *       "label" = @Translation("image"),
 *      },
 *      "sub_title" = {
 *       "label" = @Translation("sub_title"),
 *      },
 *      "title" = {
 *       "label" = @Translation("title"),
 *      },
 *       "desc" = {
 *       "label" = @Translation("desc"),
 *      },
 *      "contenu" = {
 *       "label" = @Translation("contenu"),
 *     },
 *  }
 * )
 *
 *
 */
class AgenceConstantService extends FormatageModelsSection
{

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'spaker_mod') . "/icons/agence_constant_service_map.jpg");
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
                    'title' => 'configuration du contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'image' => [
                        'text_html' => [
                            'label' => 'image',
                            'value' => 'img src="https://agenceconstant.ch/wp-content/uploads/2021/06/sigmund-KAN4bY3oqSw-unsplash-scaled.jpg"
                                 alt="">'
                        ]
                    ],
                    'sub_title' => [
                        'text_html' => [
                            'label' => 'Sous titre',
                            'value' => " AGENCE WEB CONSTANT"
                        ]
                    ],
                    'title' => [
                        'text_html' => [
                            'label' => 'titre',
                            'value' => "Nos services"
                        ]
                    ],
                    'desc' => [
                        'text_html' => [
                            'label' => 'description',
                            'value' => " Services et solutions informatiques personnalisés, conçus spécifiquement pour vos
                                    besoins"
                        ]
                    ],
                    'contenu' => [
                        'text_html' => [
                            'label' => 'Contenu',
                            'value' => '
                                    <div class="row">
                                        <div class=" col-md-6   ">

                                            <div class="sac-service">

                                                <div class="icon">
                                                    <!-- <span class="fas fa-globe "></span> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img"
                                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64">
                                                        <path
                                                            d="M32 2C15.459 2 2 15.459 2 32c0 16.543 13.459 30 30 30c16.542 0 30-13.457 30-30C62 15.459 48.543 2 32 2m20.047 46.204a30.013 30.013 0 0 0-3.793-2.923a30.03 30.03 0 0 0 3.012-10.859h6.41a25.678 25.678 0 0 1-5.629 13.782M6.326 34.422h6.297a30.071 30.071 0 0 0 3.039 10.914a30.24 30.24 0 0 0-3.709 2.868a25.66 25.66 0 0 1-5.627-13.782m5.627-18.625a29.749 29.749 0 0 0 3.709 2.867a30.02 30.02 0 0 0-3.084 11.547H6.273a25.67 25.67 0 0 1 5.68-14.414m17.942-6.238v9.648a25.472 25.472 0 0 1-8.367-2.125a25.825 25.825 0 0 1 8.367-7.523m0 13.869v6.783H16.797a25.589 25.589 0 0 1 2.557-9.488a29.666 29.666 0 0 0 10.541 2.705m0 10.994v6.15a29.667 29.667 0 0 0-10.574 2.723a25.727 25.727 0 0 1-2.473-8.873h13.047m0 10.373v9.668a25.508 25.508 0 0 1-8.412-7.523a25.428 25.428 0 0 1 8.412-2.145m4.21 9.58v-9.58c2.895.23 5.682.938 8.277 2.084a25.864 25.864 0 0 1-8.277 7.496m0-13.803v-6.15h12.934a25.584 25.584 0 0 1-2.488 8.812a29.692 29.692 0 0 0-10.446-2.662m0-10.361v-6.783a29.665 29.665 0 0 0 10.451-2.662a25.598 25.598 0 0 1 2.535 9.445H34.105m0-11.004V9.623a25.862 25.862 0 0 1 8.283 7.496a25.45 25.45 0 0 1-8.283 2.088m10.428-6.241a30.08 30.08 0 0 0-6.918-6.138a25.73 25.73 0 0 1 11.523 5.92a25.575 25.575 0 0 1-3.016 2.333a28.674 28.674 0 0 0-1.589-2.115m-25.178.001A29.522 29.522 0 0 0 17.8 15.03a25.816 25.816 0 0 1-2.939-2.281a25.746 25.746 0 0 1 11.355-5.883a30.021 30.021 0 0 0-6.861 6.101m-1.554 36.004c.408.594.838 1.174 1.291 1.738a30.048 30.048 0 0 0 7.129 6.428a25.736 25.736 0 0 1-11.359-5.884a25.687 25.687 0 0 1 2.939-2.282m26.773 2.013a30.121 30.121 0 0 0 1.551-2.064a25.72 25.72 0 0 1 3.014 2.333a25.746 25.746 0 0 1-11.523 5.92a30.077 30.077 0 0 0 6.958-6.189m6.737-20.773a29.967 29.967 0 0 0-3.057-11.492a29.912 29.912 0 0 0 3.793-2.922a25.66 25.66 0 0 1 5.68 14.414h-6.416" />
                                                    </svg>

                                                </div>

                                                <div class="text-content">
                                                    <h2 class="tc-title"><a href="#">CONCEPTION DE SITE WEB</a> </h2>
                                                    <div class="tc-desc">
                                                        24/7 maintenance and monitoring that keeps your computers, servers, and
                                                        users up
                                                        and
                                                        running.
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col-md-6  ">

                                            <div class="sac-service">

                                                <div class="icon">
                                                    <!-- span class="fas fa-pen-square  "></!-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img"
                                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 1536 1536">
                                                        <path
                                                            d="M404 980l152 152l-52 52h-56v-96h-96v-56zm414-390q14 13-3 30L524 911q-17 17-30 3q-14-13 3-30l291-291q17-17 30-3zm-274 690l544-544l-288-288l-544 544v288h288zm608-608l92-92q28-28 28-68t-28-68l-152-152q-28-28-68-28t-68 28l-92 92zm384-384v960q0 119-84.5 203.5T1248 1536H288q-119 0-203.5-84.5T0 1248V288Q0 169 84.5 84.5T288 0h960q119 0 203.5 84.5T1536 288z" />

                                                    </svg>

                                                </div>
                                                <div class="text-content">
                                                    <h2 class="tc-title"> TRADUCTION SITES WEB </h2>
                                                    <div class="tc-desc">
                                                        Protect your business from malware, hackers, viruses and the most commonly
                                                        security.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6  ">

                                            <div class="sac-service">

                                                <div class="icon">
                                                    <!-- span class="fas fa-pen-square  "></!-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <path
                                                            d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z" />
                                                    </svg>

                                                </div>
                                                <div class="text-content">
                                                    <h2 class="tc-title"> BOUTIQUE E-COMMERCE </h2>
                                                    <div class="tc-desc">
                                                        Managed Microsoft Azure. Server infrastructure in the cloud. Migration,
                                                        Optimisation, Monitoring & Protection
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6  ">
                                            <div class="sac-service">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                        <path
                                                            d="M144 480C64.47 480 0 415.5 0 336C0 273.2 40.17 219.8 96.2 200.1C96.07 197.4 96 194.7 96 192C96 103.6 167.6 32 256 32C315.3 32 367 64.25 394.7 112.2C409.9 101.1 428.3 96 448 96C501 96 544 138.1 544 192C544 204.2 541.7 215.8 537.6 226.6C596 238.4 640 290.1 640 352C640 422.7 582.7 480 512 480H144zM303 392.1C312.4 402.3 327.6 402.3 336.1 392.1L416.1 312.1C426.3 303.6 426.3 288.4 416.1 279C407.6 269.7 392.4 269.7 383 279L344 318.1V184C344 170.7 333.3 160 320 160C306.7 160 296 170.7 296 184V318.1L256.1 279C247.6 269.7 232.4 269.7 223 279C213.7 288.4 213.7 303.6 223 312.1L303 392.1z" />
                                                    </svg>
                                                </div>
                                                <div class="text-content">
                                                    <h2 class="tc-title"> SOLUTIONS CLOUD </h2>
                                                    <div class="tc-desc">
                                                        The right connectivity is paramount to the success of your cloud
                                                        environment.
                                                        VoIP/SIP telecom solutions
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6  ">
                                            <div class="sac-service">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img"
                                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                                        <path
                                                            d="M16 3c-3.844 0-7 3.156-7 7v3H6v16h20V13h-3v-3c0-3.844-3.156-7-7-7zm0 2c2.754 0 5 2.246 5 5v3H11v-3c0-2.754 2.246-5 5-5zM8 15h16v12H8z" />
                                                    </svg>
                                                </div>
                                                <div class="text-content">
                                                    <h2 class="tc-title"> SÉCURITÉ AVEC VPN & FIREWALL</h2>
                                                    <div class="tc-desc">
                                                        Managed Microsoft Azure. Server infrastructure in the cloud. Migration,
                                                        Optimisation, Monitoring & Protection
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6  ">
                                            <div class="sac-service">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img"
                                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                                        <path
                                                            d="M27.4 14.7l-6.1-6.1C21 8.2 20.5 8 20 8h-8c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V16.1c0-.5-.2-1-.6-1.4zM20 10l5.9 6H20v-6zm-8 18V10h6v6c0 1.1.9 2 2 2h6v10H12z" />
                                                        <path d="M6 18H4V4c0-1.1.9-2 2-2h14v2H6v14z" />
                                                    </svg>
                                                </div>
                                                <div class="text-content">
                                                    <h2 class="tc-title">GESTION ELECTRONIQUE DES DOCUMENTS </h2>
                                                    <div class="tc-desc">
                                                        The right connectivity is paramount to the success of your cloud
                                                        environment. VoIP/SIP telecom solutions
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6  ">
                                            <div class="sac-service">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img"
                                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512">
                                                        <path
                                                            d="M480 160H32c-17.673 0-32-14.327-32-32V64c0-17.673 14.327-32 32-32h448c17.673 0 32 14.327 32 32v64c0 17.673-14.327 32-32 32zm-48-88c-13.255 0-24 10.745-24 24s10.745 24 24 24s24-10.745 24-24s-10.745-24-24-24zm-64 0c-13.255 0-24 10.745-24 24s10.745 24 24 24s24-10.745 24-24s-10.745-24-24-24zm112 248H32c-17.673 0-32-14.327-32-32v-64c0-17.673 14.327-32 32-32h448c17.673 0 32 14.327 32 32v64c0 17.673-14.327 32-32 32zm-48-88c-13.255 0-24 10.745-24 24s10.745 24 24 24s24-10.745 24-24s-10.745-24-24-24zm-64 0c-13.255 0-24 10.745-24 24s10.745 24 24 24s24-10.745 24-24s-10.745-24-24-24zm112 248H32c-17.673 0-32-14.327-32-32v-64c0-17.673 14.327-32 32-32h448c17.673 0 32 14.327 32 32v64c0 17.673-14.327 32-32 32zm-48-88c-13.255 0-24 10.745-24 24s10.745 24 24 24s24-10.745 24-24s-10.745-24-24-24zm-64 0c-13.255 0-24 10.745-24 24s10.745 24 24 24s24-10.745 24-24s-10.745-24-24-24z" />
                                                    </svg>
                                                </div>
                                                <div class="text-content">
                                                    <h2 class="tc-title"> MISE EN PLACE DES DHIS2 </h2>
                                                    <div class="tc-desc">
                                                        Managed Microsoft Azure. Server infrastructure in the cloud. Migration,
                                                        Optimisation, Monitoring & Protection
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="sac-service">

                                                <div class="icon">

                                                    <!-- span class="fas fa-tools "></!-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img"
                                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                                        <path
                                                            d="M10.3 8.2l-.9.9l.9.9l-1.2 1.2l4.3 4.3c.6.6 1.5.6 2.1 0s.6-1.5 0-2.1l-5.2-5.2zm3.9 6.8c-.4 0-.8-.3-.8-.8c0-.4.3-.8.8-.8s.8.3.8.8s-.3.8-.8.8z" />
                                                        <path
                                                            d="M3.6 8l.9-.6L6 5.7l.9.9l.9-.9l-.1-.1c.2-.5.3-1 .3-1.6c0-2.2-1.8-4-4-4c-.6 0-1.1.1-1.6.3l2.9 2.9l-2.1 2.1L.3 2.4C.1 2.9 0 3.4 0 4c0 2.1 1.6 3.7 3.6 4z" />
                                                        <path
                                                            d="M8 10.8l.9-.8l-.9-.9l5.7-5.7l1.2-.4L16 .8l-.7-.7l-2.3 1l-.5 1.2L6.9 8L6 7.1l-.8.9s.8.6-.1 1.5c-.5.5-1.3-.1-2.8 1.4L.2 13s-.6 1 .6 2.2s2.2.6 2.2.6l2.1-2.1c1.4-1.4.9-2.3 1.3-2.7c.9-.9 1.6-.2 1.6-.2zm-3.1-.4l.7.7l-3.8 3.8l-.7-.7z" />
                                                    </svg>

                                                </div>
                                                <div class="text-content">
                                                    <h2 class="tc-title"> DÉPANNAGE INFORMATIQUE</h2>
                                                    <div class="tc-desc">
                                                        The right connectivity is paramount to the success of your cloud
                                                        environment.
                                                        VoIP/SIP telecom solutions
                                                    </div>
                                                </div>


                                            </div>

                                        </div>
                                </div>
                            '
                        ]
                    ]
                ]
            ]

        ];
    }
}
