<?php
ob_start();
error_reporting(0);
define("API_KEY","5571503607:AAHvem3lFbtFpSG7AV6OEKslPDROhA64wpw");
$botname = bot('getme',['bot'])->result->username;
$admin = "1215424881";
$adminuser= "@group_to_group_crypto_tg";
$arays = array($arays,$admin);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
 curl_setopt($ch,CURLOPT_URL,$url);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
 curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
 $res = curl_exec($ch);
 if(curl_error($ch)){
  var_dump(curl_error($ch));
 }else{
  return json_decode($res);
}
}

//// Kim yozganini bilmadim, @AmirovBekjanInfo tarafidan tarqatildi, kod yaxshi, Nakrutkaga zayafka berishda umuman muammo bo'lmaydi, buyurtmalarni min maxni botning ozi avto oladi, ie va narxlarini sozlansa bo'ldi, APIni @SCSMMBot dan olasizlar, ////
$update = json_decode(file_get_contents("php://input"));
$qiwi = file_get_contents("stat/channel_4.txt");
$cilick = file_get_contents("stat/channel_5.txt");
$refber = file_get_contents("stat/ref_id.txt"); 
$message = $update->message;
$chat_id = $message->chat->id;
$cid = $message->chat->id;
$mid = $message->message_id;
$text = $message->text;  
$tx = $message->text;  
$firstname = $message->chat->first_name;
$lastname = $message->chat->last_name;
$uid= $message->from->id;
$callcid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$callmid = $update->callback_query->message->message_id;  
$mes_idi = $update->callback_query->message->message_id;  
$from_id = $update->callback_query->from->id;
$step = file_get_contents('step/$chat_id.txt');
$type = $message->chat->type;
$lichka = file_get_contents("lichka.txt");
$red_id = file_get_contents("stat/ref_id.txt");

$tgob_id = file_get_contents("stat/tgob_id.txt");
$tgob_id1 = file_get_contents("stat/tgob_id1.txt");
$tgpm_id = file_get_contents("stat/tgpm_id.txt");
$tgpm_id2 = file_get_contents("stat/tgpm_id2.txt");
$tgpm_id3 = file_get_contents("stat/tgpm_id3.txt");
$tgob_pul = file_get_contents("stat/tgob_pul.txt");
$tgob_pul1 = file_get_contents("stat/tgob_pul1.txt");
$tgpm_pul = file_get_contents("stat/tgpm_pul.txt");
$tgpm_pul2 = file_get_contents("stat/tgpm_pul2.txt");
$tgpm_pul3 = file_get_contents("stat/tgpm_pul3.txt");

$insta_id = file_get_contents("stat/insta_id.txt");
$instapm_id = file_get_contents("stat/instapm_id.txt");
$insta_pul = file_get_contents("stat/insta_pul.txt");
$instapm_pul = file_get_contents("stat/instapm_pul.txt");

$tiktok_id = file_get_contents("stat/tiktok_id.txt");
$tiktokpm_id = file_get_contents("stat/tiktokpm_id.txt");
$tiktok_pul = file_get_contents("stat/tiktok_pul.txt");
$tiktokpm_pul = file_get_contents("stat/tiktokpm_pul.txt");

$yt_id = file_get_contents("stat/yt_id.txt");
$ytpm_id = file_get_contents("stat/ytpm_id.txt");
$yt_pul = file_get_contents("stat/yt_pul.txt");
$ytpm_pul = file_get_contents("stat/ytpm_pul.txt");

if($type=="private"){
if(stripos($lichka,"$cid") !==false){
}else{
file_put_contents("lichka.txt","$lichkan$cid");
}
}

$asosiy = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🗃️ Buyurtma Berish"],['text'=>"💳 Mening hisobim"]],
[['text'=>"🔑 Buyurtma xolati"],['text'=>"💵 Hisob to'ldirish"]],
[['text'=>"☎️ Administrator"]],
]
]);
$orqa="◀️Orqaga";

$back = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀️Orqaga"]]
]
]);
if($text=="◀️Orqaga"){
  unlink("step/$chat_id.txt");
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*Asosiy menyuga qaytdingiz.*",
    'parse_mode'=>'markdown',
    'reply_markup'=>$asosiy,
    ]);
}

$pay = json_encode([
'inline_keyboard'=>[
[['text'=>"💳 To'lov Bo'limi",'callback_data'=>"buy"],['text'=>"🗣 Taklifnoma",'callback_data'=>"ref"]],
]
]);
$chanel_3 = file_get_contents("stat/chanel_3.txt");


if (file_get_contents("pul/$chat_id.txt")){
    // code...
}else{
    file_put_contents("pul/$chat_id.txt","0");
}
if($tx=="/start" and $type=="private"){
$array = array("inline_keyboard");
$get = file_get_contents("kanal.txt");
$ex = explode("n",$get);
for($i=0;$i<=count($ex) -1;$i++){
$first_line = $ex[$i];
$first_ex = explode("-",$first_line);
$name = $first_ex[0];
$url = $first_ex[1];
     $ret = bot("getChatMember",[
         "chat_id"=>"@$url",
         "user_id"=>$cid,
         ]);
$stat = $ret->result->status;
         if((($stat=="creator" or $stat=="administrator" or $stat=="member"))){
      $array['inline_keyboard']["$i"][0]['text'] = " ". $name;
$array['inline_keyboard']["$i"][0]['url'] = "https://t.me/$url";
         }else{
$array['inline_keyboard']["$i"][0]['text'] = " ". $name;
$array['inline_keyboard']["$i"][0]['url'] = "https://t.me/$url";
$uns = true;
}
}

if($uns == true){
     bot("sendMessage",[
         "chat_id"=>$cid,
         "text"=>"<b>Quyidagi kanalimizga obuna bo`lib qayta /start bosing⤵</b>",
         "parse_mode"=>"html",
         "reply_to_message_id"=>$message_id,
"disable_web_page_preview"=>true,
"reply_markup"=>json_encode($array),
]);  
return false;
}else{
bot("sendMessage",[
         "chat_id"=>$cid,
'text'=>"
✋ Assalomu alaykum, @$botname Official-botiga xush kelibsiz!
🚀 Biz sizga arzon va sfatli ScSMM.uz xizmatlarini taklif etamiz!",
'parse_mode'=>'html',
'reply_markup'=>$asosiy,
]);  
}
}
mkdir("soni");
if(strpos($tx,"/start")!==false){
$refid = trim(explode(" ",$tx)[1]);
if($refid){
if(strpos($lichka, "$refid") !==false ){
if(strpos($lichka, "$cid") !==false ){
SendMessage($cid,html,"❌ Botga O'zingizni taklif qila olmaysiz");
}else{
file_put_contents("lichka.txt","$lichkan$cid");
$ab = file_get_contents("soni/$refid.soni");
$ab = $ab + 1;
$ref_id=file_get_contents("stat/ref_id.txt");
file_put_contents("soni/$refid.soni","$ab");
$usr = file_get_contents("pul/$refid.txt");
$usr = $usr + $ref_id; 
file_put_contents("pul/$refid.txt", "$usr");
bot('sendMessage',[
'chat_id'=>$refid,
'parse_mode'=>'markdown',
'text'=>"*🎉Tabriklaymiz siz botimizga do'stingizni taklif qildingiz!
Sizga $ref_id RUB taqdim etildi ✔️*", 
]);
}
}
}
}

