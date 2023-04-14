<?php
ob_start();
$HSON = "5938865103:AAF3k5Zl-_IqRAwMRXsfPLU12TNOQHH5w5M";
define('API_KEY',$HSON);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($T75BOT,$BOTHSO=[]){
$PBYYT = http_build_query($BOTHSO);
$url = "https://api.telegram.org/bot".API_KEY."/".$T75BOT."?$PBYYT";
$DMMPP = file_get_contents($url);
return json_decode($DMMPP);
}
echo "𝖣𝖾𝗏 𝖧𝖴𝖲𝖲𝖤𝖨𝖭 𝖰𝖠𝖲𝖲𝖤𝖬";
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $update->message->text;
$chat_id = $update->message->chat->id;
$from_id = $update->message->from->id;
$message_id = $update->message->message_id;
$from_id = $message->from->id;
$name = $update->message->from->first_name;
$username = $update->message->from->username;
//——————————————————//
$site = "smmatrixx.com"; 
$followers = "2799";  //متابعين//
$aboKrar = bot('getme',['bot'])->result->username;  //معرف البوت//
$MTAWR = "YxYxYo";  //معرفك
$admin = "22163598";  //ايديك//
include "DEVHSO.php";
//——————————————————//
if(isset($update->callback_query)){
$chat_id = $update->callback_query->message->chat->id;
$from_id = $update->callback_query->from->id;
$user = $update->callback_query->from->username;
$Name = $update->callback_query->from->first_name;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
}
$AIi = json_decode(file_get_contents("AIi.json"),true);
/////الملفات/////
mkdir("data");
mkdir("hso");
mkdir("php");
/////الملفات/////
////@DMMPP//
$get = $AIi["get"][$from_id];
if($AIi["get"][$from_id] == null){
$get = 0;
}
if($MPPFF == null){
$MPPFF = 0;
}
$DER = $AIi["DER"][$from_id];
if($AIi["DER"][$from_id] == null){
$DER = 0;
}
$gere = $AIi["gere"][$from_id];
if($AIi["gere"][$from_id] == null){
$gere = 0;
}
$T75BOT = $AIi['T75BOT'];
if($AIi['T75BOT'] == null){
$T75BOT = 0;
}
if($AIi['sss'] == null) {
$sss ="لا يوجد";
}else{
$sss = $AIi['sss'];
}
if($AIi['hui'] == null) {
$hui ="لا يوجد";
}else{
$hui = $AIi['hui'];
}
if($AIi['api'] == null) {
$api ="لا يوجد";
}else{
$api = $AIi['api'];
}
if($AIi['put'] == null) {
$put ="5";
}else{
$put = $AIi['put'];
}
if($AIi['lk'] == null) {
$lk ="5";
}else{
$lk = $AIi['lk'];
}
///خزن الاشعاࢪات//
$aso = json_decode(file_get_contents("php/aso.json"),1);
if($aso['d6'] == null){
$aso['d6'] = "✅";
file_put_contents("php/aso.json",json_encode($aso));
}
///
if($aso['d7'] == null){
$aso['d7'] = "✅";
file_put_contents("php/aso.json",json_encode($aso));
}
//دخول الاعضاء//
$mem = explode("\n",file_get_contents("mem.txt"));
$je = file_get_contents("mem.txt");
$count = explode("\n",$je);
$SAl = count($count) -1;
if($username != null){
$sf = "@$username";
}else
if($username == null){
$sf = "لا يوجد معرف";
}
if($message and !in_array($from_id,$mem)){
file_put_contents("mem.txt",$from_id . "\n" ,FILE_APPEND);
$SAl = $SAl + 1;
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
*٭ تم دخول شخص جديد الى البوت الخاص بك 👾*
            -----------------------
_• معلومات العضو الجديد ._

• الاسم : [$name](tg://user?id=$from_id)
• المعرف : $sf
• الايدي : [$from_id](tg://user?id=$from_id)
            -----------------------
• عدد الاعضاء الكلي :* $SAl*
",
'parse_mode'=>"Markdown",
]);
}
if($from_id != $admin){
bot('forwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$update->message->message_id,
]);
}
if($message->reply_to_message and $chat_id == $admin) {
bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>$text,
'parse_mode'=>"Markdown",
]);
}
//#DEVHSO///////
$d7 = $aso['d7'];
$d6 = $aso['d6'];
if($text == "/start" and $from_id == $admin){
bot('sendMessage',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
*• اهلا بك في لوحه الادمن الخاصه بالبوت 🤖*

- يمكنك التحكم في البوت الخاص بك من هنا
*~~~~~~~~~~~~~~~~~*

[• اضغط هنا لتࢪا جميع التحديثات](https://t.me/DEVHSO/190)
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عمل البوت : '.$d6.'' ,'callback_data'=>"d6"],['text'=>'اشعار الدخول : '.$d7.'' ,'callback_data'=>"d7"]],
[['text'=>'قسم الاشتࢪاك الاجباࢪي' ,'callback_data'=>"bnt"],['text'=>'قسم الاحصائيات' ,'callback_data'=>"HkH"]],
[['text'=>'قسم الاذاعه' ,'callback_data'=>"008"],['text'=>'قسم الـAPI' ,'callback_data'=>"API"]],
[['text'=>'• لوحه تحكم البوت •' ,'callback_data'=>"back"]],
]])
]);
$AIi['DMMPP'] = null;
$AIi['DMMPP'][$from_id] = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
$d7 = $aso['d7'];
$d6 = $aso['d6'];
if($data == "UU9"){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
*• اهلا بك في لوحه الادمن الخاصه بالبوت 🤖*

- يمكنك التحكم في البوت الخاص بك من هنا
*~~~~~~~~~~~~~~~~~*

[• اضغط هنا لتࢪا جميع التحديثات](https://t.me/DEVHSO/190)
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عمل البوت : '.$d6.'' ,'callback_data'=>"d6"],['text'=>'اشعار الدخول : '.$d7.'' ,'callback_data'=>"d7"]],
[['text'=>'قسم الاشتࢪاك الاجباࢪي' ,'callback_data'=>"bnt"],['text'=>'قسم الاحصائيات' ,'callback_data'=>"HkH"]],
[['text'=>'قسم الاذاعه' ,'callback_data'=>"008"],['text'=>'قسم الـAPI' ,'callback_data'=>"API"]],
[['text'=>'• لوحه تحكم البوت •' ,'callback_data'=>"back"]],
]])
]);
$AIi['DMMPP'] = null;
$AIi['DMMPP'][$from_id] = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
$d6 = $aso['d6'];
$d7 = $aso['d7'];
if($data == "d6" ){
if($aso['d6']!="✅"){
$dp = "✅";
}else{
$dp = "❌";
}
$aso['d6'] = $dp;
file_put_contents("php/aso.json",json_encode($aso));
$d6 = $aso['d6'];
bot('editMessageReplyMarkup',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عمل البوت : '.$d6.'' ,'callback_data'=>"d6"],['text'=>'اشعار الدخول : '.$d7.'' ,'callback_data'=>"d7"]],
[['text'=>'قسم الاشتࢪاك الاجباࢪي' ,'callback_data'=>"bnt"],['text'=>'قسم الاحصائيات' ,'callback_data'=>"HkH"]],
[['text'=>'قسم الاذاعه' ,'callback_data'=>"008"],['text'=>'قسم الـAPI' ,'callback_data'=>"API"]],
[['text'=>'• لوحه تحكم البوت •' ,'callback_data'=>"back"]],
]])
]);
}
if($data == "d7" ){
if($aso['d7']!="✅"){
$as = "✅";
}else{
$as = "❌";
}
$aso['d7'] = $as;
file_put_contents("php/aso.json",json_encode($aso));
$d7 = $aso['d7'];
bot('editMessageReplyMarkup',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عمل البوت : '.$d6.'' ,'callback_data'=>"d6"],['text'=>'اشعار الدخول : '.$d7.'' ,'callback_data'=>"d7"]],
[['text'=>'قسم الاشتࢪاك الاجباࢪي' ,'callback_data'=>"bnt"],['text'=>'قسم الاحصائيات' ,'callback_data'=>"HkH"]],
[['text'=>'قسم الاذاعه' ,'callback_data'=>"008"],['text'=>'قسم الـAPI' ,'callback_data'=>"API"]],
[['text'=>'• لوحه تحكم البوت •' ,'callback_data'=>"back"]],
]])
]);
}
if($data == "008"){
bot('EditMessageText', [
'chat_id' =>$admin,
'text' =>"*• قم ب اࢪسال الࢪساله لاذاعتها*",
'parse_mode'=>"MARKDOWN",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"UU9"]],
]])
]);
$AIi['DMMPP'][$from_id] = "ok";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}

