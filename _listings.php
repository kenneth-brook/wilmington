<?php
$queries = [];
parse_str($_SERVER['QUERY_STRING'], $queries);

$datas = [
    'apikey' => 'ECB2A7C5-5056-A36A-1C4477A6EED8BB7B'
];
if (isset($queries['items'])) {
    $datas['pagesize'] = $queries['items'];
    $datas['pagestart'] = isset($queries['page']) ? $queries['page'] : 1;
}

$feed = 'xml_converter/xmlcompress.xml';
$url_feed = 'http://cs.simpleviewinc.com/feeds/listings.cfm?' . http_build_query($datas);
$xml = simplexml_load_file($url_feed, 'SimpleXMLElement', LIBXML_NOCDATA);

$lists = false;
$paging = false;
if(!$xml->success) {
    print_r($xml->message);
} else {
    $lists = [];
    $paging = $xml->paging;
    foreach($xml->listings->listing as $listing ) {
        unset($listing->accountid);
        unset($listing->rankid);
        unset($listing->rankname);
        unset($listing->ranksort);
        unset($listing->keywords);
        unset($listing->additionalcategories);
        unset($listing->meetingfacility);
        unset($listing->meetingrooms);
        unset($listing->amenitytabs);
        unset($listing->customfields);
        $items = [];
        foreach ($xml as $key => $val) {
            $items[$key] = count($val->children()) == 0 ? $val->__toString() : $val;
        }
        $lists[] = $items;
        // $lists[] = $listing;
    }
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode(['items' => $lists, 'paging' => $paging], true);