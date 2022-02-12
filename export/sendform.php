<?php
/*
 * Отпавка данных по почте
 */
include 'config.php';
if (isset($_GET['data']) && $_POST['type']==1) {
	$data = json_decode($_REQUEST['data'], true);
	$num = $data['num'];
	$arrValue = $data['values'];
	//Подключаем данные
	include 'data.php';
	$currentData = $data[$num];
	$txt = 'Здание:' . $currentData['name'] . ',';
	$txtTable = '<table style="border:1px dashed #ccc"><tr><td>Здание </td><td>' . $currentData['name'] . '</td></tr>';
	foreach ($currentData['elements'] as $i => $elements) {
		$j = 0;
		if ($arrValue[$i] != null) {
			$j = $arrValue[$i];
		}
		$val = $elements['value'][$j]['name'];
		$txt.= $elements['name'] . ':' . $val . ',';
		$txtTable.= '<tr style="border:1px dashed #ccc"><td>' . $elements['name'] . '</td><td>' . $val . '</td></tr>';
	}
	$txtTable.= '</table>';
	$_REQUEST['data'] = null;
	$_POST['Данные'] = $txtTable;
}
//Убираем ненужные данные, чтоб не попадали в письмо
$_POST['type'] = null;

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
function adopt($text) {
	return '=?UTF-8?B?' . base64_encode($text) . '?=';
}
$headers = "MIME-Version: 1.0" . PHP_EOL .
	"Content-Type: text/html; charset=utf-8" . PHP_EOL .
	'From: ' . adopt(PROJECT_NAME) . ' <' . EMAIL_FROM . '>' . PHP_EOL .
	'Reply-To: ' . EMAILS_TO . '' . PHP_EOL;
//Отправляем
mail(EMAILS_TO, adopt(PROJECT_NAME), $message, $headers);
