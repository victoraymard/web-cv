<?php

require 'lib/mailjetPHP/src/Mailjet/Client.php';
require 'lib/mailjetPHP/src/Mailjet/Resources.php';

use Mailjet\Client;
use Mailjet\Resources;


$mj = new Client('2423def9caeb967083ac0089d90ffcaf','47e244ed9285db75ae5d4398423f9fe5',true,['version' => 'v3.1']);

$body = [
    'Messages' => [
        [
            'From' => [
                'Email' => "victor.aymard@edu.ece.fr",
                'Name' => "victor"
            ],
            'To' => [
                [
                    'Email' => "victor.aymard@edu.ece.fr",
                    'Name' => "victor"
                ]
            ],
            'Subject' => "Greetings from Mailjet.",
            'TextPart' => "My first Mailjet email " ,
            'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href='https://www.mailjet.com/'>Mailjet</a>!</h3><br />May the delivery force be with you!",
            'CustomID' => "AppGettingStartedTest"
        ]
    ]
];
$response = $mj->post(Resources::$Email, ['body' => $body]);
$response->success() && var_dump($response->getData());
?>




