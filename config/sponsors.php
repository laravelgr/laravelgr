<?php

return [
    'tiers' => [
        'platinum' => [
            'name' => 'Platinum',
            'description' => 'Our Platinum Sponsors',
            'sponsors' => [
                [
                    'name' => 'Native PHP',
                    'image' => 'platinum/nativephp.png',
                    'url' => 'https://nativephp.com',
                    'size' => 'max-h-16 max-w-52',
                ],
                [
                    'name' => 'Laravel',
                    'image' => 'platinum/laravel.png',
                    'url' => 'https://laravel.com',
                    'size' => 'max-h-36 max-w-40',
                ],
                [
                    'name' => 'Hack The Box',
                    'image' => 'platinum/hackthebox.png',
                    'url' => 'https://hackthebox.com',
                    'size' => 'max-h-28 max-w-48',
                ],
                [
                    'name' => 'Epignosis',
                    'image' => 'platinum/epignosis.png',
                    'url' => 'https://www.epignosishq.com',
                    'size' => 'max-h-9 max-w-52',
                ],
            ],
        ],
        'gold' => [
            'name' => 'Gold',
            'description' => 'Our Gold Sponsors',
            'sponsors' => [
                [
                    'name' => 'Typesense',
                    'image' => 'gold/typesense.webp',
                    'url' => 'https://typesense.org',
                    'size' => 'max-h-32 max-w-40',
                ],
            ],
        ],
        'silver' => [
            'name' => 'Silver',
            'description' => 'Our Silver Sponsors',
            'sponsors' => [
            ],
        ],
    ],
];
