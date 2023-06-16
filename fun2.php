<?php
$strings = [
    'Hello World',
    'Welcome',
    'eman bassam albohaisi'
];
$max = '';
foreach ($strings as $string) {
    if (strlen($string) > strlen($max)) {
        $max = $string;
    }
}
echo $max;