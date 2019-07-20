<?php

const TOTAL = 80;
const FELT_PEN = 23;
const PENCIL = 40;
echo 'Общее количество рисунков на школьной выставке:' . TOTAL . '<br>';
echo 'Рисунков выполненных фломастером: ' . FELT_PEN . '<br>';
echo 'Рисунков выполненных карандашами: ' . PENCIL . '<br>';
echo 'Найти сколько рисунков выполненных красками. <br>';
echo 'Решение: <br>';

$paint = TOTAL - FELT_PEN - PENCIL;

echo TOTAL . '-' . FELT_PEN . '-' . PENCIL . '=' . $paint . '<br>';
echo $paint . ' рисунков выполнено красками.';