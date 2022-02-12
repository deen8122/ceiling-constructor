<?php
/*
 * Отпавка данных по почте
 */
include 'config.php';
echo 'server:';
//print_r($_GET);
if (isset($_GET['data'])) {
	$data = json_decode($_GET['data'] ,true);
	
	
	print_r($data);
	echo '--------->';
	$txt = '<tr style="border:1px dashed #ccc"><td>Факутра:</td><td>' .$arFactura[$data['factura']] . '</td></tr>
		';
	$txt.= '<tr style="border:1px dashed #"><td>Цвет первого уровня:</td><td>' .$data['potolok1'] . '</td></tr>
		';
	$txt.= '<tr style="border:1px dashed #ccc"><td>Цвет второго уровня:</td><td>' .$data['potolok2'] . '</td></tr>
		';
	$txt.= '<tr style="border:1px dashed #ccc"><td>Вариант потолка:</td><td>' .$data['ceiling'] . '</td></tr>
		';

	$txtTable = '<table style="border:1px dashed #ccc">
		';
		$txtTable.= $txt;
	
	$txtTable.= '</table>
		';
	$_REQUEST['data'] = null;
	$_POST['Данные'] = $txtTable;
}
//Убираем ненужные данные, чтоб не попадали в письмо

//Формируем письмо
foreach ($_POST as $key => $value) {
	if ($value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject") {
		$message .= "
			" . ( ($c = !$c) ? '<tr>' : '<tr style="background-color: #f8f8f8;">' ) . "
			<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
			<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
		</tr>
		";
	}
}
$message = "<table style='width: 100%;'>$message</table>";
file_put_contents('message.txt', $message);
function adopt($text) {
	return '=?UTF-8?B?' . base64_encode($text) . '?=';
}
$headers = "MIME-Version: 1.0" . PHP_EOL .
	"Content-Type: text/html; charset=utf-8" . PHP_EOL .
	'From: ' . adopt(PROJECT_NAME) . ' <' . EMAIL_FROM . '>' . PHP_EOL .
	'Reply-To: ' . EMAILS_TO . '' . PHP_EOL;
//Отправляем
mail(EMAILS_TO, adopt(PROJECT_NAME), $message, $headers);
