<?php

$urlList = ['/funds/' =>
    ['GET' => Funds::list(),
     'POST' => Funds::add(),
    ],
];

print_r($urlList);