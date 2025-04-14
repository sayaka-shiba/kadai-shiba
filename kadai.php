<?php
// 桃とイチゴの個数
$num_peaches = 15;
$num_strawberries = 15;

// 桃とイチゴの価格をランダムに生成
$peach_prices = [];
$strawberry_prices = [];

// 桃の価格（200円〜300円のランダム）
for ($i = 0; $i < $num_peaches; $i++) {
    $peach_prices[] = rand(200, 300);
}

// イチゴの価格（400円〜500円のランダム）
for ($i = 0; $i < $num_strawberries; $i++) {
    $strawberry_prices[] = rand(400, 500);
}

// 関数で計算を行う
function calculate_prices($prices) {
    $max_price = max($prices); // 最高値
    $min_price = min($prices); // 最安値
    $average_price = array_sum($prices) / count($prices); // 平均価格
    return [$max_price, $min_price, $average_price];
}

// 桃の価格計算
list($max_peach, $min_peach, $avg_peach) = calculate_prices($peach_prices);

// イチゴの価格計算
list($max_strawberry, $min_strawberry, $avg_strawberry) = calculate_prices($strawberry_prices);

// 結果表示
echo "桃の価格:\n";
echo "最高値: {$max_peach}円\n";
echo "最安値: {$min_peach}円\n";
echo "平均価格: " . round($avg_peach, 2) . "円\n\n";

echo "イチゴの価格:\n";
echo "最高値: {$max_strawberry}円\n";
echo "最安値: {$min_strawberry}円\n";
echo "平均価格: " . round($avg_strawberry, 2) . "円\n";
?>

