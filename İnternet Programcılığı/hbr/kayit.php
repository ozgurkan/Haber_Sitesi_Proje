<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<fieldset>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Üye Kayıt</title>
</head>

<body> 
<form id="form1" name="form1" method="post" action="">
  <table width="310" border="1">
    <tr>
      <td width="121">ADI</td>
      <td width="173"><label>
        <input type="text" name="adi" id="adi" />
      </label></td>
    </tr>
    <tr>
      <td>SOYADI</td>
      <td><label>
        <input type="text" name="soyadi" id="soyadi" />
      </label></td>
    </tr>
    <tr>
      <td>KULLANICI ADI</td>
      <td><label>
        <input type="text" name="kadi" id="kadi" />
      </label></td>
    </tr>
    <tr>
      <td>SİFRE</td>
      <td><label>
        <input type="text" name="sifre" id="sifre" />
      </label>
      <label></label></td>
    </tr>
    <tr>
      <td>SİFRE TEKRARI</td>
      <td><label>
        <input type="text" name="sifret" id="sifret" />
      </label></td>
    </tr>
    <tr>
      <td>MAİL</td>
      <td><label>
        <input type="text" name="mail" id="mail" />
      </label></td>
    </tr>
    <tr>
      <td>TELEFON</td>
      <td><label>
        <input type="text" name="telefon" id="tel" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="kayitet" id="kayitet" value="KAYDET" />
      </label></td>
    </tr>
  </table>
</form>
<?php
error_reporting(E_ALL ^ E_NOTICE);
$host='localhost';
$user='root';
$pass='';
$data='haber';
$connx=mysql_connect($host,$user,$pass);
if($connx){
$dbConnx=mysql_select_db($data)or die(mysql_error());
$language=mysql_query("SET CHARACHTER SET utf8");
mysql_query("SET NAMES 'utf8'  ");
mysql_query("SET CHARACTER SET utf8");
mysql_query("SET COLLATION_CONNECTION = 'utf8_turkish_ci' ");
}
else{
die(mysql_error());
}

if($_POST){ 
$adi=$_POST["adi"];
$soyadi=$_POST["soyadi"];
$kadi=$_POST["kadi"];
$sifre=$_POST["sifre"];
$mail=$_POST["mail"];
$tel=$_POST["tel"];
$Result=mysql_query("INSERT INTO `bilgiler`(`Adi`,`Soyadi`,`KullaniciAdi`,`Sifre`,`Mail`,`Telefon`) 
											  VALUES 
													 ('$adi','$soyadi','$kadi','$sifre','$mail','$tel')");
if(!$Result)
echo("SorguHatası");
}

?>

</body>
</html>
</fieldset>

