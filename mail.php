<?php

$method = $_SERVER['REQUEST_METHOD'];

//Script Foreach
$c = true;
if ( $method === 'POST' ) {

	$project_name = trim($_POST["project_name"]);
	$admin_email  = trim($_POST["admin_email"]);
	$form_subject = trim($_POST["form_subject"]);

	foreach ( $_POST as $key => $value ) {
		if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {

			if($key == "CompanyName"){
				$key = "Название компании";
			}
			if($key == "business_line_of_the_company"){
				$key = "Род деятельности компании";
			}
			if($key == "description"){
				$key = "Описание продуктов или услуг";
			}
			if($key == "Geography"){
				$key = "География";
			}
			if($key == "men"){
				$key = "Мужчины %";
			}
			if($key == "women"){
				$key = "Женщины %";
			}
			if($key == "age"){
				$key = "Возраст";
			}
			if($key == "earnings"){
				$key = "Доход";
			}
			if($key == "competitor1"){
				$key = "Конкурент 1";
			}
			if($key == "competitor2"){
				$key = "Конкурент 2";
			}
			if($key == "advantages"){
				$key = "Ваши основные конкурентные преимущества";
			}
			if($key == "logo"){
				$key = "Логотип";
			}
			if($key == "target_of_redesign"){
				$key = "Причина и цель редизайна";
			}
			if($key == "logo_name"){
				$key = "Название, которое должно быть отображено в логотипе";
			}
			if($key == "logo_descriptor"){
				$key = "Приписка к логотипу (дискриптор)";
			}
			if($key == "logo_structure"){
				$key = "Структура логотипа";
			}
			if($key == "wishes_for_graphic_element"){
				$key = "Пожелания по графическому элементу";
			}
			if($key == "info_type"){
				$key = "Тип подачи информации";
			}
			if($key == "wishes_for_style"){
				$key = "Личные пожелания к стилистике";
			}
			if($key == "company_image"){
				$key = "Какой имидж компании создать с помощью логотипа / фирменного стиля";
			}
			if($key == "color_shame"){
				$key = "Цветовая гамма";
			}
			if($key == "genre_of_music"){
				$key = "Если бы дизайн был музыкальным жанром, то каким именно?";
			}
			if($key == "link1"){
				$key = "Укажите примеры понравившихся логотипов или фирменных стилей. Ссылка 1";
			}
			if($key == "like1"){
				$key = "Что именно Вам понравилось? (в ссылке 1)";
			}
			if($key == "link2"){
				$key = "Укажите примеры понравившихся логотипов или фирменных стилей. Ссылка 2";
			}
			if($key == "like2"){
				$key = "Что именно Вам понравилось? (в ссылке 2)";
			}
			if($key == "link3"){
				$key = "Укажите примеры непонравившихся логотипов или фирменных стилей. Ссылка 1";
			}
			if($key == "dislike1"){
				$key = "Что именно Вам не понравилось? (в ссылке 1)";
			}
			if($key == "link4"){
				$key = "Укажите примеры непонравившихся логотипов или фирменных стилей. Ссылка 2";
			}
			if($key == "dislike2"){
				$key = "Что именно Вам не понравилось? (в ссылке 2)";
			}
			if($key == "card"){
				$key = "Разработка айдентики. Базовые носители";
			}
			if($key == "Folder"){
				$key = "Разработка айдентики. Базовые носители";
			}
			if($key == "Letterhead"){
				$key = "Разработка айдентики. Базовые носители";
			}
			if($key == "Envelope"){
				$key = "Разработка айдентики. Базовые носители";
			}
			if($key == "guideline"){
				$key = "Разработка айдентики. Базовые носители";
			}
			if($key == "something_own"){
				$key = "Укажите что нибудь свое по разработке айдентики";
			}
			if($key == "Banner"){
				$key = "Требуется ли разработка рекламных материалов?";
			}
			if($key == "Leaflet"){
				$key = "Требуется ли разработка рекламных материалов?";
			}
			if($key == "Billboard"){
				$key = "Требуется ли разработка рекламных материалов?";
			}
			if($key == "Poster"){
				$key = "Требуется ли разработка рекламных материалов?";
			}
			if($key == "advertising"){
				$key = "Требуется ли разработка рекламных материалов?";
			}
			if($key == "something_own2"){
				$key = "Укажите что нибудь свое по разработке рекламных материалов";
			}
			if($key == "packaging_design"){
				$key = "Требуется ли разработка упаковки?";
			}
			if($key == "site_design"){
				$key = "Требуется ли дизайн сайта или лендинга?";
			}
			if($key == "more_about_design"){
				$key = "Укажите, для чего ещё нужно сделать дизайн";
			}
			if($key == "client_wishes"){
				$key = "Укажите другие ваши пожелания, или то, что нам следует знать";
			}
			if($key == "budget"){
				$key = "Бюджет";
			}
			if($key == "consultation"){
				$key = "Нужна консультация по разработке айдентики?";
			}


			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
			</tr>
			";
		}
	}
} else if ( $method === 'GET' ) {

	$project_name = trim($_GET["project_name"]);
	$admin_email  = trim($_GET["admin_email"]);
	$form_subject = trim($_GET["form_subject"]);

	foreach ( $_GET as $key => $value ) {
		if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
			</tr>
			";
		}
	}
}

$message = "<table style='width: 100%;'>$message</table>";

function adopt($text) {
	return '=?UTF-8?B?'.Base64_encode($text).'?=';
}

$headers = "MIME-Version: 1.0" . PHP_EOL .
"Content-Type: text/html; charset=utf-8" . PHP_EOL .
'From: '.adopt($project_name).' <'.$admin_email.'>' . PHP_EOL .
'Reply-To: '.$admin_email.'' . PHP_EOL;

mail($admin_email, adopt($form_subject), $message, $headers );
