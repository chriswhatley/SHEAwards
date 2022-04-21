<?php

return [
    'production' => false,
    'baseUrl' => 'http://localhost:3001',
	// 'baseUrl' => 'http://192.168.0.65:3000',
    'siteTitle' => 'SHE Awards 2021',
    'awardsDate' => '13th October 2021',
    'awardsLocation' => 'Online',
    'awardsURL' => 'https://hsmlive.co.uk/hsm_live/en/page/home',
    'nominationURL' => '/nominate',
    'nominationDeadline' => 'Saturday 31st July 2021',
    'collections' => [  'awards',
    					'shortlists' => ['sort' => 'sort-order'],
    					'sponsors' => ['sort' => 'sort-order'] 
    				],
];
