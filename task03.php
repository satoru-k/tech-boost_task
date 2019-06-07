<?php
//課題1
$name = "さとる";
if($name == "さとる"){
  echo "私は{$name}です";
}else{
  echo "あなたの名前ではありません";
}
echo "\n";

//課題2
$total = 0;
for($i=1;$i<=10000;$i++){
  $total += $i;
}
echo $total. "\n";

//課題3
$fruits = array("apple","orange","banana","grape","peach");
foreach($fruits as $fruit){
  echo "要素は{$fruit}". "\n";
}

//課題4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i. "\n";
  }
}
?>
