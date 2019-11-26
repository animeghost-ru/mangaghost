<?

/**
 * mangaghost
 * @license     http://creativecommons.org/licenses/by/3.0/ Creative Commons 3.0
 * @author      Markov Daniil <amaryllisof@gmail.com>
 * @version     dev
 * @date        26/11/2019
 */

namespace Views\Footer;

use Mangaghost\Utils\Singleton;

class Footer extends Singleton
{
    public function __construct(){}

    public static function output()
    {
        print "    
    </body>
</html>";
    }
}