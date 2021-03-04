$output = "<ul>";
    foreach($json['restaurant'] as $restaurant){
        $output .="<h4>".$restaurant['name'][0]."</h4>";
        $output .="<li>".$restaurant['time'][0]."</li>";
    }
    $output .= "</ul>";
    echo $output


    $output = "<ul>";
    foreach($json['restaurant'] as $restaurant){
        $output .="<h4>".$restaurant['name']."</h4>";
        $output .=$restaurant['time'];
    }
    $output .= "</ul>";
    echo $output
    
    <?php
    $jsondata = file_get_contents("data.json");
    $json = json_decode($jsondata,true);
    $json = $json['restaurant']['time'];
    echo $json['restaurant'][3]["name"];
    echo $json['restaurant'][3]["tel"];
    echo $json['restaurant'][3]["adrs"];
    echo $json['restaurant'][3]["time"];

?>

{
    "restaurant":[
        {
            "name" : "Oasis Bar & Grill",
            "tel" : "28879820",
            "adrs" : "8/F, 1 Knutsford Terrace, Tsim Sha Tsui, Tsim Sha Tsui",
            "time": [
                {
                "MonFri": "14-22",
                "SatSun": "12-22"
                }
            ]
    
        },
        {
            "name" : "Oasis Bar & Grill",
            "tel" : "28879820",
            "adrs" : "8/F, 1 Knutsford Terrace, Tsim Sha Tsui, Tsim Sha Tsui",
            "time": [
                {
                "MonFri": "14-22",
                "SatSun": "12-22"
                }
            ]
        },        
        {
            "name" : "Oasis Bar & Grill",
            "tel" : "28879820",
            "adrs" : "8/F, 1 Knutsford Terrace, Tsim Sha Tsui, Tsim Sha Tsui",
            "time": [
                {
                "MonFri": "14-22",
                "SatSun": "12-22"
                }
            ]
        },        
        {
            "name" : "Oasis Bar & Grill",
            "tel" : "28879820",
            "adrs" : "8/F, 1 Knutsford Terrace, Tsim Sha Tsui, Tsim Sha Tsui",
            "time": [
                {
                "MonFri": "14-22",
                "SatSun": "12-22"
                }
            ]
        }
    ]
}






