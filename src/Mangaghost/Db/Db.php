<?

/**
 * mangaghost
 * @license     http://creativecommons.org/licenses/by/3.0/ Creative Commons 3.0
 * @author      Markov Daniil <amaryllisof@gmail.com>
 * @version     dev
 * @date        27/11/2019
 */

namespace Mangaghost\Db;

use Mangaghost\Utils\Singleton;
use Mangaghost\Config\Config;
use PDO;

class Db extends Singleton
{
    private $db_ip;
    private $db_port;
    private $db_user;
    private $db_pass;
    private $db_base;
    private $PDO;

    protected function __construct()
    {
        $this->db_ip = Config::getInstance()->getDbIp();
        $this->db_port = Config::getInstance()->getDbPort();
        $this->db_user = Config::getInstance()->getDbUser();
        $this->db_pass = Config::getInstance()->getDbPass();
        $this->db_base = Config::getInstance()->getDbBase();
        $this->PDO = new PDO("pgsql:host=$this->db_ip;port=$this->db_port;dbname=$this->db_base", $this->db_user, $this->db_pass);
    }

    public function getMangaInfoByName($name)
    {
        $query = $this->PDO->prepare('SELECT * FROM manga WHERE altname = :name');
        $query->bindParam(':name', $name);
        $query->execute();
        if ($query->rowCount() == 0)
        {
            return false;
        }
        else
        {
            return $query;
        }
    }
}