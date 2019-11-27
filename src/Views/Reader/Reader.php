<?

/**
 * mangaghost
 * @license     http://creativecommons.org/licenses/by/3.0/ Creative Commons 3.0
 * @author      Markov Daniil <amaryllisof@gmail.com>
 * @version     dev
 * @date        27/11/2019
 */

namespace Views\Reader;

use Mangaghost\Utils\Singleton;

class Reader extends Singleton
{
    public function output($mangaid, $chapter, $page = 1)
    {
        if ($page < 1){$page = 1;}
        echo "
        <section class='container'>
            <div class='page_container'>
                <img id='mangapage' src='https://339530.selcdn.ru/Animeghost/manga/$mangaid/$chapter/$page.jpg' height='700px'>
            </div>    
            <script lang='js'>
                var manga = $mangaid;
                var chapter = $chapter;
                var page = 1;
            </script>
            <script src='/public/main.js'></script>
        </section>
        ";
    }
}