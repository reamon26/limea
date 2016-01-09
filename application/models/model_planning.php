<?php
/**
 * Created by PhpStorm.
 * User: reamon26
 * Date: 11.10.15
 * Time: 22:49
 */

class Model_planning extends Model
{
    public function get_data()
    {
        function split_mas_10($newzapros)
        {
            $newzapros1 = array_unique(explode("\n",$newzapros));
            for ($i = 1; $i <= count($newzapros1); $i++){
                if (is_int($i/10)){
                    $j=floor($i/10);
                    $text[$j] =array($newzapros1[$j*10-10],$newzapros1[$j*10-9],$newzapros1[$j*10-8],$newzapros1[$j*10-7],$newzapros1[$j*10-6],$newzapros1[$j*10-5],$newzapros1[$j*10-4],$newzapros1[$j*10-3],$newzapros1[$j*10-2],$newzapros1[$j*10-1]);
                }
            }
            $i = count($newzapros1);
            $j=ceil($i/10);
            if ($j==1) {
                $j=0;
                $text[$j] =array($newzapros1[0],$newzapros1[1],$newzapros1[2],$newzapros1[3],$newzapros1[4],$newzapros1[5],$newzapros1[6],$newzapros1[7],$newzapros1[8],$newzapros1[9]);
            }
            else{
                $text[$j] =array($newzapros1[$j*10-10],$newzapros1[$j*10-9],$newzapros1[$j*10-8],$newzapros1[$j*10-7],$newzapros1[$j*10-6],$newzapros1[$j*10-5],$newzapros1[$j*10-4],$newzapros1[$j*10-3],$newzapros1[$j*10-2],$newzapros1[$j*10-1]);
            }
            foreach ($text as $key => $array){
                $array_empty = array(null);
                $array = array_diff($array, $array_empty);
                $text[$key]=$array;
            }
            return $text;
        }

        require_once 'application/models/lib/autorization_yandex.php';
        //Создание отчета
        //$id_report_test = $client->call("CreateNewForecast", array("params" => array('Phrases' => array("тестестест"), 'GeoID' => array(225))));
        //$delete_report_1 = $client->call("DeleteForecastReport", array("params" => $id_report_test));

        //if ($id_report_test[faultcode]=="SOAP-ENV:56") {
        //    $text_report_all= "56";
        //} else {
            if ((isset($_POST[request_new_get_ws]))&&($_POST[request_new_get_ws]!="")) {
                $text_10_for_report = split_mas_10($_POST[request_new_get_ws]);
                //$text_10_for_report_d = $text_10_for_report[0];
                //$fp = fopen('temp.csv', 'w');
                $i_N_10=0;
                foreach ($text_10_for_report as $text_10_for_report_d) {
                    $create_report_params = array(
                        'Phrases' => $text_10_for_report_d,//array("купить квартиру"),
                        'GeoID' => array(225)
                    );
                    $id_report = $client->call("CreateNewForecast", array("params" => $create_report_params));

                    //Получение списка отчетов
                    $report_list = $client->call("GetForecastList");

                    //Информация по отчету
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
                                $client->call("DeleteWordstatReport", array("params" => $value1[ReportID]));
                            }
                        }
                    }
                    //Получение информации по отчету
                    $text_report = $client->call("GetForecast", array("params" => $id_report));
                    $i_N = 1;
                    print_r($text_report);
/*
                    foreach ($text_report as $keywords) {
                        //$j = 1;
                        //$z_buf=FALSE;
                        //if ($z_buf==TRUE) {
                        foreach ($keywords[SearchedWith] as $keywords_one) {
                            //echo '<tr><td>' . $j++ . '</td><td>' . $keywords_one[Phrase] . '</td><td>' . $keywords_one[Shows] . '</td></tr>';
                            fputcsv($fp, array(mb_convert_encoding($keywords_one[Phrase], 'WINDOWS-1251', 'UTF-8'), $keywords_one[Shows]), $delimiter = ";");
                        }
                        $i_N++;
                        //}else $z_buf=TRUE;
                    }

*/
                    //Удаление отчета
                    $delete_report_1 = $client->call("DeleteWordstatReport", array("params" => $id_report));
                    //if ($delete_report_1 == 1) echo "<br> <br><br>delete report result id=".$id_report;
                    $text_report_all[$i_N_10] = $text_report;
                    $i_N_10++;
                }
                //fclose($fp);
            }
        //}
        // Здесь мы просто сэмулируем реальные данные.
        return $text_report_all;
    }
}
