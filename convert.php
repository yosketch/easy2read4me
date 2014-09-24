<?php
define('ENCODE', 'utf-8');

/**
 *  my_str_replace()
 *  mb_str_replace()
 *  @see http://p2b.jp/2008/12/03/mb_str_replace
 */

/* マルチバイトを考慮したstr_replace */
function my_str_replace($search, $replace, $target, $encoding = ENCODE){
 $notArray = !is_array($target) ? TRUE : FALSE;
 $target = $notArray ? array($target) : $target;
 $search_len = mb_strlen($search, $encoding);
 $replace_len = mb_strlen($replace, $encoding);
 foreach ($target as $i => $tar){
  $offset = mb_strpos($tar, $search);
  while ($offset !== FALSE){
   $tar = mb_substr($tar, 0, $offset).$replace.mb_substr($tar, $offset + $search_len);
   $offset = mb_strpos($tar, $search, $offset + $replace_len);
  }
  $target[$i] = $tar;
 }
 return $notArray ? $target[0] : $target;
}

/*
 str_replace関数のマルチバイト版
 上記 my_str_replace()が必要
*/
function mb_str_replace($search, $replace, $target){
 if(is_array($search)){ // $searchが配列なら
  if(!is_array($replace)) $replace = array($replace);
  foreach ($search as $i => $needle){
   $rep = isset($replace[$i]) ? $replace[$i] : $replace[0];
   $target = my_str_replace($needle, $rep, $target);
  }
  return $target;
 } else return my_str_replace($search, $replace, $target); // $searchが配列でないとき
}

$in = $_POST['text'];
$out = mb_str_replace('...', '', $in); // Sample
$result = array('text' => $out);
header('Content-type:application/json; charset=utf8');
echo json_encode($result);
