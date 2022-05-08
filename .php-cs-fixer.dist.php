<?php

$finder = Symfony\Component\Finder\Finder::create()
    ->in([
        __DIR__ . '/src',
        __DIR__ . '/examples',
        __DIR__ . '/tests',
    ])
    ->name('*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
        'array_syntax' => ['syntax' => 'short'],
        'array_push' => true,
        'array_indentation' => true,
        'ordered_imports' => ['sort_algorithm' => 'alpha'],
        'ordered_traits' => true,
        'no_unused_imports' => true,
        'not_operator_with_successor_space' => true,
        'trailing_comma_in_multiline' => true,
        'phpdoc_scalar' => true,
        'phpdoc_indent' => true,
        'phpdoc_types' => true,
        'unary_operator_spaces' => true,
        'binary_operator_spaces' => true,
        'blank_line_before_statement' => [
            'statements' => ['break', 'continue', 'declare', 'return', 'throw', 'try'],
        ],
        'blank_line_after_namespace' => true,
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_var_without_name' => true,
        'class_attributes_separation' => [
            'elements' => [
                'method' => 'one',
            ],
        ],
        'method_argument_space' => [
            'on_multiline' => 'ensure_fully_multiline',
            'keep_multiple_spaces_after_comma' => true,
        ],
        'single_trait_insert_per_statement' => true,
        'use_arrow_functions' => true,
        'whitespace_after_comma_in_array' => true,
        'protected_to_private' => true,
        'no_useless_else' => true,
        'no_leading_import_slash' => true,
        'no_unneeded_import_alias' => true,
        'global_namespace_import' => [
            'import_classes' => true,
            'import_constants' => true,
            'import_functions' => true,
        ],
        'braces' => [
            'allow_single_line_closure' => true,

        ],
        'cast_spaces' => true,
        'declare_strict_types' => true,
        'indentation_type' => true,
    ])
    ->setFinder($finder);
