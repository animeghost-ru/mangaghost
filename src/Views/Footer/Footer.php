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
        <script src='/public/JS/jquery-3.4.1.min.js'></script>
        <script src='/public/JS/popper.min.js'></script>
        <script src='/public/JS/bootstrap.min.js'></script>    
        <script src='/public/JS/core.js'></script>
    </body>
</html>";
    }
}