if($text and $AIi['DMMPP'][$from_id] =="ok"){
bot('sendMessage',[
'chat_id'=>$Admind,
'text' =>"*• تم اذاعه ࢪسالتك الى $SAl مشتࢪك*",
'parse_mode'=>"MARKDOWN",
]);
for($i=0;$i<count($count); $i++){
bot('sendMessage', [
'chat_id'=>$count[$i],
'text'=>$text,
'parse_mode'=>"MARKDOWN",
]);
$AIi['DMMPP'][$from_id] = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
}
//قسم الاشتࢪاك//
if($data == "bnt"){
bot('EditMessageText', [
'chat_id'=>$admin,
'message_id'=>$message_id,
'text' =>"
*• اهلا بك في قسم الاشتࢪاك
•———————————•
• قناه الاشتࢪاك : $hui*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اضف قناه",'callback_data'=>"GGTR"],['text'=>"حذف قناه",'callback_data'=>"GkTR"]],
[['text'=>"رجوع ↪️",'callback_data'=>"UU9"]],
]])
]);
}
if($data== 'GGTR'){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
*• ارسل معرف القناه معا @*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"bnt"]],
]])
]);  
$AIi['DMMPP'] = "h5hh0";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if(preg_match("/@/",$text) and $AIi['DMMPP'] == "h5hh0") {
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"
*• تم التعين بنجاح ✅*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"bnt"]],
]])
]);   
$AIi['DMMPP'] = null;
$AIi['hui'] = $text;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
} 
if($data== 'GkTR'){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
*• تم مسح القناه من الاشتراك*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"bnt"]],
]])
]);   
$AIi['DMMPP'] = null;
$AIi['hui'] = "لا يوجد";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
} 
//قسم الاحصائيات//
if($data == "HkH"){
bot('EditMessageText', [
'chat_id'=>$admin,
'message_id'=>$message_id,
'text' =>"*• عدد الاعضاء : $SAl*",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"رجوع ↪️","callback_data"=>"UU9"]],
]])
]);
}
//قسم الايبي//
if($data == "API"){
$Dev = json_decode(file_get_contents("https://$site/api/v2?action=balance&key=$api"));
$MPPFF = $Dev->balance;
$PBYY = $Dev->currency;
bot('EditMessageText', [
'chat_id'=>$admin,
'message_id'=>$message_id,
'text' =>"
*• اهلا بك في قسم الـAPI
•————————————•
• الايبي :* `$api`
*• الموقع :* [SMMATRIX]($site)
*•————————————•
• رصيد حسابك : $MPPFF$*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"اضف ايبي","callback_data"=>"apis"],["text"=>"حذف ايبي","callback_data"=>"ssapis"]],
[["text"=>"رجوع ↪️","callback_data"=>"UU9"]],
]])
]);
$AIi['DMMPP'] = null;
$AIi['DMMPP'][$from_id] = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($data== 'apis'){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
*• ارسل ايبي حساب*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"API"]],
]])
]);  
$AIi['DMMPP'] = "apis";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($text and $AIi['DMMPP'] == "apis") {
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"
*• تم التعين بنجاح ✅*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"API"]],
]])
]);   
$AIi['DMMPP'] = null;
$AIi['api'] = $text;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
} 
if($data== 'ssapis'){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
*• تم حذف الايبي بنجاح ✅*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"API"]],
]])
]);
$AIi['DMMPP'] = null;
$AIi['api'] = "لا يوجد";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
//لوحة الادمن//
if($data == "back"){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
*• اهلا بك في اعدادات البوت
•————————————•
• قناة الاثباتات : $sss
• عدد نقاط الࢪابط : $put
• عدد نقاط الكود : $lk
• عدد طلبات البوت : $T75BOT
•————————————•
• يمكن للعضو ارسال* `/id` *لارسال الايدي الخاص به*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"صنع كود",'callback_data'=>"HSO"],['text'=>'حذف الكود' ,'callback_data'=>"soso"]],
[["text"=>"تعين نقاط الكود","callback_data"=>"iilks"]],
[['text'=>'اضف نقاط' ,'callback_data'=>"sendcoin"],['text'=>'خصم نقاط' ,'callback_data'=>"sdcoin"]],
[['text'=>'تعين قناه اثباتات' ,'callback_data'=>"shh"],['text'=>'تعين نقاط الࢪابط' ,'callback_data'=>"nh"]],
[["text"=>"رجوع ↪️","callback_data"=>"UU9"]],
]])
]);
$AIi['DMMPP'] = null;
$AIi['DMMPP'][$from_id] = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($data== 'iilks'){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
*• ارسل عدد نقاط الكود*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"bnt"]],
]])
]);  
$AIi['DMMPP'] = "iilks";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($text and $AIi['DMMPP'] == "iilks") {
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"
*• تم التعين بنجاح ✅*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"bnt"]],
]])
]);   
$AIi['DMMPP'] = null;
$AIi['lk'] = $text;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
} 
//اضافه نقاط//
if($data == "sendcoin"){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
*• اࢪسل ايدي الشخص*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"رجوع ↪️","callback_data"=>"back"]],
]])
]);
$AIi['DMMPP'] = 'chat';
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($text != '/start' and $text != null and $AIi['DMMPP'] == 'chat'){
bot('sendMessage',[
'chat_id'=>$admin,
'text'=> "
*• ارسال عدد النقاط المراد ارسالها*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"رجوع ↪️","callback_data"=>"back"]],
]])
]);
$AIi['DMMPP'] = 'poi';
$AIi['idd'] = $text;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
$ID = $AIi['idd'];
if($text != '/start' and $text != null and $AIi['DMMPP'] == 'poi'){
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"*
• تمت اضافه نقاط بنجاح ✅
• المبلغ الذي تمت اضافته : $text
• الى : $ID .
*",
'parse_mode'=>"Markdown",
 'reply_to_message_id'=>$message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ↪️","callback_data"=>"back"]],
]])
]);
bot('sendmessage',[
'chat_id'=>$AIi['idd'],
'text'=>"*
• تمت اضافه نقاط بنجاح ✅
• المبلغ الذي تمت اضافته : $text
• من قبل : @$MTAWR .
*",
'parse_mode'=>"Markdown",
]);
$AIi['DMMPP'] = null;
$AIi["get"][$AIi['idd']] += "$text";
$AIi['idd'] = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
//خصم نقاط//
if($data == "sdcoin"){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
*• اࢪسل ايدي الشخص*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"رجوع ↪️","callback_data"=>"back"]],
]])
]);
$AIi['DMMPP'] = 'kkii';
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($text != '/start' and $text != null and $AIi['DMMPP'] == 'kkii'){
bot('sendMessage',[
'chat_id'=>$admin,
'text'=> "
*• ارسال عدد النقاط المراد خصمها*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"رجوع ↪️","callback_data"=>"back"]],
]])
]);
$AIi['DMMPP'] = 'mmpp';
$AIi['idd'] = $text;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
$ID = $AIi['idd'];
if($text != '/start' and $text != null and $AIi['DMMPP'] == 'mmpp'){
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"*
• تمت خصم نقاط بنجاح ✅
• المبلغ الذي تمت الخصم : $text
• من : $ID .
*",
'parse_mode'=>"Markdown",
 'reply_to_message_id'=>$message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ↪️","callback_data"=>"back"]],
]])
]);
bot('sendmessage',[
'chat_id'=>$AIi['idd'],
'text'=>"*
• تمت خصم نقاط بنجاح ✅
• المبلغ الذي تمت الخصم : $text
• من قبل : @$MTAWR .
*",
'parse_mode'=>"Markdown",
]);
$AIi['DMMPP'] = null;
$AIi["get"][$AIi['idd']] -= "$text";
$AIi['idd'] = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
//تعين قناه طلبات
if($data== 'shh'){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
*• ارسل معرف قناة الطلبات!*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"back"]],
]])
]);  
$AIi['DMMPP'] = "h50";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if(preg_match("/@/",$text) and $AIi['DMMPP'] == "h50") {
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"
*• تم التعين بنجاح ✅*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"back"]],
]])
]);   
$AIi['DMMPP'] = null;
$AIi['sss'] = $text;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
} 
//نقاط الࢪابط//
if($data== 'nh'){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
*• ارسل عدد نقاط الࢪابط*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"back"]],
]])
]);  
$AIi['DMMPP'] = "on2";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if(preg_match("/^([0-9])/",$text) and $AIi['DMMPP'] == "on2") {
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"
*• تم التعين بنجاح ✅*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"back"]],
]])
]);   
$AIi['DMMPP'] = null;
$AIi['put'] = $text;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
} 
///الخزن///
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id ?? $update->callback_query->from->id;
$text = $message->text;
$message_id = $message->message_id ?? $update->callback_query->message->message_id;
$name = $message->from->first_name ?? $update->callback_query->from->first_name;
$username = $message->from->username;
$chat_id = $update->message->chat->id ?? $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$inch = file_get_contents("https://api.telegram.org/bot".$API_KEY."/getChatMember?chat_id=-1001650278924&user_id=".$from_id);
$link = explode(" ", $text);
$gket = file_get_contents("data/$from_id.txt");
if($link[0] == "/start" and !in_array($chat_id, $users)){
bot("sendmessage",[
'chat_id'=>"$link[1]",
'text'=>"
*• لقد حصلت على $put نقطه من *[$name](tg://openmessage?user_id=$from_id)
",
'parse_mode'=>"Markdown",
]);
$AIi["DER"][$link[1]] += 1;
$AIi["get"][$link[1]] += $put;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($link[0] == "/start" and in_array($chat_id, $users) and !strpos($inch , '"status":"left"') !== false){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"

",
]);
}
if($text == "/start $chat_id"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*• لا يمكنك الدخول الى ࢪابط الخاص بك*",
'parse_mode'=>"Markdown",
]);
}
if(!in_array($chat_id, $users)){ 
file_put_contents("DEVHSO.php", '$users[]= "' . $chat_id . '"'.";\n", FILE_APPEND);
}
//اشتراك اجباري//
$ch2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$hui."&user_id=".$from_id);
$getch2 = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$hui))->result;
$Namech2 = $getch2->title;
$getch2li = str_replace("@","",$hui);
if($message && (strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
*• عليك الاشتراك اولا $hui*
", 
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>$Namech2,'url'=>"https://t.me/$getch2li"]],
]])
]);
return false;
}
$ckl = "@DEVHSO"; # معرف لقناة ويه @
$getch2 = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$ckl))->result;
$Namech2 = $getch2->title;
$link = $getch2->username;
$bot_id = bot('getme',['bot'])->result->id;
$ch2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$ckl."&user_id=".$from_id);
$hhhhhh = str_replace("@","",$ckl);
if($text && (strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){	
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*• عليك الاشتراك اولا $ckl*
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>$Namech2,'url'=>"https://t.me/$hhhhhh"]],
]])
]);
return false;
}
if($text == "/start" or $text == "/start $chat_id" or $link[0] == "/start" and !strpos($inch , '"status":"left"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
*• هلا $name 🤍
• نقاطك : $get نقطة 👥
• ايديك :*  `$chat_id` 🆔
", 
'parse_mode'=>"Markdown",
'message_id'=>$message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"طلب متابعين 👤",'callback_data'=>"w"]],
[['text'=>"تجميع النقاط 🌀",'callback_data'=>"link"],['text'=>"الحساب 👤",'callback_data'=>"hy"]],
[['text'=>"استخدام الكود 💳",'callback_data'=>"q"]],
[['text'=>"كيف يستخدام البوت ❓",'url'=>"https://t.me/$getch2li"]],
]])
]);
$AIi['DMMPP'][$from_id]  = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($data == "🔙"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
*• هلا $Name 🤍
• نقاطك : $get نقطة 👥
• ايديك :*  `$chat_id` 🆔
", 
'parse_mode'=>"Markdown",
'message_id'=>$message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"طلب متابعين 👤",'callback_data'=>"w"]],
[['text'=>"تجميع النقاط 🌀",'callback_data'=>"link"],['text'=>"الحساب 👤",'callback_data'=>"hy"]],
[['text'=>"استخدام الكود 💳",'callback_data'=>"q"]],
[['text'=>"كيف يستخدام البوت ❓",'url'=>"https://t.me/$getch2li"]],
]])
]);
$AIi['DMMPP'][$from_id]  = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
///قسم تجميع النقاط
if($data == "link"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
*• قـسـم تجمـيـع نقـاط 

• عندما تقوم بدعوة شخص من خلال الرابط :

https://t.me/$aboKrar?start=$from_id

• ستحصل على $put نقطة 🤍*
", 
'parse_mode'=>"Markdown",
'message_id'=>$message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"🔙"]],
]])
]);
}
// قسم الحساب//
if($data == "hy"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
$saso = explode("\n",file_get_contents("hso/$from_id.txt"));
$kok = count($saso)-1;
bot('sendmessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
*• معلومات حسابك 📄
•———————————•
• نقاطك : $get نقطة
• النقاط المنفقه : $gere نقطة
• عدد دعواتك : $DER ✳️
• عدد طلباتك : $kok
•———————————•
• عدد طلبات البوت المكتمله : $T75BOT*
", 
'parse_mode'=>"Markdown",
'message_id'=>$message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"🔙"]],
]])
]);
}
if($data == "w"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
*• طلب متابعين ثابت
• نقاطك : $get 👤

• كل 1 نقطة = 1 متابع 👤*
", 
'parse_mode'=>"Markdown",
'message_id'=>$message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>" 50 متابع 👤",'callback_data'=>"gp50"],['text'=>" 100 متابع 👤",'callback_data'=>"gp100"]],
[['text'=>"250 متابع 👤",'callback_data'=>"ch400"],['text'=>"500 متابع 👤",'callback_data'=>"ch200"]],
[['text'=>"1000 متابع 👤",'callback_data'=>"ch300"],['text'=>"5000 متابع 👤",'callback_data'=>"ch500"]],
[['text'=>"25000 متابع 👤",'callback_data'=>"800bb"],['text'=>"50000 متابع 👤",'callback_data'=>"ss5000"]],
[['text'=>"رجوع ↪️",'callback_data'=>"🔙"]],
]])
]);
$AIi['DMMPP'][$from_id]  = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($data == "gp50"){
if($get >= 100){
bot('editmessagetext',[ 
'chat_id'=>$chat_id, 
'text'=>"
*• ارسل يوزرك من دون علامة @
• مثل :*  `13oev`❕
", 
'parse_mode'=>"Markdown",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"w"]],
]])
]);
$AIi['DMMPP'][$from_id]  = "gp50";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}else
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>'نقاطك لا تكفي ❌',
'show_alert'=>true
]);
}
if($text and $AIi["DMMPP"]["$from_id"] == "gp50"){
file_put_contents("hso/$from_id.txt", $from_id."\n",FILE_APPEND);
$smmatrix = json_decode(file_get_contents("https://$site/api/v2?key=$api&action=add&service=$followers&link=$text&quantity=50"));
$order = $smmatrix->order; 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• تم انشاء طلب بنجاح ✅
• ايدي الطلب :* `$order`
*• العدد : 50 متابع 👤
• اليوزࢪ :* `$text`
",
'parse_mode'=>"Markdown",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ اضغط لمراقبة الحساب  ›",'url'=>"https://instagram.com/$text"]],   
]])
]);
bot("sendmessage",[
"chat_id"=>$sss,
"text"=>"
*• تم تسجيل طلب جديد ✅
•————————————•
• الخدمة : متابعين انستكرام ثابت
• العدد : 50 متابع 👤
• اليوزر :* `@$text`
*•————————————•
• الايدي :* [$from_id](tg://openmessage?user_id=$from_id)
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ الدخول الى البوت ›",'url'=>"https://t.me/$aboKrar"]],
]])
]);
$AIi["get"][$from_id] -= 100;
$AIi["gere"][$from_id] += 100;
$AIi['DMMPP'][$from_id]  = null;
$AIi['T75BOT']+= 1;  
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($data == "gp100"){
if($get >= 200){
bot('editmessagetext',[ 
'chat_id'=>$chat_id, 
'text'=>"
*• ارسل يوزرك من دون علامة @
• مثل :*  `13oev`❕
", 
'parse_mode'=>"Markdown",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"w"]],
]])
]);
$AIi['DMMPP'][$from_id]  = "gp100";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}else
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>'نقاطك لا تكفي ❌',
'show_alert'=>true
]);
}
if($text and $AIi["DMMPP"]["$from_id"] == "gp100"){
file_put_contents("hso/$from_id.txt", $from_id."\n",FILE_APPEND);
$smmatrix = json_decode(file_get_contents("https://$site/api/v2?key=$api&action=add&service=$followers&link=$text&quantity=100"));
$order = $smmatrix->order; 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• تم انشاء طلب بنجاح ✅
• ايدي الطلب :* `$order`
*• العدد : 100 متابع 👤
• اليوزࢪ :* `$text`
",
'parse_mode'=>"Markdown",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ اضغط لمراقبة الحساب  ›",'url'=>"https://instagram.com/$text"]],   
]])
]);
bot("sendmessage",[
"chat_id"=>$sss,
"text"=>"
*• تم تسجيل طلب جديد ✅
•————————————•
• الخدمة : متابعين انستكرام ثابت
• العدد : 100 متابع 👤
• اليوزر :* `@$text`
*•————————————•
• الايدي :* [$from_id](tg://openmessage?user_id=$from_id)
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ الدخول الى البوت ›",'url'=>"https://t.me/$aboKrar"]],
]])
]);
$AIi["get"][$from_id] -= 200;
$AIi["gere"][$from_id] += 200;
$AIi['DMMPP'][$from_id]  = null;
$AIi['T75BOT']+= 1;  
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($data == "ch400"){
if($get >= 500){
bot('editmessagetext',[ 
'chat_id'=>$chat_id, 
'text'=>"
*• ارسل يوزرك من دون علامة @
• مثل :*  `13oev`❕
", 
'parse_mode'=>"Markdown",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"w"]],
]])
]);
$AIi['DMMPP'][$from_id]  = "ch400";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}else
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>'نقاطك لا تكفي ❌',
'show_alert'=>true
]);
}
if($text and $AIi["DMMPP"]["$from_id"] == "ch400"){
file_put_contents("hso/$from_id.txt", $from_id."\n",FILE_APPEND);
$smmatrix = json_decode(file_get_contents("https://$site/api/v2?key=$api&action=add&service=$followers&link=$text&quantity=250"));
$order = $smmatrix->order; 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• تم انشاء طلب بنجاح ✅
• ايدي الطلب :* `$order`
*• العدد : 250 متابع 👤
• اليوزࢪ :* `$text`
",
'parse_mode'=>"Markdown",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ اضغط لمراقبة الحساب  ›",'url'=>"https://instagram.com/$text"]],   
]])
]);
bot("sendmessage",[
"chat_id"=>$sss,
"text"=>"
*• تم تسجيل طلب جديد ✅
•————————————•
• الخدمة : متابعين انستكرام ثابت
• العدد : 250 متابع 👤
• اليوزر :* `@$text`
*•————————————•
• الايدي :* [$from_id](tg://openmessage?user_id=$from_id)
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ الدخول الى البوت ›",'url'=>"https://t.me/$aboKrar"]],
]])
]);
$AIi["get"][$from_id] -= 500;
$AIi["gere"][$from_id] += 500;
$AIi['DMMPP'][$from_id]  = null;
$AIi['T75BOT']+= 1;  
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($data == "ch200"){
if($get >= 1000){
bot('editmessagetext',[ 
'chat_id'=>$chat_id, 
'text'=>"
*• ارسل يوزرك من دون علامة @
• مثل :*  `13oev`❕
", 
'parse_mode'=>"Markdown",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"w"]],
]])
]);
$AIi['DMMPP'][$from_id]  = "ch200";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}else
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>'نقاطك لا تكفي ❌',
'show_alert'=>true
]);
}
if($text and $AIi["DMMPP"]["$from_id"] == "ch200"){
file_put_contents("hso/$from_id.txt", $from_id."\n",FILE_APPEND);
$smmatrix = json_decode(file_get_contents("https://$site/api/v2?key=$api&action=add&service=$followers&link=$text&quantity=500"));
$order = $smmatrix->order; 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• تم انشاء طلب بنجاح ✅
• ايدي الطلب :* `$order`
*• العدد : 500 متابع 👤
• اليوزࢪ :* `$text`
",
'parse_mode'=>"Markdown",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ اضغط لمراقبة الحساب  ›",'url'=>"https://instagram.com/$text"]],   
]])
]);
bot("sendmessage",[
"chat_id"=>$sss,
"text"=>"
*• تم تسجيل طلب جديد ✅
•————————————•
• الخدمة : متابعين انستكرام ثابت
• العدد : 500 متابع 👤
• اليوزر :* `@$text`
*•————————————•
• الايدي :* [$from_id](tg://openmessage?user_id=$from_id)
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ الدخول الى البوت ›",'url'=>"https://t.me/$aboKrar"]],
]])
]);
$AIi["get"][$from_id] -= 1000;
$AIi["gere"][$from_id] += 1000;
$AIi['DMMPP'][$from_id]  = null;
$AIi['T75BOT']+= 1;  
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($data == "ch300"){
if($get >= 2000){
bot('editmessagetext',[ 
'chat_id'=>$chat_id, 
'text'=>"
*• ارسل يوزرك من دون علامة @
• مثل :*  `13oev`❕
", 
'parse_mode'=>"Markdown",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"w"]],
]])
]);
$AIi['DMMPP'][$from_id]  = "ch300";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}else
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>'نقاطك لا تكفي ❌',
'show_alert'=>true
]);
}
if($text and $AIi["DMMPP"]["$from_id"] == "ch300"){
file_put_contents("hso/$from_id.txt", $from_id."\n",FILE_APPEND);
$smmatrix = json_decode(file_get_contents("https://$site/api/v2?key=$api&action=add&service=$followers&link=$text&quantity=1000"));
$order = $smmatrix->order; 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• تم انشاء طلب بنجاح ✅
• ايدي الطلب :* `$order`
*• العدد : 1000 متابع 👤
• اليوزࢪ :* `$text`
",
'parse_mode'=>"Markdown",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ اضغط لمراقبة الحساب  ›",'url'=>"https://instagram.com/$text"]],   
]])
]);
bot("sendmessage",[
"chat_id"=>$sss,
"text"=>"
*• تم تسجيل طلب جديد ✅
•————————————•
• الخدمة : متابعين انستكرام ثابت
• العدد : 1000 متابع 👤
• اليوزر :* `@$text`
*•————————————•
• الايدي :* [$from_id](tg://openmessage?user_id=$from_id)
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ الدخول الى البوت ›",'url'=>"https://t.me/$aboKrar"]],
]])
]);
$AIi["get"][$from_id] -= 2000; 
$AIi["gere"][$from_id] += 2000;
$AIi['DMMPP'][$from_id]  = null;
$AIi['T75BOT']+= 1;  
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($data == "ch500"){
if($get >= 10000){
bot('editmessagetext',[ 
'chat_id'=>$chat_id, 
'text'=>"
*• ارسل يوزرك من دون علامة @
• مثل :*  `13oev`❕
", 
'parse_mode'=>"Markdown",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"w"]],
]])
]);
$AIi['DMMPP'][$from_id]  = "ch500";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}else
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>'نقاطك لا تكفي ❌',
'show_alert'=>true
]);
}
if($text and $AIi["DMMPP"]["$from_id"] == "ch500"){
file_put_contents("hso/$from_id.txt", $from_id."\n",FILE_APPEND);
$smmatrix = json_decode(file_get_contents("https://$site/api/v2?key=$api&action=add&service=$followers&link=$text&quantity=5000"));
$order = $smmatrix->order; 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• تم انشاء طلب بنجاح ✅
• ايدي الطلب :* `$order`
*• العدد : 5000 متابع 👤
• اليوزࢪ :* `$text`
",
'parse_mode'=>"Markdown",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ اضغط لمراقبة الحساب  ›",'url'=>"https://instagram.com/$text"]],   
]])
]);
bot("sendmessage",[
"chat_id"=>$sss,
"text"=>"
*• تم تسجيل طلب جديد ✅
•————————————•
• الخدمة : متابعين انستكرام ثابت
• العدد : 5000 متابع 👤
• اليوزر :* `@$text`
*•————————————•
• الايدي :* [$from_id](tg://openmessage?user_id=$from_id)
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ الدخول الى البوت ›",'url'=>"https://t.me/$aboKrar"]],
]])
]);
$AIi["get"][$from_id] -= 10000;
$AIi["gere"][$from_id] += 10000;
$AIi['DMMPP'][$from_id]  = null;
$AIi['T75BOT']+= 1;  
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($data == "800bb"){
if($get >= 50000){
bot('editmessagetext',[ 
'chat_id'=>$chat_id, 
'text'=>"
*• ارسل يوزرك من دون علامة @
• مثل :*  `13oev`❕
", 
'parse_mode'=>"Markdown",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"w"]],
]])
]);
$AIi['DMMPP'][$from_id]  = "800bb";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}else
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>'نقاطك لا تكفي ❌',
'show_alert'=>true
]);
}
if($text and $AIi["DMMPP"]["$from_id"] == "800bb"){
file_put_contents("hso/$from_id.txt", $from_id."\n",FILE_APPEND);
$smmatrix = json_decode(file_get_contents("https://$site/api/v2?key=$api&action=add&service=$followers&link=$text&quantity=25000"));
$order = $smmatrix->order; 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• تم انشاء طلب بنجاح ✅
• ايدي الطلب :* `$order`
*• العدد : 25000 متابع 👤
• اليوزࢪ :* `$text`
",
'parse_mode'=>"Markdown",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ اضغط لمراقبة الحساب  ›",'url'=>"https://instagram.com/$text"]],   
]])
]);
bot("sendmessage",[
"chat_id"=>$sss,
"text"=>"
*• تم تسجيل طلب جديد ✅
•————————————•
• الخدمة : متابعين انستكرام ثابت
• العدد : 25000 متابع 👤
• اليوزر :* `@$text`
*•————————————•
• الايدي :* [$from_id](tg://openmessage?user_id=$from_id)
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ الدخول الى البوت ›",'url'=>"https://t.me/$aboKrar"]],
]])
]);
$AIi["get"][$from_id] -= 50000;
$AIi["gere"][$from_id] += 50000;
$AIi['DMMPP'][$from_id]  = null;
$AIi['T75BOT']+= 1;  
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($data == "ss5000"){
if($get >= 100000){
bot('editmessagetext',[ 
'chat_id'=>$chat_id, 
'text'=>"
*• ارسل يوزرك من دون علامة @
• مثل :*  `13oev`❕
", 
'parse_mode'=>"Markdown",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"w"]],
]])
]);
$AIi['DMMPP'][$from_id]  = "ss5000";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}else
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>'نقاطك لا تكفي ❌',
'show_alert'=>true
]);
}
if($text and $AIi["DMMPP"]["$from_id"] == "ss5000"){
file_put_contents("hso/$from_id.txt", $from_id."\n",FILE_APPEND);
$smmatrix = json_decode(file_get_contents("https://$site/api/v2?key=$api&action=add&service=$followers&link=$text&quantity=50000"));
$order = $smmatrix->order; 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• تم انشاء طلب بنجاح ✅
• ايدي الطلب :* `$order`
*• العدد : 50000 متابع 👤
• اليوزࢪ :* `$text`
",
'parse_mode'=>"Markdown",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ اضغط لمراقبة الحساب  ›",'url'=>"https://instagram.com/$text"]],   
]])
]);
bot("sendmessage",[
"chat_id"=>$sss,
"text"=>"
*• تم تسجيل طلب جديد ✅
•————————————•
• الخدمة : متابعين انستكرام ثابت
• العدد : 50000 متابع 👤
• اليوزر :* `@$text`
*•————————————•
• الايدي :* [$from_id](tg://openmessage?user_id=$from_id)
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ الدخول الى البوت ›",'url'=>"https://t.me/$aboKrar"]],
]])
]);
$AIi["get"][$from_id] -= 100000;
$AIi["gere"][$from_id] += 100000;
$AIi['DMMPP'][$from_id]  = null;
$AIi['T75BOT']+= 1;  
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
//كود الهديه///
$hdea = file_get_contents("php/com.txt");
if($data == "HSO"){
file_put_contents("php/com.txt","ok");
bot('EditMessageText',[ 
'chat_id'=>$admin, 
'text'=>"
*• ارسل الكود الان*
", 
'parse_mode'=>"Markdown",
'message_id'=>$message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"back"]],
]])
]);
}
if($text !== "/start" and $hdea == "ok"){
file_put_contents("php/hdea.txt","$text");
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
*• تم انشاء كود
• الكود :* `$text`
*• الكمية : $lk نقطة
• عدد الاشخاص : 100*
",
'parse_mode'=>"Markdown",
'message_id'=>$message_id,
]);
unlink("php/com.txt");
unlink("php/coded.txt");
}

