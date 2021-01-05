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
        `role` int(11) DEFAULT 2,
        `country` varchar(255),
        `city` varchar(255),
        `birthday` date,
        `created` timestamp,
        `updated` timestamp DEFAULT CURRENT_TIMESTAMP,
        `deleted` timestamp,
        `created_by` int(11) NOT NULL,
        `updated_by` int(11),
        `deleted_by` int(11),
        PRIMARY KEY (`id`),
        FOREIGN KEY (`role`) REFERENCES `roles`(`id`)
    ) ENGINE=INNODB  DEFAULT CHARSET=latin1;",

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
        ],

        [
            'first_name' => 'Nora',
            'last_name'  => 'Gari',
            'email'      => 'nora@swartmail.nl',
            'password'   => password_hash('Piet1', PASSWORD_DEFAULT),
            'role'       => 3,
            'country'    => 'Nederland',
            'city'       => 'Groningen',
            'birthday'   => '1990-05-03',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1,
        ]),

    ],
];