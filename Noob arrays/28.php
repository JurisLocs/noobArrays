<?php

function checkExam(array $a, array $b)
{
    $wrong = array_diff_assoc($b, $a);
    $points = (count($a) - count($wrong)) * 4;
    $points += ((count($wrong) - (count($b) - count(array_filter($b)))) * -1);
    return $points < 0 ? 0 : $points;
}

echo checkExam(["a", "a", "b", "b"], ["a", "c", "b", "d"]); // => 6
echo PHP_EOL;
echo checkExam(["a", "a", "c", "b"], ["a", "a", "b", ""]); // => 7
echo PHP_EOL;
echo checkExam(["a", "a", "b", "c"], ["a", "a", "b", "c"]); // => 16
echo PHP_EOL;
echo checkExam(["b", "c", "b", "a"], ["", "a", "a", "c"]); // => 0
echo PHP_EOL;