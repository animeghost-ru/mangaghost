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
use Mangaghost\Config\Config;
use Views\Header\Header;
use Views\Navigation\Navigation;
use Views\Footer\Footer;
use Views\Manga\Manga;
use Views\Reader\Reader;
use Views\SimpleFunctions\Functions;
use Mangaghost\Db\Db;


class Routes extends Singleton
{
    private $manganamepattern = '/\w+/';
    private $chapterpattern = '/(ch)([0-9]+)/';
    public function __construct(){}

    public function run()
    {

        $url = $this->UrlDisassemble($_SERVER['REQUEST_URI']);

        if ($url['path'][0] == '')
        {
            Header::getInstance()->output(Config::getInstance()->getProjectName().' | Home');
            Navigation::getInstance()->output();
            Footer::getInstance()->output();
        }
        elseif (($url['path'][0] == 'read') & (preg_match($this->manganamepattern, $url['path'][1]) == 1) & (preg_match($this->chapterpattern, $url['path'][2]) == 1)) {
            if (strpos($url['path'][1], '%20') == TRUE) {
                $url_edit = '/read/' . str_replace('%20', '_', $url['path'][1]);
                header('Location: ' . $url_edit);
            } else {
                $manga = Db::getInstance()->getMangaInfoByName(str_replace('_', ' ', $url['path'][1]));
                if ($manga == false) {
                    echo 'Нет такой манги';
                } else {
                    $chapter = substr($url['path'][2], 2);
                    $manga = $manga->fetch();
                    Header::getInstance()->output(Config::getInstance()->getProjectName() . ' | ' . $manga['name']);
                    Navigation::getInstance()->output();
                    Reader::getInstance()->output($manga['id'], $chapter, $url['query']['page']);
                    Footer::getInstance()->output();
                }
            }
        }
        elseif (($url['path'][0] == 'manga') & (preg_match($this->manganamepattern, $url['path'][1]) == 1))
        {
            if (strpos($url['path'][1], '%20') == TRUE)
            {
                $url_edit = '/manga/' . str_replace('%20', '_', $url['path'][1]);
                header('Location: '.$url_edit);
            } else {
                $manga = Db::getInstance()->getMangaInfoByName(str_replace('_', ' ', $url['path'][1]));
                if ($manga == false){
                    echo 'Нет такой манги';
                }else{
                    $manga = $manga->fetch();
                    Header::getInstance()->output(Config::getInstance()->getProjectName().' | '.$manga['name']);
                    Navigation::getInstance()->output();
                    Manga::getInstance()->output($manga, $url['path'][1]);
                    Footer::getInstance()->output();
                }
            }
        }
        elseif ($url['path'][0] == 'manga')
        {
            Header::getInstance()->output(Config::getInstance()->getProjectName().' | Manga');
            Navigation::getInstance()->output();
            Footer::getInstance()->output();
        }
        elseif ($url['path'][0] == 'profile')
        {
            Header::getInstance()->output(Config::getInstance()->getProjectName().' | Profile');
            Navigation::getInstance()->output();
            Footer::getInstance()->output();
        }
    }

    public function UrlDisassemble($url)
    {
        $url = parse_url($url);
        $path = substr($url['path'], 1);
        $result['path'] = explode("/", $path);
        parse_str($url['query'], $result['query']);
        return $result;
    }
}