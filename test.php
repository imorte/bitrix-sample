<?require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("");?>

<?$APPLICATION->IncludeComponent("bitrix:main.feedback", "feedback", Array(
	"EMAIL_TO" => "escape6661@gmail.com",	// E-mail, на который будет отправлено письмо
		"EVENT_MESSAGE_ID" => "",	// Почтовые шаблоны для отправки письма
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
		"REQUIRED_FIELDS" => array(	// Обязательные поля для заполнения
			0 => "EMAIL",
			1 => "MESSAGE",
		),
		"USE_CAPTCHA" => "Y",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

<?require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php')?>