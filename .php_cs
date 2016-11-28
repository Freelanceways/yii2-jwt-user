<?php

use Symfony\CS\Config\Config;
use Symfony\CS\Finder\DefaultFinder;
use Symfony\CS\FixerInterface;

$fixers = [
    'array_element_no_space_before_comma',
    'array_element_white_space_after_comma',
    'braces',
    'class_definition',
    'combine_consecutive_unsets',
    'concat_with_spaces',
    'declare_equal_normalize',
    'double_arrow_multiline_whitespaces',
    'duplicate_semicolon',
    'elseif',
    'encoding',
    'eof_ending',
    'function_call_space',
    'function_declaration',
    'function_typehint_space',
    'hash_to_slash_comment',
    'heredoc_to_nowdoc',
    'include',
    'indentation',
    'join_function',
    'line_after_namespace',
    'linefeed',
    'list_commas',
    'lowercase_cast',
    'lowercase_constants',
    'lowercase_keywords',
    'method_argument_space',
    'multiline_array_trailing_comma',
    'multiple_use',
    'namespace_no_leading_whitespace',
    'native_function_casing',
    'new_with_braces',
    'no_blank_lines_after_class_opening',
    'no_empty_comment',
    'no_empty_phpdoc',
    'no_empty_statement',
    'no_trailing_whitespace_in_comment',
    'no_useless_return',
    'object_operator',
    'operators_spaces',
    'ordered_use',
    'parenthesis',
    'php_closing_tag',
    'phpdoc_indent',
    'phpdoc_no_access',
    'phpdoc_no_empty_return',
    'phpdoc_no_package',
    'phpdoc_order',
    'phpdoc_scalar',
    'phpdoc_type_to_var',
    'phpdoc_types',
    'print_to_echo',
    'remove_leading_slash_use',
    'remove_lines_between_uses',
    'self_accessor',
    'short_array_syntax',
    'short_bool_cast',
    'short_scalar_cast',
    'short_tag',
    'single_array_no_trailing_comma',
    'single_blank_line_before_namespace',
    'single_line_after_imports',
    'single_quote',
    'spaces_after_semicolon',
    'spaces_before_semicolon',
    'spaces_cast',
    'standardize_not_equal',
    'switch_case_semicolon_to_colon',
    'switch_case_space',
    'ternary_spaces',
    'trailing_spaces',
    'unneeded_control_parentheses',
    'unused_use',
    'visibility',
    'whitespacy_lines',
];

return Config::create()
    ->finder(DefaultFinder::create()
        ->files()
        ->name('*.php')
        ->in(__DIR__ . '/src')
        ->in(__DIR__ . '/tests'))
    ->level(FixerInterface::NONE_LEVEL)
    ->setUsingCache(false)
    ->fixers($fixers);