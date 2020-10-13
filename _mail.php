<?php
require 'lib/mailjetPHP/';

use lib\mailjetPHP\src\Mailjet\Resources;
$mj = new \Mailjet\Client('2423def9caeb967083ac0089d90ffcaf','47e244ed9285db75ae5d4398423f9fe5',true,['version' => 'v3.1']);

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
            'TextPart' => "My first Mailjet email " + $_POST['message'],
            'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href='https://www.mailjet.com/'>Mailjet</a>!</h3><br />May the delivery force be with you!"+ $_POST['message'],
            'CustomID' => "AppGettingStartedTest"
        ]
    ]
];
$response = $mj->post(Resources::$Email, ['body' => $body]);
$response->success() && var_dump($response->getData());
?>




