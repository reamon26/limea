<?php

// Идентификатор приложения
$client_id = '06441eef0fa841478f8b2f73d6519117';
// Пароль приложения
$client_secret = '0de12ac3680a4d09beaf4360039c9a22';

// Если скрипт был вызван с указанием параметра "code" в URL,
// то выполняется запрос на получение токена
if (isset($_GET['code']))
{
    // Формирование параметров (тела) POST-запроса с указанием кода подтверждения
    $query = array(
        'grant_type' => 'authorization_code',
        'code' => $_GET['code'],
        'client_id' => $client_id,
        'client_secret' => $client_secret
    );
    $query = http_build_query($query);
/*
    // Формирование заголовков POST-запроса
    $header = "Content-type: application/x-www-form-urlencoded";

    // Выполнение POST-запроса и вывод результата
    $opts = array('http' =>
        array(
            'method'  => 'POST',
            'header'  => $header,
            'content' => $query
        ),
        'ssl' =>
            array(
                'verify_peer' => false
            )
    );
*/

    function file_get_contents_curl($url, $params) {
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

    //$context = stream_context_create($opts);

    $result = file_get_contents_curl('https://oauth.yandex.ru/token', $query);

    $result = json_decode($result);

    // Токен необходимо сохранить для использования в запросах к API Директа
    echo $result->access_token;
}
?>