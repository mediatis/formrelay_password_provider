<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Form Relay - Password Provider',
    'description' => 'Adds a data provider for the form-relay package that provides a randomly generated password.',
    'category' => 'be',
    'author' => '',
    'author_email' => '',
    'author_company' => 'Mediatis AG',
    'state' => 'beta',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
            'formrelay' => '>=5.0.0',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
