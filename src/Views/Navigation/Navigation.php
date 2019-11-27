<?

/**
 * mangaghost
 * @license     http://creativecommons.org/licenses/by/3.0/ Creative Commons 3.0
 * @author      Markov Daniil <amaryllisof@gmail.com>
 * @version     dev
 * @date        26/11/2019
 */

namespace Views\Navigation;

Use Mangaghost\Utils\Singleton;

class Navigation extends Singleton
{
    public function __construct()
    {

    }

    public static function output()
    {
        print "
        <nav class='navbar navbar-expand-lg navbar-white bg-white'>
          <a class='navbar-brand' href=''/'>Mangaghost</a>
          <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavAltMarkup' aria-controls='navbarNavAltMarkup' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
          </button>
          <div class='collapse navbar-collapse' id='navbarNavAltMarkup'>
            <div class='navbar-nav'>
              <a class='nav-item nav-link active' href='/'>Главная</a>
              <a class='nav-item nav-link' href='/manga'>Манга</a>
              <a class='nav-item nav-link' href='/profile'>Профиль</a>
            </div>
          </div>
        </nav>
        ";
    }
}