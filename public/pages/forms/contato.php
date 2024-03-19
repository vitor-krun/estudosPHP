<?php

require "../../../bootstrap.php";

$validate = validate([
    'name' => 's',
    'email'=> 'e',
    'subject' => 's',
    'massege' => 's',

]);

dd($validate->email);            