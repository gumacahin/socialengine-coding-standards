<?php

require(__DIR__ . '/../../vendor/autoload.php');
require(__DIR__ . '/../../SocialEngine/DocGenerators/SocialEngine.php');

$generator = new PHP_CodeSniffer_DocGenerators_SocialEngine(__DIR__ . '/../../SocialEngine');
$md = $generator->generate();

file_put_contents(__DIR__ . '/../../STANDARDS.md', $md);
