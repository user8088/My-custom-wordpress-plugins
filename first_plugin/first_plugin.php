<?php
/**
 * @package FirstPlugin
 */

 /*
    Plugin Name: FirstPlugin
    Plugin URI:
    Description: This is my very first custom wordpress plugin. My goal is understand how wp wordpress development works so I can create my own awesome plugins!
    Version: 1.0.0
    Author: Asim Mahmood
    Author URI:
    License: GPLv2 or later
    Text Domain: asims-plugin
 */

 /*
    This program is free software; you can redistribute it and/or
    modify it under the terms of the GNU General Public License
    as published by the Free Software Foundation; either version 2
    of the License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

 //ABSPATH IS A CONSTANT DEFINED BY WORDPRESS THAT REFERENCES THE ROOT AND THE FILE DIRECTORIES OF THE WP SETUP
 //IF ABSPATH IS NOT DEFINED IT MEANS THAT WORDPRESS IS NOT BEING ACCESSED THROUGH AN AUTHERIZED SESSION OR THERE IS SOMETHING WRONG HENCE OPENING UP A VULNERABILITY
 //HENCE IF ABSPATH IS NOT DEFINED WE COMMAND OUR PLUGIN TO TERMINATE.
//  if (!defined('ABSPATH')){
//     die;  
//  }

//ANOTHER WAY TO WRITE THIS :
defined('ABSPATH') or die('You cannot access this file tsk tsk.');

//ANOTHER WAY TO INSURE THAT WORDPRESS IS INITIALIZED OR BEING ACCESSED CORRECTLY IS BY CHECKING A PRE DEFINED 'add_action' FUNCTION
if(!function_exists('add_action')){
    echo 'You cannot access this file tsk tsk.';
    exit;
}