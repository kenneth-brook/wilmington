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

$url_feed = 'http://cs.simpleviewinc.com/feeds/events.cfm?' . http_build_query($datas);
$xml = simplexml_load_file($url_feed, 'SimpleXMLElement', LIBXML_NOCDATA);

$lists = null;
$paging = null;
if(!$xml->success) {
    print_r($xml->message);
} else {
    $lists = [];
    $paging = $xml->paging;
    foreach($xml->events->event as $event ) {
        unset($event->eventcategories);
        unset($event->imagefile);
        unset($event->customfields);
        unset($event->locale);
        $items = [];
        foreach ($event as $key => $val) {
            $items[$key] = count($val->children()) == 0 ? $val->__toString() : $val;
        }
        $lists[] = $items;
    }
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode(['items' => $lists, 'paging' => $paging], true);
