<?php

namespace Drupal\spaker_mod\Plugin\Layout\Sections;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\FormatageModels;
/**
 * Agence constant footer section by TMC 
 * 
 * @Layout (
 * 
 *  id = "agence_constant_footer_section",
 *  label = @Translation("Agence Constant Footer Section"),
 *  category = @Translation("spaker_mod"),
 *  path = "layouts/sections",
 *  template = "agence_constant_footer",
 *  library = "spaker_mod/agence_constant_footer",
 *  default_region = "content",
 *  regions = {
 *     "contenu" = {
 *       "label" = @Translation("contenu"),
 *     },
 *  }
 * )
 * 
 * 
 */
class AgenceConstantFooter extends FormatageModels
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
                    'contenu' => [
                        'text_html' => [
                            'label' => 'contenu',
                            'value' => "

                            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css' />

<section class='footer text-white'>
    <div class='footer-video-container'>

        <video class='elementor-background-video-hosted bgvideo elementor-html5-video' autoplay='' muted=''
         playsinline='' loop='' src='https://demo.detheme.com/faber/wp-content/uploads/sites/114/2020/03/highway.webm' 
         style='width: 100vw;
         min-height: 99vh;
         object-fit: cover;
         position: fixed;' class='bgvideo'>
        </video>

    </div>
    <div class='container-fluid text-center  ac-footer-floating-section-handler'>
        
        <div class='ac-elements align-item-center container'>
            <div class='row text-center text-md-left'>
                <div class='col-lg-3 col-sm-12 ac-second-col-handler col-md-8 col-xl-3 mx-auto mt-3'>
                    <h5 class='text-uppercase mb-5 font-weight-bold text-warning'></h5>
                    <button class='btn btn-success mt-5 text-dark button btn-lg active p-3 w-75' style='font-size: 14px;'>
                        <a href='#'>NOUS CONTACTER</a>
                    </button>
                </div>
                <div class='col-md-4 col-sm-12 mt-5  col-lg-3  mx-auto'>
                    <h5 class='text-uppercase mb-5 font-weight-bold text-warning'>CONTACT</h5>
                    <p>
                        <span class='mr-2'>
                            <svg xmlns='http://www.w3.org/2000/svg' aria-hidden='true' role='img' width='13' height='14.86' preserveAspectRatio='xMidYMid meet' viewBox='0 0 448 512'><path d='M436 480h-20V24c0-13.255-10.745-24-24-24H56C42.745 0 32 10.745 32 24v456H12c-6.627 0-12 5.373-12 12v20h448v-20c0-6.627-5.373-12-12-12zM128 76c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12V76zm0 96c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40zm52 148h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12zm76 160h-64v-84c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v84zm64-172c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40zm0-96c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40zm0-96c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12V76c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40z' fill='white'/></svg>
                        </span>
                        <span class='text-white'> Agence Web Constant</span>
                    </p>
                    <p>
                        <span class='mr-2'>
                            <svg xmlns='http://www.w3.org/2000/svg' aria-hidden='true' role='img' width='13' height='23.12' preserveAspectRatio='xMidYMid meet' viewBox='0 0 288 512'><path d='M112 316.94v156.69l22.02 33.02c4.75 7.12 15.22 7.12 19.97 0L176 473.63V316.94c-10.39 1.92-21.06 3.06-32 3.06s-21.61-1.14-32-3.06zM144 0C64.47 0 0 64.47 0 144s64.47 144 144 144s144-64.47 144-144S223.53 0 144 0zm0 76c-37.5 0-68 30.5-68 68c0 6.62-5.38 12-12 12s-12-5.38-12-12c0-50.73 41.28-92 92-92c6.62 0 12 5.38 12 12s-5.38 12-12 12z' fill='white'/></svg>
                        </span>
                        <span class='text-white' > Hugo de senger 1205 Genève</span>
                    </p>
                    <p>
                        <span class='mr-2'>
                            <svg xmlns='http://www.w3.org/2000/svg' aria-hidden='true' role='img' width='13' height='13' preserveAspectRatio='xMidYMid meet' viewBox='0 0 512 512'><path d='M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464c0-11.2-7.7-20.9-18.6-23.4z' fill='white'/></svg>
                        </span>
                        <span class='text-white' > 076 583 2271</span>
                    </p>
                    <p>
                        <span class='iconify mr-2' data-icon='fa-solid:mail-bulk' style='color: white;' data-width='14'></span>
                        <a href='mailto:constant@agenceconstant.ch' class='text-white' style='text-decoration: none;'>constant@agenceconstant.ch</a>
                    </p>
                </div>
                <div class='col-md-4 col-sm-12 col-lg-2 col-xl-2 mx-auto mt-5'>
                    <h5 class='text-uppercase mb-5 font-weight-bold text-warning'>NOS SERVICES</h5>
                    <p>
                        <span class='text-white' style='text-decoration: none;'>Création Site Web</span>
                    </p>
                    <p>
                        <a href='#' class='text-white' style='text-decoration: none;'>Référencement SEO</a>
                    </p>
                    <p>
                        <a href='#' class='text-white' style='text-decoration: none;'>E-Commerce</a>
                    </p>
                    <p>
                        <a href='#' class='text-white' style='text-decoration: none;'>Office 365</a>
                    </p>
                    <p>
                        <a href='#' class='text-white' style='text-decoration: none;'>Sage</a>
                    </p>
                </div>
                <div class='col-md-4 col-sm-12 col-lg-3 col-xl-3 mx-auto mt-5'>
                    <h5 class='text-uppercase mb-5 font-weight-bold text-warning'>LIENS UTILES</h5>
                    <p>
                        <a href='#' class='text-white' style='text-decoration: none;'> Contact</a>
                    </p>
                    <p>
                        <a href='#' class='text-white' style='text-decoration: none;'>Boutique</a>
                    </p>
                    <p>
                        <a href='#' class='text-white' style='text-decoration: none;'> Nos références</a>
                    </p>
                    <p>
                        <a href='#' class='text-white' style='text-decoration: none;'> Mon Compte</a>
                    </p>
                </div>
            </div>
            <br><br><br><br>
            <hr class='line'>
            <br><br><br><br>
           
              <div class='img'>
                        <img src='https://agenceconstant.ch/wp-content/uploads/2021/06/logo-blanc-constant.png' class='col-lg-5'  style='height: 80px; width: 300px;' alt=''>
                    </div>
                <div class='justify-content-md-center ml-5'>
                  
                    <div class='input-group fgrp  justify-content-md-center ml-1'>
                        <br>
                        <input type='email'  placeholder='votre email' class='form-control col-lg-5 mt-5 mr-5 p-4 mb-5 input' >
                        <input type='submit' value='INSCRIPTION' class='inbut  mt-5'>
                    </div>
    
                </div>
            <hr class='line'>
            <div class='row align-items-center'>
                <div class='col-md-7 col-lg-8 copyright'>
                    <p>© 2021 Agence Web Constant</p>
                    
                </div>
                <div class='col-md-5 col-lg-4 last'>
                    <div class='text-center last-list text-md-right'>
                        <ul class='list-unstyled list-inline'>
                            <li class='list-inline-item'>
                                <a href='#' class='btn-floating btn-sm list-el' style='font-style: 23px;'>Mention legal</a>
                            </li>
    
                            <li class='list-inline-item'>
                                <a href='#' class='btn-floating btn-sm  list-el' style='font-style: 23px;'>CGV</a>
                            </li>
    
                            <li class='list-inline-item'>
                                <a href='#' class='btn-floating btn-sm  list-el' style='font-style: 23px;'>Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

                            "
                        ]
                    ],
                ]
            ]

                ];
    }
}