<?php

return [
    // Name of the scheme
    'table_name' => 'passions',

    // Query to drop the scheme
    'drop_scheme' => "DROP TABLE IF EXISTS `passions`",

    // The scheme
    'scheme' => "CREATE TABLE `passions` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `user_id` int(11) NOT NULL,
        `passion_name` varchar(80) NOT NULL,
        `passion_description` varchar(255),
        `created` timestamp NOT NULL,
        `updated` timestamp DEFAULT CURRENT_TIMESTAMP,
        `deleted` timestamp,
        `created_by` int(11) NOT NULL,
        `updated_by` int(11),
        `deleted_by` int(11),
        PRIMARY KEY (`id`),
        FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
    ) ENGINE=INNODB  DEFAULT CHARSET=latin1;",

    // Seeder data goes here
    'seeder' => [
        'type' => 'array',
        'data' => array(
        [
            'user_id'               => 1,
            'passion_name'          => "Carpentry",
            'passion_description'   => "Building / Designing small projects",
            'created'               => date('Y-m-d H:i:s'),
            'created_by'            => 1
        ]),
    ],
];