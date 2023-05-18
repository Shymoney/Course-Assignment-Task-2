<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude('bootstrap/cache')
    ->exclude('database')
    ->exclude('resources')
    ->exclude('storage')
    ->exclude('vendor')
    ->notName('_ide_helper.php');

$config = new PhpCsFixer\Config();

// we should try to keep in sync with html/.php-cs-fixer.php
return $config->setRules([
    '@PSR1' => true,
    '@PSR12' => true,
    'no_unused_imports' => true,
    'concat_space' => ['spacing' => 'one'],
    'cast_spaces' => ['space' => 'none'],
    // for now this is disabled because short arrow functions aren't distinguished from regular closures
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/issues/5916
    'function_declaration' => false
])
    ->setCacheFile(__DIR__ . "/storage/framework/cache/.php_cs.cache")
    ->setFinder($finder);