mkdir("pul");
mkdir("step");
mkdir("nakrutka");
mkdir("kanal");
$ssilka=file_get_contents("nakrutka/$chat_id.txt");
$step=file_get_contents("step/$chat_id.txt");
$pul = file_get_contents("pul/$chat_id.txt");
$nakrutka=json_encode([
  'inline_keyboard'=>[
    [['text'=>"💡 Instagram",'callback_data'=>"nakrutka=Instagram"],['text'=>"💡 Telegram",'callback_data'=>"nakrutka=Telegram"]],
    [['text'=>"💡 TikTok",'callback_data'=>"nakrutka=TikTok"],['text'=>"💡 YouTube",'callback_data'=>"nakrutka=YouTube"]],
    ]
    ]);
$Telegram=json_encode([
  'inline_keyboard'=>[
  [['text'=>"👥 Obunachi [ Garantiya ] $tgob_pul ₽",'callback_data'=>"Telegram=Obuna=$tgob_id=$tgob_pul"]],
[['text'=>"👥 Obunachi [Bez garantiya] $tgob_pul1 ₽",'callback_data'=>"Telegram=Obuna=$tgob_id1=$tgob_pul1"]],
[['text'=>"👁 Ko‘rish [ Arzon ] $tgpm_pul ₽",'callback_data'=>"Telegram=PM=$tgpm_id=$tgpm_pul"]],
  ]
  ]);
$TikTok=json_encode([
  'inline_keyboard'=>[
  [['text'=>"👥 Obunachi $tiktok_pul ₽",'callback_data'=>"TikTok=Obuna=$tiktok_id=$tiktok_pul"]],
  [['text'=>"👁 Ko‘rish $tiktokpm_pul ₽",'callback_data'=>"TikTok=PM=$tiktokpm_id=tiktokpm_pul"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
$Instagram=json_encode([
  'inline_keyboard'=>[
  [['text'=>"👥 Obunachi $insta_pul ₽",'callback_data'=>"Instagram=Obuna=$insta_id=$insta_pul"]],
  [['text'=>"👁 Ko'rish $instapm_pul ₽",'callback_data'=>"Instagram=PM=$instapm_id=$instapm_pul"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
$YouTube=json_encode([
  'inline_keyboard'=>[
  [['text'=>"👥 Obunachi $yt_pul ₽",'callback_data'=>"YouTube=Obuna=$yt_id=$yt_pul"]],
  [['text'=>"👁 Ko'rish $ytpm_pul ₽",'callback_data'=>"YouTube=PM=ytpm_id=$ytpm_pul"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);

if(mb_stripos($data,"nakrutka")!==false){
  bot('DeleteMessage',[
    'chat_id'=>$callcid,
    'message_id'=>$update->callback_query->message->message_id,
    ]);
    $ex=explode("=",$data)[1];
   if($ex=="Telegram"){
   $key=$Telegram;
}
   if($ex=="TikTok"){
   $key=$TikTok;
}
   if($ex=="Instagram"){
   $key=$Instagram;
}
   if($ex=="YouTube"){
   $key=$YouTube;
}
  bot('sendmessage',[
    'chat_id'=>$callcid,
    'text'=>"$ex Buyurtma uchun kerakli xizmatni tanlang n💰Narxlar 1000-ta Buyurtma Hisobida Ko'rsatildi.",
    'parse_mode'=>'markdown',
    'reply_markup'=>$key,
    ]);
}

if(mb_stripos($data,"=Like")!==false or mb_stripos($data,"=PM")!==false or mb_stripos($data,"=Obuna")!==false){
  bot('DeleteMessage',[
    'chat_id'=>$callcid,
    'message_id'=>$update->callback_query->message->message_id,
    ]);
  $tarmoq=explode("=",$data)[0];
   $tur=explode("=",$data)[1];
  $id=explode("=",$data)[2];
  $qb=explode("=",$data)[3];
file_put_contents("step/$callcid.txt","nak=$tarmoq=$tur=$id=$qb");
  bot('sendmessage',[
    'chat_id'=>$callcid,
    'text'=>"Kerakli miqdorni kirting",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[       
        [['text'=>"$orqa",'callback_data'=>"back"],],
        ]
      ])
    ]);
}
if(mb_stripos($step,"nak=")!==false){
  if(is_numeric($text) and $text>0){
  $ex=explode("=",$step);
  $tarmoq=$ex[1];
   $tur=$ex[2];
if($tarmoq=="Telegram"){
$min=1;
$max=10000000000000;
}
if($tarmoq=="YouTube"){
$min=1;
$max=10000000000000;
}
if($tarmoq=="TikTok"){
$min=1;
$max=10000000000000;
}

if($tarmoq=="Instagram"){
$min=1;
$max=1000000000000;
}
  $tur=$ex[2];
  $id=$ex[3];
  $qb=$ex[4];
  $son=$text;
if($text>=$min and $text<=$max){
  unlink("step/$chat_id.txt");
file_put_contents("step/$chat_id.txt","havola=$tarmoq=$id=$son=$tur=$qb");
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"$tarmoq havolangizni yuboring(https:// bo'lishi shart)",
    'reply_markup'=>$back,
    ]);
}else{
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"Min: $min Max: $max son oralig‘ida kiriting",
    'reply_markup'=>$back,
    ]);
}
}else{
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"Faqat raqamdan tashkil topgan bo‘lsin",
    'reply_markup'=>$back,
    ]);
}
}

//Kim yozganini bilmadim, @AmirovBekjanInfo tarafidan tarqatildi, kod yaxshi, Nakrutkaga zayafka berishda umuman muammo bo'lmaydi, buyurtmalarni min maxni botning ozi avto oladi, ie va narxlarini sozlansa bo'ldi, APIni @SCSMMBot dan olasizlar,//

if(mb_stripos($step,"havola")!==false and $text!=$orqa){
  if(mb_stripos($text,"https:")!==false){
    $ex=explode("=",$step);
    $tarmoq=$ex[1];
    $id=$ex[2];
    $son=$ex[3];
    $tur=$ex[4];
    $qb=$ex[5];
    //// Kim yozganini bilmadim, @AmirovBekjanInfo tarafidan tarqatildi, kod yaxshi, Nakrutkaga zayafka berishda umuman muammo bo'lmaydi, buyurtmalarni min maxni botning ozi avto oladi, ie va narxlarini sozlansa bo'ldi, APIni @SCSMMBot dan olasizlar, ////
    if($tarmoq=="TikTok"){
      $rak=$son/1000*$qb;
    }elseif($tarmoq=="YouTube"){
      $rak=$son/1000*$qb;
    }elseif($tarmoq=="Telegram"){
      $rak=$son/1000*$qb;
    }elseif($tarmoq=="Instagram"){
      $rak=$son/1000*$qb;
    }
    if($pul>$rak){
    $info=str_replace("$tarmoq","$tarmoq tarmog'i uchun $son buyurtmaga $rak RUB hisobingizdan yechiladi ",$tarmoq);
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"
<b>🖋️ Buyurtma haqida
🌐 Tarmoq: $tarmoq
🔤 Miqdor: $son
🔢 Havola: $text

<b>$info </b>

❗Iltimos ko'rib chiqing hamma malumot to'g'ri bo'lsa ✅Tasdiqlang...!</b>",
      'parse_mode'=>"html",
          'disable_web_page_preview'=>true,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[          
          [['text'=>"✅Tasdiqlash",'callback_data'=>"tasdiq"],],
          [['text'=>"$orqa",'callback_data'=>"back"],],
          ]
        ])
      ]);
      unlink("step/$chat_id.txt");
file_put_contents("step/$chat_id.txt","uz=$tarmoq=$son=$rak=$id=$tur=$qb");
file_put_contents("nakrutka/$chat_id.txt","$text");
  }else{
    unlink("step/$chat_id.txt");
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"<b>Balansingizda mablag' yetarli emas....!</b>",
           'parse_mode'=>"html",
      'reply_markup'=>$asosiy,
      ]);
  }
  }else{
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"<b>Havola noto'g'ri.... To'g'rilab qayta yuboring!</b>",
      'parse_mode'=>"html",
      'reply_markup'=>$back,
      ]);
  }
}

