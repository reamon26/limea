<h1>upload</h1>
<?php
require_once 'application/models/lib/autorization_yandex.php';

/*
# Example 
$params = array(
    'CampaignID' => 0,
    'Login' => $new_campaign_login,
    'Name' => "First ad campaign",
    'FIO' => "Owner's Name Surname",
    'StartDate' => '2011-10-19',

    'Strategy' => array(
        'StrategyName' => 'HighestPosition',
    ),

    'EmailNotification' => array(
        'Email' => $new_campaign_email,
        'MoneyWarningValue' => 1,
        'WarnPlaceInterval' => 15,
        'SendWarn' => 'Yes',
        'SendAccNews' => 'Yes'
    )
);

# Creating campaign via SOAP method - CreateOrUpdateCampaign
$result = $client->call("CreateOrUpdateCampaign", array('params' => $params));

echo "Create new campaign:\n";

if ($client->fault) {
    $new_CampaignID = 0;
    echo " SOAP Fault: ";
    print_r($result);
} else {

    $err_msg = $client->getError();
    if ($err_msg) {
        echo " Error: ".$err_msg;
    } else {
        $new_CampaignID = $result;
        echo " CampaignID=".$new_CampaignID."\n";
    }
}

if ($new_CampaignID) {

    $params = array(
        array(
            'CampaignID' => $new_CampaignID
            , 'BannerID' => 0
            , 'Title' => 'Пример заголовка объявления'
            , 'Text' => 'Пример текста объявления'
            , 'Href' => 'http://example.com/catalog/rub1/'
            , 'Geo' => '1, 2, -214'
            , 'Phrases' => array(
                array(
                      'IsRubric' => 'No'
                    , 'Phrase' => 'Пример фразы'
                    , 'PhraseID' => 0
                    , 'Price' => 0.11
                ),
                array(
                      'IsRubric' => 'No'
                    , 'Phrase' => 'Пример фразы +с -минус -словами'
                    , 'PhraseID' => 0
                    , 'Price' => 0.11
                ),
            )

            # Контактная информация
            , 'ContactInfo' => array(
                  'Apart' => 3
                , 'Build' => 2
                , 'City' => 'Моcква'
                , 'CityCode' => 495
                , 'CompanyName' => 'Название компании'
                , 'ContactEmail' => 'email@ya.ru'
                , 'ContactPerson' => 'Контактное лицо'
                , 'Country' => 'Россия'
                , 'CountryCode' => '+7'
                , 'ExtraMessage' => 'Подробнее о товаре/услуге'
                , 'House' => 1
                , 'IMClient' => 'jabber'
                , 'IMLogin' => 'email@ya.ru'
                , 'Phone' => '123-45-67'
                , 'PhoneExt' => '1234'
                , 'Street' => 'улица Главная'
                , 'WorkTime' =>'0;4;10;00;18;00;5;6;13;00;16;00'
            )

            # Быстрые ссылки
            , 'Sitelinks' => array(
                array(
                      'Title' => 'Новости'
                    , 'Href' => 'example.com/search?text=test&action=1'
                ),
                array(
                      'Title' => 'Каталог'
                    , 'Href' => 'example.com/search?text=test&action=2'
                ),
                array(
                      'Title' => 'Контакты'
                    , 'Href' => 'example.com/search?text=test&action=3'
                )
            )
        )
    );

    # Creting banners via SOAP method - CreateOrUpdateBanners
    $result = $client->call("CreateOrUpdateBanners", array("params" => $params));
    echo "Create new banners:\n";
    if ($client->fault) {
        echo " SOAP Fault: ".$result;
    } else {
        echo " List of BannerIDs: ";
        echo join(", ", $result), "\n";
    }

} else {

    echo "Error while ad campaign creating";
}

*/

//Создание отчета
$create_report_params = array(
    'Phrases' => array('купить квартиру','купить погода'),
    'GeoID' => array(225)
);
$id_report = $client-> call("CreateNewWordstatReport", array("params" => $create_report_params));
//echo "<br>".print_r($id_report)."<br>";
echo "faultcode:  \t".$id_report[faultcode]."<br>"; //SOAP-ENV:56
echo "faultstring:  \t".$id_report[faultstring]."<br>"; //Request limit exceeded
echo "detail:  \t".$id_report[detail]."<br>"; //The limit for 293129546 is 1000, already requested 1030, request attempt number 2

if ($id_report[faultcode]=="SOAP-ENV:56") {
    echo "Ошибка, больше 1000 запросов за день";
} else{

}

//Получение списка отчетов
$report_list = $client-> call("GetWordstatReportList");
//echo "<br>report_list_return";
print_r($report_list);
//echo "<br>".$report_list[0][0];
$delete_report_1 = $client-> call("DeleteWordstatReport", array("params" => $id_report));
if ($delete_report_1 == 1) echo "<br> <br><br>delete report result id=".$id_report;
echo "ok<br>";

//Удаление отчетов по номеру
$delete_1 = $client-> call("DeleteWordstatReport", array("params" => 99735584));
$delete_2 = $client-> call("DeleteWordstatReport", array("params" => 99735585));
$delete_3 = $client-> call("DeleteWordstatReport", array("params" => 99735567));
$delete_4 = $client-> call("DeleteWordstatReport", array("params" => 99735582));
$delete_5 = $client-> call("DeleteWordstatReport", array("params" => 99508130));
echo "<br>delete_report ".print_r($delete_1)."<br>delete_report ".$delete_2."<br>delete_report ".$delete_3."<br>delete_report ".$delete_4."<br>delete_report ".$delete_5."<br>";

/*
//Информация по отчету
$z=0;
while($z!=1) {
    foreach($report_list as $key1 => $value1) {

        echo "$value1[StatusReport] = $value1[ReportID] или $id_report<br>";
        if ($value1[ReportID] == $id_report) {

            if ($value1[StatusReport] == "Done") {
                echo "done";
                $z=1;
            }else{
                echo "гребаный пендинг повторим через секунду<br>";
                $report_list = $client->call("GetWordstatReportList");
                sleep(1);
            }
        }
    }
}


//Получение информации по отчету
$text_report = $client-> call("GetWordstatReport", array("params" => $id_report));
echo "<br>text_report<br>";
//print_r($text_report);
echo "<br><br><br>";



echo '<table cellpadding="5" cellspacing="5" border="1">';
echo "<tr><td>Phrase]</td><td>Shows]</td></tr>";

foreach ($text_report as $keywords) {
    foreach ($keywords[SearchedWith] as $keywords_one) {
        echo "<tr><td>" . $keywords_one[Phrase] . "</td><td>" . $keywords_one[Shows] . "</td></tr>";
    }
}
echo "</table>";

echo "<br>";

echo '<table cellpadding="5" cellspacing="5" border="1">';
echo "<tr><td>Phrase]</td><td>Shows]</td></tr>";
foreach ($text_report as $keywords) {
    foreach ($keywords[SearchedAlso] as $keywords_one) {
        echo "<tr><td>" . $keywords_one[Phrase] . "</td><td>" . $keywords_one[Shows] . "</td></tr>";
    }
}
echo "</table>";

*/
//Удаление отчета

