<?php

return [
    // Name of the scheme
    'table_name' => 'education',

    // Query to drop the scheme
    'drop_scheme' => "DROP TABLE IF EXISTS `education`",

    // The scheme
    'scheme' => "CREATE TABLE `education` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `user_id` int(11) NOT NULL,
        `institute_name` varchar(80) NOT NULL,
        `course_name` varchar(80) NOT NULL,
        `country` varchar(255),
        `city` varchar(255),
        `start_date` date NOT NULL,
        `end_date` date,
        `diploma_date` date,
        `education_description` varchar(255),
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
            'institute_name'        => "Code Gorilla",
            'course_name'           => "Bootcamp",
            'country'               => "The Netherlands",
            'city'                  => "Groningen",
            'start_date'            => "2020-10-10",
            'education_description' => "webdevelopment course",
            'created'               => date('Y-m-d H:i:s'),
            'created_by'            => 1
        ]),
    ],
];