<script type="text/javascript">
    function editComplete () {
        $.toast({
            heading: "変更が完了しました。",
            showHideTransition: "slide",
            icon: "info",
            bgColor: "#375a7f",
            position: "bottom-right",
            stack: "1"
        });
    }
</script>
<?php
    $filename = "/usr/bin/toytalk/facet/properties/WeatherReport.properties";
    $propertyArray = parse_ini_file($filename); 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if ($_POST["cityId"]) $propertyArray["city.id"] = $_POST["cityId"];
        try {
            $fp = fopen($filename, 'w');
            foreach ($propertyArray as $k => $i) fputs($fp, "$k=$i\n");
            fclose($fp);
            print '<script type="text/javascript">editComplete();</script>';
        } catch (Exception $ex) {
            echo TEST;
        }
    }
    
?>
<form method="post" action="./edit.php?facetName=<?php echo $_GET[facetName]?>">
    <div class="form-group">
        <label>天気を取得する場所 : WeatherReportで天気予報を行う箇所を選択します。</label><br>
        <select name="cityId">
            <option value="011000" <?php if ($propertyArray["city.id"] === "011000") echo selected; ?>> 北海道 道北 稚内</option>
            <option value="012010" <?php if ($propertyArray["city.id"] === "012010") echo selected; ?>> 北海道 道北 旭川</option>
            <option value="012020" <?php if ($propertyArray["city.id"] === "012020") echo selected; ?>> 北海道 道北 留萌</option>
            <option value="013010" <?php if ($propertyArray["city.id"] === "013010") echo selected; ?>> 北海道 道東 網走</option>
            <option value="013020" <?php if ($propertyArray["city.id"] === "013020") echo selected; ?>> 北海道 道東 北見</option>
            <option value="013030" <?php if ($propertyArray["city.id"] === "013030") echo selected; ?>> 北海道 道東 紋別</option>
            <option value="014010" <?php if ($propertyArray["city.id"] === "014010") echo selected; ?>> 北海道 道東 根室</option>
            <option value="014020" <?php if ($propertyArray["city.id"] === "014020") echo selected; ?>> 北海道 道東 釧路</option>
            <option value="014030" <?php if ($propertyArray["city.id"] === "014030") echo selected; ?>> 北海道 道東 帯広</option>
            <option value="015010" <?php if ($propertyArray["city.id"] === "015010") echo selected; ?>> 北海道 道南 室蘭</option>
            <option value="015020" <?php if ($propertyArray["city.id"] === "015020") echo selected; ?>> 北海道 道南 浦河</option>
            <option value="016010" <?php if ($propertyArray["city.id"] === "016010") echo selected; ?>> 北海道 道央 札幌</option>
            <option value="016020" <?php if ($propertyArray["city.id"] === "016020") echo selected; ?>> 北海道 道央 岩見沢</option>
            <option value="016030" <?php if ($propertyArray["city.id"] === "016030") echo selected; ?>> 北海道 道央 倶知安</option>
            <option value="017010" <?php if ($propertyArray["city.id"] === "017010") echo selected; ?>> 北海道 道南 函館</option>
            <option value="017020" <?php if ($propertyArray["city.id"] === "017010") echo selected; ?>> 北海道 道南 江差</option>
            <option value="020010" <?php if ($propertyArray["city.id"] === "020010") echo selected; ?>> 青森県 青森</option>
            <option value="020020" <?php if ($propertyArray["city.id"] === "020020") echo selected; ?>> 青森県 むつ</option>
            <option value="020030" <?php if ($propertyArray["city.id"] === "020030") echo selected; ?>> 青森県 八戸</option>
            <option value="030010" <?php if ($propertyArray["city.id"] === "030010") echo selected; ?>> 岩手県 盛岡</option>
            <option value="030020" <?php if ($propertyArray["city.id"] === "030020") echo selected; ?>> 岩手県 宮古</option>
            <option value="030030" <?php if ($propertyArray["city.id"] === "030030") echo selected; ?>> 岩手県 大船渡</option>
            <option value="040010" <?php if ($propertyArray["city.id"] === "040010") echo selected; ?>> 宮城県 仙台</option>
            <option value="040020" <?php if ($propertyArray["city.id"] === "040020") echo selected; ?>> 宮城県 白石</option>
            <option value="050010" <?php if ($propertyArray["city.id"] === "050010") echo selected; ?>> 秋田県 秋田</option>
            <option value="050020" <?php if ($propertyArray["city.id"] === "050020") echo selected; ?>> 秋田県 横手</option>
            <option value="060010" <?php if ($propertyArray["city.id"] === "060010") echo selected; ?>> 山形県 山形</option>
            <option value="060020" <?php if ($propertyArray["city.id"] === "060020") echo selected; ?>> 山形県 米沢</option>
            <option value="060030" <?php if ($propertyArray["city.id"] === "060030") echo selected; ?>> 山形県 酒田</option>
            <option value="060040" <?php if ($propertyArray["city.id"] === "060040") echo selected; ?>> 山形県 新庄</option>
            <option value="070010" <?php if ($propertyArray["city.id"] === "070010") echo selected; ?>> 福島県 福島</option>
            <option value="070020" <?php if ($propertyArray["city.id"] === "070020") echo selected; ?>> 福島県 小名浜</option>
            <option value="070030" <?php if ($propertyArray["city.id"] === "070030") echo selected; ?>> 福島県 若松</option>
            <option value="080010" <?php if ($propertyArray["city.id"] === "080010") echo selected; ?>> 茨城県 水戸</option>
            <option value="080020" <?php if ($propertyArray["city.id"] === "080020") echo selected; ?>> 茨城県 土浦</option>
            <option value="090010" <?php if ($propertyArray["city.id"] === "090010") echo selected; ?>> 栃木県 宇都宮</option>
            <option value="090020" <?php if ($propertyArray["city.id"] === "090020") echo selected; ?>> 栃木県 大田原</option>
            <option value="100010" <?php if ($propertyArray["city.id"] === "100010") echo selected; ?>> 群馬県 前橋</option>
            <option value="100020" <?php if ($propertyArray["city.id"] === "100020") echo selected; ?>> 群馬県 みなかみ</option>
            <option value="110010" <?php if ($propertyArray["city.id"] === "110010") echo selected; ?>> 埼玉県 さいたま</option>
            <option value="110020" <?php if ($propertyArray["city.id"] === "110020") echo selected; ?>> 埼玉県 熊谷</option>
            <option value="110030" <?php if ($propertyArray["city.id"] === "110030") echo selected; ?>> 埼玉県 秩父</option>
            <option value="120010" <?php if ($propertyArray["city.id"] === "120010") echo selected; ?>> 千葉県 千葉</option>
            <option value="120020" <?php if ($propertyArray["city.id"] === "120020") echo selected; ?>> 千葉県 銚子</option>
            <option value="120030" <?php if ($propertyArray["city.id"] === "120030") echo selected; ?>> 千葉県 館山</option>
            <option value="130010" <?php if ($propertyArray["city.id"] === "130010") echo selected; ?>> 東京都 東京</option>
            <option value="130020" <?php if ($propertyArray["city.id"] === "130020") echo selected; ?>> 東京都 大島</option>
            <option value="130030" <?php if ($propertyArray["city.id"] === "130030") echo selected; ?>> 東京都 八丈島</option>
            <option value="130040" <?php if ($propertyArray["city.id"] === "130040") echo selected; ?>> 東京都 父島</option>
            <option value="140010" <?php if ($propertyArray["city.id"] === "140010") echo selected; ?>> 神奈川県 横浜</option>
            <option value="140020" <?php if ($propertyArray["city.id"] === "140020") echo selected; ?>> 神奈川県 小田原</option>
            <option value="150010" <?php if ($propertyArray["city.id"] === "150010") echo selected; ?>> 新潟県 新潟</option>
            <option value="150020" <?php if ($propertyArray["city.id"] === "150020") echo selected; ?>> 新潟県 長岡</option>
            <option value="150030" <?php if ($propertyArray["city.id"] === "150030") echo selected; ?>> 新潟県 高田</option>
            <option value="150040" <?php if ($propertyArray["city.id"] === "150040") echo selected; ?>> 新潟県 相川</option>
            <option value="160010" <?php if ($propertyArray["city.id"] === "160010") echo selected; ?>> 富山県 富山</option>
            <option value="160020" <?php if ($propertyArray["city.id"] === "160020") echo selected; ?>> 富山県 伏木</option>
            <option value="170010" <?php if ($propertyArray["city.id"] === "170010") echo selected; ?>> 石川県 金沢</option>
            <option value="170020" <?php if ($propertyArray["city.id"] === "170020") echo selected; ?>> 石川県 輪島</option>
            <option value="180010" <?php if ($propertyArray["city.id"] === "180010") echo selected; ?>> 福井県 福井</option>
            <option value="180020" <?php if ($propertyArray["city.id"] === "180020") echo selected; ?>> 福井県 敦賀</option>
            <option value="190010" <?php if ($propertyArray["city.id"] === "190010") echo selected; ?>> 山梨県 甲府</option>
            <option value="190020" <?php if ($propertyArray["city.id"] === "190020") echo selected; ?>> 山梨県 河口湖</option>
            <option value="200010" <?php if ($propertyArray["city.id"] === "200010") echo selected; ?>> 長野県 長野</option>
            <option value="200020" <?php if ($propertyArray["city.id"] === "200020") echo selected; ?>> 長野県 松本</option>
            <option value="200030" <?php if ($propertyArray["city.id"] === "200030") echo selected; ?>> 長野県 飯田</option>
            <option value="210010" <?php if ($propertyArray["city.id"] === "210010") echo selected; ?>> 岐阜県 岐阜</option>
            <option value="210020" <?php if ($propertyArray["city.id"] === "210020") echo selected; ?>> 岐阜県 高山</option>
            <option value="220010" <?php if ($propertyArray["city.id"] === "220010") echo selected; ?>> 静岡県 静岡</option>
            <option value="220020" <?php if ($propertyArray["city.id"] === "220020") echo selected; ?>> 静岡県 網代</option>
            <option value="220030" <?php if ($propertyArray["city.id"] === "220030") echo selected; ?>> 静岡県 三島</option>
            <option value="220040" <?php if ($propertyArray["city.id"] === "220040") echo selected; ?>> 静岡県 浜松</option>
            <option value="230010" <?php if ($propertyArray["city.id"] === "230010") echo selected; ?>> 愛知県 名古屋</option>
            <option value="230020" <?php if ($propertyArray["city.id"] === "230020") echo selected; ?>> 愛知県 豊橋</option>
            <option value="240010" <?php if ($propertyArray["city.id"] === "240010") echo selected; ?>> 三重県 津</option>
            <option value="240020" <?php if ($propertyArray["city.id"] === "240020") echo selected; ?>> 三重県 尾鷲</option>
            <option value="250010" <?php if ($propertyArray["city.id"] === "250010") echo selected; ?>> 滋賀県 大津</option>
            <option value="250020" <?php if ($propertyArray["city.id"] === "250020") echo selected; ?>> 滋賀県 彦根</option>
            <option value="260010" <?php if ($propertyArray["city.id"] === "260010") echo selected; ?>> 京都県 京都</option>
            <option value="260020" <?php if ($propertyArray["city.id"] === "260020") echo selected; ?>> 京都県 舞鶴</option>
            <option value="270000" <?php if ($propertyArray["city.id"] === "270000") echo selected; ?>> 大阪府 大阪</option>
            <option value="280010" <?php if ($propertyArray["city.id"] === "280010") echo selected; ?>> 兵庫県 神戸</option>
            <option value="280020" <?php if ($propertyArray["city.id"] === "280020") echo selected; ?>> 兵庫県 豊岡</option>
            <option value="290010" <?php if ($propertyArray["city.id"] === "290010") echo selected; ?>> 奈良県 奈良</option>
            <option value="290020" <?php if ($propertyArray["city.id"] === "290020") echo selected; ?>> 奈良県 風屋</option>
            <option value="300010" <?php if ($propertyArray["city.id"] === "300010") echo selected; ?>> 和歌山県 和歌山</option>
            <option value="300020" <?php if ($propertyArray["city.id"] === "300020") echo selected; ?>> 和歌山県 潮岬</option>
            <option value="310010" <?php if ($propertyArray["city.id"] === "310010") echo selected; ?>> 鳥取県 鳥取</option>
            <option value="310020" <?php if ($propertyArray["city.id"] === "310020") echo selected; ?>> 鳥取県 米子</option>
            <option value="320010" <?php if ($propertyArray["city.id"] === "320010") echo selected; ?>> 島根県 松江</option>
            <option value="320020" <?php if ($propertyArray["city.id"] === "320020") echo selected; ?>> 島根県 浜田</option>
            <option value="320030" <?php if ($propertyArray["city.id"] === "320030") echo selected; ?>> 島根県 西郷</option>
            <option value="330010" <?php if ($propertyArray["city.id"] === "330010") echo selected; ?>> 岡山県 岡山</option>
            <option value="330020" <?php if ($propertyArray["city.id"] === "330020") echo selected; ?>> 岡山県 津山</option>
            <option value="340010" <?php if ($propertyArray["city.id"] === "340010") echo selected; ?>> 広島県 広島</option>
            <option value="340020" <?php if ($propertyArray["city.id"] === "340020") echo selected; ?>> 広島県 庄原</option>
            <option value="350010" <?php if ($propertyArray["city.id"] === "350010") echo selected; ?>> 山口県 下関</option>
            <option value="350020" <?php if ($propertyArray["city.id"] === "350020") echo selected; ?>> 山口県 山口</option>
            <option value="350030" <?php if ($propertyArray["city.id"] === "350030") echo selected; ?>> 山口県 柳井</option>
            <option value="350040" <?php if ($propertyArray["city.id"] === "350040") echo selected; ?>> 山口県 萩</option>
            <option value="360010" <?php if ($propertyArray["city.id"] === "360010") echo selected; ?>> 徳島県 徳島</option>
            <option value="360020" <?php if ($propertyArray["city.id"] === "360020") echo selected; ?>> 徳島県 日和佐</option>
            <option value="370000" <?php if ($propertyArray["city.id"] === "370000") echo selected; ?>> 香川県 高松</option>
            <option value="380010" <?php if ($propertyArray["city.id"] === "380010") echo selected; ?>> 愛媛県 松山</option>
            <option value="380020" <?php if ($propertyArray["city.id"] === "380020") echo selected; ?>> 愛媛県 新居浜</option>
            <option value="380030" <?php if ($propertyArray["city.id"] === "380030") echo selected; ?>> 愛媛県 宇和島</option>
            <option value="390010" <?php if ($propertyArray["city.id"] === "390010") echo selected; ?>> 高知県 高知</option>
            <option value="390020" <?php if ($propertyArray["city.id"] === "390020") echo selected; ?>> 高知県 室戸岬</option>
            <option value="390030" <?php if ($propertyArray["city.id"] === "390030") echo selected; ?>> 高知県 清水</option>
            <option value="400010" <?php if ($propertyArray["city.id"] === "400010") echo selected; ?>> 福岡県 福岡</option>
            <option value="400020" <?php if ($propertyArray["city.id"] === "400020") echo selected; ?>> 福岡県 八幡</option>
            <option value="400030" <?php if ($propertyArray["city.id"] === "400030") echo selected; ?>> 福岡県 飯塚</option>
            <option value="400040" <?php if ($propertyArray["city.id"] === "400040") echo selected; ?>> 福岡県 久留米</option>
            <option value="410010" <?php if ($propertyArray["city.id"] === "410010") echo selected; ?>> 佐賀県 佐賀</option>
            <option value="410020" <?php if ($propertyArray["city.id"] === "410020") echo selected; ?>> 佐賀県 伊万里</option>
            <option value="420010" <?php if ($propertyArray["city.id"] === "420010") echo selected; ?>> 長崎県 長崎</option>
            <option value="420020" <?php if ($propertyArray["city.id"] === "420020") echo selected; ?>> 長崎県 佐世保</option>
            <option value="420030" <?php if ($propertyArray["city.id"] === "420030") echo selected; ?>> 長崎県 厳原</option>
            <option value="420040" <?php if ($propertyArray["city.id"] === "420040") echo selected; ?>> 長崎県 福江</option>
            <option value="430010" <?php if ($propertyArray["city.id"] === "430010") echo selected; ?>> 熊本県 熊本</option>
            <option value="430020" <?php if ($propertyArray["city.id"] === "430020") echo selected; ?>> 熊本県 阿蘇乙姫</option>
            <option value="430030" <?php if ($propertyArray["city.id"] === "430030") echo selected; ?>> 熊本県 牛深</option>
            <option value="430040" <?php if ($propertyArray["city.id"] === "430040") echo selected; ?>> 熊本県 人吉</option>
            <option value="440010" <?php if ($propertyArray["city.id"] === "440010") echo selected; ?>> 大分県 大分</option>
            <option value="440020" <?php if ($propertyArray["city.id"] === "440020") echo selected; ?>> 大分県 中津</option>
            <option value="440030" <?php if ($propertyArray["city.id"] === "440030") echo selected; ?>> 大分県 日田</option>
            <option value="440040" <?php if ($propertyArray["city.id"] === "440040") echo selected; ?>> 大分県 佐伯</option>
            <option value="450010" <?php if ($propertyArray["city.id"] === "450010") echo selected; ?>> 宮崎県 宮崎</option>
            <option value="450020" <?php if ($propertyArray["city.id"] === "450020") echo selected; ?>> 宮崎県 延岡</option>
            <option value="450030" <?php if ($propertyArray["city.id"] === "450030") echo selected; ?>> 宮崎県 都城</option>
            <option value="450040" <?php if ($propertyArray["city.id"] === "450040") echo selected; ?>> 宮崎県 高千穂</option>
            <option value="460010" <?php if ($propertyArray["city.id"] === "460010") echo selected; ?>> 鹿児島 鹿児島</option>
            <option value="460020" <?php if ($propertyArray["city.id"] === "460020") echo selected; ?>> 鹿児島 鹿屋</option>
            <option value="460030" <?php if ($propertyArray["city.id"] === "460030") echo selected; ?>> 鹿児島 種子島</option>
            <option value="460040" <?php if ($propertyArray["city.id"] === "460040") echo selected; ?>> 鹿児島 名瀬</option>
            <option value="471010" <?php if ($propertyArray["city.id"] === "471010") echo selected; ?>> 沖縄県 那覇</option>
            <option value="471020" <?php if ($propertyArray["city.id"] === "471020") echo selected; ?>> 沖縄県 名護</option>
            <option value="471030" <?php if ($propertyArray["city.id"] === "471030") echo selected; ?>> 沖縄県 久米島</option>
            <option value="472000" <?php if ($propertyArray["city.id"] === "472000") echo selected; ?>> 沖縄県 南大東</option>
            <option value="473000" <?php if ($propertyArray["city.id"] === "473000") echo selected; ?>> 沖縄県 宮古島</option>
            <option value="474010" <?php if ($propertyArray["city.id"] === "474010") echo selected; ?>> 沖縄県 石垣島</option>
            <option value="474020" <?php if ($propertyArray["city.id"] === "474020") echo selected; ?>> 沖縄県 与那国島</option>
        </select>
    </div>
    <input class="btn btn-primary" type="submit" value="変更">
</form>
