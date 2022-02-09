<?php

namespace Drupal\spaker_mod\Plugin\Layout\Pages;

use Drupal\formatage_models\Plugin\Layout\FormatageModels;

/**
 *  Home page with spaker_mod 
 * 
 * @Layout(
 * 
 *  id = "spaker_mod_home_page",
 *  label = @Translation("Home page TMC"),
 *  category = @Translation("Spaker Mod"),
 *  path = "layouts/pages",
 *  template = "spaker_mod_home_page",
 *  library = "spaker_mod/spaker_mod_home_page",
 *  default_region = "body",
 *  regions = {
 *      "title" = {
 *          "label" = @Translation("Title"),
 *      },
 *      "big_image" = {
 *          "label" = @Translation("BigImage"),
 *      },
 *      "body" = {
 *          "label" = @Translation("body"),
 *      }
 *  }
 * 
 * )
 */
class SpakerModHomePage extends FormatageModels
{

}