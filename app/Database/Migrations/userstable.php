<?php

return [
    'table_name' => 'users',

    'drop_scheme' => "DROP TABLE IF EXISTS `users`",

    'scheme' => "CREATE TABLE IF NOT EXISTS `users` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(80) NOT NULL,
        `insertion` varchar(20),
        `last_name` varchar(80) NOT NULL,
        `email` varchar(255) NOT NULL,
        `password` varchar(255) NOT NULL,
        `role`int(11) NOT NULL,
        `country` varchar(255) NOT NULL,
        `city` varchar(255) NOT NULL,
        `birthday` date,
        `created` timestamp,
        `updated` timestamp DEFAULT CURRENT_TIMESTAMP,
        `deleted` timestamp,
        `created_by` int(11) NOT NULL,
        `updated_by` int(11),
        `deleted_by` int(11),
        PRIMARY KEY (`id`)
    ) ENGINE=MyISAM  DEFAULT CHARSET=latin1;",

    'seeder' => [
        'type' => 'array',
        'data' => array(
        [
            'first_name' => 'Folkert',
            'last_name'  => 'Swart',
            'email'      => 'folkert@swartwerk.nl',
            'password'   => password_hash('0000', PASSWORD_DEFAULT),
            'role'       => 1,
            'country'    => 'Nederland',
            'city'       => 'Groningen',
            'birthday'   => '1980-06-18',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1,
        ],

        [
            'first_name' => 'Piet',
            'last_name'  => 'Lucky',
            'email'      => 'piet@swartwerk.nl',
            'password'   => password_hash('Piet1', PASSWORD_DEFAULT),
            'role'       => 2,
            'country'    => 'Nederland',
            'city'       => 'Groningen',
            'birthday'   => '1975-07-20',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1,
        ]),
    ],
];