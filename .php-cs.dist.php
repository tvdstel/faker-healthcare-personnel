<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

/**
 * For more information about this configuration you can go to
 * the following website to see more about this config when
 * you click on the "folder" icon on the website.
 *
 * https://mlocati.github.io/php-cs-fixer-configurator/#configurator
 */
$rules = [
    '@PSR12' => true,
    '@PSR12:risky' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:no_alias_functions
    'no_alias_functions' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:no_mixed_echo_print
    'no_mixed_echo_print' => true,
    // Array Notation
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:array_indentation
    'array_indentation' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:array_syntax
    'array_syntax' => ['syntax' => 'short'],
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:no_multiline_whitespace_around_double_arrow
    'no_multiline_whitespace_around_double_arrow' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:no_trailing_comma_in_singleline_array
    'no_trailing_comma_in_singleline' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:no_whitespace_before_comma_in_array
    'no_whitespace_before_comma_in_array' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:normalize_index_brace
    'normalize_index_brace' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:trim_array_spaces
    'trim_array_spaces' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:whitespace_after_comma_in_array
    'whitespace_after_comma_in_array' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:psr_autoloading
    'psr_autoloading' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:magic_constant_casing
    'magic_constant_casing' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:magic_method_casing
    'magic_method_casing' => true,
    // added from Symfony
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:native_function_casing
    'native_function_casing' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:cast_spaces
    'cast_spaces' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:no_short_bool_cast
    'no_short_bool_cast' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:class_attributes_separation
    'class_attributes_separation' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:self_accessor
    'self_accessor' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:single_line_comment_style
    'single_line_comment_style' => [
        'comment_types' => ['hash'],
    ],
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:include
    'include' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:no_unneeded_control_parentheses
    'no_unneeded_control_parentheses' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:trailing_comma_in_multiline
    'trailing_comma_in_multiline' => [
        'elements' => ['arrays'],
        'after_heredoc' => true,
    ],
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:function_typehint_space
    'function_typehint_space' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:no_unreachable_default_argument_value
    'no_unreachable_default_argument_value' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:phpdoc_to_return_type
    'phpdoc_to_return_type' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:fully_qualified_strict_types
    'fully_qualified_strict_types' => true,
    // added
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:no_unused_imports
    'no_unused_imports' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:ordered_imports
    'ordered_imports' => [
        'sort_algorithm' => 'length',
    ],
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:no_leading_namespace_whitespace
    'no_leading_namespace_whitespace' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:binary_operator_spaces
    'binary_operator_spaces' => [
        'operators' => [
            '=' => 'single_space',
            '=>' => 'single_space',
        ],
    ],
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:concat_space
    'concat_space' => ['spacing' => 'one'],
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:increment_style
    'increment_style' => ['style' => 'post'],
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:not_operator_with_successor_space
    'not_operator_with_successor_space' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:object_operator_without_whitespace
    'object_operator_without_whitespace' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:operator_linebreak
    'operator_linebreak' => [
        'only_booleans' => true,
        'position' => 'beginning',
    ],
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:standardize_not_equals
    'standardize_not_equals' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:unary_operator_spaces
    'unary_operator_spaces' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:linebreak_after_opening_tag
    'linebreak_after_opening_tag' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:php_unit_expectation
    'php_unit_expectation' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:php_unit_method_casing
    'php_unit_method_casing' => ['case' => 'snake_case'],
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:php_unit_mock_short_will_return
    'php_unit_mock_short_will_return' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:php_unit_no_expectation_annotation
    'php_unit_no_expectation_annotation' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:php_unit_test_annotation
    'php_unit_test_annotation' => ['style' => 'prefix'],
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:php_unit_test_case_static_method_calls
    'php_unit_test_case_static_method_calls' => ['call_type' => 'this'],
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:no_blank_lines_after_phpdoc
    'no_blank_lines_after_phpdoc' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:no_empty_phpdoc
    'no_empty_phpdoc' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:phpdoc_add_missing_param_annotation
    'phpdoc_add_missing_param_annotation' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:phpdoc_indent
    'phpdoc_indent' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:phpdoc_inline_tag_normalizer
    'phpdoc_inline_tag_normalizer' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:phpdoc_no_access
    'phpdoc_no_access' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:phpdoc_no_package
    'phpdoc_no_package' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:phpdoc_no_useless_inheritdoc
    'phpdoc_no_useless_inheritdoc' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:phpdoc_scalar
    'phpdoc_scalar' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:phpdoc_single_line_var_spacing
    'phpdoc_single_line_var_spacing' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:phpdoc_summary
    'phpdoc_summary' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:phpdoc_tag_type
    'phpdoc_tag_type' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:phpdoc_to_comment
    'phpdoc_to_comment' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:phpdoc_trim
    'phpdoc_trim' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:phpdoc_types
    'phpdoc_types' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:phpdoc_var_without_name
    'phpdoc_var_without_name' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:no_useless_return
    'no_useless_return' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:simplified_null_return
    'simplified_null_return' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:multiline_whitespace_before_semicolons
    'multiline_whitespace_before_semicolons' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:no_empty_statement
    'no_empty_statement' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:no_singleline_whitespace_before_semicolons
    'no_singleline_whitespace_before_semicolons' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:space_after_semicolon
    'space_after_semicolon' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:declare_strict_types
    'declare_strict_types' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:explicit_string_variable
    'explicit_string_variable' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:heredoc_to_nowdoc
    'heredoc_to_nowdoc' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:simple_to_complex_string_variable
    'simple_to_complex_string_variable' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:single_quote
    'single_quote' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:blank_line_before_statement
    'blank_line_before_statement' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer://https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:no_extra_blank_lines
    'no_extra_blank_lines' => [
        'tokens' => [
            'extra',
            'throw',
            'use',
        ],
    ],
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:no_spaces_around_offset
    'no_spaces_around_offset' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:combine_consecutive_issets
    'combine_consecutive_issets' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:combine_consecutive_unsets
    'combine_consecutive_unsets' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:control_structure_continuation_position
    'control_structure_continuation_position' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:explicit_indirect_variable
    'explicit_indirect_variable' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:global_namespace_import
    'global_namespace_import' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:implode_call
    'implode_call' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:lambda_not_used_import
    'lambda_not_used_import' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:list_syntax
    'list_syntax' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:method_chaining_indentation
    'method_chaining_indentation' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:modernize_strpos
    'modernize_strpos' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:modernize_types_casting
    'modernize_types_casting' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:no_empty_comment
    'no_empty_comment' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:no_null_property_initialization
    'no_null_property_initialization' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:no_unneeded_import_alias
    'no_unneeded_import_alias' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:no_useless_else
    'no_useless_else' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:non_printable_character
    'non_printable_character' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:nullable_type_declaration_for_default_null_value
    'nullable_type_declaration_for_default_null_value' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:phpdoc_align'
    'phpdoc_align' => ['align' => 'left'],
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:phpdoc_annotation_without_dot
    'phpdoc_annotation_without_dot' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:phpdoc_line_span
    'phpdoc_line_span' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:phpdoc_order
    'phpdoc_order' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:phpdoc_var_annotation_correct_order
    'phpdoc_var_annotation_correct_order' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:protected_to_private
    'protected_to_private' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:return_assignment
    'return_assignment' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:simplified_if_return
    'simplified_if_return' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:single_line_comment_spacing
    'single_line_comment_spacing' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:single_space_after_construct
    'single_space_after_construct' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:string_line_ending
    'string_line_ending' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:ternary_to_null_coalescing
    'ternary_to_null_coalescing' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:types_spaces
    'types_spaces' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:mb_str_functions
    'mb_str_functions' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:no_superfluous_elseif
    'no_superfluous_elseif' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:no_superfluous_phpdoc_tags
    'no_superfluous_phpdoc_tags' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:ordered_class_elements
    'ordered_class_elements' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:ordered_interfaces
    'ordered_interfaces' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:php_unit_construct
    'php_unit_construct' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:random_api_migration
    'random_api_migration' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:self_static_accessor
    'self_static_accessor' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:strict_comparison
    'strict_comparison' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:use_arrow_functions
    'use_arrow_functions' => true,
    // https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8|fixer:void_return
    'void_return' => true,
];

$finder = Finder::create()
    ->in(__DIR__)
    ->path([
        'app',
        'config',
        'database',
        'routes',
        'tests',
    ])
    ->name(' *.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return (new Config())
    ->setFinder($finder)
    ->setRules($rules)
    ->setCacheFile(__DIR__ . '/.php-cs-fixer.cache')
    ->setRiskyAllowed(true)
    ->setUsingCache(true);
