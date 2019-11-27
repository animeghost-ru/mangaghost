<?

/**
 * mangaghost
 * @license     http://creativecommons.org/licenses/by/3.0/ Creative Commons 3.0
 * @author      Markov Daniil <amaryllisof@gmail.com>
 * @version     dev
 * @date        27/11/2019
 */

namespace Views\Manga;

use Mangaghost\Utils\Singleton;

class Manga extends Singleton
{
    public function output($manga, $link)
    {
        echo "
        <section class='container'>
            <div class='cnt'>
                <h3>【$manga[1] | $manga[2]】</h3>
                <div class='l'></div>
                <div class='row'>
                    <div class='col-sm-2'>
                        <img class='poster' src='https://339530.selcdn.ru/Animeghost/manga_posters/$link/poster.jpg' width='150px'>
                    </div>
                    <div class='col-sm-10'>
                        $manga[6]
                    </div>
                </div>
                <h4>【Панель управления】</h4>
                <div class='l'></div>
                <div class='row'>
                    <div class='chapters-list'>";
                    for ($i=$manga['chapters']; $i>=1; $i--) {
                        echo "<a href='/read/$link/ch$i?page=1'><div class='chapter'>Глава $i</div></a>";
                    }
                        echo "
                    </div>
                </div>
            </div>
        </section>
        ";
    }
}