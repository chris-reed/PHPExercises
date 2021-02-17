<?php

$user_input = 3;
echo mix_em_up($user_input);

function mix_em_up($offset){
    $random_string = "This is a random string.";
    // I feel like there is a better way to do this, but this was the quickest to come to mind.
    // It ain't pretty, but it works.
    return substr($random_string, strlen($random_string)-$offset, $offset) . substr($random_string, 0, strlen($random_string)-$offset);
};