if(mb_stripos($data,"tasdiq")!==false){
$step=file_get_contents("step/$callcid.txt");
 $ex=explode("=",$step);
 $tarmoq=$ex[1];
 $son=$ex[2];
 $rak=$ex[3];
 $id=$ex[4];
$url=file_get_contents("nakrutka/$callcid.txt");
$tur=$ex[5];
bot('DeleteMessage',[
    'chat_id'=>$callcid,
    'message_id'=>$update->callback_query->message->message_id,
    ]);
$urll=json_decode(file_get_contents("https://scsmm.uz/api/v2?key=$chanel_3&service=$id&link=$url&quanti=$son"),true);
$order=$urll['buyurtma'];
$error=$urll['error'];
file_put_contents("nakrutka/$callcid.dat",file_get_contents('nakrutka/$callcid.dat')."n".$order);
if(isset($error)){
bot('sendMessage',[
   'chat_id'=>$callcid,
   'text'=>"$error",
      'parse_mode'=>"html",
      'reply_markup'=>$asosiy,
   ]);
}else{
$balans= file_get_contents("pul/$callcid.txt");
     $plus=$balans-$rak;
  $b = file_put_contents("pul/$callcid.txt","$plus");
 $info=str_replace("$tarmoq"," $tarmoq tarmog'i uchun $son buyurtmaga $rak RUB hisobingizdan yechildi✅",$tarmoq);
 bot('sendMessage',[
   'chat_id'=>$callcid,
   'text'=>"
🔒<b>Buyurtma qabul qilindi!</b>
🆔<b>Buyurtma ID: $order</b>
✅<b>Holati: Bajarilmoqda...</b>
🌐<b>Tarmoq $tarmoq</b>
🔢<b>Buyurtma soni:</b> <b>$son</b>

<b>$info </b>",
      'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>$asosiy,
   ]);
unlink("step/$callcid.txt");
unlink("nakrutka/$callcid.txt");
}
}

if($data=="back"){
  bot('DeleteMessage',[
    'chat_id'=>$callcid,
    'message_id'=>$update->callback_query->message->message_id,
    ]);
  bot('sendmessage',[
    'chat_id'=>$callcid,
    'text'=>"✅ Bizning xizmatlarimizni tanlaganingizdan xursandmiz!
👇 Quydagi Ijtimoiy tarmoqlardan birini tanlang.",
    'reply_markup'=>$nakrutka,
    ]);
}


  if($text=="🗃️ Buyurtma Berish"){
  unlink("step/$chat_id.txt");
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ Bizning xizmatlarimizni tanlaganingizdan xursandmiz!
👇 Quydagi Ijtimoiy tarmoqlardan birini tanlang.",
    'reply_markup'=>$nakrutka,
    ]);
}
  
  //// Kim yozganini bilmadim, @AmirovBekjanInfo tarafidan tarqatildi, kod yaxshi, Nakrutkaga zayafka berishda umuman muammo bo'lmaydi, buyurtmalarni min maxni botning ozi avto oladi, ie va narxlarini sozlansa bo'ldi, APIni @SCSMMBot dan olasizlar, ////
if($text=="🪙 API Balans" and $chat_id==$admin){
$api_balance = json_decode(file_get_contents("https://scsmm.uz/api/v2?key=$chanel_3&action=balance"),true);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"Sizning API Balansingizda
".$api_balance['balance']." RUB",
'reply_markup'=>$panel,
]);
}
$panel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📝 Userga Xabar"],['text'=>"📋 Userga Forward"]],
[['text'=>"➕ RUB berish"],['text'=>"💳 Balans tekshirish"],['text'=>"➖ RUB ayirish"]],
[['text'=>"🪙 API Balans"],['text'=>"🎁 Bonus"],['text'=>"📊 Statistika"]],
[['text'=>"🛠 Sozlash"],['text'=>"◀️Orqaga"]],
]
]);

$nakpanel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"💡Telegram"],['text'=>"💡Instagram"]],
[['text'=>"💡YouTube"],['text'=>"💡TikTok"]],
]
]);
    

$sozpanel = json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
[['text'=>"❤️ Api Sozlash"],['text'=>"💰 Narxlarni sozlash"]],
[['text'=>"👥 Referalni sozlash"],['text'=>"💳 To'lov Raqam sozlash"],],
[['text'=>"⚙️ Asosiy Panel"],['text'=>"❗️ Majburiy a'zo"]],
    ]
    ]);

    
