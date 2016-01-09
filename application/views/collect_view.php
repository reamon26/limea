<h1>Сбор запросов</h1>
<div class="row">
  <div class="col-md-4">
    <!--
    <div class="checkbox">
      <label>
              <input type="checkbox" value="">
              Первая опция&mdash;выбирайте его, если вам нравится этот пункт
            </label>
    </div>

    <div class="radio">
      <label>
              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
              Первая опция&mdash;выбирайте его, если вам нравится этот пункт
            </label>
    </div>
    <div class="radio page-header">
      <label>
              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
              Вторая опция - это несколько другое, и она отменяет выбор первой опции
            </label>
    </div>
    <div class="radio ">
      <label>
              Запишите новые запросы
            </label>
    </div>
    -->
    <form id="new_phrase" action="http://limea.ru/collect" method="post">

      </form>
        <div class="contaner-textarea-keywords ">
            <textarea class="form-control text-input-new-keywords " rows="10" form="new_phrase" name="request_new_get_ws"  onkeydown="return limitLines(this, event)" id = "textarea_limited"  ><?php
              if (isset($_POST[request_new_get_ws])){
                  $newzapros1 = explode("\n",$_POST[request_new_get_ws]);
                  echo $_POST[request_new_get_ws];
              }
              ?></textarea>

            <div class="input-group">
                <span class="input-group-addon"> Минимальная частота</span>
                <input type="text" class="form-control" name="request_new_get_ws_freq" form="new_phrase" value="<? echo $_POST[request_new_get_ws_freq];?>" >
            </div>
            <div class="input-group">
                <span class="input-group-addon"> № ГЕО</span>
                <input type="text" class="form-control" name="request_new_get_ws_geo" form="new_phrase" value="<? echo $_POST[request_new_get_ws_geo];?>" >
            </div>

            <button class="btn btn-default contaner-btn-send-keywords" data-toggle="modal" data-target="#help_geo">Справка</button>
            <div class="modal fade" id="help_geo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Список городов</h4>
                        </div>
                        <div class="modal-body">
                            <table class="table">
                                <tr><th>Наименование</th><th>номер</th></tr>
                                <tr><td>Регионы</td><td>0</td></tr>
                                <tr><td>Европа</td><td>111</td></tr>
                                <tr><td>СНГ</td><td>166</td></tr>
                                <tr><td>------------</td><td>29</td></tr>
                                <tr><td>Универсальное</td><td>318</td></tr>
                                <tr><td>Азия</td><td>183</td></tr>
                                <tr><td>Москва</td><td>213</td></tr>
                                <tr><td>Санкт-Петербург</td><td>2</td></tr>
                                <tr><td>Россия</td><td>225</td></tr>
                                <tr><td>Северная Америка</td><td>10002</td></tr>
                                <tr><td>Южная Америка</td><td>10003</td></tr>
                                <tr><td>Австралия и Океания</td><td>138</td></tr>
                                <tr><td>Африка</td><td>241</td></tr>
                                <tr><td>Арктика и Антарктика</td><td>245</td></tr>
                                <tr><td>Москва</td><td>213</td></tr>
                                <tr><td>Долгопрудный</td><td>214</td></tr>
                                <tr><td>Дубна</td><td>215</td></tr>
                                <tr><td>Пущино</td><td>217</td></tr>
                                <tr><td>Другие города региона</td><td>349</td></tr>
                                <tr><td>Универсальное</td><td>350</td></tr>
                                <tr><td>Черноголовка</td><td>219</td></tr>
                                <tr><td>Мытищи</td><td>10740</td></tr>
                                <tr><td>Люберцы</td><td>10738</td></tr>
                                <tr><td>Одинцово</td><td>10743</td></tr>
                                <tr><td>Подольск</td><td>10747</td></tr>
                                <tr><td>Жуковский</td><td>20571</td></tr>
                                <tr><td>Сергиев Посад</td><td>10752</td></tr>
                                <tr><td>Балашиха</td><td>10716</td></tr>
                                <tr><td>Ногинск</td><td>10742</td></tr>
                                <tr><td>Пушкино</td><td>10748</td></tr>
                                <tr><td>Раменское</td><td>10750</td></tr>
                                <tr><td>Химки</td><td>10758</td></tr>
                                <tr><td>Щелково</td><td>10765</td></tr>
                                <tr><td>Серпухов</td><td>10754</td></tr>
                                <tr><td>Коломна</td><td>10734</td></tr>
                                <tr><td>Орехово-Зуево</td><td>10745</td></tr>
                                <tr><td>Клин</td><td>10733</td></tr>
                                <tr><td>Чехов</td><td>10761</td></tr>
                                <tr><td>Ступино</td><td>10756</td></tr>
                                <tr><td>Красногорск</td><td>10735</td></tr>
                                <tr><td>Электросталь</td><td>20523</td></tr>
                                <tr><td>Королёв</td><td>20728</td></tr>
                                <tr><td>Реутов</td><td>21621</td></tr>
                                <tr><td>Видное</td><td>10719</td></tr>
                                <tr><td>Железнодорожный</td><td>21622</td></tr>
                                <tr><td>Домодедово</td><td>10725</td></tr>
                                <tr><td>Солнечногорск</td><td>10755</td></tr>
                                <tr><td>Дмитров</td><td>10723</td></tr>
                                <tr><td>Павловский Посад</td><td>10746</td></tr>
                                <tr><td>Другие города региона</td><td>413</td></tr>
                                <tr><td>Универсальное</td><td>414</td></tr>
                                <tr><td>Москва и область</td><td>1</td></tr>
                                <tr><td>Белгородская область</td><td>10645</td></tr>
                                <tr><td>Брянская область</td><td>10650</td></tr>
                                <tr><td>Владимирcкая область</td><td>10658</td></tr>
                                <tr><td>Воронежcкая область</td><td>10672</td></tr>
                                <tr><td>Ивановская область</td><td>10687</td></tr>
                                <tr><td>Калужская область</td><td>10693</td></tr>
                                <tr><td>Костромская область</td><td>10699</td></tr>
                                <tr><td>Курская область</td><td>10705</td></tr>
                                <tr><td>Липецкая область</td><td>10712</td></tr>
                                <tr><td>Орловская область</td><td>10772</td></tr>
                                <tr><td>Рязанская область</td><td>10776</td></tr>
                                <tr><td>Смоленская область</td><td>10795</td></tr>
                                <tr><td>Тамбовская область</td><td>10802</td></tr>
                                <tr><td>Тверская область</td><td>10819</td></tr>
                                <tr><td>Тульская область</td><td>10832</td></tr>
                                <tr><td>Ярославская область</td><td>10841</td></tr>
                                <tr><td>Другие города региона</td><td>445</td></tr>
                                <tr><td>Универсальное</td><td>446</td></tr>
                                <tr><td>Санкт-Петербург и Ленинградская область</td><td>10174</td></tr>
                                <tr><td>Архангельская область</td><td>10842</td></tr>
                                <tr><td>Вологодская область</td><td>10853</td></tr>
                                <tr><td>Калининградская область</td><td>10857</td></tr>
                                <tr><td>Мурманская область</td><td>10897</td></tr>
                                <tr><td>Новгородская область</td><td>10904</td></tr>
                                <tr><td>Псковская область</td><td>10926</td></tr>
                                <tr><td>Республика Карелия</td><td>10933</td></tr>
                                <tr><td>Республика Коми</td><td>10939</td></tr>
                                <tr><td>Ненецкий АО</td><td>10176</td></tr>
                                <tr><td>Другие города региона</td><td>477</td></tr>
                                <tr><td>Универсальное</td><td>478</td></tr>
                                <tr><td>Астраханская область</td><td>10946</td></tr>
                                <tr><td>Волгоградская область</td><td>10950</td></tr>
                                <tr><td>Краснодарский край</td><td>10995</td></tr>
                                <tr><td>Республика Адыгея</td><td>11004</td></tr>
                                <tr><td>Республика Калмыкия</td><td>11015</td></tr>
                                <tr><td>Ростовская область</td><td>11029</td></tr>
                                <tr><td>Другие города региона</td><td>509</td></tr>
                                <tr><td>Универсальное</td><td>510</td></tr>
                                <tr><td>Кировская область</td><td>11070</td></tr>
                                <tr><td>Республика Марий Эл</td><td>11077</td></tr>
                                <tr><td>Нижегородская область</td><td>11079</td></tr>
                                <tr><td>Оренбургская область</td><td>11084</td></tr>
                                <tr><td>Пензенская область</td><td>11095</td></tr>
                                <tr><td>Пермский край</td><td>11108</td></tr>
                                <tr><td>Республика Башкортостан</td><td>11111</td></tr>
                                <tr><td>Республика Мордовия</td><td>11117</td></tr>
                                <tr><td>Татарстан</td><td>11119</td></tr>
                                <tr><td>Самарская область</td><td>11131</td></tr>
                                <tr><td>Саратовская область</td><td>11146</td></tr>
                                <tr><td>Удмуртская республика</td><td>11148</td></tr>
                                <tr><td>Ульяновская область</td><td>11153</td></tr>
                                <tr><td>Чувашская республика</td><td>11156</td></tr>
                                <tr><td>Другие города региона</td><td>541</td></tr>
                                <tr><td>Универсальное</td><td>542</td></tr>
                                <tr><td>Курганская область</td><td>11158</td></tr>
                                <tr><td>Свердловская область</td><td>11162</td></tr>
                                <tr><td>Тюменская область</td><td>11176</td></tr>
                                <tr><td>Ханты-Мансийский АО</td><td>11193</td></tr>
                                <tr><td>Челябинская область</td><td>11225</td></tr>
                                <tr><td>Ямало-Ненецкий АО</td><td>11232</td></tr>
                                <tr><td>Другие города региона</td><td>573</td></tr>
                                <tr><td>Универсальное</td><td>574</td></tr>
                                <tr><td>Алтайский край</td><td>11235</td></tr>
                                <tr><td>Иркутская область</td><td>11266</td></tr>
                                <tr><td>Кемеровская область</td><td>11282</td></tr>
                                <tr><td>Красноярский край</td><td>11309</td></tr>
                                <tr><td>Новосибирская область</td><td>11316</td></tr>
                                <tr><td>Омская область</td><td>11318</td></tr>
                                <tr><td>Республика Алтай</td><td>10231</td></tr>
                                <tr><td>Республика Бурятия</td><td>11330</td></tr>
                                <tr><td>Республика Тыва</td><td>10233</td></tr>
                                <tr><td>Республика Хакасия</td><td>11340</td></tr>
                                <tr><td>Томская область</td><td>11353</td></tr>
                                <tr><td>Забайкальский край</td><td>21949</td></tr>
                                <tr><td>Другие города региона</td><td>605</td></tr>
                                <tr><td>Универсальное</td><td>606</td></tr>
                                <tr><td>Магаданская область</td><td>11403</td></tr>
                                <tr><td>Камчатский край</td><td>11398</td></tr>
                                <tr><td>Еврейская автономная область</td><td>10243</td></tr>
                                <tr><td>Чукотский автономный округ</td><td>10251</td></tr>
                                <tr><td>Хабаровский край</td><td>11457</td></tr>
                                <tr><td>Приморский край</td><td>11409</td></tr>
                                <tr><td>Амурская область</td><td>11375</td></tr>
                                <tr><td>Республика Саха (Якутия)</td><td>11443</td></tr>
                                <tr><td>Сахалинская область</td><td>11450</td></tr>
                                <tr><td>Атланта</td><td>86</td></tr>
                                <tr><td>Вашингтон</td><td>87</td></tr>
                                <tr><td>Детройт</td><td>89</td></tr>
                                <tr><td>Сан-Франциско</td><td>90</td></tr>
                                <tr><td>Сиэтл</td><td>91</td></tr>
                                <tr><td>Лос-Анджелес</td><td>200</td></tr>
                                <tr><td>Нью-Йорк</td><td>202</td></tr>
                                <tr><td>Бостон</td><td>223</td></tr>
                                <tr><td>Прочее</td><td>637</td></tr>
                                <tr><td>Универсальное</td><td>638</td></tr>
                                <tr><td>Прочее</td><td>1048</td></tr>
                                <tr><td>Универсальное</td><td>1049</td></tr>
                                <tr><td>Гейдельберг</td><td>97</td></tr>
                                <tr><td>Кельн</td><td>98</td></tr>
                                <tr><td>Мюнхен</td><td>99</td></tr>
                                <tr><td>Франкфурт-на-Майне</td><td>100</td></tr>
                                <tr><td>Штутгарт</td><td>101</td></tr>
                                <tr><td>Берлин</td><td>177</td></tr>
                                <tr><td>Гамбург</td><td>178</td></tr>
                                <tr><td>Прочее</td><td>701</td></tr>
                                <tr><td>Универсальное</td><td>702</td></tr>
                                <tr><td>Нидерланды</td><td>118</td></tr>
                                <tr><td>Норвегия</td><td>119</td></tr>
                                <tr><td>Польша</td><td>120</td></tr>
                                <tr><td>Словакия</td><td>121</td></tr>
                                <tr><td>Словения</td><td>122</td></tr>
                                <tr><td>Финляндия</td><td>123</td></tr>
                                <tr><td>Франция</td><td>124</td></tr>
                                <tr><td>Чехия</td><td>125</td></tr>
                                <tr><td>Швейцария</td><td>126</td></tr>
                                <tr><td>Швеция</td><td>127</td></tr>
                                <tr><td>Сербия</td><td>180</td></tr>
                                <tr><td>Дания</td><td>203</td></tr>
                                <tr><td>Испания</td><td>204</td></tr>
                                <tr><td>Италия</td><td>205</td></tr>
                                <tr><td>Прочее</td><td>733</td></tr>
                                <tr><td>Универсальное</td><td>734</td></tr>
                                <tr><td>Германия</td><td>96</td></tr>
                                <tr><td>Великобритания</td><td>102</td></tr>
                                <tr><td>Австрия</td><td>113</td></tr>
                                <tr><td>Бельгия</td><td>114</td></tr>
                                <tr><td>Болгария</td><td>115</td></tr>
                                <tr><td>Венгрия</td><td>116</td></tr>
                                <tr><td>Греция</td><td>246</td></tr>
                                <tr><td>Страны Балтии</td><td>980</td></tr>
                                <tr><td>Кипр</td><td>20574</td></tr>
                                <tr><td>Мальта</td><td>10069</td></tr>
                                <tr><td>Хорватия</td><td>10083</td></tr>
                                <tr><td>Черногория</td><td>21610</td></tr>
                                <tr><td>Турция</td><td>983</td></tr>
                                <tr><td>Новая Зеландия</td><td>139</td></tr>
                                <tr><td>Австралия</td><td>211</td></tr>
                                <tr><td>Прочее</td><td>829</td></tr>
                                <tr><td>Универсальное</td><td>830</td></tr>
                                <tr><td>Прочее</td><td>893</td></tr>
                                <tr><td>Универсальное</td><td>894</td></tr>
                                <tr><td>Минская область</td><td>29630</td></tr>
                                <tr><td>Гомельская область</td><td>29631</td></tr>
                                <tr><td>Витебская область</td><td>29633</td></tr>
                                <tr><td>Брестская область</td><td>29632</td></tr>
                                <tr><td>Гродненская область</td><td>29634</td></tr>
                                <tr><td>Могилевская область</td><td>29629</td></tr>
                                <tr><td>Минск</td><td>157</td></tr>
                                <tr><td>Прочее</td><td>925</td></tr>
                                <tr><td>Универсальное</td><td>926</td></tr>
                                <tr><td>Алматинская область</td><td>29406</td></tr>
                                <tr><td>Карагандинская область</td><td>29411</td></tr>
                                <tr><td>Акмолинская область</td><td>29403</td></tr>
                                <tr><td>Восточно-Казахстанская область</td><td>29408</td></tr>
                                <tr><td>Павлодарская область</td><td>29415</td></tr>
                                <tr><td>Костанайская область</td><td>29412</td></tr>
                                <tr><td>Западно-Казахстанская область</td><td>29410</td></tr>
                                <tr><td>Северо-Казахстанская область</td><td>29416</td></tr>
                                <tr><td>Южно-Казахстанская область</td><td>29417</td></tr>
                                <tr><td>Актюбинская область</td><td>29404</td></tr>
                                <tr><td>Атырауская область</td><td>29407</td></tr>
                                <tr><td>Мангистауская область</td><td>29414</td></tr>
                                <tr><td>Жамбылская область</td><td>29409</td></tr>
                                <tr><td>Кызылординская область</td><td>29413</td></tr>
                                <tr><td>Туркмения</td><td>170</td></tr>
                                <tr><td>Узбекистан</td><td>171</td></tr>
                                <tr><td>Украина</td><td>187</td></tr>
                                <tr><td>Киргизия</td><td>207</td></tr>
                                <tr><td>Молдова</td><td>208</td></tr>
                                <tr><td>Таджикистан</td><td>209</td></tr>
                                <tr><td>Универсальное</td><td>958</td></tr>
                                <tr><td>Прочее</td><td>957</td></tr>
                                <tr><td>Беларусь</td><td>149</td></tr>
                                <tr><td>Казахстан</td><td>159</td></tr>
                                <tr><td>Азербайджан</td><td>167</td></tr>
                                <tr><td>Армения</td><td>168</td></tr>
                                <tr><td>Абхазия</td><td>29386</td></tr>
                                <tr><td>Южная Осетия</td><td>29387</td></tr>
                                <tr><td>Беер-Шева</td><td>129</td></tr>
                                <tr><td>Иерусалим</td><td>130</td></tr>
                                <tr><td>Тель-Авив</td><td>131</td></tr>
                                <tr><td>Хайфа</td><td>132</td></tr>
                                <tr><td>Прочее</td><td>765</td></tr>
                                <tr><td>Универсальное</td><td>766</td></tr>
                                <tr><td>Индия</td><td>994</td></tr>
                                <tr><td>Таиланд</td><td>995</td></tr>
                                <tr><td>Ближний Восток</td><td>1004</td></tr>
                                <tr><td>Китай</td><td>134</td></tr>
                                <tr><td>Корея</td><td>135</td></tr>
                                <tr><td>Япония</td><td>137</td></tr>
                                <tr><td>Прочее</td><td>797</td></tr>
                                <tr><td>Универсальное</td><td>798</td></tr>
                                <tr><td>Грузия</td><td>169</td></tr>
                                <tr><td>Прочее</td><td>861</td></tr>
                                <tr><td>Универсальное</td><td>862</td></tr>
                                <tr><td>Киевская область</td><td>20544</td></tr>
                                <tr><td>Полтавская область</td><td>20549</td></tr>
                                <tr><td>Черкасская область</td><td>20546</td></tr>
                                <tr><td>Винницкая область</td><td>20545</td></tr>
                                <tr><td>Кировоградская область</td><td>20548</td></tr>
                                <tr><td>Житомирская область</td><td>20547</td></tr>
                                <tr><td>Харьковская область</td><td>20538</td></tr>
                                <tr><td>Донецкая область</td><td>20536</td></tr>
                                <tr><td>Днепропетровская область</td><td>20537</td></tr>
                                <tr><td>Луганская область</td><td>20540</td></tr>
                                <tr><td>Запорожская область</td><td>20539</td></tr>
                                <tr><td>Одесская область</td><td>20541</td></tr>
                                <tr><td>Николаевская область</td><td>20543</td></tr>
                                <tr><td>Херсонская область</td><td>20542</td></tr>
                                <tr><td>Львовская область</td><td>20529</td></tr>
                                <tr><td>Хмельницкая область</td><td>20535</td></tr>
                                <tr><td>Тернопольская область</td><td>20531</td></tr>
                                <tr><td>Ровенская область</td><td>20534</td></tr>
                                <tr><td>Черновицкая область</td><td>20533</td></tr>
                                <tr><td>Волынская область</td><td>20550</td></tr>
                                <tr><td>Закарпатская область</td><td>20530</td></tr>
                                <tr><td>Ивано-Франковская область</td><td>20532</td></tr>
                                <tr><td>Сумская область</td><td>20552</td></tr>
                                <tr><td>Черниговская область</td><td>20551</td></tr>
                                <tr><td>Кишинев</td><td>10313</td></tr>
                                <tr><td>Тирасполь</td><td>10317</td></tr>
                                <tr><td>Бельцы</td><td>10314</td></tr>
                                <tr><td>Бендеры</td><td>10315</td></tr>
                                <tr><td>Комрат</td><td>33883</td></tr>
                                <tr><td>Универсальное</td><td>115675</td></tr>
                                <tr><td>Прочее</td><td>115674</td></tr>
                                <tr><td>Северо-Запад</td><td>17</td></tr>
                                <tr><td>Юг</td><td>26</td></tr>
                                <tr><td>Поволжье</td><td>40</td></tr>
                                <tr><td>Урал</td><td>52</td></tr>
                                <tr><td>Сибирь</td><td>59</td></tr>
                                <tr><td>Дальний Восток</td><td>73</td></tr>
                                <tr><td>Прочее</td><td>381</td></tr>
                                <tr><td>Общероссийские</td><td>382</td></tr>
                                <tr><td>Центр</td><td>3</td></tr>
                                <tr><td>Северный Кавказ</td><td>102444</td></tr>
                                <tr><td>Крымский федеральный округ</td><td>115092</td></tr>
                                <tr><td>Другие города региона</td><td>978</td></tr>
                                <tr><td>Универсальное</td><td>979</td></tr>
                                <tr><td>Симферополь</td><td>146</td></tr>
                                <tr><td>Севастополь</td><td>959</td></tr>
                                <tr><td>Ялта</td><td>11470</td></tr>
                                <tr><td>Керчь</td><td>11464</td></tr>
                                <tr><td>Феодосия</td><td>11469</td></tr>
                                <tr><td>Евпатория</td><td>11463</td></tr>
                                <tr><td>Алушта</td><td>11471</td></tr>
                                <tr><td>Прочее</td><td>981</td></tr>
                                <tr><td>Универсальное</td><td>982</td></tr>
                                <tr><td>Латвия</td><td>206</td></tr>
                                <tr><td>Литва</td><td>117</td></tr>
                                <tr><td>Эстония</td><td>179</td></tr>
                                <tr><td>Прочее</td><td>1054</td></tr>
                                <tr><td>Универсальное</td><td>1055</td></tr>
                                <tr><td>Израиль</td><td>181</td></tr>
                                <tr><td>Объединенные Арабские Эмираты</td><td>210</td></tr>
                                <tr><td>Египет</td><td>1056</td></tr>
                                <tr><td>Магадан</td><td>79</td></tr>
                                <tr><td>Прочее</td><td>21782</td></tr>
                                <tr><td>Универсальное</td><td>21781</td></tr>
                                <tr><td>Петропавловск-Камчатский</td><td>78</td></tr>
                                <tr><td>Универсальное</td><td>21793</td></tr>
                                <tr><td>Прочее</td><td>21794</td></tr>
                                <tr><td>Биробиджан</td><td>11393</td></tr>
                                <tr><td>Универсальное</td><td>21783</td></tr>
                                <tr><td>Прочее</td><td>21784</td></tr>
                                <tr><td>Анадырь</td><td>11458</td></tr>
                                <tr><td>Универсальное</td><td>21785</td></tr>
                                <tr><td>Прочее</td><td>21786</td></tr>
                                <tr><td>Хабаровск</td><td>76</td></tr>
                                <tr><td>Комсомольск-на-Амуре</td><td>11453</td></tr>
                                <tr><td>Универсальное</td><td>21789</td></tr>
                                <tr><td>Прочее</td><td>21790</td></tr>
                                <tr><td>Владивосток</td><td>75</td></tr>
                                <tr><td>Находка</td><td>974</td></tr>
                                <tr><td>Уссурийск</td><td>11426</td></tr>
                                <tr><td>Прочее</td><td>21780</td></tr>
                                <tr><td>Универсальное</td><td>21779</td></tr>
                                <tr><td>Благовещенск</td><td>77</td></tr>
                                <tr><td>Универсальное</td><td>21791</td></tr>
                                <tr><td>Прочее</td><td>21792</td></tr>
                                <tr><td>Белогорск</td><td>11374</td></tr>
                                <tr><td>Тында</td><td>11391</td></tr>
                                <tr><td>Якутск</td><td>74</td></tr>
                                <tr><td>Универсальное</td><td>21787</td></tr>
                                <tr><td>Прочее</td><td>21788</td></tr>
                                <tr><td>Южно-Сахалинск</td><td>80</td></tr>
                                <tr><td>Универсальное</td><td>21777</td></tr>
                                <tr><td>Прочее</td><td>21778</td></tr>
                                <tr><td>Барнаул</td><td>197</td></tr>
                                <tr><td>Бийск</td><td>975</td></tr>
                                <tr><td>Рубцовск</td><td>11251</td></tr>
                                <tr><td>Универсальное</td><td>21796</td></tr>
                                <tr><td>Прочее</td><td>21797</td></tr>
                                <tr><td>Ангарск</td><td>11256</td></tr>
                                <tr><td>Братск</td><td>976</td></tr>
                                <tr><td>Иркутск</td><td>63</td></tr>
                                <tr><td>Усть-Илимск</td><td>11273</td></tr>
                                <tr><td>Универсальное</td><td>21798</td></tr>
                                <tr><td>Прочее</td><td>21799</td></tr>
                                <tr><td>Кемерово</td><td>64</td></tr>
                                <tr><td>Междуреченск</td><td>11287</td></tr>
                                <tr><td>Новокузнецк</td><td>237</td></tr>
                                <tr><td>Прокопьевск</td><td>11291</td></tr>
                                <tr><td>Универсальное</td><td>21800</td></tr>
                                <tr><td>Прочее</td><td>21801</td></tr>
                                <tr><td>Ачинск</td><td>11302</td></tr>
                                <tr><td>Красноярск</td><td>62</td></tr>
                                <tr><td>Норильск</td><td>11311</td></tr>
                                <tr><td>Железногорск</td><td>20086</td></tr>
                                <tr><td>Универсальное</td><td>21802</td></tr>
                                <tr><td>Прочее</td><td>21803</td></tr>
                                <tr><td>Кайеркан</td><td>11306</td></tr>
                                <tr><td>Бердск</td><td>11314</td></tr>
                                <tr><td>Новосибирск</td><td>65</td></tr>
                                <tr><td>Универсальное</td><td>21804</td></tr>
                                <tr><td>Прочее</td><td>21805</td></tr>
                                <tr><td>Омск</td><td>66</td></tr>
                                <tr><td>Прочее</td><td>21807</td></tr>
                                <tr><td>Универсальное</td><td>21806</td></tr>
                                <tr><td>Горно-Алтайск</td><td>11319</td></tr>
                                <tr><td>Универсальное</td><td>21808</td></tr>
                                <tr><td>Прочее</td><td>21809</td></tr>
                                <tr><td>Улан-Удэ</td><td>198</td></tr>
                                <tr><td>Универсальное</td><td>21810</td></tr>
                                <tr><td>Прочее</td><td>21811</td></tr>
                                <tr><td>Кызыл</td><td>11333</td></tr>
                                <tr><td>Универсальное</td><td>21812</td></tr>
                                <tr><td>Прочее</td><td>21813</td></tr>
                                <tr><td>Абакан</td><td>1095</td></tr>
                                <tr><td>Саяногорск</td><td>11341</td></tr>
                                <tr><td>Универсальное</td><td>21814</td></tr>
                                <tr><td>Прочее</td><td>21815</td></tr>
                                <tr><td>Томск</td><td>67</td></tr>
                                <tr><td>Универсальное</td><td>21816</td></tr>
                                <tr><td>Прочее</td><td>21817</td></tr>
                                <tr><td>Северск</td><td>11351</td></tr>
                                <tr><td>Курган</td><td>53</td></tr>
                                <tr><td>Универсальное</td><td>21825</td></tr>
                                <tr><td>Прочее</td><td>21826</td></tr>
                                <tr><td>Екатеринбург</td><td>54</td></tr>
                                <tr><td>Каменск-Уральский</td><td>11164</td></tr>
                                <tr><td>Нижний Тагил</td><td>11168</td></tr>
                                <tr><td>Новоуральск</td><td>11170</td></tr>
                                <tr><td>Первоуральск</td><td>11171</td></tr>
                                <tr><td>Прочее</td><td>21828</td></tr>
                                <tr><td>Универсальное</td><td>21827</td></tr>
                                <tr><td>Тюмень</td><td>55</td></tr>
                                <tr><td>Тобольск</td><td>11175</td></tr>
                                <tr><td>Универсальное</td><td>21829</td></tr>
                                <tr><td>Прочее</td><td>21830</td></tr>
                                <tr><td>Ишим</td><td>11173</td></tr>
                                <tr><td>Ханты-Мансийск</td><td>57</td></tr>
                                <tr><td>Сургут</td><td>973</td></tr>
                                <tr><td>Нижневартовск</td><td>1091</td></tr>
                                <tr><td>Универсальное</td><td>21831</td></tr>
                                <tr><td>Прочее</td><td>21832</td></tr>
                                <tr><td>Челябинск</td><td>56</td></tr>
                                <tr><td>Магнитогорск</td><td>235</td></tr>
                                <tr><td>Миасс</td><td>11212</td></tr>
                                <tr><td>Златоуст</td><td>11202</td></tr>
                                <tr><td>Сатка</td><td>11217</td></tr>
                                <tr><td>Озерск</td><td>11214</td></tr>
                                <tr><td>Снежинск</td><td>11218</td></tr>
                                <tr><td>Универсальное</td><td>21833</td></tr>
                                <tr><td>Прочее</td><td>21834</td></tr>
                                <tr><td>Салехард</td><td>58</td></tr>
                                <tr><td>Универсальное</td><td>21835</td></tr>
                                <tr><td>Прочее</td><td>21836</td></tr>
                                <tr><td>Киров</td><td>46</td></tr>
                                <tr><td>Универсальное</td><td>21837</td></tr>
                                <tr><td>Прочее</td><td>21838</td></tr>
                                <tr><td>Кирово-Чепецк</td><td>11071</td></tr>
                                <tr><td>Йошкар-Ола</td><td>41</td></tr>
                                <tr><td>Универсальное</td><td>21839</td></tr>
                                <tr><td>Прочее</td><td>21840</td></tr>
                                <tr><td>Арзамас</td><td>11080</td></tr>
                                <tr><td>Нижний Новгород</td><td>47</td></tr>
                                <tr><td>Саров</td><td>11083</td></tr>
                                <tr><td>Универсальное</td><td>21841</td></tr>
                                <tr><td>Прочее</td><td>21842</td></tr>
                                <tr><td>Дзержинск</td><td>972</td></tr>
                                <tr><td>Сатис</td><td>20258</td></tr>
                                <tr><td>Кстово</td><td>20044</td></tr>
                                <tr><td>Выкса</td><td>20040</td></tr>
                                <tr><td>Оренбург</td><td>48</td></tr>
                                <tr><td>Орск</td><td>11091</td></tr>
                                <tr><td>Универсальное</td><td>21843</td></tr>
                                <tr><td>Прочее</td><td>21844</td></tr>
                                <tr><td>Пенза</td><td>49</td></tr>
                                <tr><td>Универсальное</td><td>21845</td></tr>
                                <tr><td>Прочее</td><td>21846</td></tr>
                                <tr><td>Пермь</td><td>50</td></tr>
                                <tr><td>Соликамск</td><td>11110</td></tr>
                                <tr><td>Универсальное</td><td>21847</td></tr>
                                <tr><td>Прочее</td><td>21848</td></tr>
                                <tr><td>Уфа</td><td>172</td></tr>
                                <tr><td>Нефтекамск</td><td>11114</td></tr>
                                <tr><td>Салават</td><td>11115</td></tr>
                                <tr><td>Стерлитамак</td><td>11116</td></tr>
                                <tr><td>Универсальное</td><td>21849</td></tr>
                                <tr><td>Прочее</td><td>21850</td></tr>
                                <tr><td>Саранск</td><td>42</td></tr>
                                <tr><td>Универсальное</td><td>21852</td></tr>
                                <tr><td>Прочее</td><td>21853</td></tr>
                                <tr><td>Казань</td><td>43</td></tr>
                                <tr><td>Набережные Челны</td><td>236</td></tr>
                                <tr><td>Нижнекамск</td><td>11127</td></tr>
                                <tr><td>Универсальное</td><td>21854</td></tr>
                                <tr><td>Прочее</td><td>21855</td></tr>
                                <tr><td>Елабуга</td><td>11123</td></tr>
                                <tr><td>Альметьевск</td><td>11121</td></tr>
                                <tr><td>Бугульма</td><td>11122</td></tr>
                                <tr><td>Зеленодольск</td><td>11125</td></tr>
                                <tr><td>Чистополь</td><td>11129</td></tr>
                                <tr><td>Самара</td><td>51</td></tr>
                                <tr><td>Тольятти</td><td>240</td></tr>
                                <tr><td>Сызрань</td><td>11139</td></tr>
                                <tr><td>Универсальное</td><td>21856</td></tr>
                                <tr><td>Прочее</td><td>21857</td></tr>
                                <tr><td>Жигулевск</td><td>11132</td></tr>
                                <tr><td>Саратов</td><td>194</td></tr>
                                <tr><td>Балаково</td><td>11143</td></tr>
                                <tr><td>Универсальное</td><td>21858</td></tr>
                                <tr><td>Прочее</td><td>21859</td></tr>
                                <tr><td>Энгельс</td><td>11147</td></tr>
                                <tr><td>Ижевск</td><td>44</td></tr>
                                <tr><td>Глазов</td><td>11150</td></tr>
                                <tr><td>Универсальное</td><td>21860</td></tr>
                                <tr><td>Прочее</td><td>21861</td></tr>
                                <tr><td>Сарапул</td><td>11152</td></tr>
                                <tr><td>Ульяновск</td><td>195</td></tr>
                                <tr><td>Димитровград</td><td>11155</td></tr>
                                <tr><td>Универсальное</td><td>21862</td></tr>
                                <tr><td>Прочее</td><td>21863</td></tr>
                                <tr><td>Чебоксары</td><td>45</td></tr>
                                <tr><td>Универсальное</td><td>21864</td></tr>
                                <tr><td>Прочее</td><td>21865</td></tr>
                                <tr><td>Астрахань</td><td>37</td></tr>
                                <tr><td>Универсальное</td><td>21866</td></tr>
                                <tr><td>Прочее</td><td>21867</td></tr>
                                <tr><td>Волгоград</td><td>38</td></tr>
                                <tr><td>Волжский</td><td>10951</td></tr>
                                <tr><td>Универсальное</td><td>21868</td></tr>
                                <tr><td>Прочее</td><td>21869</td></tr>
                                <tr><td>Анапа</td><td>1107</td></tr>
                                <tr><td>Краснодар</td><td>35</td></tr>
                                <tr><td>Новороссийск</td><td>970</td></tr>
                                <tr><td>Сочи</td><td>239</td></tr>
                                <tr><td>Туапсе</td><td>1058</td></tr>
                                <tr><td>Геленджик</td><td>10990</td></tr>
                                <tr><td>Армавир</td><td>10987</td></tr>
                                <tr><td>Ейск</td><td>10993</td></tr>
                                <tr><td>Универсальное</td><td>21870</td></tr>
                                <tr><td>Прочее</td><td>21871</td></tr>
                                <tr><td>Майкоп</td><td>1093</td></tr>
                                <tr><td>Универсальное</td><td>21872</td></tr>
                                <tr><td>Прочее</td><td>21873</td></tr>
                                <tr><td>Махачкала</td><td>28</td></tr>
                                <tr><td>Универсальное</td><td>21874</td></tr>
                                <tr><td>Прочее</td><td>21875</td></tr>
                                <tr><td>Назрань</td><td>1092</td></tr>
                                <tr><td>Универсальное</td><td>21876</td></tr>
                                <tr><td>Прочее</td><td>21877</td></tr>
                                <tr><td>Нальчик</td><td>30</td></tr>
                                <tr><td>Универсальное</td><td>21878</td></tr>
                                <tr><td>Прочее</td><td>21879</td></tr>
                                <tr><td>Элиста</td><td>1094</td></tr>
                                <tr><td>Универсальное</td><td>21880</td></tr>
                                <tr><td>Прочее</td><td>21881</td></tr>
                                <tr><td>Черкесск</td><td>1104</td></tr>
                                <tr><td>Универсальное</td><td>21882</td></tr>
                                <tr><td>Прочее</td><td>21883</td></tr>
                                <tr><td>Владикавказ</td><td>33</td></tr>
                                <tr><td>Универсальное</td><td>21884</td></tr>
                                <tr><td>Прочее</td><td>21885</td></tr>
                                <tr><td>Ростов-на-Дону</td><td>39</td></tr>
                                <tr><td>Шахты</td><td>11053</td></tr>
                                <tr><td>Таганрог</td><td>971</td></tr>
                                <tr><td>Новочеркасск</td><td>238</td></tr>
                                <tr><td>Волгодонск</td><td>11036</td></tr>
                                <tr><td>Универсальное</td><td>21886</td></tr>
                                <tr><td>Прочее</td><td>21887</td></tr>
                                <tr><td>Каменск-Шахтинский</td><td>11043</td></tr>
                                <tr><td>Ставрополь</td><td>36</td></tr>
                                <tr><td>Пятигорск</td><td>11067</td></tr>
                                <tr><td>Минеральные Воды</td><td>11063</td></tr>
                                <tr><td>Ессентуки</td><td>11057</td></tr>
                                <tr><td>Кисловодск</td><td>11062</td></tr>
                                <tr><td>Универсальное</td><td>21888</td></tr>
                                <tr><td>Прочее</td><td>21889</td></tr>
                                <tr><td>Невинномысск</td><td>11064</td></tr>
                                <tr><td>Грозный</td><td>1106</td></tr>
                                <tr><td>Универсальное</td><td>21890</td></tr>
                                <tr><td>Прочее</td><td>21891</td></tr>
                                <tr><td>Санкт-Петербург</td><td>2</td></tr>
                                <tr><td>Выборг</td><td>969</td></tr>
                                <tr><td>Гатчина</td><td>10867</td></tr>
                                <tr><td>Универсальное</td><td>21892</td></tr>
                                <tr><td>Прочее</td><td>21893</td></tr>
                                <tr><td>Архангельск</td><td>20</td></tr>
                                <tr><td>Северодвинск</td><td>10849</td></tr>
                                <tr><td>Универсальное</td><td>21894</td></tr>
                                <tr><td>Прочее</td><td>21895</td></tr>
                                <tr><td>Вологда</td><td>21</td></tr>
                                <tr><td>Универсальное</td><td>21896</td></tr>
                                <tr><td>Прочее</td><td>21897</td></tr>
                                <tr><td>Череповец</td><td>968</td></tr>
                                <tr><td>Калининград</td><td>22</td></tr>
                                <tr><td>Универсальное</td><td>21898</td></tr>
                                <tr><td>Прочее</td><td>21899</td></tr>
                                <tr><td>Апатиты</td><td>10894</td></tr>
                                <tr><td>Мурманск</td><td>23</td></tr>
                                <tr><td>Универсальное</td><td>21900</td></tr>
                                <tr><td>Прочее</td><td>21901</td></tr>
                                <tr><td>Великий Новгород</td><td>24</td></tr>
                                <tr><td>Универсальное</td><td>21902</td></tr>
                                <tr><td>Прочее</td><td>21903</td></tr>
                                <tr><td>Псков</td><td>25</td></tr>
                                <tr><td>Великие Луки</td><td>10928</td></tr>
                                <tr><td>Универсальное</td><td>21904</td></tr>
                                <tr><td>Прочее</td><td>21905</td></tr>
                                <tr><td>Петрозаводск</td><td>18</td></tr>
                                <tr><td>Универсальное</td><td>21906</td></tr>
                                <tr><td>Прочее</td><td>21907</td></tr>
                                <tr><td>Сортавала</td><td>10937</td></tr>
                                <tr><td>Сыктывкар</td><td>19</td></tr>
                                <tr><td>Ухта</td><td>10945</td></tr>
                                <tr><td>Универсальное</td><td>21908</td></tr>
                                <tr><td>Прочее</td><td>21909</td></tr>
                                <tr><td>Белгород</td><td>4</td></tr>
                                <tr><td>Старый Оскол</td><td>10649</td></tr>
                                <tr><td>Универсальное</td><td>21910</td></tr>
                                <tr><td>Прочее</td><td>21911</td></tr>
                                <tr><td>Брянск</td><td>191</td></tr>
                                <tr><td>Универсальное</td><td>21912</td></tr>
                                <tr><td>Прочее</td><td>21913</td></tr>
                                <tr><td>Владимир</td><td>192</td></tr>
                                <tr><td>Александров</td><td>10656</td></tr>
                                <tr><td>Гусь-Хрустальный</td><td>10661</td></tr>
                                <tr><td>Муром</td><td>10668</td></tr>
                                <tr><td>Универсальное</td><td>21914</td></tr>
                                <tr><td>Прочее</td><td>21915</td></tr>
                                <tr><td>Ковров</td><td>10664</td></tr>
                                <tr><td>Суздаль</td><td>10671</td></tr>
                                <tr><td>Воронеж</td><td>193</td></tr>
                                <tr><td>Универсальное</td><td>21916</td></tr>
                                <tr><td>Прочее</td><td>21917</td></tr>
                                <tr><td>Иваново</td><td>5</td></tr>
                                <tr><td>Универсальное</td><td>21918</td></tr>
                                <tr><td>Прочее</td><td>21919</td></tr>
                                <tr><td>Калуга</td><td>6</td></tr>
                                <tr><td>Обнинск</td><td>967</td></tr>
                                <tr><td>Универсальное</td><td>21920</td></tr>
                                <tr><td>Прочее</td><td>21921</td></tr>
                                <tr><td>Кострома</td><td>7</td></tr>
                                <tr><td>Универсальное</td><td>21922</td></tr>
                                <tr><td>Прочее</td><td>21923</td></tr>
                                <tr><td>Курск</td><td>8</td></tr>
                                <tr><td>Универсальное</td><td>21924</td></tr>
                                <tr><td>Прочее</td><td>21925</td></tr>
                                <tr><td>Липецк</td><td>9</td></tr>
                                <tr><td>Универсальное</td><td>21926</td></tr>
                                <tr><td>Прочее</td><td>21927</td></tr>
                                <tr><td>Орел</td><td>10</td></tr>
                                <tr><td>Универсальное</td><td>21928</td></tr>
                                <tr><td>Прочее</td><td>21929</td></tr>
                                <tr><td>Рязань</td><td>11</td></tr>
                                <tr><td>Универсальное</td><td>21930</td></tr>
                                <tr><td>Прочее</td><td>21931</td></tr>
                                <tr><td>Смоленск</td><td>12</td></tr>
                                <tr><td>Универсальное</td><td>21932</td></tr>
                                <tr><td>Прочее</td><td>21933</td></tr>
                                <tr><td>Тамбов</td><td>13</td></tr>
                                <tr><td>Универсальное</td><td>21934</td></tr>
                                <tr><td>Прочее</td><td>21935</td></tr>
                                <tr><td>Тверь</td><td>14</td></tr>
                                <tr><td>Универсальное</td><td>21936</td></tr>
                                <tr><td>Прочее</td><td>21937</td></tr>
                                <tr><td>Ржев</td><td>10820</td></tr>
                                <tr><td>Тула</td><td>15</td></tr>
                                <tr><td>Универсальное</td><td>21938</td></tr>
                                <tr><td>Прочее</td><td>21939</td></tr>
                                <tr><td>Новомосковск</td><td>10830</td></tr>
                                <tr><td>Ярославль</td><td>16</td></tr>
                                <tr><td>Рыбинск</td><td>10839</td></tr>
                                <tr><td>Переславль</td><td>10837</td></tr>
                                <tr><td>Универсальное</td><td>21940</td></tr>
                                <tr><td>Прочее</td><td>21941</td></tr>
                                <tr><td>Ростов</td><td>10838</td></tr>
                                <tr><td>Углич</td><td>10840</td></tr>
                                <tr><td>Канада</td><td>95</td></tr>
                                <tr><td>США</td><td>84</td></tr>
                                <tr><td>Мексика</td><td>20271</td></tr>
                                <tr><td>Универсальное</td><td>21942</td></tr>
                                <tr><td>Прочее</td><td>21943</td></tr>
                                <tr><td>Аргентина</td><td>93</td></tr>
                                <tr><td>Бразилия</td><td>94</td></tr>
                                <tr><td>Прочее</td><td>669</td></tr>
                                <tr><td>Универсальное</td><td>670</td></tr>
                                <tr><td>Чита</td><td>68</td></tr>
                                <tr><td>Универсальное</td><td>21818</td></tr>
                                <tr><td>Прочее</td><td>21819</td></tr>
                                <tr><td>Минск</td><td>157</td></tr>
                                <tr><td>Жодино</td><td>26034</td></tr>
                                <tr><td>Универсальное</td><td>101852</td></tr>
                                <tr><td>Прочее</td><td>101853</td></tr>
                                <tr><td>Гомель</td><td>155</td></tr>
                                <tr><td>Универсальное</td><td>101854</td></tr>
                                <tr><td>Прочее</td><td>101855</td></tr>
                                <tr><td>Витебск</td><td>154</td></tr>
                                <tr><td>Универсальное</td><td>101856</td></tr>
                                <tr><td>Прочее</td><td>101857</td></tr>
                                <tr><td>Брест</td><td>153</td></tr>
                                <tr><td>Универсальное</td><td>101858</td></tr>
                                <tr><td>Прочее</td><td>101859</td></tr>
                                <tr><td>Гродно</td><td>10274</td></tr>
                                <tr><td>Универсальное</td><td>101860</td></tr>
                                <tr><td>Прочее</td><td>101861</td></tr>
                                <tr><td>Могилев</td><td>158</td></tr>
                                <tr><td>Универсальное</td><td>101862</td></tr>
                                <tr><td>Прочее</td><td>101863</td></tr>
                                <tr><td>Алматы</td><td>162</td></tr>
                                <tr><td>Талдыкорган</td><td>10303</td></tr>
                                <tr><td>Прочее</td><td>102499</td></tr>
                                <tr><td>Универсальное</td><td>102513</td></tr>
                                <tr><td>Караганда</td><td>164</td></tr>
                                <tr><td>Прочее</td><td>102500</td></tr>
                                <tr><td>Универсальное</td><td>102514</td></tr>
                                <tr><td>Астана</td><td>163</td></tr>
                                <tr><td>Кокшетау</td><td>20809</td></tr>
                                <tr><td>Прочее</td><td>102501</td></tr>
                                <tr><td>Универсальное</td><td>102515</td></tr>
                                <tr><td>Семей</td><td>165</td></tr>
                                <tr><td>Усть-Каменогорск</td><td>10306</td></tr>
                                <tr><td>Прочее</td><td>102502</td></tr>
                                <tr><td>Универсальное</td><td>102516</td></tr>
                                <tr><td>Павлодар</td><td>190</td></tr>
                                <tr><td>Прочее</td><td>102503</td></tr>
                                <tr><td>Универсальное</td><td>102517</td></tr>
                                <tr><td>Прочее</td><td>102504</td></tr>
                                <tr><td>Универсальное</td><td>102518</td></tr>
                                <tr><td>Прочее</td><td>102505</td></tr>
                                <tr><td>Универсальное</td><td>102519</td></tr>
                                <tr><td>Прочее</td><td>102506</td></tr>
                                <tr><td>Универсальное</td><td>102520</td></tr>
                                <tr><td>Чимкент</td><td>221</td></tr>
                                <tr><td>Прочее</td><td>102507</td></tr>
                                <tr><td>Универсальное</td><td>102521</td></tr>
                                <tr><td>Актобе</td><td>20273</td></tr>
                                <tr><td>Прочее</td><td>102508</td></tr>
                                <tr><td>Универсальное</td><td>102522</td></tr>
                                <tr><td>Прочее</td><td>102509</td></tr>
                                <tr><td>Универсальное</td><td>102523</td></tr>
                                <tr><td>Прочее</td><td>102510</td></tr>
                                <tr><td>Универсальное</td><td>102524</td></tr>
                                <tr><td>Прочее</td><td>102511</td></tr>
                                <tr><td>Универсальное</td><td>102525</td></tr>
                                <tr><td>Прочее</td><td>102512</td></tr>
                                <tr><td>Универсальное</td><td>102526</td></tr>
                                <tr><td>Киев</td><td>143</td></tr>
                                <tr><td>Белая Церковь</td><td>10369</td></tr>
                                <tr><td>Прочее</td><td>101864</td></tr>
                                <tr><td>Универсальное</td><td>101865</td></tr>
                                <tr><td>Кременчуг</td><td>21609</td></tr>
                                <tr><td>Полтава</td><td>964</td></tr>
                                <tr><td>Прочее</td><td>102450</td></tr>
                                <tr><td>Универсальное</td><td>102475</td></tr>
                                <tr><td>Черкассы</td><td>10363</td></tr>
                                <tr><td>Прочее</td><td>102451</td></tr>
                                <tr><td>Универсальное</td><td>102476</td></tr>
                                <tr><td>Винница</td><td>963</td></tr>
                                <tr><td>Прочее</td><td>102452</td></tr>
                                <tr><td>Универсальное</td><td>102477</td></tr>
                                <tr><td>Кировоград</td><td>20221</td></tr>
                                <tr><td>Прочее</td><td>102453</td></tr>
                                <tr><td>Универсальное</td><td>102478</td></tr>
                                <tr><td>Житомир</td><td>10343</td></tr>
                                <tr><td>Прочее</td><td>102454</td></tr>
                                <tr><td>Универсальное</td><td>102479</td></tr>
                                <tr><td>Харьков</td><td>147</td></tr>
                                <tr><td>Прочее</td><td>102455</td></tr>
                                <tr><td>Универсальное</td><td>102480</td></tr>
                                <tr><td>Донецк</td><td>142</td></tr>
                                <tr><td>Краматорск</td><td>20554</td></tr>
                                <tr><td>Мариуполь</td><td>10366</td></tr>
                                <tr><td>Макеевка</td><td>24876</td></tr>
                                <tr><td>Прочее</td><td>102456</td></tr>
                                <tr><td>Универсальное</td><td>102481</td></tr>
                                <tr><td>Днепропетровск</td><td>141</td></tr>
                                <tr><td>Кривой Рог</td><td>10347</td></tr>
                                <tr><td>Прочее</td><td>102457</td></tr>
                                <tr><td>Универсальное</td><td>102482</td></tr>
                                <tr><td>Луганск</td><td>222</td></tr>
                                <tr><td>Прочее</td><td>102458</td></tr>
                                <tr><td>Универсальное</td><td>102483</td></tr>
                                <tr><td>Запорожье</td><td>960</td></tr>
                                <tr><td>Мелитополь</td><td>10367</td></tr>
                                <tr><td>Прочее</td><td>102459</td></tr>
                                <tr><td>Универсальное</td><td>102484</td></tr>
                                <tr><td>Одесса</td><td>145</td></tr>
                                <tr><td>Прочее</td><td>102460</td></tr>
                                <tr><td>Универсальное</td><td>102485</td></tr>
                                <tr><td>Николаев</td><td>148</td></tr>
                                <tr><td>Прочее</td><td>102461</td></tr>
                                <tr><td>Универсальное</td><td>102486</td></tr>
                                <tr><td>Херсон</td><td>962</td></tr>
                                <tr><td>Прочее</td><td>102462</td></tr>
                                <tr><td>Универсальное</td><td>102487</td></tr>
                                <tr><td>Львов</td><td>144</td></tr>
                                <tr><td>Прочее</td><td>102464</td></tr>
                                <tr><td>Универсальное</td><td>102489</td></tr>
                                <tr><td>Хмельницкий</td><td>961</td></tr>
                                <tr><td>Прочее</td><td>102465</td></tr>
                                <tr><td>Универсальное</td><td>102490</td></tr>
                                <tr><td>Тернополь</td><td>10357</td></tr>
                                <tr><td>Прочее</td><td>102466</td></tr>
                                <tr><td>Универсальное</td><td>102491</td></tr>
                                <tr><td>Ровно</td><td>10355</td></tr>
                                <tr><td>Прочее</td><td>102467</td></tr>
                                <tr><td>Универсальное</td><td>102492</td></tr>
                                <tr><td>Черновцы</td><td>10365</td></tr>
                                <tr><td>Прочее</td><td>102468</td></tr>
                                <tr><td>Универсальное</td><td>102493</td></tr>
                                <tr><td>Луцк</td><td>20222</td></tr>
                                <tr><td>Прочее</td><td>102469</td></tr>
                                <tr><td>Универсальное</td><td>102494</td></tr>
                                <tr><td>Ужгород</td><td>10358</td></tr>
                                <tr><td>Прочее</td><td>102470</td></tr>
                                <tr><td>Универсальное</td><td>102495</td></tr>
                                <tr><td>Ивано-Франковск</td><td>10345</td></tr>
                                <tr><td>Прочее</td><td>102471</td></tr>
                                <tr><td>Универсальное</td><td>102496</td></tr>
                                <tr><td>Сумы</td><td>965</td></tr>
                                <tr><td>Прочее</td><td>102472</td></tr>
                                <tr><td>Универсальное</td><td>102497</td></tr>
                                <tr><td>Чернигов</td><td>966</td></tr>
                                <tr><td>Прочее</td><td>102473</td></tr>
                                <tr><td>Универсальное</td><td>102498</td></tr>
                                <tr><td>Республика Дагестан</td><td>11010</td></tr>
                                <tr><td>Республика Ингушетия</td><td>11012</td></tr>
                                <tr><td>Республика Кабардино-Балкария</td><td>11013</td></tr>
                                <tr><td>Республика Северная Осетия-Алания</td><td>11021</td></tr>
                                <tr><td>Ставропольский край</td><td>11069</td></tr>
                                <tr><td>Карачаево-Черкесская Республика</td><td>11020</td></tr>
                                <tr><td>Чеченская Республика</td><td>11024</td></tr>
                                <tr><td>Универсальное</td><td>102446</td></tr>
                                <tr><td>Другие города региона</td><td>102445</td></tr>
                                <tr><td>Крым</td><td>977</td></tr>

                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Ок</button>
                        </div>
                    </div>
                </div>
            </div>

          <input type="submit" onclick="function_status_bar()" class="btn btn-default pull-right contaner-btn-send-keywords" value="Собрать с Wordstat" id = "get_new_report" form="new_phrase">
          <!-- реализовано на следующем этапе
            <div class="btn-group pull-right contaner-btn-send-keywords">
              <button type="button" class="btn btn-default">Wordstat</button>
              <button type="button" class="btn btn-default">Оба сервиса </button>
              <button type="button" class="btn btn-default">KeyWordsPlanner</button>
            </div>
            -->
        </div>
        <!-- реализовано на следующем этапе-->
        <div class="progress" style="display: none;" id = "progress_staus_ws" >
          <div class="progress-bar" id= "status_get_ws" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;" >
            0%
          </div>
        </div>
        <script>
            function_status_bar = function(){

                $("#progress_staus_ws").fadeIn();
                var timerId = setInterval(function() {
                    var pros_status = parseInt(status_get_ws.getAttribute("aria-valuenow"),10) + 1;
                    document.getElementById('status_get_ws').style.width = pros_status +'%';
                    status_get_ws.setAttribute("aria-valuenow",pros_status);
                    document.getElementById('status_get_ws').innerHTML = pros_status +'%';

                }, 70);
                // через 5 сек остановить повторы
                setTimeout(function() {
                    clearInterval(timerId);
                    document.getElementById('status_get_ws').style.width = '100%';
                    status_get_ws.setAttribute("aria-valuenow","100");
                    document.getElementById('status_get_ws').innerHTML = '100%';
                    document.getElementById('status_get_ws').innerHTML = "Осталось совсем немножечко.";
                }, 7000);
            }
            var keynum, lines = 1;
            function limitLines(obj, e) {
                var regWhite = /[" "]/g; //remove whitespace
                var regCrLf = /[\n\r\l]{2,}/g; //remove \r\n
                var obj = document.getElementById("textarea_limited");
                obj.value = obj.value.replace(regCrLf, '\r\n');


                // IE
                if(window.event) {
                    keynum = e.keyCode;
                    // Netscape/Firefox/Opera
                } else if(e.which) {
                    keynum = e.which;
                }

                if(keynum == 13) {
                    if(obj.value.split("\n").length == obj.rows) {
                        e = e || window.event;
                        var target = e.target || e.srcElement;
                        var code=e.keyCode?e.keyCode:(e.which?e.which:e.charCode)


                        return false;
                    }else{
                    }
                }
            }
        </script>
      <?
      if (isset($_POST[request_new_get_ws])) {
          if ($_POST[request_new_get_ws]!=""){ ?>


            <?
          $stack =array();
            if ($data=="56"){?>

          <div class="contaner " id="result_banner_ws_error56">
              <div class="alert alert-danger alert-good">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <a href="#" class="alert-link">Ошибка, достигнут лимит в 1000 запросов в день.</a>
              </div>
          </div>

        <script>
            setTimeout(function(){yaCounter32865650.reachGoal('get_new_report_error56');$(ga('send','event','get_new_report','get_new_report_error_56');"#result_banner_ws_error56").fadeOut();}, 5000);

        </script>
              <?
              }else{?>
            <div class="contaner " id="result_banner_ws_all_right">
              <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <a href="#" class="alert-link">Списки запросов собраны</a>
              </div>
                <script>
                    setTimeout(function(){yaCounter32865650.reachGoal('get_new_report_all_right');ga('send','event','get_new_report','get_new_report_allright');$("#result_banner_ws_all_right").fadeOut();}, 5000);

                </script>
            </div>
              <?}
              ?>
          <?}
          else {?>

        <div class="contaner " id="result_banner_ws">
          <div class="alert alert-warning alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <a href="#" class="alert-link">Введите хотя бы один ключевой запрос</a>
          </div>
        </div>
        <script>

            setTimeout(function(){yaCounter32865650.reachGoal('get_new_report_empty');ga('send','event','get_new_report','get_new_report_empty');$("#result_banner_ws").fadeOut();}, 5000);
        </script>
          <?
            }
      }
      else { ?>
        <div class="contaner " id="result_banner_ws">
          <div class="alert alert-warning alert-good">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <a href="#" class="alert-link">Введите список запросов для парсинга</a>
          </div>
        </div>
        <script>
            setTimeout(function(){$("#result_banner_ws").fadeOut();}, 5000);
        </script>

     <? }

      ?>
  </div>

  <div class="col-md-8">
    <h3>Список запросов</h3>

    <div class="panel-group" id="accordion">
        <?
        if ((isset($_POST[request_new_get_ws]))&&($_POST[request_new_get_ws]!=""))

            if ($data!="56") {

                if ((isset($_POST[request_new_get_ws_freq]))&&($_POST[request_new_get_ws_freq]!="")) {
                    $freq = $_POST[request_new_get_ws_freq];
                }
                else {
                    $freq =0;
                }

                foreach ($data as $data1) {
                    foreach ($data1 as $keywords) {
                        $j = 1;
                        ?>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseOne<? echo $i_N ?>">
                                        <div class="row">
                                            <?
                                            echo '<div class="col-md-6">' . $keywords[Phrase] . '</div>';
                                            $kw = $keywords[SearchedWith];
                                            $kw1 = $kw[0];
                                            echo '<div class="col-md-4 text-right">' . count($kw) . ' запросов</div>';
                                            echo '<div class="col-md-2 text-right">' . $kw1[Shows] . '</div>';
                                            ?>
                                        </div>
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseOne<? echo $i_N ?>" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Номер</th>
                                            <th>Запрос</th>
                                            <th>Показов</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?
                                        foreach ($keywords[SearchedWith] as $keywords_one) {
                                            if ($keywords_one[Shows]>$freq) {
                                                echo '<tr><td>' . $j++ . '</td><td>' . $keywords_one[Phrase] . '</td><td>' . $keywords_one[Shows] . '</td></tr>';
                                                //array_push($stack, $keywords_one[Phrase]);
                                            }

                                        }
                                        $i_N++; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <?
                    }
                }
            } else echo "Было Весело! Приходи завтра!";?>
    </div>



    <div class="text-center">
      <ul class="pagination">
        <li><a href="#">&laquo; туда</a></li>
        <li class = "active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#"> сюда &raquo;</a></li>
      </ul>
    </div>



<?
if ($data!="56") {
    if ((isset($_POST[request_new_get_ws])) && ($_POST[request_new_get_ws] != "")){
        echo '<a href = "/temp.csv"><button type="button" class="btn btn-default pull-right">Скачать .csv</button></a>';
//print_r($data);

        ?>
        <form action="http://limea.ru/planning" method="post" >
            <textarea class="form-control" name="go_to_planing_from_collect" style="display:none;"><?
                foreach($stack as $value) {
                    echo "$value \n";
                }
                ?></textarea>
            <input type="submit" class="btn btn-default pull-left" value="Перейти к планированию">

        </form>

        <?
    }

}
?>
    <!-- реализовано на следующем этапе
    <button type="button" class="btn btn-default">Создать объявления</button>
    -->
  </div>
</div>