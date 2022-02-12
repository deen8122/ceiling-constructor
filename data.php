<?php

$data = [];
/*
 * ========================================================================================
 * Дом 1
 */
/*
  $files1 = scandir($folder);
  $ceilingSVG = [];
  foreach ($files1 as $i => $file) {
  if (strlen($file) > 4) {
  echo $file . '<br>';
  $ceilingSVG[] = ["icon" => "", "svg" => $folder . $file];
  }
  }
 * 
 */
$arCelling = [
	["id" => 1, "svg" => "1.svg"],
	["id" => 2, "svg" => "2.svg"],
	["id" => 3, "svg" => "3.svg"],
	["id" => 4, "svg" => "4.svg"],
	["id" => 5, "svg" => "5.svg"],
	["id" => 6, "svg" => "6.svg"],
	["id" => 7, "svg" => "7.svg"],
	["id" => 8, "svg" => "8.svg"],
	["id" => 9, "svg" => "9.svg"],
	["id" => 10, "svg" => "10.svg"],
	["id" => 11, "svg" => "11.svg"],
	["id" => 12, "svg" => "12.svg"],
	["id" => 13, "svg" => "13.svg"],
	["id" => 14, "svg" => "14.svg"],
	["id" => 15, "svg" => "15.svg"],
	["id" => 16, "svg" => "16.svg"],
];

