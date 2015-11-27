<?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
if ($_POST['name'] && $_POST['tel'] && $_POST['message']){

	$text = '
		<ul>
			<li>Имя - '.$_POST['name'].'</li>
			<li>Телефон или Email - '.$_POST['tel'].'</li>
			<li>Описание - '.$_POST['message'].'</li>
	';

	//запись в инфоблок
	$arFileds = Array( "MODIFIED_BY" => $USER->GetID(),
		"IBLOCK_ID" => 4,
		"NAME" => 'Заявка от '.$_POST['name'],
		"ACTIVE" => "N",
		"DETAIL_TEXT" => $text,
	);
	CModule::IncludeModule("iblock");
	$element = new CIBlockElement;
	$newElement = $element->Add($arFileds);

	//отправка формы
	$arEventFields = array(
		"NAME" => $_POST['name'],
		"TEL" => $_POST['tel'],
		"MESSAGE" => $_POST['message']
	);
	if (CModule::IncludeModule("main")){
		CEvent::Send("ORDER", "s1", $arEventFields);
	}
}
