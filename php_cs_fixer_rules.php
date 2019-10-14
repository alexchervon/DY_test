<?php

$finder = PhpCsFixer\Finder::create()
            ->in(__DIR__);

        return PhpCsFixer\Config::create()
            ->setIndent("\t")
            ->setLineEnding("\r\n")
            ->setRules([
                '@PSR2' => true,
                'full_opening_tag' => true,
                'braces' => [
                    'position_after_anonymous_constructs' => 'same',
                    'position_after_control_structures' => 'same',
                    'position_after_functions_and_oop_constructs' => 'same',
                    'allow_single_line_closure' => true,
                ],
                'object_operator_without_whitespace' => false,
                'array_syntax' => [
                    'syntax' => 'short',
                ],
                'no_extra_consecutive_blank_lines' => ['return'],
                'binary_operator_spaces' => [
                    'align_double_arrow' => true,
                    'align_equals' => true,
                ],
            ])->setFinder($finder);

            ?>