<?php

use Ekanesh_prayer\cpt\Sins;
use Ekanesh_prayer\CPT\Prayers;
use Ekanesh_prayer\CPT\Confessions;
use Ekanesh_prayer\Menu\Menu_Group;
use Ekanesh_prayer\Shortcode\Form_Shortcode;

/**
 * Plugin Name: Ekanesh Prayer form
 * Description: Make them Pray
 * Version: 1.0
 * Author: Rolf Siebers
 * Text Domain: ekanesh_prayer
 */

require __DIR__ . '/vendor/autoload.php';

$menu_group     = new Menu_Group();
$confessions    = new Confessions();
$prayer         = new Prayers();
$sins           = new Sins();
$form_shortcode = new Form_Shortcode();
