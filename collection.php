<?php
$data = array();
$type = array('druid','hunter','mage','neutral','paladin','priest','rogue','shaman','warlock','warrior');
foreach($type as $t) {
    $hs = file_get_contents('data_cards/' . $t . '.js');
    preg_match_all('#name:"(.*?)"#', $hs, $match);
    unset($match[0]);
    $match[1] = array_unique($match[1]);
    $data[$t] = $match[1];
    //$data[$t][] = count($match[1]);
}
print_r($data);
