<?php
/**
 * Created by PhpStorm.
 * User: Lucker
 * Date: 13.01.2016
 * Time: 10:37
 */

//http://php.net/manual/en/language.namespaces.definition.php
namespace limea\db;

//Реализуем паттерн Singleton.
class DbManager
{
    private $host = "limea.mysql";
    private $user = "limea_mysql";
    private $password = "HLCr+Dk8";
    private $database = "limea_db";

    private $DbConn;

    private static $instance;

    private function __construct()
    {
        $this->DbConn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    }

    public static function getInstance()
    {
        if ( is_null( self::$instance ) )
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getYandexToken($userId)
    {
        $queryResult = $this->DbConn->query("select yandex_token from users where id='".$userId."' and yandex_token is not null");
        $values = mysqli_fetch_array($queryResult);

        return is_array($values) ? $values[0] : "";
    }

    public function setYandexToken($userId, $token, $tokenLifespanSeconds)
    {

        print $userId."<br>";
        print $token."<br>";
        print $tokenLifespanSeconds."<br>";

        $now = new \DateTime();
        $now->add(new \DateInterval("PT".$tokenLifespanSeconds."S"));
        print "ok"."<br>";
        print "update users set yandex_token = '".$token."', yandex_token_date = '".$now."' where id='".$userId."'";
        $result = $this->DbConn->query("update users set yandex_token = '".$token."', yandex_token_date = '".$now."' where id='".$userId."'");
        var_dump($result);
    }
}