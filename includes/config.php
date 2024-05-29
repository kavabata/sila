<?php
include('functions.php');
loadEnv('.env');
session_start();

if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
  if (in_array($lang, ['en', 'pl', 'ua'])) {
    $_SESSION['lang'] = $lang;
  }
}
$lang = $_SESSION['lang'] ?? 'pl';
$pageName = isset($_GET['page']) ? $_GET['page'] : '';

function build_url($url = '')
{
  global $lang;
  return $lang != 'pl' ? "/{$lang}/{$url}" : "/{$url}";
}

$title = "Siła Kobiety";
$site_name = "Siła Kobiety";
$site_account = "22 1020 5242 0000 2002 0560 3370";

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
          'img' => '/img/gallery/jezyk_polski.webp',
          'link' => build_url('language')
        ],
        'art' => [
          'img' => '/img/gallery/art_2.webp',
          'link' => build_url('art')
        ],
        'club' => [
          'img' => '/img/gallery/klub_literacki.webp',
          'link' => build_url('club')
        ],
        'concerts' => [
          'img' => '/img/gallery/koncerty_main_foto.webp',
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
          'url' => 'https://drive.google.com/file/d/1tn709drCz6A9eibIuZcKUZlaKaNB7kZj/view?usp=drive_link'
        ],
        'excerpt' => [
          'url' => 'https://drive.google.com/file/d/1yMWBct_2X3yRRrC54jRdRZU4DGtgHOA8/view?usp=drive_link'
        ],
        'resolution' => [
          'url' => 'https://drive.google.com/file/d/1yP9r6VLdKJ-xjxxCCHYZxUNZwAh9eTKX/view?usp=sharing'
        ],
        'introduction' => [
          'url' => 'https://drive.google.com/file/d/1FloRl-1ZCy7cyFQIdtJO7hg2fR12WEm6/view?usp=drive_link'
        ],
        'additional' => [
          'url' => 'https://drive.google.com/file/d/1bRNusiQWcQP6dXG_g4l5-VbBEaCCewN2/view?usp=drive_link'
        ],
        'summary' => [
          'url' => 'https://drive.google.com/file/d/1rILPhtDQsMu_EC0n43p9_QdYA90qjqDF/view?usp=drive_link'
        ],
      ]
    ],
    'millitary' => [
      'gallery' => [
        'military_1' => 'Hi',
        'military_2' => 'Hi',
      ]
    ],
    'form' => []
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

$translations = include "lang/{$lang}.php";
$translations = array_replace_recursive($translations, $site_config);
