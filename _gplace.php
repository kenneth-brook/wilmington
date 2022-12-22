<?php
$queries = [];
parse_str($_SERVER['QUERY_STRING'], $queries);

$datas = [
    'key' => 'AIzaSyAGefyRhxQki08cpUEvDe4dTBh0N8YGArc',
    'radius' => 1000,
];
if (isset($queries['place'])) {
    $datas['keyword'] = $queries['place'];
}
if (isset($queries['lat']) && isset($queries['lon'])) {
    $datas['location'] = sprintf('%1$s,%2$s', $queries['lat'], $queries['lon']);
}

$ratings = ['stars' => 0, 'users' => 0];
// $ratings = ['stars' => 4, 'users' => 0];

$url_find = 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?' . http_build_query($datas);
$contents = file_get_contents($url_find);
if ($contents) {
    $datas = json_decode($contents, true);
    if ('OK' == $datas['status']) {
        if (isset($datas['results'][0])) {
            $ratings['stars'] = $datas['results'][0]['rating'];
            $ratings['users'] = $datas['results'][0]['user_ratings_total'];
        }
    }
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($ratings, true);