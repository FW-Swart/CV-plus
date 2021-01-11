<?php

return [
    // Name of the scheme
    'table_name' => 'workexp',

    // Query to drop the scheme set foreign key check=0
    'drop_scheme' => "SET foreign_key_checks = 0; DROP TABLE IF EXISTS `workexp`",

    // The scheme
    'scheme' => "CREATE TABLE `workexp` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `user_id` int(11) NOT NULL,
        `company_name` varchar(80) NOT NULL,
        `country` varchar(255),
        `city` varchar(255),
        `start_date` date NOT NULL,
        `end_date` date,
        `function_name` varchar(80) NOT NULL,
        `function_description` varchar(255),
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
            'user_id'               => 2,
            'company_name'          => "Eurosonic Noorderslag",
            'country'               => "The Netherlands",
            'city'                  => "Groningen",
            'start_date'            => "2007-09-01",
            'end_date'              => "2015-03-01",
            'function_name'         => "Production manager Eurosonic festivals",
            'function_description'  => "Production Technical / logistics all events outside Oosterpoort",
            'created'               => date('Y-m-d H:i:s'),
            'created_by'            => 1
        ],
    
        [
            'user_id'               => 2,
            'company_name'          => "heen en weer",
            'country'               => "The Netherlands",
            'city'                  => "Heerenveen",
            'start_date'            => "2018-06-01",
            'end_date'              => "2019-03-01",
            'function_name'         => "Chauffeur",
            'function_description'  => "Rijden bestelbus",
            'created'               => date('Y-m-d H:i:s'),
            'created_by'            => 2
        ],

        [
            'user_id'               => 2,
            'company_name'          => "pizza hemel",
            'country'               => "The Netherlands",
            'city'                  => "Groningen",
            'start_date'            => "2004-02-01",
            'end_date'              => "2008-03-01",
            'function_name'         => "bezorger",
            'function_description'  => "rijden besstelbus",
            'created'               => date('Y-m-d H:i:s'),
            'created_by'            => 2
        ],

        [
            'user_id'               => 3,
            'company_name'          => "Roos",
            'country'               => "The Netherlands",
            'city'                  => "Zwolle",
            'start_date'            => "2000-12-01",
            'end_date'              => "2005-12-01",
            'function_name'         => "Logistics manager",
            'function_description'  => "Logistics planning",
            'created'               => date('Y-m-d H:i:s'),
            'created_by'            => 2
        ],

        [
            'user_id'               => 4,
            'company_name'          => "ZTO int.",
            'country'               => "The Netherlands",
            'city'                  => "Delfzijl",
            'start_date'            => "2014-04-22",
            'function_name'         => "Office manager",
            'function_description'  => "Office management and frontdesk employ",
            'created'               => date('Y-m-d H:i:s'),
            'created_by'            => 2
        ],

        [
            'user_id'               => 3,
            'company_name'          => "Super drone",
            'country'               => "The Netherlands",
            'city'                  => "Deventer",
            'start_date'            => "2010-03-01",
            'end_date'              => "2014-12-31",
            'function_name'         => "Logistics manager",
            'function_description'  => "Logistics planning and consumer support",
            'created'               => date('Y-m-d H:i:s'),
            'created_by'            => 2
        ],

        [
            'user_id'               => 2,
            'company_name'          => "SRV",
            'country'               => "The Netherlands",
            'city'                  => "Groningen",
            'start_date'            => "1980-09-01",
            'end_date'              => "1999-03-01",
            'function_name'         => "SRV man",
            'function_description'  => "Rijdende winkel aan huis",
            'created'               => date('Y-m-d H:i:s'),
            'created_by'            => 2
        ],
    
        [
            'user_id'               => 4,
            'company_name'          => "Gemeente Appingedam",
            'country'               => "The Netherlands",
            'city'                  => "Appingedam",
            'start_date'            => "2007-01-01",
            'end_date'              => "2013-03-01",
            'function_name'         => "Frontdesk secretary",
            'function_description'  => "Frontdesk managment",
            'created'               => date('Y-m-d H:i:s'),
            'created_by'            => 2
        ]),
    ],
];