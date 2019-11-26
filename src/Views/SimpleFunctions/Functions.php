<?

/**
 * mangaghost
 * @license     http://creativecommons.org/licenses/by/3.0/ Creative Commons 3.0
 * @author      Markov Daniil <amaryllisof@gmail.com>
 * @version     dev
 * @date        26/11/2019
 */

namespace Views\SimpleFunctions;

use Mangaghost\Utils\Singleton;

class functions extends Singleton
{
    function __construct(){}

    public function a($href = '', $text = '', $class = '')
    {
        print "\n<a href='$href' class='$class'>$text</a>\n";
    }
    public function p($text = '', $class = '')
    {
        print "\n<p class='$class'>$text</p>\n";
    }

}