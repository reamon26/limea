<h1>planning</h1>

<div class="row">
    <div class="col-md-4">
        <div class="panel-group" id="accordion">
            <form id="new_phrase" action="http://limea.ru/planning" method="post"></form>
            <div class="contaner-textarea-keywords ">
                <?
                //if ((isset($_POST[go_to_planing_from_collect])) && ($_POST[go_to_planing_from_collect] != "")){?>
                    <textarea class="form-control text-input-new-keywords " rows="10" form="new_phrase" name="request_new_get_ws"  onkeydown="return limitLines(this, event)" id = "textarea_limited"  ><?php
                        echo ( substr($_POST[go_to_planing_from_collect], 0, -3));
                        echo $_POST[request_new_get_ws];
                        ?></textarea>
                <?//}?>

                <input type="submit" onclick="function_status_bar()" class="btn btn-default pull-right contaner-btn-send-keywords" value="Статистика Wordstat" form="new_phrase">
                <textarea class="form-control text-input-new-keywords " rows="10"    ><?php
                if (isset($_POST[request_new_get_ws])&&($_POST[request_new_get_ws]!=""))
                  if (isset($_POST[request_new_get_ws])){
                      $newzapros = $_POST[request_new_get_ws];
                      $newtext = split_mas_10($newzapros);
                      print_r($newtext);
                  }
                    function split_mas_10($newzapros) {
                        $newzapros1 = array_unique(explode("\n",$newzapros));
                        for ($i = 1; $i <= count($newzapros1); $i++){
                            if (is_int($i/10)){
                                $j=floor($i/10);
                                $text[$j-1] =array($newzapros1[$j*10-10],$newzapros1[$j*10-9],$newzapros1[$j*10-8],$newzapros1[$j*10-7],$newzapros1[$j*10-6],$newzapros1[$j*10-5],$newzapros1[$j*10-4],$newzapros1[$j*10-3],$newzapros1[$j*10-2],$newzapros1[$j*10-1]);
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
                    }?>
                </textarea>
            </div>
        </div>
    </div>
    <div class="col-md-8">

        <div class="row">
            <canvas id="canvas" height="450" width="600"></canvas>
        </div>

    </div>


</div>

<script>
    var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
    var lineChartData = {
        labels : ["January","February","March","April","May","June","July"],
        datasets : [
            {
                label: "My First dataset",
                fillColor : "rgba(220,220,220,0.2)",
                strokeColor : "rgba(220,220,220,1)",
                pointColor : "rgba(220,220,220,1)",
                pointStrokeColor : "#fff",
                pointHighlightFill : "#fff",
                pointHighlightStroke : "rgba(220,220,220,1)",
                data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
            },
            {
                label: "My Second dataset",
                fillColor : "rgba(151,187,205,0.2)",
                strokeColor : "rgba(151,187,205,1)",
                pointColor : "rgba(151,187,205,1)",
                pointStrokeColor : "#fff",
                pointHighlightFill : "#fff",
                pointHighlightStroke : "rgba(151,187,205,1)",
                data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
            }
        ]

    }

    window.onload = function(){
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myLine = new Chart(ctx).Line(lineChartData, {
            responsive: true
        });
    }


</script>