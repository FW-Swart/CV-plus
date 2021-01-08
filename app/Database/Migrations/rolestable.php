<?php

return [
    // Name of the scheme
    'table_name' => 'roles',

    // Query to drop the scheme set foreign key check=0
    'drop_scheme' => "SET foreign_key_checks = 0; DROP TABLE IF EXISTS `roles`",

    // The scheme
    'scheme' => "CREATE TABLE IF NOT EXISTS `roles` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(80) NOT NULL,
        `created` timestamp NOT NULL,
        `updated` timestamp DEFAULT CURRENT_TIMESTAMP,
        `deleted` timestamp,
        `created_by` int(11) NOT NULL,
        `updated_by` int(11),
        `deleted_by` int(11),
        PRIMARY KEY (`id`)
    ) ENGINE=INNODB  DEFAULT CHARSET=latin1; SET foreign_key_checks = 1;",

    // Seeder data goes here
    'seeder' => [
        'type' => 'array',
        'data' => array(
        [
            'name'       => 'admin',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'name'       => 'user',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'name'       => 'invite',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ]),

    ],
];