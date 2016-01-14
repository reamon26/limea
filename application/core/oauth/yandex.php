<?php
//http://php.net/manual/en/language.namespaces.definition.php
namespace limea\oauth;

use limea\db\DbManager;

class OAuth
{
	// Идентификатор приложения
	private $client_id = '06441eef0fa841478f8b2f73d6519117';
	// Пароль приложения
	private $client_secret = '40b19d39b6764feb8ac765e3def7d637';

	public function finishOAuth(){
        // Если скрипт был вызван с указанием параметра "code" в URL,
        // то выполняется запрос на получение токена
        if (isset($_GET['code']))
        {
            // Формирование параметров (тела) POST-запроса с указанием кода подтверждения
            $query = array(
            'grant_type' => 'authorization_code',
            'code' => $_GET['code'],
            'client_id' => $this->client_id,
            'client_secret' => $this->client_secret
            );

            $query = http_build_query($query);
            var_dump($query);
            $result = $this->file_get_contents_curl('https://oauth.yandex.ru/token', $query);
            var_dump($result);
            $result = json_decode($result);
            var_dump($result);
            $dbManager = DbManager::getInstance();
            // Токен необходимо сохранить для использования в запросах к API Директа
            $dbManager->setYandexToken($_SESSION["id"], $result->token, $result->expires_in);
        }
	}

    private function file_get_contents_curl($url, $params)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

        $data = curl_exec($ch);
        curl_close($ch);

        return $data;
    }
}