<?php

return [
    'production' => false,
    'baseUrl' => 'http://localhost:3000',
	// 'baseUrl' => 'http://192.168.0.65:3000',
    'siteTitle' => 'SHE Awards 2021',
    'awardsDate' => '13th October 2021',
    'awardsLocation' => 'Online',
    'awardsURL' => '#',
    'nominationURL' => '/nominate',
    'nominationDeadline' => 'Friday 30th July',
    'collections' => [  'awards',
    					'shortlists' => ['sort' => 'sort-order'],
    					'sponsors' => ['sort' => 'sort-order'] 
    				],
];
