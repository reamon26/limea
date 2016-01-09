<h1>ads</h1>

<?php
/*
$list = array (
    array('aaa', 'bbb', 'ccc', 'dddd'),
    array('123', '456', '789'),
    array('"aaa"', '"bbb"')
);

$fp = fopen('temp.csv', 'w');

foreach ($list as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);
*/


require_once 'application/models/lib/autorization_yandex.php';

$create_report_params = array(
    'Phrases' => array("купить квартиру"),
    'GeoID' => array(225),
    "Currency"=> "RUB",
    "AuctionBids"=> "Yes"
);
$id_report = $client->call("CreateNewForecast(Live)", array("params" => $create_report_params));
echo "1)". $id_report."<br>";
//Получение списка отчетов
$report_list = $client->call("GetForecastList");
print_r($report_list);
echo "<br>";

//Информация по отчету
/*
$z = 0;
while ($z != 1) {
foreach ($report_list as $key1 => $value1) {
    //echo "$value1[StatusReport] = $value1[ReportID] или $id_report<br>";
    if ($value1[ReportID] == $id_report) {
        if ($value1[StatusReport] == "Done") {
            $z = 1;
            } else {
                $report_list = $client->call("GetForecastList");
                sleep(1);
            }
        } else {
            $client->call("DeleteForecastReport", array("params" => $value1[ReportID]));
        }
    }
}
*/


//Получение информации по отчету
$text_report = $client->call("GetForecast", array("params" => "108896535"));

$phrases = $text_report["Phrases"];
$phrase = $phrases[0];


echo "Phrase =" . $phrase[Phrase]."<br>";
echo "IsRubric =" . $phrase[IsRubric]."<br>";
echo "Min =" . $phrase[Min]."<br>";
echo "Max =" . $phrase[Max]."<br>";
echo "PremiumMin =" . $phrase[PremiumMin]."<br>";
echo "PremiumMax =" . $phrase[PremiumMax]."<br>";
echo "Shows =" . $phrase[Shows]."<br>";
echo "Clicks =" . $phrase[Clicks]."<br>";
echo "FirstPlaceClicks =" . $phrase[FirstPlaceClicks]."<br>";
echo "PremiumClicks =" . $phrase[PremiumClicks]."<br>";
echo "CTR =" . $phrase[CTR]."<br>";
echo "FirstPlaceCTR =" . $phrase[FirstPlaceCTR]."<br>";
echo "PremiumCTR =" . $phrase[PremiumCTR]."<br>";
echo "AuctionBids =" . $phrase[AuctionBids]."<br>";
echo "Currency =" . $phrase[Currency]."<br>";


echo "<br>";

$AuctionBids = $phrase[AuctionBids];

print_r($AuctionBids);
echo "Position =" . $AuctionBids[Position]."<br>";
echo "Bid =" . $AuctionBids[Bid]."<br>";
echo "Price =" . $AuctionBids[Price]."<br>";


$common=$text_report["Common"];

echo "<br>";
echo "Geo =" . $common[Geo]."<br>";
echo "Min =" . $common[Min]."<br>";
echo "Max =" . $common[Max]."<br>";
echo "PremiumMin =" . $common[PremiumMin]."<br>";
echo "Shows =" . $common[Shows]."<br>";
echo "Clicks =" . $common[Clicks]."<br>";
echo "FirstPlaceClicks =" . $common[FirstPlaceClicks]."<br>";
echo "PremiumClicks =" . $common[PremiumClicks]."<br>";

$test1 = $client->call("DeleteWordstatReport", array("params" => array("108896550")));
$test2 = $client->call("DeleteWordstatReport", array("params" => "108896663"));
$test3 = $client->call("DeleteWordstatReport", array("params" => "108896688"));

//$i_N = 1;
//print_r($text_report);
//$client->call("DeleteWordstatReport", array("params" => $value1[ReportID]));

?>


