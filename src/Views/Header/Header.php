<?

/**
 * mangaghost
 * @license     http://creativecommons.org/licenses/by/3.0/ Creative Commons 3.0
 * @author      Markov Daniil <amaryllisof@gmail.com>
 * @version     dev
 * @date        25/11/2019
 */

namespace Views\Header;

use Mangaghost\Utils\Singleton;

class Header extends Singleton
{
    public function __construct(){}

    public static function output($title)
    {
        print '<!DOCTYPE html>'."\n";
        print "<html>
    <head>
        <title>$title</title>      
        
        <link href='/public/CSS/bootstrap.min.css' type='text/css' rel='stylesheet'>
        <link href='/public/CSS/core.css' type='text/css' rel='stylesheet'>
    </head>
    <body>";
    }
}