$okstat=file_get_contents("status/$cid.status");
if($text=="🔑 Buyurtma xolati"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Buyurtma ID-raqamini kiriting..",
]);
mkdir("status");
file_put_contents("status/$cid.status","1");
}
if($okstat==1){
if(is_numeric($text)){
$orderstat=json_decode(file_get_contents("https://scsmm.uz/api/v2?key=$chanel_3&action=status&order=$text"),true);
$miqdor=$orderstat['charge'];
if($orderstat['status'] !=null or $orderstat['remains'] !=null){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
Buyurtma xolati: ".$orderstat['status']."
Buyurtma miqdori: ".$orderstat['remains']."",
]);unlink("status/$cid.status");
}else{
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Bu ID raqamli buyurtma mavjud emas..." ,
]);
unlink("status/$cid.status");
}
}
}

$tugma = json_encode([
     'resize_keyboard'=>true,
     'keyboard'=>[
       [['text'=>"🛠 Qiwi nomer kiritish"],['text'=>"🛠 Click nomer kiritish"],],
       [['text'=>"⚙️ Asosiy Panel"],],
       ]
      ]);

if($text=="⚙️ Asosiy Panel"){
  unlink("step/$chat_id.txt");
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*Asosiy panelga qaytdingiz.*",
    'parse_mode'=>'markdown',
    'reply_markup'=>$panel,
    ]);
}

if($text == "🛠 Sozlash" and $cid == $admin){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<i>Sozlamalar uchun Panel</i>",
    'parse_mode'=>"html",
    'reply_markup'=>$sozpanel,
    ]);
}
if($text == "💰 Narxlarni sozlash" and $cid==$admin ){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"<i>Bu bo'limda siz Buyurtma Turlarini(Sifatli,sifatsiz,Garant) va Narxlarini o'zingiz sozlab olishingiz mumkin bo'ladi.
Batafsil👇👇👇👇
1 -Siz kiritgan summa har 1000-ta buyurtma uchun.
2 - Bu Id raqam orqali bot serverni tanlaydi.
3 - Qolgan malumotlarni ScSMM.UZ serverdan olishingiz mumkin.</i>",
	'parse_mode'=>"html",
	'reply_markup'=>$nakpanel,
]);
}
    
    if($text == "💳 To'lov Raqam sozlash" and $cid==$admin ){
  bot('sendMessage',[
    'chat_id'=>$admin,
    'text'=>"Kerakli Tugmani bosing!",
'reply_markup'=>$tugma,
    ]);
}

$step = file_get_contents("stat/$cid.step");
   if($tx=="💡Telegram" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>
<b>Bu bo'limda siz buyurtma id raqamlarini va narxlarini o'zingiz belgilashingiz mumkin bo'ladi. Chap tomon 🆔 Raqam, Óng tomon 💰 Narxni o'zgartiradi.</b> Kerakli tugmani tanlang.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
[['text'=>"🆔TG Obunachi [Garantiya]"],['text'=>"💰TG Obunachi [Garantiya]"]],
[['text'=>"🆔TG Obunachi [Bez Garantiya]"],['text'=>"💰TG Obunachi [Bez Garantiya]"]],
[['text'=>"🆔TG Kórishlar"],['text'=>"💰TG Kórishlar"]],
[['text'=>"⚙️ Asosiy Panel"]],
    ]
    ])
    ]);
    }
    
    $step = file_get_contents("stat/$cid.step");
if($tx=="🛠 Qiwi nomer kiritish" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Qiwi raqamingizni kiriting!
Numuna: +998991234567</i>", 
'parse_mode'=>'html', 
]); 
file_put_contents("stat/$cid.step","channel_4");
} 

if($step=="channel_4" and $cid==$admin){ 
file_put_contents("stat/channel_4.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning Qiwi nomeringiz $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
]); 
unlink("stat/$cid.step"); 
}

  $step = file_get_contents("stat/$cid.step");
if($tx=="🛠 Click nomer kiritish" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Kerakli Click (Uzcard, Humo) raqamingizni kiriting.
Namuna: 8600530498886442</i>", 
'parse_mode'=>'html', 
]); 
file_put_contents("stat/$cid.step","channel_5");
} 

if($step=="channel_5" and $cid==$admin){ 
file_put_contents("stat/channel_5.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning Click raqamingiz $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
]); 
unlink("stat/$cid.step"); 
}

$step = file_get_contents("stat/$cid.step");
   if($tx=="💡TikTok" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>
<b>Bu bo'limda siz buyurtma id raqamlarini va narxlarini o'zingiz belgilashingiz mumkin bo'ladi. Chap tomon 🆔 raqam, O'ng tomon 💰 Narxni o'zgartiradi.</b> Kerakli tugmani tanlang.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
[['text'=>"🆔TikTok Obunachi"],['text'=>"💰TikTok Obunachi"]],
[['text'=>"🆔TikTok Kórishlar"],['text'=>"💰TikTok Kórishlar"]],
[['text'=>"⚙️ Asosiy Panel"]],
    ]
    ])
    ]);
    }
$step = file_get_contents("stat/$cid.step");
   if($tx=="💡Instagram" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>
<b>Bu bo'limda siz buyurtma id raqamlarini va narxlarini o'zingiz belgilashingiz mumkin bo'ladi. Chap tomon 🆔 raqam, Óng tomon 💰 Narxni o'zgartiradi.</b> Kerakli tugmani tanlang.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
[['text'=>"🆔Insta Obunachi"],['text'=>"💰Insta Obunachi"]],
[['text'=>"🆔Insta Kórishlar"],['text'=>"💰Insta Kórishlar"]],
[['text'=>"⚙️ Asosiy Panel"]],
    ]
    ])
    ]);
    }

$step = file_get_contents("stat/$cid.step");
   if($tx=="💡YouTube" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>
<b>Bu bo'limda siz buyurtma id raqamlarini va narxlarini o'zingiz belgilashingiz mumkin bo'ladi. Chap tomon 🆔 raqam, Óng tomon 💰 Narxni o'zgartiradi.</b> Kerakli tugmani tanlang.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
[['text'=>"🆔YouTube Obunachi"],['text'=>"💰YouTube Obunachi"]],
[['text'=>"🆔YouTube Kórishlar"],['text'=>"💰YouTube Kórishlar"]],
[['text'=>"⚙️ Asosiy Panel"]],
    ]
    ])
    ]);
    }
mkdir("stat");
if($tx=="❗️ Majburiy a'zo" and $cid==$admin){ 
    bot('sendmessage',[ 
  'chat_id'=>$admin, 
  'text'=>"Kanallar nomi va userlarini @ belgisisiz yuboring

           *Namuna: 
             Nom                User*
    ✔️ АмировБекжан-AmirovBekjan
     ✔️ ScSMM-Sc_SMM
     ✔️ Info-AmirovBekjanInfo


*Eslatma ❗* __Kanallarni shu ketma ketlikda xoxlagancha ulashingiz mumkim.__", 
  'parse_mode'=>'markdown',
  ]); 
file_put_contents("stat/$cid.step",maj);  
  } 

