<?в PHP
 
// ==== Контроль Варс =======
$strFromNumber = "+79082462700";
$strToNumber = "+19729759205";
$strmsg отображается = "вы поймали Оливье обнаженки прошлой ночью? ОМГ да?"; //Оливье случайно подъехал порносайт на проектор 
$aryResponse = массив();
 
    // включать в twilio библиотеки PHP - Скачать с 
    // на http://www.twilio.com/docs/libraries/
    им require_once ("inc/Services/Twilio.php");
 
    // устанавливаем наши идентификатору accountsid и AuthToken - от www.twilio.com/user/account
    $Идентификатору accountsid = "ACb5644181f229a8e2d4f349b382e78e6c";
    $AuthToken = "2b7348e8bff6e38b2c44f0ba95056a06";
 
    // ини новый в twilio rest-клиенте
    $objConnection = новый метод services_twilio($идентификатору accountsid, $AuthToken);
    // Направить на новое outgoinging СМС, разместив на SMS ресурсов */
    $bSuccess = $objConnection->учетная запись->sms_messages->создать(
        
        $strFromNumber, // количество мы отправляем из 
        $strToNumber, // количество, мы посылаем к
        $strmsg отображается			// текст SMS-сообщения
    );
		
    $aryResponse["SentMsg"] = $strmsg отображается;
    $aryResponse["успех"] = истина;
    
    
    Эхо json_encode($aryResponse);
