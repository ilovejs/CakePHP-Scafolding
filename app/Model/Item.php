<?php
/**
 * Model naming convention:
 * 1. singular
 * 2. camel case
 * Examples:
 *      PinkCake.php
 *
 * Database convention:
 * 1. all name map to model name
 * 2. pluralized
 * 3. all lowercase
 * 4. underscore to separate multiple words
 * Examples:
 *      Pastry.php -> pastries
 *      PuffPastry.php -> puff_pastries
 *
 * Foreign Keys:
 * singular name of table followed by _id
 * Examples:
 *      cakes table -> cake_id
 *      puff_pastries -> puff_pastry_id
 */

class Item extends AppModel {

}