if($step == 'maj') { 
if($text = "$text") { 
file_put_contents("kanal.txt","$text");  
         bot('sendmessage',[ 
         'chat_id'=>$admin, 
         'text'=>"✅ Majburiy a'zo kanali o'zgardi", 
 ]); 
unlink("stat/$cid.step");  
} 
}

$step = file_get_contents("stat/$cid.step");
   if($tx=="❤️ Api Sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Api kalitni  sozlash uchun yuboring, <b>uni ushbu saytdan olasiz </b> ScSMM.UZ‼️.</i>", 
'parse_mode'=>'html', 
]); 
file_put_contents("stat/$cid.step","chanel_3");
} 

if($step=="chanel_3" and $cid==$admin){ 
file_put_contents("stat/chanel_3.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning api kalitingiz $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
]); 
unlink("stat/$cid.step"); 
}

$step = file_get_contents("stat/$cid.step");
   if($tx=="👥 Referalni sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Referal narxini yuboring</i>", 
'parse_mode'=>'html', 
]); 
file_put_contents("stat/$cid.step","ref_id");
} 

if($step=="ref_id" and $cid==$admin){ 
file_put_contents("stat/ref_id.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Referal narxi <b> $tx </b> ga o'zgardi.</i>", 
'parse_mode'=>'html', 
]); 
unlink("stat/$cid.step"); 
}

  $step = file_get_contents("stat/$cid.step");
   if($tx=="🆔TG Obunachi [Garantiya]" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Kerakli 🆔 raqamni kiriting.
Taxminiy id raqam👉<b>457</b></i>", 
'parse_mode'=>'html', 
]); 
file_put_contents("stat/$cid.step","tgob_id");
} 

if($step=="tgob_id" and $cid==$admin){ 
file_put_contents("stat/tgob_id.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning id raqamingiz o'zgartirildi.
Hozirgi id raqam👉<b>$tx</b> </i>", 
'parse_mode'=>'html', 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="🆔TG Obunachi [Bez Garantiya]" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Kerakli 🆔 raqamni kiriting.
Taxminiy id raqam👉<b>457</b></i>", 
'parse_mode'=>'html', 
]); 
file_put_contents("stat/$cid.step","tgob_id1");
} 

if($step=="tgob_id1" and $cid==$admin){ 
file_put_contents("stat/tgob_id1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning id raqamingiz o'zgartirildi.
Hozirgi id raqam👉<b>$tx</b> </i>", 
'parse_mode'=>'html', 
]); 
unlink("stat/$cid.step"); 
}

  $step = file_get_contents("stat/$cid.step");
   if($tx=="🆔TG Kórishlar" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Kerakli 🆔 raqamni kiriting.
Taxminiy id raqam👉<b>457</b></i>", 
'parse_mode'=>'html', 
]); 
file_put_contents("stat/$cid.step","tgpm_id");
} 

if($step=="tgpm_id" and $cid==$admin){ 
file_put_contents("stat/tgpm_id.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning id raqamingiz o'zgartirildi.
Hozirgi id raqam👉<b>$tx</b> </i>", 
'parse_mode'=>'html', 
]); 
unlink("stat/$cid.step"); 
}

  $step = file_get_contents("stat/$cid.step");
   if($tx=="🆔Insta Obunachi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Kerakli 🆔 raqamni kiriting.
Taxminiy id raqam👉<b>457</b></i>", 
'parse_mode'=>'html', 
]); 
file_put_contents("stat/$cid.step","insta_id");
} 

if($step=="insta_id" and $cid==$admin){ 
file_put_contents("stat/insta_id.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning id raqamingiz o'zgartirildi.
Hozirgi id raqam👉<b>$tx</b> </i>", 
'parse_mode'=>'html', 
]); 
unlink("stat/$cid.step"); 
}

  $step = file_get_contents("stat/$cid.step");
   if($tx=="🆔Insta Kórishlar" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Kerakli 🆔 raqamni kiriting.
Taxminiy id raqam👉<b>457</b></i>", 
'parse_mode'=>'html', 
]); 
file_put_contents("stat/$cid.step","instapm_id");
} 

if($step=="instapm_id" and $cid==$admin){ 
file_put_contents("stat/instapm_id.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning id raqamingiz o'zgartirildi.
Hozirgi id raqam👉<b>$tx</b> </i>", 
'parse_mode'=>'html', 
]); 
unlink("stat/$cid.step"); 
}

  $step = file_get_contents("stat/$cid.step");
   if($tx=="🆔TikTok Obunachi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Kerakli 🆔 raqamni kiriting.
Taxminiy id raqam👉<b>457</b></i>", 
'parse_mode'=>'html', 
]); 
file_put_contents("stat/$cid.step","tiktok_id");
} 

if($step=="tiktok_id" and $cid==$admin){ 
file_put_contents("stat/tiktok_id.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning id raqamingiz o'zgartirildi.
Hozirgi id raqam👉<b>$tx</b> </i>", 
'parse_mode'=>'html', 
]); 
unlink("stat/$cid.step"); 
}

  $step = file_get_contents("stat/$cid.step");
   if($tx=="🆔TikTok Kórishlar" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Kerakli 🆔 raqamni kiriting.
Taxminiy id raqam👉<b>457</b></i>", 
'parse_mode'=>'html', 
]); 
file_put_contents("stat/$cid.step","tiktokpm_id");
} 

if($step=="tiktokpm_id" and $cid==$admin){ 
file_put_contents("stat/tiktokpm_id.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning id raqamingiz o'zgartirildi.
Hozirgi id raqam👉<b>$tx</b> </i>", 
'parse_mode'=>'html', 
]); 
unlink("stat/$cid.step"); 
}

  $step = file_get_contents("stat/$cid.step");
   if($tx=="🆔YouTube Obunachi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Kerakli 🆔 raqamni kiriting.
Taxminiy id raqam👉<b>457</b></i>", 
'parse_mode'=>'html', 
]); 
file_put_contents("stat/$cid.step","yt_id");
} 

if($step=="yt_id" and $cid==$admin){ 
file_put_contents("stat/yt_id.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning id raqamingiz o'zgartirildi.
Hozirgi id raqam👉<b>$tx</b> </i>", 
'parse_mode'=>'html', 
]); 
unlink("stat/$cid.step"); 
}

  $step = file_get_contents("stat/$cid.step");
   if($tx=="🆔YouTube Kórishlar" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Kerakli 🆔 raqamni kiriting.
Taxminiy id raqam👉<b>457</b></i>", 
'parse_mode'=>'html', 
]); 
file_put_contents("stat/$cid.step","ytpm_id");
} 