$arLigtsOff = [];
foreach ($arCelling as $n => $arr) {
	$arLigtsOff[] = ["name" => "светильник " . $arr['id'], "image" => "light-off/os" . $arr['id'] . '.png', "zindex" => 10];
}
$arLigtsOn = [];
foreach ($arCelling as $n => $arr) {
	$arLigtsOn[] = ["name" => "светильник " . $arr['id'], "image" => "light-on/s" . $arr['id'] . '.png', "zindex" => 10];
}
$house = [
	"name" => "Варинат 1",
	"image" => "1 стены.png",
	"icon" => "",
	"images_folder" => "images/variants/v1/",
	"sections" => [ "Отделка", "Мебель и освещение"],
	"templates" => [
		["file" => "images/variants/v1/templ/prev1.jpg", "data" => json_decode('{"onoff":[null,null,1,1,0,1],"values":[5,0,0,0,0,1],"ceiling":5,"potolok1":"#ccc","potolok2":"#4e5a51","factura":1,"ontoggle":[null,null,null,null,0,0]}', true)],
		["file" => "images/variants/v1/templ/prev2.jpg", "data" => json_decode('{"onoff":[null,null,1,1,0,1],"values":[1,3,1,3,0,1],"ceiling":1,"potolok1":"#745a58","potolok2":"#f0f0ef","factura":1,"ontoggle":[null,null,null,null,0,0]}', true)],
		["file" => "images/variants/v1/templ/prev3.jpg", "data" => json_decode('{"onoff":[null,null,1,1,0,1],"values":[8,1,2,1,0,1],"ceiling":8,"potolok1":"#447b88","potolok2":"#f0f0ef","factura":1,"ontoggle":[null,null,null,null,0,0]}', true)],
		["file" => "images/variants/v1/templ/prev4.jpg", "data" => json_decode('{"onoff":[null,null,1,1,0,1],"values":[0,2,2,0,0,1],"ceiling":0,"potolok1":"#a44719","potolok2":"#ffffff","factura":1,"ontoggle":[null,null,null,null,0,0]}', true)],
		["file" => "images/variants/v1/templ/prev5.jpg", "data" => json_decode('{"onoff":[null,null,1,1,0,1],"values":[3,1,2,2,0,1],"ceiling":3,"potolok1":"#3a666e","potolok2":"#ffffff","factura":1,"ontoggle":[null,null,null,null,0,0]}', true)],
	],
	"ceiling" => $arCelling,
	"elements" => [
		//0
		[
			"name" => "Светильники",
			"section" => "Мебель и освещение",
			"type" => "hidden",
			"value" => $arLigtsOn
		],
		//1
		[
			"name" => "Цвет стен",
			"section" => "Отделка",
			"value" => [
				["name" => "серый", "image" => "1 стены.png", "icon" => "#5e6b64", "zindex" => 1],
				["name" => "синий", "image" => "2 стены.png", "icon" => "#496970", "zindex" => 1],
				["name" => "коричневый", "image" => "3 стены.png", "icon" => "#7b6649", "zindex" => 1],
				["name" => "фиолетовый", "image" => "4 стены.png", "icon" => "#6a5252", "zindex" => 1],
			]
		],
		//2
		[
			"name" => "Цвет пола",
			"section" => "Отделка",
			"value" => [
				["name" => "серый", "image" => "1 пол.png", "icon" => "#c2c3c2", "zindex" => 2],
				["name" => "темный", "image" => "2 пол.png", "icon" => "#2b2a26", "zindex" => 2],
				["name" => "бежевый", "image" => "3 пол.png", "icon" => "#f0f4f3", "zindex" => 2],
				["name" => "бежевый (паркет)", "image" => "4 пол.png", "icon" => "#d4d3d1", "zindex" => 2],
			]
		],
		//3
		[
			"name" => "Палитра мебели",
			"section" => "Отделка",
			"value" => [
				["name" => "Темный", "image" => "1 мебель.png", "icon" => "#20211c", "zindex" => 11],
				["name" => "Белый/синий", "image" => "2 мебель.png", "icon" => "#1b3840", "zindex" => 11],
				["name" => "Коричневый", "image" => "3 мебель.png", "icon" => "#745457", "zindex" => 11],
				["name" => "Бежевый", "image" => "4 мебель.png", "icon" => "#aea498", "zindex" => 11],
			]
		],
		//4
		[
			"name" => "Люстра",
			"type" => "on-off",
			"section" => "Мебель и освещение",
			"value" => [
				
				["name" => "Люстра выкл", "image" => "люстра офф.png", "value" => "off", "zindex" => 10],
				["name" => "Люстра вкл", "image" => "люстра .png", "value" => "on", "zindex" => 10],
			],
			"dependence"=>[
				
			]
		],
		//5
		[
			"name" => "Свет",
			"section" => "Мебель и освещение",
			"type" => "on-off",
			"value" => [
				["name" => "включено", "image" => '', "value" => "on", "zindex" => 10],
				["name" => "выключено", "image" => '', "value" => "off", "zindex" => 10],
			]
		],
		/*
		  [
		  "name" => "Мебель",
		  "section" => "Мебель и освещение",
		  "type" => "on-off",
		  "target" => "2",
		  ],
		 */
		//6
		[
			"name" => "Тени",
			"section" => "Мебель и освещение",
			"type" => "hidden",
			"value" => [
				["name" => "оражение да", "image" => "отражение-1-1.png", "value" => "on", "zindex" => 10],
				["name" => "оражение нет", "image" => "отражение-2-2.png", "value" => "off", "zindex" => 10],
				["name" => "оражение глянец выкл", "image" => "отражение глянец выкл.png", "value" => "on", "zindex" => 10],
				["name" => "оражение глянец ", "image" => "Отражение глянец 2.png", "value" => "on", "zindex" => 10],
				//Отражение для люстр!!! Новый вариант!
				["name" => "отражение глянец нет", "image" => "lustra/full-glyanec-off_1.png", "value" => "off", "zindex" => 10,"style"=>"margin-top: 2px; margin-left: -2px;opacity:0.5"],
				["name" => "отражение глянец да", "image" => "lustra/full-glyanec-on_1.png", "value" => "on", "zindex" => 10,"style"=>"margin-top: 2px; margin-left: -2px;opacity:0.5"],
				["name" => "отражение сатин нет", "image" => "lustra/full-satin-off_1.png", "value" => "off", "zindex" => 10,"style"=>"margin-top: 2px; margin-left: -2px;opacity:0.3"],
				["name" => "отражение сатин да", "image" => "lustra/full-satin-on_1.png", "value" => "on", "zindex" => 10,"style"=>"    margin-top: 4px; margin-left: -5px;opacity:0.3"],
			]
		],
		//7
		[
			"name" => "Светильники выкл.",
			"section" => "Мебель и освещение",
			"type" => "hidden",
			"value" => $arLigtsOff
		],
		//8
		[
			"name" => "Фактура потолка",
			"section" => "Мебель и освещение",
			"type" => "hidden",
			"value" => [
				["name" => "фактура  нет", "image" => "no.png", "value" => "no", "zindex" => 9],
				["name" => "фактура  ткань", "image" => "tkan.png", "value" => "tkan", "zindex" => 9,"style"=>"    margin-top: -23px;display: inline; margin-left: 0px;"],
				["name" => "фактура  глянец", "image" => "glianec.png", "value" => "glianec", "zindex" => 9,"style"=>"    margin-top: -6px;display: inline; margin-left: -24px;"],
				["name" => "фактура  глянец 80%", "image" => "Отражение_глянец_2.png", "value" => "glianec80", "zindex" => 9,"style"=>"    margin-top: -6px;display: inline; margin-left: -24px;"],
				["name" => "фактура  глянец 80%", "image" => "Отражение глянец 2.png", "value" => "glianec2", "zindex" => 9,"style"=>"    margin-top: -6px;display: inline; margin-left: -24px;"],
				
			
				
			]
		],
	
	],
];
$data[] = $house;
//print_r($arLigts);

/*
 * =========================================================================================================
 */