$gogo = explode("\n",file_get_contents("php/$from_id.txt"));
$get = count($gogo)-1;

$geg = explode("\n",file_get_contents("php/coded.txt"));
$goge = count($geg)-1;
$codh = file_get_contents("php/hdea.txt");
if($codh == null){
file_put_contents("php/hdea.txt","NoNe");
}
if($data == "soso" and $from_id == $admin){
unlink("php/hdea.txt");
bot('EditMessageText',[
'chat_id'=>$admin,
'text'=>"
*• تم حذف الكود*
",
'parse_mode'=>"Markdown",
'message_id'=>$message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"back"]],
]])
]);
}
if($data == "q"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• ارسل كود الهدية الان :*
",
'parse_mode'=>"Markdown",
'message_id'=>$message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء ❌",'callback_data'=>"🔙"]],
]])
]);
$AIi['DMMPP'][$from_id]  = "uuu";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}

$sosn = 100 - $goge;
if($text == $codh and !in_array($from_id,$geg)){
if($text !== "/start" and $codh !== "NoNe" and $AIi['DMMPP'][$from_id] == "uuu"){
file_put_contents("php/coded.txt", $from_id."\n",FILE_APPEND);
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• تم اضافة $lk نقطة لحسابك*
",
'parse_mode'=>"Markdown",
'message_id'=>$message_id,
]);
$AIi["get"][$from_id] += $lk;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
*• تم اضافة نقطة الى حساب

• الايدي :* `$chat_id`
*• المعرف : @$username
• العدد المتبقي للكود :* $sosn
",
'parse_mode'=>"Markdown",
]);
}
}

if($text and $text !== $codh){
if($text !== "/start" and $AIi['DMMPP'][$from_id] == "uuu"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• الكود خطأ او تم استخدامه ❌*
",
'parse_mode'=>"Markdown",
'message_id'=>$message_id,
]);
}
}
if($text == $codh and in_array($from_id,$geg)){
if($text !== "/start" and $AIi['DMMPP'][$from_id] == "uuu"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• انت استخدمت الكود من قبل*
",
'parse_mode'=>"Markdown",
'message_id'=>$message_id,
]);
}
}
//قسم الايدي//
if($text == "/id" or $text == "/ID"){
bot('sendmessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
*• الايدي :* `$chat_id`
", 
'parse_mode'=>"Markdown",
'message_id'=>$message_id, 
]);
}