if($step=="ytpm_id" and $cid==$admin){ 
file_put_contents("stat/ytpm_id.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning id raqamingiz o'zgartirildi.
Hozirgi id raqam👉<b>$tx</b> </i>", 
'parse_mode'=>'html', 
]); 
unlink("stat/$cid.step"); 
}

  $step = file_get_contents("stat/$cid.step");
   if($tx=="💰TG Obunachi [Garantiya]" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>1000 ta buyurtma uchun kerakli summani kiriting.
Taxminiy narx👉<b>57</b> Rubl</i>", 
'parse_mode'=>'html', 
]); 
file_put_contents("stat/$cid.step","tgob_pul");
} 

if($step=="tgob_pul" and $cid==$admin){ 
file_put_contents("stat/tgob_pul.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Narx👉<b>$tx</b> Rubl ga sozlandi </i>", 
'parse_mode'=>'html', 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="💰TG Obunachi [Bez Garantiya]" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>1000 ta buyurtma uchun kerakli summani kiriting.
Taxminiy narx👉<b>47</b> Rubl</i>", 
'parse_mode'=>'html', 
]); 
file_put_contents("stat/$cid.step","tgob_pul1");
} 

if($step=="tgob_pul1" and $cid==$admin){ 
file_put_contents("stat/tgob_pul1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Narx👉<b>$tx</b> Rubl ga sozlandi</i>", 
'parse_mode'=>'html', 
]); 
unlink("stat/$cid.step"); 
}

  $step = file_get_contents("stat/$cid.step");
   if($tx=="💰TG Kórishlar" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>1000 ta buyurtma uchun kerakli summani kiriting.
Taxminiy narx👉<b>45</b> Rubl</i>", 
'parse_mode'=>'html', 
]); 
file_put_contents("stat/$cid.step","tgpm_pul");
} 

if($step=="tgpm_pul" and $cid==$admin){ 
file_put_contents("stat/tgpm_pul.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Narx👉<b>$tx</b> Rubl ga sozlandi</i>", 
'parse_mode'=>'html', 
]); 
unlink("stat/$cid.step"); 
}

  $step = file_get_contents("stat/$cid.step");
   if($tx=="💰Insta Obunachi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>
Taxminiy narx👉<b>47</b> Rubl</i>", 
'parse_mode'=>'html', 
]); 
file_put_contents("stat/$cid.step","insta_pul");
} 

if($step=="insta_pul" and $cid==$admin){ 
file_put_contents("stat/insta_pul.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Narx👉<b>$tx</b> Rubl ga sozlandi</i>", 
'parse_mode'=>'html', 
]); 
unlink("stat/$cid.step"); 
}

  $step = file_get_contents("stat/$cid.step");
   if($tx=="💰Insta Kórishlar" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>
Taxminiy narx👉<b>57</b> Rubl</i>", 
'parse_mode'=>'html', 
]); 
file_put_contents("stat/$cid.step","instapm_pul");
} 

if($step=="instapm_pul" and $cid==$admin){ 
file_put_contents("stat/instapm_pul.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Narx👉<b>$tx</b> Rubl ga sozlandi</i>", 
'parse_mode'=>'html', 
]); 
unlink("stat/$cid.step"); 
}

  $step = file_get_contents("stat/$cid.step");
   if($tx=="💰TikTok Obunachi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>1000 ta buyurtma uchun kerakli summani kiriting.
Taxminiy narx👉<b>57</b> Rubl</i>", 
'parse_mode'=>'html',
]); 
file_put_contents("stat/$cid.step","tiktok_pul");
} 

if($step=="tiktok_pul" and $cid==$admin){ 
file_put_contents("stat/tiktok_pul.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Narx👉<b>$tx</b> Rubl ga sozlandi</i>", 
'parse_mode'=>'html', 
]); 
unlink("stat/$cid.step"); 
}

  $step = file_get_contents("stat/$cid.step");
   if($tx=="💰TikTok Kórishlar" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>1000 ta buyurtma uchun kerakli summani kiriting.
Taxminiy narx👉<b>4</b> Rubl</i>", 
'parse_mode'=>'html', 
]); 
file_put_contents("stat/$cid.step","tiktokpm_pul");
} 

if($step=="tiktokpm_pul" and $cid==$admin){ 
file_put_contents("stat/tiktokpm_pul.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Narx👉<b>$tx</b> Rubl ga sozlandi</i>", 
'parse_mode'=>'html', 
]); 
unlink("stat/$cid.step"); 
}

  $step = file_get_contents("stat/$cid.step");
   if($tx=="💰YouTube Obunachi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>1000 ta buyurtma uchun kerakli summani kiriting.
Taxminiy narx👉<b>47</b> Rubl</i>", 
'parse_mode'=>'html', 
]); 
file_put_contents("stat/$cid.step","yt_pul");
} 

if($step=="yt_pul" and $cid==$admin){ 
file_put_contents("stat/yt_pul.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Narx👉<b>$tx</b> Rubl ga sozlandi</i>", 
'parse_mode'=>'html', 
]); 
unlink("stat/$cid.step"); 
}

  $step = file_get_contents("stat/$cid.step");
   if($tx=="💰YouTube Kórishlar" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>1000 ta buyurtma uchun kerakli summani kiriting.
Taxminiy narx👉<b>57</b> Rubl</i>", 
'parse_mode'=>'html', 
]); 
file_put_contents("stat/$cid.step","ytpm_pul");
} 

if($step=="ytpm_pul" and $cid==$admin){ 
file_put_contents("stat/ytpm_pul.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Narx👉<b>$tx</b> Rubl ga sozlandi</i>", 
'parse_mode'=>'html',
]); 
unlink("stat/$cid.step"); 
}



if($text == "/admin" and $cid==$admin ){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b> <a href='tg://user?id=$uid'>Admin</a></b>nn<i>Kerakli boʻlimni tanlang!!</i>",
	'parse_mode'=>"html",
	'reply_markup'=>$panel,
]);
}

if($text=="📊 Statistika" && $cid==$admin){
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
@$botname statistikasi
Bot Foydalanuvchilari ".substr_count($lichka,"n")." ta ",
'reply_markup'=>$panel,
]);
}

