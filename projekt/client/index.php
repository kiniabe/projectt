<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
 <html>
 <head>
 <title>Oferty wycieczek</title>
 <meta http-equiv=content-type content="text/html; charset=iso-8859-2">
 <meta http-equiv="Content-Language" content="pl">
 </head>
 
 <body bgcolor='E0E0E0'>
 
<?php
// take data from providers
$hubResponse = file_get_contents('http://localhost/PROJEKT/hub');

// parse data from JSON to arrays
$items =  json_decode($hubResponse, true);

//function sortbyprice ($a, $b) {
 //   if ($a == $b) {
 //       return 0;
//    }
//    return ($a < $b) ? -1 : 1;


// $sortby=$_GET["sortby"];

//if (isset($sortby)) {//
	//uasort($items, "sortbyprice");
	//nazwa funkcji która sortuje, modyfikujemy tylko items
	// po wyjściu ifa items beda posortowane
//}//

 echo "<table align='center' height=70% width=95%  > 
  <tr>
      <th COLSPAN='10'  bgcolor='95A5A6'><h1><br>OFERTA WYCIECZEK<br></h1> </th>
  </tr>

 <tr align='center'>";

 echo "<td bgcolor='ABB7B7'><strong><h3>ID</h3></strong></td>";
 echo "<td bgcolor='BDC3C7'><strong><h3>Item ID</h3></strong></td>"; //th
 echo "<td bgcolor='ABB7B7'><strong><h3>Kraj</h3></strong></td>";
 echo "<td bgcolor='BDC3C7'><strong><h3>Miasto</h3></strong></td>";
 echo "<td bgcolor='ABB7B7'><strong><h3>Opis</h3></strong></td>";
 echo "<td bgcolor='BDC3C7'><strong><h3>Cena (zł) </h3></strong></td>";
 echo "<td bgcolor='ABB7B7'><strong><h3>Data od</h3></strong></td>";
 echo "<td bgcolor='BDC3C7'><strong><h3>Data do</h3></strong></td>";
 echo "<td bgcolor='ABB7B7'><strong>Stworzono</strong></td>";
 echo "<td bgcolor='BDC3C7'><strong>Edytowano</strong></td>";
 echo "</tr>";
 
 //Teraz wyświetlamy kolejne wiersze z tabeli 
 //Pola tabeli pobieramy odwołując się do ich 
 //numerów jak poniżej:
 //   0 (provider_item_id)
 //   1 (Kraj)
 //   2 (Miasto)
 //   3 (Opis)
 //   4 (Cena)
 //   5 (Data od)
 //   6 (Data do)
 //   7 (Stworzono)
 //   8 (Edytowano)

 //var_dump ($items);
foreach ($items as $i=>$row){
	$it=$i+1;
    echo "<tr align='center'>";
	echo "<td bgcolor=\"EEEEEE\">" . $it . "</td>";
    echo "<td bgcolor=\"EEEEEE\">" . $row["provider_item_id"] . "</td>";
    echo "<td bgcolor=\"EEEEEE\">" . $row["kraj"] . "</td>";
    echo "<td bgcolor=\"EEEEEE\">" . $row["miasto"] . "</td>";
    echo "<td bgcolor=\"EEEEEE\">" . $row["opis"] . "</td>";
    echo "<td bgcolor=\"EEEEEE\">" . $row["cena"] . "</td>";
    echo "<td bgcolor=\"EEEEEE\">" . $row["data_od"] . "</td>";
    echo "<td bgcolor=\"EEEEEE\">" . $row["data_do"] . "</td>";
    echo "<td bgcolor=\"EEEEEE\">" . $row["stworzono"] . "</td>";
    echo "<td bgcolor=\"EEEEEE\">" . $row["edytowano"] . "</td>";
    echo "</tr>";
 }
 echo "</table>";
 
 
 ?>
 </body> 
 </html>