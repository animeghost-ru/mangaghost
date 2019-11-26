<?

/**
* mangaghost
* @license     http://creativecommons.org/licenses/by/3.0/ Creative Commons 3.0
* @author      Markov Daniil <amaryllisof@gmail.com>
* @version     dev
* @date        25/11/2019
*/

define('APP_ROOT', __DIR__ . DIRECTORY_SEPARATOR);

require_once(APP_ROOT . 'autoload.php');

use \Mangaghost\Routes\Routes;

Routes::getInstance()->run();