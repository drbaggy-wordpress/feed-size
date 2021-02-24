<?php
/*
+----------------------------------------------------------------------
| Copyright (c) 2019 Genome Research Ltd.
| This is part of the Wellcome Sanger Institute extensions to
| wordpress.
+----------------------------------------------------------------------
| This extension to Worpdress is free software: you can redistribute
| it and/or modify it under the terms of the GNU Lesser General Public
| License as published by the Free Software Foundation; either version
| 3 of the License, or (at your option) any later version.
|
| This program is distributed in the hope that it will be useful, but
| WITHOUT ANY WARRANTY; without even the implied warranty of
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
| Lesser General Public License for more details.
|
| You should have received a copy of the GNU Lesser General Public
| License along with this program. If not, see:
|     <http://www.gnu.org/licenses/>.
+----------------------------------------------------------------------

# Simple extension to wordpress to be able to pass the number
# of posts wanted from a feed in the URL, by adding a simple '?limit='
# GET parameter.
#
# Author         : js5
# Maintainer     : js5
# Created        : 2019-10-22
# Last modified  : 2019-10-22

 * @package   FeedSize
 * @author    JamesSmith james@jamessmith.me.uk
 * @license   GLPL-3.0+
 * @link      https://jamessmith.me.uk/feed-size/
 * @copyright 2019 James Smith
 *
 * @wordpress-plugin
 * Plugin Name: feed-size
 * Plugin URI:  https://jamessmith.me.uk/feed-size/
 * Description: Allows user to grab back more than 10 posts in feed!
 * Version:     0.1.0
 * Author:      James Smith
 * Author URI:  https://jamessmith.me.uk
 * Text Domain: feed-size-locale
 * License:     GNU Lesser General Public v3
 * License URI: https://www.gnu.org/licenses/lgpl.txt
 * Domain Path: /lang
 */

add_filter( 'option_posts_per_rss', 'my_posts_per_rss' );
function my_posts_per_rss( $option ) {
  if( isset( $_GET['limit'] ) ) {
    return (int) $_GET['limit'] ?: $option;
  }
  return $option;
}