function send($c,$m,$p){
bot('sendMessage',[
'chat_id'=>$c,
'text'=>$m,
'parse_mode'=>$p,
]);
}
function reyting(){
    $text = "🏆 <b>TOP 5 ta eng koʻp pul ishlagan foydalanuvchilar:</b>nn";
    $daten = [];
    $rev = [];
    $fayllar = glob("./pul/*.*");
    foreach($fayllar as $file){
        if(mb_stripos($file,".pul")!==false){
        $value = file_get_contents($file);
        $id = str_replace(["./pul/",".pul"],["",""],$file);
        $daten[$value] = $id;
        $rev[$id] = $value;
        }
        echo $file;
    }

    asort($rev);
    $reversed = array_reverse($rev);
    for($i=0;$i<5;$i+=1){
        $order = $i+1;
        $id = $daten["$reversed[$i]"];
        $text.= "<b>{$order}</b>. <a href='tg://user?id={$id}'>{$id}</a> - "."<code>".$reversed[$i]."</code>"." <b>rubl</b>"."n";
    }
    return $text;
}
if($text=="📈 Reyting"){
$y = reyting();
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>$y,
'parse_mode'=>html,
]);
}
$step = file_get_contents("step/$chat_id.step");
     
if($text == "📝 Userga Xabar" and $cid == $admin){
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"<b>Userlarga yuboriladigan habarni kiriting!!
Bakor qilish uchun /cancel ni bosing</b>",
      'parse_mode'=>"html",
      'reply_markup'=>$panel,
      ]);
      file_put_contents("step/$cid.step","user");
    }

    if($step == "user" and $cid == $admin){
      if($text == "/cancel"){
      unlink("step/$chat_id.step");
      }else{ 
      $idszs=explode("n",$lichka);
      foreach($idszs as $idlat){
     $userr = bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>"<b>$text</b>",
      'parse_mode'=>'html',
      'disable_web_page_preview' => true,
      ]);  unlink("step/$cid.step");
      }
        if($userr){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Habar Barcha Userlarga yuborildi!",
          ]);      
      unlink("step/$cid.step");
        }
      }
    }
     


if($text == "📋 Userga Forward" and $cid == $admin){
 bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"✅ *Userlarga forward qilinadigan xabarni kiriting!
Bakor qilish uchun /cancel ni bosing*",
'parse_mode'=>'markdown',
]);
file_put_contents("step/$cid.step","forward");
}

if($step == "forward" and $cid == $admin){
if($text == "/cancel"){
unlink("stat/$chat_id.step");
}else{ 
$ids=explode("n",$lichka);
foreach($ids as $id){
$user = bot('forwardMessage', [
'chat_id'=>$id,
'from_chat_id'=>$admin,
'message_id'=>$mid,
]);unlink("step/$cid.step");
}

if($user){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"✅ Xabar yetkazildi!",
'parse_mode'=>"markdown",
]);     
unlink("step/$cid.step");
}
}
}

if($text=="💳 Mening hisobim"){

$dost = file_get_contents("pul/$cid.ref");
$soat=date('H:i:s',strtotime('0 hour'));
$sana=date("d-M-y",strtotime("0 hour"));
$hisob  = file_get_contents("pul/$chat_id.txt");
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
$dl = bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
‍‍┌Sizning hisobingiz haqida:
├Mijoz: ".$message->from->first_name."
├Xisob raqam <code>$cid</code>
├Botdagi vazifa: Foydalanuvchi
├Asosiy xisob: $hisob-RUB",
'parse_mode'=>"HTML",
'reply_markup'=>$pay,
])->result->message_id;

}

if($text=="💵 Hisob to'ldirish"){
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
$dl = bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"‍Marhamat, quyidagi menyudagi hisob to'ldirish usullardan birini tanlang: 

🗣 Taklifnoma: Siz ushbu bo'limdan foydalanib o'zingizning havolangizni olasiz va boshqalarga yuborish orqali balansingizni to'ldirishingiz mumkin. Xarbir taklif uchun: $refber Rubl

💳 Sotib olish: Siz ushbu bo'limdan  Botdabi balansingizni to'ldirishingiz va robotdan hech qanday muammosiz foydalanishingiz mumkin.‌‌
",
'reply_markup'=>$pay,
])->result->message_id;
}

if($data=="card"){
bot('editMessagetext',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"<b>⬇Quyidagi karta raqamiga tolov qiling va administratorga to'lov chekini yuboring!</b>

💳Karta: <code>$cilick</code>
💸Minimal tolov: 5000 so'm",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👮 Administrator",'url'=>"https://t.me/$adminuser"]],
]]),]);}

if($data=="qiwi"){
bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"<b>🥝 QIWI raqamiga to'lov qiling va administratorga to'lov chekini yuboring!</b>

💳 QIWI: <code>$qiwi</code>
📝 Izoh: <code>$callcid</code>

<b>Diqqat! izoh kiritishni unutmang!</b>",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🧑‍💻Administrator",'url'=>"https://t.me/$adminuser"]],
]]),]);}

if($text=="⬅Orqaga"){
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"Bekor qilindi!",
    'parse_mode'=>"html",
'reply_markup'=>$mem,
]);
unlink("step/$cid.step");
exit();
}

$step = file_get_contents("step/$cid.step");
$hisob = file_get_contents("pul/$cid.pul");
$types = file_get_contents("step/$cid.turi");



if($text=="☎️ Administrator"){
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
$dl = bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
🔰 Bizga savollaringiz yoki muammolaringiz bo'lsa, iltimos, bizning qo'llab-quvvatlash bilan bog'laning.
Admin: @$adminuser",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☎️  Administrator","url"=>"https://t.me/$adminuser"]],
]]),])->result->message_id;}

if($data=="ref"){
bot('editMessagetext',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"
🎉 @$botname
✅ Arzon va sfatli SMM xizmati,
👥 Referal va sotib olish,
🔆 24/7 qo'llab-quvvatlash,
🇺🇿 O'zbek tilidagi boshqaruv.
👥 Xarbir taklif uchun: $refber RUB
👇 Hoziroq bot foydalanuvchisi bo'ling! Linkni bosing!

👉🏻 https://telegram.me/$botname?start=$callcid",
]);
}


if($data=="buy"){
bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"
💵 Qaysi to'lov usulida hisobingizni toldirmoqchisiz?
Karta va Qiwi orqali toʻlovlar qilish tavsiya etiladi.
👇 Tugmalardan tanlang:",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"💴 Karta orqali",'callback_data'=>"card"],['text'=>"🥝 QIWI Orqali",'callback_data'=>"qiwi"]],
]
]),
]);
}                            



$ss=file_get_contents("admin.txt");
if($text=="➕ RUB berish" and $cid==$admin){
file_put_contents("admin.txt","coin");
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"Foydalanuvchi hisobini nechi pulga toʻldirmoqchisiz:",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
}

if($ss=="coin" and $cid==$admin){
file_put_contents("adminpul.coin",$text);
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"Foydalanuvchi ID raqamini kiriting:",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
unlink("admin.txt");
file_put_contents("admin.txt","pay");
 }


