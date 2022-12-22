<?php
$queries = [];
parse_str($_SERVER['QUERY_STRING'], $queries);
$filenames = explode('/',$_SERVER['DOCUMENT_URI']);
$filename = $filenames[count($filenames) - 1];
$acc_types = ['stay', 'play', 'dine', 'shop', 'events'];
$acc_towns = ['Wilmington', 'Carolina Beach', 'Kure Beach', 'Wrightsville Beach'];
$type = isset($queries['type']) && in_array(strtolower($queries['type']), $acc_types) ? strtolower($queries['type']) : false;
$town = isset($queries['town']) && in_array(ucwords(strtolower($queries['town'])), $acc_towns) ? ucwords(strtolower($queries['town'])) : false;
