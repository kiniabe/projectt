<?php
$provider1Response = file_get_contents('http://localhost/PROJEKT/provider1');
$provider2Response = file_get_contents('http://localhost/PROJEKT/provider2');

$oferty =  json_decode($provider1Response, true);
$tours = json_decode($provider2Response, true);


$items = array_merge(convertOferty($oferty), convertTours($tours));


shuffle($items); // sortowanie zmienic


header('Content-Type: application/json');
echo json_encode($items);



function convertOferty($oferty){
    $result = [];
    foreach ($oferty as $oferta){
        $item = [
            'provider_item_id' => $oferta['id'], 
            'kraj' => $oferta['Kraj'],
            'miasto' => $oferta['Miasto'],
            'opis' => $oferta['Opis'],
            'cena' => floatval ($oferta['Cena']),
            'data_od' => $oferta['Data_od'],
			'data_do' => $oferta['Data_do'],
			'stworzono' => $oferta['Stworzono'],
			'edytowano' => $oferta['Edytowano'],
            'typ' => 'oferta'
        ];
        array_push($result, $item);
    }
    return $result;
}
function convertTours($tours){
    $result = [];
    foreach ($tours as $tour){
        $item = [
            'provider_item_id' => $tour['id'],
            'kraj' => $tour['Country'],
            'miasto' => $tour['City'],
            'opis' => $tour['Description'],
            'cena' => floatval($tour['Price']),
            'data_od' => $tour['Start_date'],
			'data_do' => $tour['End_date'],
			'stworzono' => $tour['Created_at'],
			'edytowano' => $tour['Updated_at'],
            'typ' => 'tour'
        ];
        array_push($result, $item);
    }
    return $result;
}