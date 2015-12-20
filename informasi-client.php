<html>
<script>
function cek(){
	//untuk mengetahui IP address
var informasi1 = '<?php
    function IPnya() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'IP Tidak Dikenali';
 
    return $ipaddress;
}	
 
	$ipaddress=$_SERVER['REMOTE_ADDR'];
	echo IPnya();
	?>';
	//sistem operasi yang digunakan
	var informasi2 = '<?php
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	$operating_system = 'Unknown';
		if (preg_match('/linux/i', $user_agent)) {
			echo $operating_system = 'Linux';
		}
		if (preg_match('/android/i', $user_agent)) {
			echo $operating_system = 'Android';
		}
		elseif (preg_match('/macintosh|mac os x/i', $user_agent)) {
			echo $operating_system = 'Mac';
		}
		elseif (preg_match('/windows|win32/i', $user_agent)) {
			echo $operating_system = 'Windows';
		}
		?>';
	//browser yang digunakan	
	var informasi3 = '<?php
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	$browser = 'Unknown';
		if(preg_match('/MSIE/i', $user_agent)) {
			echo $browser = 'Internet Explorer';
			}
		elseif(preg_match('/Firefox/i', $user_agent)) {
			echo $browser = 'Mozilla Firefox';
			}
		elseif(preg_match('/OPR/i', $user_agent)) {
			echo $browser = 'Opera';
		}
		elseif(preg_match('/Chrome/i', $user_agent)) {
			echo $browser = 'Google Chrome';
			}
		elseif(preg_match('/Safari/i', $user_agent)) {
			echo $browser = 'Apple Safari';
			}
		elseif(preg_match('/Netscape/i', $user_agent)) {
			echo $browser = 'Netscape';
		}
		?>';
	var informasi4 = '<?php
        include 'getGeoIP.freegeoip.net.php';
        $ip=$_SERVER['REMOTE_ADDR'];	
        $userGeoData = getGeoIP($ip); 
	$userGeoData->country_code. ' ';
	echo $userGeoData->country_name. ' ';
        ?>';
	document.data.ip.value=informasi1;
	document.data.sistem_operasi.value=informasi2;
	document.data.browser.value=informasi3;
	document.data.negara.value=informasi4;
}
</script>
<center>
<h1>Program Menampilkan Informasi Client</h1>
<hr>
<form name="data">
<table border="0"align="center"bgcolor="lightgrey">
<tr>
	<td>IP address</td><td>:</td>
	<td><input type="text"name="ip"value=""readonly></td>
</tr>
<tr>
	<td>Sistem Operasi </td><td>:</td>
	<td><input type="text"name="sistem_operasi"value=""readonly></td>
</tr>
<tr>
	<td>Browser </td><td>:</td>
	<td><input type="text"name="browser"value=""readonly></td>
</tr>
<tr>
	<td>Negara</td><td>:</td>
	<td><input type="text"name="negara"value=""readonly></td>
</tr>
<tr>
	<td colspan="3"align="right"><input type="button" name="cek_ip"value="Cek"onclick="cek()">
</table>
</form>
</html>	
