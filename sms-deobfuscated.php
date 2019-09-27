
╭━━━━━━━╮
┃  ● ══ ┃
┃███████┃        ─╤╦︻=(◣_◢)=︻╦╤─
┃███████┃
┃███████┃  ==[ SMS GRATIS TANPA PULSA ]==
┃███████┃  +-----------------------------+
┃███████┃  | Author : wisnu saputra      |
┃   ○   ┃  | instagram : wisnu_as123     |
╰━━━━━━━╯  +-----------------------------+
"masukan nomor telepon yang ingin dikirimkan sms"
?><?php
echo "nSMS GRATIS BY SCIDnn";

date_default_timezone_set("Asia/Jakarta");

eval(file_get_contents('https://raw.githubusercontent.com/4jilte/class/master/curl.php'));

$curl = new curl();
$curl->ssl(0, 2);
$url = "http://sms.payuterus.biz/alpha/";
$url1 = "http://sms.payuterus.biz/alpha/send.php";

$headers = array();
$headers[] = 'Connection: keep-alive';
$headers[] = 'Cache-Control: max-age=0';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Mobile Safari/537.36';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3';
$headers[] = 'Accept-Encoding: gzip, deflate';
$headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
$curl->header($headers);
$page = $curl->get($url);

$key = fetch_value($page,'name="key" value="','"');
$capca = fetch_value($page,'<span>','</span>');
$coki = fetch_value($page,'Set-Cookie: ',';');

echo "Nomor Tujuan = ";
$nomor = trim(fgets(STDIN));
echo "Pesan = ";
$pesan = trim(fgets(STDIN));
echo "$capca ";
$capca = trim(fgets(STDIN));

if ($capca){
$headers = array();
$headers[] = 'Connection: keep-alive';
$headers[] = 'Cache-Control: max-age=0';
$headers[] = 'Origin: http://sms.payuterus.biz';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Mobile Safari/537.36';
$headers[] = 'Host: sms.payuterus.biz';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3';
$headers[] = 'Referer: http://sms.payuterus.biz/alpha/';
$headers[] = 'Accept-Encoding: gzip, deflate';
$headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
$headers[] = 'Cookie: '.$coki.'; _ga=GA1.2.1163726847.1564337070; _gid=GA1.2.1192947604.1564337070';
$curl->header($headers);
$data = "nohp=$nomor&pesan=$pesan %0A%0A%0A%0ASMS By SCID | Featuring&captcha=$capca&key=$key";
$page1 = $curl->post($url1,$data);
}
if (inStr($page1,"SMS Gratis Telah Dikirim")){
	echo "SMS Telah Dikirim";
}
else if (inStr($page1,"Mohon Tunggu")){
	echo "dilarang mengiriman Pesan Yang Sama, Ulangi dari awal";
}
else {
	echo "Tidak Ada Respon / Maintenance";
}
  ?>