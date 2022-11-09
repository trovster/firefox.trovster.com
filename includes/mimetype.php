<?php

// http://www.workingwith.me.uk/articles/scripting/mimetypes/
$charset = 'utf-8';
$mime = 'text/html';

$prolog_type = '<!doctype html>';
$prolog_type .= '<html lang="en">';

// finally, output the mime type and prolog type
header("Content-Type: {$mime}; charset={$charset}");
header("Vary: Accept");
echo $prolog_type;
