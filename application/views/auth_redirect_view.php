<a href="https://oauth.yandex.ru/authorize?response_type=code&client_id=06441eef0fa841478f8b2f73d6519117">Логин</a>
<?php
require_once 'lib/nusoap.php';
# авторизационный токен
$token = 'f0a3af8eef8c4b5996362850f6c58ca4';
# локаль
$locale = 'ru';
# путь к WSDL
$wsdlurl = 'https://api-sandbox.direct.yandex.ru/live/v4/wsdl/'; //'https://api.direct.yandex.ru/v4/wsdl/';
#######################################################
# создаем клиента
$client = new nusoap_client($wsdlurl, 'wsdl');
# параметры клиента
$client->authtype = 'basic';
$client->decode_utf8 = 0;
$client->soap_defencoding = 'UTF-8';
# добавляем заголовки
$headers =
    "<token>$token</token>
     <locale>$locale</locale>";
$client->setHeaders($headers);


$method = 'GetClientInfo';
$param = array(
    'Filter' => array(
        'StatusArch' => 'No'
    )
);

# отправляем запрос
$result = $client->call($method, $param);

# вывод результата
print_r($result);

?>

