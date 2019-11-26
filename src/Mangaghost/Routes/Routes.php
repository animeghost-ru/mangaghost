<?

/**
 * mangaghost
 * @license     http://creativecommons.org/licenses/by/3.0/ Creative Commons 3.0
 * @author      Markov Daniil <amaryllisof@gmail.com>
 * @version     dev
 * @date        25/11/2019
 */

namespace Mangaghost\Routes;

use Mangaghost\Utils\Singleton;
use Views\Footer\Footer;
use Views\Header\Header;
use Views\SimpleFunctions\Functions;


class Routes extends Singleton
{
    public function __construct()
    {

    }

    public function run()
    {
        $url = $this->UrlDisassemble($_SERVER['REQUEST_URI']);
        if ($url[0] == '')
        {
            Header::getInstance()->output(\Mangaghost\Config\Config::getInstance()->getProjectName());
            Functions::getInstance()->a('/manga', 'mangaPage');
            Functions::getInstance()->p('Index');
            Footer::getInstance()->output();
        }
        elseif ($url[0] == 'manga')
        {
            Header::getInstance()->output(\Mangaghost\Config\Config::getInstance()->getProjectName());
            Functions::getInstance()->a('/', 'indexPage');
            Functions::getInstance()->p('Manga');
            Footer::getInstance()->output();
        }
    }

    public function UrlDisassemble($url)
    {
        $url = substr($url, 1);
        $result = explode("/", $url);
        return $result;
    }
}