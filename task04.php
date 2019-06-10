<?php
//課題1 ver.1
function double_v1($num) {
  echo $num * 2 . "\n";
}
double_v1(100);

//課題1 ver.2
function double_v2($num) {
  $result = $num * 2 . "\n";
  return $result;
}
echo double_v2(100);


//課題2 ver.1
function sum_v1($a,$b) {
  echo $a + $b . "\n";
}
sum_v1(1,10);

//課題2 ver.2
function sum_v2($a,$b) {
  $result = $a + $b . "\n";
  return $result;
}
echo sum_v2(1,10);


//課題3,4用 配列
$arr = array(1,3,5,7,9);

//課題3 ver.1 (ビルトイン関数:array_productを使用)
echo array_product($arr) . "\n";

//課題3 ver.2 (テキストの指示通り、関数を自作)
function multiple_array($arr) {
  $result = 1;
  foreach($arr as $a) {
    $result *= $a;
  }
  return $result . "\n";    //ここのreturnをechoに変えて、
}
echo multiple_array($arr);  //ここのechoを消しても出力できますよね？


//課題4 ver.1 (ビルトイン関数:maxを使用)
echo max($arr) . "\n";

//課題4 ver.2 (テキストの指示通り、関数を自作)
function max_array($arr) {
  $max_number = $arr[0];    //配列の最初の要素を最大値とする
  foreach($arr as $a) {     //配列の要素を順次処理
    if($max_number < $a) {  //もし値が現在の値より大きくなれば、
      $max_number = $a;     //最大値として上書きする
    }
  }
  return $max_number . "\n";
}
echo max_array($arr);


//課題5 (ビルトイン関数の使用例)

//strip_tags 文字列からタグを除去
$string = "<h1>A</h1> <h2>B</h2> <p>C</p>";
echo $string . "\n";                         //そのまま出力
echo strip_tags($string) . "\n";             //全てのタグを取り除く
echo strip_tags($string, "<h1><p>") . "\n";  //取り除かないタグを指定

//array_push 配列の最後に要素を追加
$test = array("AAA","BBB");
array_push($test, "CCC", "DDD");
var_dump($test);

//array_merge 連想配列の最後に要素を追加
$test2 = array("key1" => "AAA", "key2" => "BBB");
$test2 = array_merge($test2, array("key3" => "CCC"));
var_dump($test2);

//array_merge 配列の結合
$items1 = array("a","b","c");
$items2 = array("d","e");
$items3 = array("f","g");
$items_merge = array_merge($items1,$items2,$items3);
var_dump($items_merge);

//time() 現在時刻をUnixタイムスタンプとして取得
echo time() . "\n";

//mktime() 引数で指定した日時のUnixタイムスタンプを取得
echo mktime(0,0,0,1,1,1970) . "\n";

//date() 日付、時刻を書式化
date_default_timezone_set("Asia/Tokyo");
echo date("Y/m/d (D) H:i:s") . "\n";
echo date("Y/m/d (D) H:i:s", mktime(20,30,0,6,11,2019)) . "\n";
?>
