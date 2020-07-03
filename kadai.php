<?php
$a = 3; $b =7;
echo $a + $b . "\n";

$array_month = ["1月","2月","3月","4月","5月","月6","7月","8月","9月","10月","11月","12月",];
echo $array_month[7] . "\n";

$hello = "Hello,"; $name = "Yuji"; $word = "'s World!";
echo $hello . $name . $word ."\n";

$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost . "\n";

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"] ."\n";


$name = "Yuji";
if ($name == "Yuji") {
  echo "私は" . $name . "です";
  echo "\n";
}else {
  echo "あなたの名前ではありません";
  echo "\n";
}

$total = 0;
for ($i=0; $i <=100000 ; $i++) {
  $total += $i ;
}

echo $total;
echo "\n";

$fruits = array("りんご","みかん","なし","ぶどう","オレンジ");
foreach ($fruits as $fruit) {
  echo "好きな果物は" . $fruit;
  echo "\n";
}

/* for文の始めの値を定義する /
/* for文の終わりの値を定義する */
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}

function double($number){
  return $number * 2;
}
echo double(4);
echo "\n";

function wa($a, $b){
  return $a + $b;
}
echo wa(100,4);
echo "\n";

function multiply($arr) {
        $result = 1;
        foreach ($arr as $value) {
                $result *= $value;
        }
        return $result;
}

$c = array(1, 3, 5, 7, 9);
echo multiply($c);
echo "\n";

$sample = '<p>sample paragraph.</p><!-- Comment --> <a href="#fragment">sample text</a>';
echo strip_tags($sample);
echo "\n";

$fruit = array("orange", "banana");
array_push($fruit, "streberry", "melon");
print_r($fruit);

$array1 = array("sport" => "baseball", 7, 9);
$array2 = array("z", "b", "sport" => "soccer", "color" => "red", 10);
$result = array_merge($array1, $array2);
print_r($result);

echo "July 4, 2020 is on a " . date("l", mktime(0, 0, 0, 7, 4, 2020));
echo "\n";

echo date("l");
echo "\n";
echo date('l jS \of F Y h:i:s A');
echo "\n";
