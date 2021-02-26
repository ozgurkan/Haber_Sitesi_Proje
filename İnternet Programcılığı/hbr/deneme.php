<html>
<head>

</head>
<body>

<?php 

include ("system/connect.php");
$limit = 5;

$page = @$_GET["page"];

if(empty($page) or !is_numeric($page)) {

$page = 1;

}


	$count			 = mysql_num_rows(mysql_query("SELECT yorum_id FROM yorumlar"));
	$toplamsayfa	 = ceil($count / $limit);
	$baslangic		 = ($page-1)*$limit;


$sorgu = "SELECT * FROM yorumlar ORDER BY yorum_id ASC LIMIT $baslangic,$limit";

$yazdir_sorgu = mysql_query( $sorgu, $connx) or die(mysql_error() );

while ($yazdir = mysql_fetch_array($yazdir_sorgu)){

echo $yazdir['yorum_detay'];
echo "<br>";

}

if($count > $limit) : 
  $x = 2; // akrif sayfadan önceki/sonraki sayfa gösterim sayisi 
  $lastP = ceil($count/$limit); 

  if($page > 1){

  $onceki = $page-1;
  
  echo "<a href=\"?page=$onceki\">« Önceki Sayfa </a>"; 
  
  }

  // sayfa 1'i yazdir 
  if($page==1) echo "<span class=\"sayfa\">[1]</span>"; 
  else echo "<a href=\"?page=1\">[1]</a>"; 
  // "..." veya direkt 2 
  if($page-$x > 2) { 
    echo "..."; 
    $i = $page-$x; 
  } else { 
    $i = 2; 
  } 
  // +/- $x sayfalari yazdir 
  for($i; $i<=$page+$x; $i++) { 
    if($i==$page) echo "<span class=\"sayfa\">[$i]</span>"; 
    else echo "<a href=\"?page=$i\">[$i]</a>"; 
    if($i==$lastP) break; 
  } 
  // "..." veya son sayfa 
  if($page+$x < $lastP-1) { 
    echo "..."; 
    echo "<a href=\"?page=$lastP\">[$lastP]</a>"; 
  } elseif($page+$x == $lastP-1) { 
    echo "<a href=\"?page=$lastP\">[$lastP]</a>"; 
  } 
  
  if($page < $lastP){
  
  $sonraki = $page+1;
  
  echo "<a href=\"?page=$sonraki\"> Sonraki Sayfa » </a>"; 
  
  }
  
endif; 

?>
</body>
</html>