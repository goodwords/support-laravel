<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in(__DIR__)
;

/**
 * @see https://github.com/FriendsOfPHP/PHP-CS-Fixer#usage
 */
return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::NONE_LEVEL)
    ->fixers([
        // disable PSR-0 fixer
        // '-psr0',

        // PSR-1 fixers:
        'encoding',
        'short_tag',

        // all PRS-2 fixers (as in php-cs-fixer version 1.11.2):
        'braces',
        'elseif',
        'eof_ending',
        'function_call_space',
        'function_declaration',
        'indentation',
        'line_after_namespace',
        'linefeed',
        'lowercase_constants',
        'lowercase_keywords',
        'method_argument_space',
        'multiple_use',
        'parenthesis',
        'php_closing_tag',
        'single_line_after_imports',
        'trailing_spaces',
        'visibility',

        // useful Symfony fixers
        'blankline_after_open_tag',
        'whitespacy_lines',
        'extra_empty_lines',
        'no_blank_lines_after_class_opening',
    ])
    ->finder($finder)
;
