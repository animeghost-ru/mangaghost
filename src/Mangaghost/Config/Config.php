<?

/**
 * mangaghost
 * @license     http://creativecommons.org/licenses/by/3.0/ Creative Commons 3.0
 * @author      Markov Daniil <amaryllisof@gmail.com>
 * @version     dev
 * @date        25/11/2019
 */

namespace Mangaghost\Config;

use Mangaghost\Utils\Singleton;

class Config extends Singleton
{
    private $db_ip;
    private $db_port;
    private $db_user;
    private $db_pass;
    private $db_base;
    private $project_name;

    public function __construct()
    {
        if (file_exists(APP_ROOT . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "config.ini")) {
            $config = parse_ini_file(APP_ROOT . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "config.ini");

            $this->db_ip = $config['IP'];
            $this->db_port = $config['PORT'];
            $this->db_user = $config['USER'];
            $this->db_pass = $config['PASS'];
            $this->db_base = $config['BASE'];
            $this->project_name = $config['NAME'];
        }
    }


    public function getDbBase()
    {
        return $this->db_base;
    }

    public function getDbIp()
    {
        return $this->db_ip;
    }

    public function getDbPass()
    {
        return $this->db_pass;
    }

    public function getDbPort()
    {
        return $this->db_port;
    }

    public function getDbUser()
    {
        return $this->db_user;
    }

    public function getProjectName()
    {
        return $this->project_name;
    }
}