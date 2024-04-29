<?php
$elements = [];
while (FALSE !== ($line = fgets(STDIN))) {
  $elements[] = trim($line);
}
$elements = [
    'John' => [80, 90, 85],
    'Jane' => [95, 88, 92],
    'Jim'  => [75,80, 70]
];
foreach ($elements as $name => $scores) {
    $average = array_sum($scores) / count($scores);
    $average = (int) $average;
    echo "<p>{$name}'s average grade is {$average}</p>";
}
?>