<form method="post" >
    <input type="submit" name="submit0" value="Further Information">  
    </form>

    {
            "name": "羅東肉焿番",
            "tel": "61125353",
            "adrs": "Shop 5 , G/F, Kin Fai Building, 69 Fung Cheung Road, Yuen Long",
            "intro": "香港首間正宗台灣肉焿店",
            "time": [
                {
                    "MonFri": "12-21",
                    "SatSun": "12-21",
                },
            ],
            "food": [
                {
                    "id": "鹽酥拼盤魯肉飯",
                    "id": "肉焿湯米粉",
                    "id": "台灣士林香腸",
                    "id": "黑糖甜湯",
                    "id": "鹽酥雞",
                    "id": "冬瓜珍珠",
                },
            ],
        },
        {
            "name": "Running 燒 ",
            "tel": "25060380",
            "adrs": "9/F, 726 Nathan Road, Mong Kok",
            "intro": "餐廳名字靈感來自韓國綜藝節目《Running Man》",
            "time": [
                {
                    "MonFri": "12-16 & 17-22",
                    "SatSun": "12-16 & 17-22",
                },
            ],
            "food": [
                {
                    "id": "醬汁牛五花肉",
                    "id": "生蠔",
                    "id": "韓式炒粉絲",
                    "id": "邪惡芝士排骨",
                    "id": "韓式炸雞",
                    "id": "炸魷魚鬚",
                },
            ],
        },
        {
            "name": "我愛慢煮 (普慶坊)",
            "tel": "24680090",
            "adrs": "Shop G2, G/F, 18 Po Hing Fong, Sheung Wan",
            "intro": "店如其名，餐廳主打慢煮的菜餚",
            "time": [
                {
                    "MonFri": "12-22",
                    "SatSun": "12-22",
                },
            ],
            "food": [
                {
                    "id": "加拿大法式豬鞍架",
                    "id": "墨西哥粟米花",
                    "id": "澳洲羊T骨",
                    "id": "草莓醬比利時窩夫配意大利雪糕",
                    "id": "芝士四川雞肉薄餅",
                    "id": "香草丹麥烤雞半隻",
                },
            ],
        },
        {
            "name": "揀得啱車仔麵",
            "tel": "31060635",
            "adrs": "Shop No.205, 2/F, Low Block, Grand Millennium Plaza, No.181 Queen's Road Central, Sheung Wan",
            "intro": "",
            "time": [
                {
                    "MonFri": "11-21",
                    "SatSun": "Closed",
                },
            ],
            "food": [
                {
                    "id": "麻辣鴨血",
                    "id": "千杯不醉雞翼",
                    "id": "水煮魚米線",
                    "id": "黑松露雞肉水餃",
                    "id": "咖喱魚蛋豬皮雙拼",
                    "id": "酸辣木耳絲",
                },
            ],
        },
        {
            "name": "蘇杭冰室",
            "tel": "23527778",
            "adrs": "G/F, 3 Jervois Street, Sheung Wan",
            "intro": "",
            "time": [
                {
                    "MonFri": "7-21",
                    "SatSun": "7-21",
                },
            ],
            "food": [
                {
                    "id": "沙嗲牛肉面",
                    "id": "All Day Breakfast",
                    "id": "沙律餐",
                    "id": "炒滑蛋",
                    "id": "瑞士汁雞脾沙律",
                    "id": "各式多士",
                },
            ],
        },
        {
            "name": "野川拉麵の深燒食堂",
            "tel": "37059833",
            "adrs": "Shop B, G/F,Wing Fung Building, 40-48 Yau San Street, Yuen Long",
            "intro": "餐廳主打各式日式料理，如串燒、刺身、拉麵、烏冬",
            "time": [
                {
                    "MonFri": "7-13",
                    "SatSun": "7-13",
                },
            ],
            "food": [
                {
                    "id": "自家製豬軟骨拉麵",
                    "id": "雪場蟹柳稻庭烏冬",
                    "id": "富士山頂汽水",
                    "id": "自家制叉燒拉麵",
                    "id": "燒扇貝",
                    "id": "燒牛舌",
                },
            ],
        },
        {
            "name": "逸之燒",
            "tel": "28851102",
            "adrs": "Shop 57, G/F, Ho Shun Lee Building, 9 Fung Yau Street South, Yuen Long",
            "intro": "主打日式串燒的餐廳",
            "time": [
                {
                    "MonFri": "12-15 & 18-20",
                    "SatSun": "12-15 & 18-21",
                },
            ],
            "food": [
                {
                    "id": "清酒煮蜆",
                    "id": "芝士啡菇",
                    "id": "沖繩網燒鮑魚仔",
                    "id": "安格斯牛小排壽喜燒",
                    "id": "安格斯牛小排鍋",
                    "id": "鹽燒豚肉荔枝串",
                },
            ],
        },
        {
            "name": "Windmill Restaurant & Bar",
            "tel": "37096460",
            "adrs": "G/F, Kwai Wai Building, 50 Chik Chuen Street, Tai Wai",
            "intro": "多盞水晶吊燈作裝飾，情侶前來用膳感覺更有情調",
            "time": [
                {
                    "MonFri": "12-20",
                    "SatSun": "12-20",
                },
            ],
            "food": [
                {
                    "id": "煙三文魚沙律",
                    "id": "招牌菜西班牙乳豬",
                    "id": "素菜千層麵",
                    "id": "西班牙黑毛豬鞍",
                    "id": "醬燒豬扒土耳其三文治",
                    "id": "波士頓龍蝦意粉",
                },
            ],
        },
        {
            "name": "玉桃軒酒家",
            "tel": "28821889",
            "adrs": "20/F, Lee Theatre Plaza, 99 Percival Street, Causeway Bay",
            "intro": "提供多元化精美點心、晚飯小菜及精選套餐。",
            "time": [
                {
                    "MonFri": "11-23",
                    "SatSun": "11-23",
                },
            ],
            "food": [
                {
                    "id": "流沙奶黃包",
                    "id": "上湯豆腐魚雲煲",
                    "id": "蜜汁叉燒湯河",
                    "id": "清蒸海石斑",
                    "id": "片皮鴨",
                    "id": "懷舊千層糕",
                },
            ],
        }

        
if(array_key_exists('submit0', $_POST)) { 
    submit0(); 
} 
else if(array_key_exists('submit1', $_POST)) { 
    submit1(); 
} 
else if(array_key_exists('submit2', $_POST)) { 
    submit2(); 
} 
else if(array_key_exists('submit3', $_POST)) { 
    submit3(); 
} 
else if(array_key_exists('submit4', $_POST)) { 
    submit4(); 
} 
else if(array_key_exists('submit5', $_POST)) { 
    submit5(); 
} 
else if(array_key_exists('submit6', $_POST)) { 
    submit6(); 
} 
else if(array_key_exists('submit7', $_POST)) { 
    submit7(); 
} 
else if(array_key_exists('submit8', $_POST)) { 
    submit8(); 
} 
else if(array_key_exists('submit9', $_POST)) { 
    submit9(); 
} 
function submit0() { 
    header("Location: restaurant.php"); 
} 
function submit1() { 
    header("Location: restaurant1.php"); 
} 
function submit2() { 
    header("Location: Yummy Noodles.php"); 
} 
function submit3() { 
    header("Location: Yummy Noodles.php"); 
} 
function submit4() { 
    header("Location: Yummy Noodles.php"); 
} 
function submit5() { 
    header("Location: Yummy Noodles.php"); 
} 
function submit6() { 
    header("Location: Yummy Noodles.php"); 
} 
function submit7() { 
    header("Location: Yummy Noodles.php"); 
} 
function submit8() { 
    header("Location: Yummy Noodles.php"); 
} 
function submit9() { 
    header("Location: Yummy Noodles.php"); 
} 
?>

<form method="post" >
    <input type="submit" name="submit0" value="Further Information">  
    </form>
<?php