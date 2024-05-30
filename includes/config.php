<?php

$title = "Siła Kobiety";
$site_name = "Siła Kobiety";
$site_account = "22 1020 5242 0000 2002 0560 3370";
$image_gallery_path = '/img/gallery/';

$site_config = [
  'sections' => [
    'about' => [
      'cards' => [
        'documents' => [
          'link' => build_url('regulations')
        ],
        'support' => [
          'link' => build_url('donate')
        ],
      ]
    ],
    'programs' => [
      'cards' => [
        'polish' => [
          'img' => '/img/jezyk_polski.webp',
          'link' => build_url('language')
        ],
        'art' => [
          'img' => '/img/art.webp',
          'link' => build_url('art')
        ],
        'club' => [
          'img' => '/img/klub_literacki.webp',
          'link' => build_url('club')
        ],
        'concerts' => [
          'img' => '/img/koncerty.webp',
          'link' => build_url('concerts')
        ],
      ],
    ],
    'military' => [
      'template' => 'zsu',
      'link' => build_url('military')
    ],
    'gallery' => [
      'images' => [
        '01' => 'Tytuł 1Zdjęcia',
        '05' => 'Tytuł 2Zdjęcia',
        '06' => 'Tytuł 3Zdjęcia',
        '07' => 'Tytuł 4Zdjęcia',
        '08' => 'Tytuł 5Zdjęcia',
        '09' => 'Tytuł 6Zdjęcia',
        '10' => 'Tytuł 7Zdjęcia',
        '11' => 'Tytuł 8Zdjęcia',
        '12' => 'Tytuł 9Zdjęcia'
      ]
    ],
    'join' => [
      'cards' => [
        'join' => [
          'link' => build_url('form')
        ]
      ]
    ]
  ],
  'pages' => [
    'regulations' => [
      'links' => [
        'statute' => [
          'text' => 'Statute of the "WOMAN\'S POWER" FOUNDATION',
          'url' => 'https://drive.google.com/file/d/1tn709drCz6A9eibIuZcKUZlaKaNB7kZj/view?usp=drive_link'
        ],
        'excerpt' => [
          'text' => 'Excerpt from the NATIONAL COURT REGISTER',
          'url' => 'https://drive.google.com/file/d/1yMWBct_2X3yRRrC54jRdRZU4DGtgHOA8/view?usp=drive_link'
        ],
        'resolution' => [
          'text' => 'Resolution of the Board of the "WOMAN\'S POWER" FOUNDATION',
          'url' => 'https://drive.google.com/file/d/1yP9r6VLdKJ-xjxxCCHYZxUNZwAh9eTKX/view?usp=sharing'
        ],
        'introduction' => [
          'text' => 'Introduction to the financial statement',
          'url' => 'https://drive.google.com/file/d/1FloRl-1ZCy7cyFQIdtJO7hg2fR12WEm6/view?usp=drive_link'
        ],
        'additional' => [
          'text' => 'Additional information to the financial statement',
          'url' => 'https://drive.google.com/file/d/1bRNusiQWcQP6dXG_g4l5-VbBEaCCewN2/view?usp=drive_link'
        ],
        'summary' => [
          'text' => 'Summary of 2023',
          'url' => 'https://drive.google.com/file/d/1rILPhtDQsMu_EC0n43p9_QdYA90qjqDF/view?usp=drive_link'
        ],
      ]
    ],
    'military' => [
      'gallery' => 'wsparcie'
    ],
    'language' => [
      'gallery' => 'language'
    ],
    'art' => [
      'gallery' => 'art'
    ],
    'club' => [
      'gallery' => 'klubseniora'
    ],
    'concerts' => [
      'gallery' => 'mixfriday'
    ]
  ],
  'footer' => [
    'address' => 'ul. Łaciarska 32<br> 50-146 Wrocław',
    'email' => 'silakobietywro@gmail.com',
    'phone' => '+48 510 345 436',
    'krs' => 'KRS 0000968925',
    'nip' => 'NIP 8943186703',
    'regon' => 'REGON 522005281',
  ],
];


