<?php

return [
    'production' => false,
    'baseUrl' => 'http://localhost:3000',
	// 'baseUrl' => 'http://192.168.0.65:3000',
    'siteTitle' => 'SHE Awards 2024',
    'awardsDate' => '1st May 2024',
    'awardsLocation' => 'The Vox, NEC, Birmingham',
    'awardsURL' => 'https://form.jotform.com/232674667151360',
    'nominationURL' => '/nominate',
    'nominationDeadline' => 'Saturday 31st March 2024',
    'collections' => [  'awards',
    					'shortlists' => ['sort' => 'sort-order'],
    					'sponsors' => ['sort' => 'sort-order'],
                        'winners' => ['sort' => 'sort-order']
    				],
];