if($ss=="pay" and $cid==$admin){
$summa = file_get_contents("adminpul.coin");
$sum =  file_get_contents("pul/$text.txt");
$jami = $sum + $summa;
file_put_contents("pul/$text.txt","$jami");
bot("sendMessage",[
   "chat_id"=>$text,
          "text"=>"
💰 Sizning hisobingiz admin tomonidan $summa Rublga toʻldirildi!

Hozirgi hisobingiz: $jami Rubl",
]);
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"✅ Foydalanuvchi balansi toʻldirildi!",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
unlink("admin.txt");
unlink("adminpul.coin");
}
$ss=file_get_contents("admin.txt");
if($text=="💳 Balans tekshirish" and $cid==$admin){
file_put_contents("admin.txt","alo");
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"Foydalanuvchi ID raqamini kiriting",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
}

if($ss=="alo" and $cid==$admin){
file_put_contents("adminpul.coin",$text);
$sum =  file_get_contents("pul/$text.txt");
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"Foydalanuvchi balansi $sum-RUB",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
unlink("admin.txt");
unlink("adminpul.coin");
 }
////////
$ss=file_get_contents("admin.txt");
if($text=="➖ RUB ayirish" and $cid==$admin){
file_put_contents("admin.txt","coin1");
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"Foydalanuvchi hisobidan qancha rubl ayirmoqchisiz:",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
}

if($ss=="coin1" and $cid==$admin){
file_put_contents("adminpul.coin",$text);
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"Foydalanuvchi ID raqamini kiriting:",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
unlink("admin.txt");
file_put_contents("admin.txt","pay1");
 }


if($ss=="pay1" and $cid==$admin){
$summa = file_get_contents("adminpul.coin");
$sum =  file_get_contents("pul/$text.txt");
$jami = $sum - $summa;
$okminus=file_put_contents("pul/$text.txt","$jami");
bot("sendMessage",[
   "chat_id"=>$text,
          "text"=>"
💰 Sizning hisobingizdan admin tomonidan $summa rubl ayirildi!

Hozirgi hisobingiz: $jami rubl",
]);
}
if($okminus){
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"✅ Foydalanuvchi balansidan $summa rubl ayirildi!",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
unlink("admin.txt");
unlink("adminpul.coin");
}

$botla = file_get_contents("rubl/bonus5.txt");
$b=file_get_contents("admin.txt");
if($tx=="🎁 Bonus" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Eng kam ( MIN ) bonus olish miqdorini kiriting",
'reply_markup'=>json_encode([
 'remove_keyboard'=>true,
]),   
]);
file_put_contents("admin.txt","b");
unlink('rubl/olindi1.txt');
unlink('rubl/berildi1.txt');
unlink('rubl/bonus2.txt');
unlink('rubl/bonus3.txt');
unlink('rubl/bonus4.txt');
unlink('rubl/bonus5.txt');
}
	
	
if($b=="b" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Eng ko'p ( MAX ) bonus olish miqdorini kiriting",
'reply_markup'=>json_encode([
 'remove_keyboard'=>true,
]),   
]);
file_put_contents("admin.txt","bb");
file_put_contents("rubl/bonus3.txt","$text");
}
	
if($b=="bb" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Bonus beriladigan kanal ID raqamini yuboring!

Namuna: 10200190",
'reply_markup'=>json_encode([
 'remove_keyboard'=>true,
]),   
]);
file_put_contents("admin.txt","bn");
file_put_contents("rubl/bonus4.txt","$text");
}

if($b=="bn" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Qancha foydalanuvchiga bonus berilsin ?",
'reply_markup'=>json_encode([
 'remove_keyboard'=>true,
]),   
]);
file_put_contents("rubl/bonus5.txt","-100$text");
file_put_contents("admin.txt","bonusa");
}

if($b=="bonusa" and $cid==$admin){
file_put_contents("rubl/bonus2.txt","$text");
$ch4 = file_get_contents("ch4.txt");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Bonus $botla kanaliga yuborildi",
'reply_markup'=>$panel,
]);
unlink("admin.txt");
$vaqt1=date('H:i',strtotime('-0 hour'));
bot('sendmessage',[
'chat_id'=>$botla, 
'text'=>"
*🚀 O‘yin boshlandi!

🛒 Bonus olgan foydalanuvchilar: 0
💰 Berilgan: 0-RUB
🔰 Admin: @$adminuser

⏳ Boshlangan vaqti:* $vaqt1",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🚀 Bonusni olish","callback_data"=>"bo"]],
]
]),
]);
}
mkdir("rubl");
if($data == "bo"){
$olindi=file_get_contents("rubl/bonus2.txt");
$ee1 = file_get_contents("rubl/olindi1.txt");
$eea = substr_count($ee1,"n"); 
if($eea==$olindi or $olindi==$eea){
bot('deleteMessage',[
'chat_id'=>$botla,
'message_id'=>$callmid,
]);
}else{
$id = $update->callback_query->id;
$frid= $update->callback_query->from->id;
$ee1 = file_get_contents("rubl/olindi1.txt");
if(mb_stripos($ee1,$frid)!==false){
bot('answerCallbackQuery',[
'callback_query_id'=>$id,
'text'=>"⚠️ Sizga bonus berilgan, iltimos keyingi bonusni kuting!",
"show_alert"=>true,
]);
}else{
$minb = file_get_contents("rubl/bonus3.txt");
$maxb =file_get_contents("rubl/bonus4.txt");
$bonusrand = rand($minb,$maxb);
$vaqt1 = date('H:i',strtotime('2 hour'));
$id = $update->callback_query->id;
$pul = file_get_contents("pul/$frid.txt");
$bonus=$pul+$bonusrand;
file_put_contents("pul/$frid.txt","$bonus");
file_put_contents("rubl/$frid.txt",1);
$frid= $update->callback_query->from->id;
bot('answerCallbackQuery',[
'callback_query_id'=>$id,
'text'=>"
🎉 Berildi $bonusrand-RUB
💵 Hisobingizda: $bonus-RUB",
'show_alert'=>true,
]);
file_put_contents("rubl/olindi1.txt","n".$frid, FILE_APPEND);
$ee1 = file_get_contents("rubl/olindi1.txt");
$eea = substr_count($ee1,"n"); 
$mm1 = file_get_contents("rubl/berildi1.txt");
$mm3 = $mm1+$bonusrand;
file_put_contents("rubl/berildi1.txt","$mm3");
$mn2 = file_get_contents("rubl/berildi1.txt");
$olindi=file_get_contents("rubl/bonus2.txt");
bot('editMessageText',[
'chat_id'=>$botla, 
'message_id'=>$callmid,
'text'=>"
*🚀 O‘yin boshlandi!

🛒 Bonus olgan foydalanuvchilar: $eea/$olindi
💰 Berildi: $mn2-RUB
🔰 Admin: *@$adminuser
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🚀 Bonusni olish","callback_data"=>"bo"]],
]
]),
]);
}
}
}