<?php

return [
  'menu' => [
    'home' => 'Start',
    'about' => 'O nas',
    'projects' => 'Projekty',
    'military_support' => 'Pomoc Siłą Zbrojnym',
    'gallery' => 'Galeria',
    'contact' => 'Kontakt',
  ],
  'header' => [
    'donate' => 'Przekaż darowiznę',
    'title' => 'Fundacja',
    'description' => 'Jest to fundusz charytatywny mający na celu wsparcie Ukraińców za granicą',
    'donate_button' => 'Przekaż darowiznę',
  ],
  'seo' =>
  [
    'generic_keywords' => 'Wspieranie kobiet, Fundacja Siła Kobiety',
    'keywords' => 'Wspieranie kobiet, Fundacja Siła Kobiety, Grupa wsparcia dla seniorów, Klub Literacki dla seniorów, Wydarzenia artystyczne i kulturalne, Koncerty Mix Friday, Wsparcie dla Sił Zbrojnych Ukrainy, Społeczność dla seniorów, Spotkania zdrowotne i literackie, Zbiórka funduszy dla seniorów, Aktywności społeczności seniorów, Integracja społeczna osób starszych, Fundacja charytatywna Siła Kobiety, Programy wellness dla seniorów, Wydarzenia Siła Kobiety',
    'description' => 'Fundacja „Siła Kobiety” wspiera kobiety i seniorów, oferując różnorodne programy i wydarzenia, takie jak Klub Literacki, koncerty Mix Friday oraz wsparcie dla Sił Zbrojnych Ukrainy. Dołącz do nas, aby wspólnie budować silną i zintegrowaną społeczność.'
  ],
  'sections' => [
    'about' => [
      'title' => 'O nas',
      'description' => [
        'paragraph1' => 'Najważniejsze projekty z 24 lutego 2022 r. to organizacja ruchu wolontariuszy na rzecz pomocy uchodźcom z Ukrainy.',
        'paragraph2' => 'Pierwszym projektem było stworzenie otwartej pierogarni, w której uczestniczyło ponad 100 kobiet, Ukrainek i Polek oraz kobiet innych narodowości, które przybyły z Ukrainy. Produkty do wyrobu pierogów dostarczali nieodpłatnie przedsiębiorcy Wrocławia, a cały dochód ze sprzedaży pierogów ukraińskich przeznaczono na pomoc uchodźcom z Ukrainy.',
        'paragraph3' => 'Drugim projektem jest świadczenie pomocy społecznej kobietom z dziećmi przybyłym z Ukrainy w okresie adaptacji w innym kraju w sytuacji stresowej, a mianowicie: pomoc psychologiczna, pomoc informacyjna, poradnictwo medyczne, porady prawne, pomoc w poszukiwaniu mieszkania, pomoc humanitarna odprowadzona do Ukrainy.',
        'paragraph4' => 'Trzecim jest stworzenie wsparcia osobom w wieku 40+. Spotkania integracyjne skierowane są do grupy osób w wieku 40+ z naciskiem na seniorów. Każde spotkanie, raz na miesiąc, połączone z gościnnym występem muzyków reprezentujących różne style muzyczne, nawiązujących w swojej twórczości do tradycji polskich i ukraińskich. Każdorazowo w spotkaniach bierze udział od 15 do 40 osób.',
        'paragraph5' => 'Czwarty projekt to organizacja corocznego międzynarodowego festiwalu Wyszywanki na otwartym terenie, który obejmuje około 200 osób z mniejszości narodowych. Na festiwalu przedstawiamy stroje, pieśni i tańce ludowe, warsztaty rękodzieła.',
      ],
      'cards' => [
        'documents' => [
          'title' => 'Dokumenty',
          'description' => 'Sprawozdania',
          'button' => 'Zobacz'
        ],
        'support' => [
          'title' => 'Przekaż wsparcie',
          'description' => 'Twój wkład ma znaczenie',
          'button' => 'Szczegóły'
        ],
      ]
    ],
    'programs' => [
      'title' => 'Projekty',
      'cards' => [
        'polish' => [
          'title' => "Język Polski",
          'button' => 'Pokaż'
        ],
        'art' => [
          'title' => 'Art-terapia dla dzieci i dorosłych',
          'button' => 'Pokaż'
        ],
        'club' => [
          'img' => 'img/klub_literacki.webp',
          'title' => '„Klub Literacki”',
          'button' => 'Pokaż'
        ],
        'concerts' => [
          'img' => 'img/koncerty_main_foto.webp',
          'title' => 'Koncerty',
          'button' => 'Pokaż'
        ],
      ],

    ],
    'military' => [
      'template' => 'zsu',
      'title' => 'Pomoc dla SZU',
      'headline' => 'Bronią nas przed <br><strong>DZIKIMI HORDAMI BARBARZYŃCÓW</strong>',
      'description' => [
        'paragraph' => 'Siły Zbrojne Ukrainy stoją na pierwszej linii frontu w obronie wolności narodu ukraińskiego, suwerenności i prawa do pokojowej przyszłości. Potrzebują teraz naszego wsparcia bardziej niż kiedykolwiek.',
      ],
      'button' => 'Dowiedz się więcej'
    ],
    'gallery' => [
      'template' => 'gallery',
      'title' => 'Galeria',
      'gallery' => 'home'
    ],
    'join' => [
      'title' => 'PRZYŁĄCZ SIĘ DO <span>NAS</span>',
      'description' => 'Twój wkład może mieć ogromny wpływ na życie innych. Pomagając, stajesz się częścią zmiany i dajesz szansę na lepsze jutro.',
      'cards' => [
        'join' => [
          'title' => '',
          'description' => '',
          'button' => 'PRZYŁĄCZ SIĘ!'
        ],
      ]
    ],
  ],
  'pages' => [
    'donate' => [
      'title' => 'Darowizna',
      'seo' => [
        'keywords' => 'darowizna, wsparcie, fundacja, pomoc, bezpłatny, cele statutowe, podatek, ulga podatkowa, PIT, darowizny, filantropia',
        'description' => 'Wsparcie naszych statutowych celów fundacji poprzez dokonanie darowizny. Dowiedz się, jak twoja pieniężna darowizna może zmienić życie i przyczynić się zarówno do twojego dobra, jak i naszej sprawy.'
      ],
      'intro' => [
        'paragraph1' => 'Każda darowizna pieniężna wpłacona na konto naszej fundacji, pomaga nam w realizacji celów statutowych.',
        'paragraph2' => 'Przez cały rok możesz wpłacić darowiznę bezpośrednio na konto Fundacji w Banku <br>PKO BP nr konta: <b>' . $site_account . '</b><br>tytułem: <b>“Darowizna na cele statutowe”</b>',
      ],
      'advice' => [
        'paragraph1' => 'Czy wiesz, że wszystkie darowizny podlegają odpisom podatkowym: dla osób fizycznych limit do 6% od dochodu, dla osób prawnych limit do 10% od dochodu.',
        'paragraph2' => 'Dokonanie wpłaty bezpośrednio na konto Fundacji pozwala na skorzystanie z „ulgi za darowizny” przy rozliczaniu PIT. W tytule przelewu należy wpisać „Darowizna na cele statutowe”. Następnie, podczas rozliczania się z urzędem skarbowym, wystarczy wypełnić odpowiednie rubryki w formularzu PIT-37, PIT-36 lub PIT-28 i dodać załącznik PIT/O. Prosimy zachować dowód wpłaty.',
        'paragraph3' => 'Dziękujemy, że nas wspierasz Zgodnie z założeniami Fundacji “Siła kobiety”, wszystkie darowizny idą na cele statutowe. Chciałbyś dowiedzieć się na jakie konkretne działania Fundacji przeznaczona jest Twoja darowizna? <a class="underConstraction" href="#">Napisz do nas!</a>'
      ],
      'outro' => [
        'paragraph3' => 'Przekazując darowiznę, przekazujesz nadzieję i wsparcie dla tych, którzy jej najbardziej potrzebują. Razem możemy osiągnąć wiele!'
      ]
    ],
    'regulations' => [
      'title' => 'Regulacje/Oświadczenia',
      'seo' => [
        'keywords' => 'regulacje, oświadczenia, statut, rejestr sądowy, uchwała, sprawozdanie finansowe, podsumowanie, fundacja, organizacja, dokumenty prawne',
        'description' => 'Dostęp do ważnych dokumentów prawnych i oświadczeń Fundacji "SIŁA KOBIETY", w tym statutu, wyciągu z rejestru sądowego, uchwały zarządu, wprowadzenia do sprawozdania finansowego, dodatkowych informacji i podsumowania działań.'
      ],
      'links' => [
        'statute' => [
          'text' => 'Statut FUNDACJI „SIŁA KOBIETY”'
        ],
        'excerpt' => [
          'text' => 'Wycjąg z KRAJOWEGO REJESTRU SĄDOWEGO'
        ],
        'resolution' => [
          'text' => 'Uchwała Zarządu FUNDACJI „SIŁA KOBIETY”'
        ],
        'introduction' => [
          'text' => 'Wprowadzenie do sprawozdania finansowego'
        ],
        'additional' => [
          'text' => 'Dodatkowe informacje do sprawozdania finansowego'
        ],
        'summary' => [
          'text' => 'Podsumowanie 2023 roku'
        ]
      ]
    ],
    'language' => [
      'title' => 'Język Polski',
      'seo' => [
        'keywords' => 'język polski, szkoła językowa, integracja, wymiana kulturowa, kultura polska, kursy językowe, obcokrajowcy, imigranci, uchodźcy, integracja społeczna',
        'description' => 'Odkryj korzyści płynące z nauki języka polskiego i dołącz do naszej szkoły językowej. Nasze zajęcia w otwartym formacie ułatwiają integrację, wymianę kulturową i komunikację z polską społecznością.'
      ],
      'intro' => [
        'paragraph1' => 'Znajomość języka polskiego umożliwia obcokrajowcom pełniejsze uczestnictwo w życiu społecznym, budowanie relacji i integrację z lokalną społecznością. Dzięki umiejętności komunikacji w języku ojczystym obcokrajowiec może lepiej zrozumieć kulturę, tradycje i zwyczaje polskie.',
        'paragraph2' => 'Znajomość języka polskiego daje obcokrajowcom większą niezależność i pewność siebie w codziennych sytuacjach życiowych, takich jak zakupy, korzystanie z usług publicznych czy poszukiwanie mieszkania. Dzięki temu mogą oni łatwiej osiedlić się i prowadzić satysfakcjonujące życie w Polsce.',
        'paragraph3' => 'Szkoła językowa działa w formule otwartej, co oznacza, że w każdej chwili można do niej dołączyć. Bariera językowa stanowi wysoką poprzeczkę w integracji osób z Ukrainy z nowym środowiskiem, ale jak wynika z raportów międzynarodowych organizacji zajmujących się imigrantami i uchodźcami, wsparcie językowe jest niezwykle ważne w procesie integracji i asymilacji nowych obywateli. Poprzez organizację zajęć językowych chcemy wesprzeć włączanie uczestników w społeczność polską, zależy nam na tym, by poczuli, że oswajają otaczającą ich rzeczywistość i byli jak najmniej zagubieni w obcym kraju.',
        'paragraph4' => 'Facylitację spotkań powierzamy osobie z Ukrainy, która ma kilkuletnie doświadczenie w prowadzeniu zajęć z języka polskiego, ale też wieloletnie doświadczenie życia w Polsce, wie w jakich sytuacjach najczęściej znajdują się osoby, które przybywają do Polski i jakiego słownictwa potrzebują, by móc sobie poradzić.',
        'paragraph5' => 'Szkoła językowa działać będzie w formule otwartej, co oznacza, że w każdej chwili można do niej dołączyć.',
        'paragraph6' => 'Zapisy można dokonać telefonicznie.'
      ]
    ],
    'art' => [
      'title' => 'Art-Terapia',
      'seo' =>
      [
        'keywords' => 'terapia sztuki, terapia dla dzieci, terapia dla dorosłych, terapia kreatywna, rozwój emocjonalny, jakość życia, wsparcie emocjonalne, integracja międzypokoleniowa',
        'description' => 'Zapoznaj się z terapeutycznymi korzyściami sztuki dla dzieci i dorosłych. Nasze warsztaty sztuki wspierają rozwój emocjonalny, dobre samopoczucie i jakość życia poprzez kreatywny proces twórczy.'
      ],
      'intro' => [
        'paragraph1' => '<b>Dla dzieci i dorosłych</b>',
        'paragraph2' => 'Jedną z kluczowych zalet art-terapii dla dzieci i dorosłych jest jej uniwersalność i dostępność. Niezależnie od wieku, doświadczenia czy umiejętności artystycznych, każdy może skorzystać z korzyści płynących z twórczego procesu terapeutycznego. Art-terapia jest także formą terapii niewerbalnej, co oznacza, że pozwala na wyrażanie się w sposób niemieszczący się w ramach słów.',
        'paragraph3' => 'W rezultacie, art-terapia stanowi skuteczne narzędzie wspierające rozwój emocjonalny, samopoczucie i jakość życia zarówno dzieci, jak i dorosłych. Poprzez sztukę, można otworzyć drzwi do głębokiej pracy nad sobą i leczenia, pomagając jednocześnie w odkrywaniu piękna oraz radości płynących z kreatywności.',
        'paragraph4' => 'Sztuka jest zarówno łącznikiem międzyludzkich relacji, jak również narzędziem pracy, pozwalającym na otwartą i swobodną ekspresję i wyrażenie swoich emocji i potrzeb. Sztuka jest także tym, co zbliża nasze kraje, stąd warsztaty z rysunku będą pomostem w międzynarodowym porozumieniu.',
        'paragraph5' => 'Celem zajęć jest przede wszystkim integracja grup międzypokoleniowych, ale także wsparcie ich rozwoju i kompetencji międzykulturowej.',
        'paragraph6' => 'Ma to pomóc w radzeniu sobie z emocjami związanymi z wojną w Ukrainie. Warsztaty przeznaczone są dla wszystkich.',
        'paragraph7' => 'Zajęcia będą się odbywały raz w tygodniu.'
      ]
    ],
    'club' => [
      'title' => 'Klub Literacki',
      'seo' => [
        'keywords' => 'klub literacki, spotkania kulturalne, integracja społeczna, wsparcie dla seniorów, kultura literacka, wymiana doświadczeń, rozmowy, muzyka, historie życia',
        'description' => 'Dołącz do naszego klubu literackiego, gdzie seniorzy mogą spotkać się, rozmawiać, dzielić się swoimi historiami życia i cieszyć się towarzystwem innych osób.'
      ],
      'intro' => [
        'paragraph1' => 'Grupa skierowana jest w szczególności do seniorów, którzy niezwykle potrzebują wspierających relacji w obliczu utraty wszystkiego, na czym im zależało, za czym stali murem.',
        'paragraph2' => 'Teraz często samotni, potrzebują wspierającej społeczności, w ramach której mogą podzielić się swoimi historiami, opowiedzieć o tym, za czym tęsknią, zintegrować i zrelaksować przy muzyce.',
        'paragraph3' => 'Tematyka spotkań dotyczy zdrowia, historii, kultury i literatury. Ponadto osoby starsze mogą podzielić się swoimi poglądami i doświadczeniami, a co najważniejsze, poznać osoby starsze w Polsce i nawiązać z nimi dobre relacje.',
        'paragraph4' => 'Spotkania klubu co czwartek o 17.00.',
        'paragraph5' => 'Spotkania odbywają się także na świeżym powietrzu. Klub jest otwarty dla wszystkich zainteresowanych seniorów.'
      ]
    ],
    'concerts' => [
      'title' => 'Koncerty',
      'seo' => [
        'keywords' => 'koncerty, muzyczne spotkania, relaks, kultura, muzyka na żywo, wydarzenia kulturalne, aktywności społeczne, integracja społeczna',
        'description' => 'Zapraszamy na nasze koncerty i muzyczne spotkania w ramach projektu "Mix Friday". Odkryj radość i relaks podczas koncertów o różnorodnym repertuarze.'
      ],
      'intro' => [
        'paragraph1' => 'Muzyczne spotkania „Mix Friday”',
        'paragraph2' => 'Zapraszamy na koncerty w ramach projektu „Mix Friday”. <br /> Czekamy na wszystkich, którzy chcą u nas odpocząć na ul. Łaciarskiej 32 <br /> w Art-cafe Świetlica o godzinie 18.00 w każdy piątek.'
      ]
    ],
    'military' => [
      'title' => 'Wsparcie dla Sił Zbrojnych Ukrainy',
      'seo' =>
      [
        'keywords' => 'wsparcie, Siły Zbrojne Ukrainy, pomoc medyczna, wsparcie wojskowe, wsparcie psychologiczne, pomoc humanitarna, weterani wojenni, konflikt na Ukrainie',
        'description' => 'Zapoznaj się z możliwościami wsparcia Sił Zbrojnych Ukrainy. Fundacja "Siła Kobiet" oferuje pomoc medyczną, wsparcie wojskowe, psychologiczne i humanitarne dla żołnierzy oraz ich rodzin.'
      ],
      'intro' => [
        'paragraph1' => 'Oni nas bronią przed <br><strong>DZIKIMI HORDAMI BARBARZYŃCÓW</strong>',
        'paragraph2' => 'Siły Zbrojne Ukrainy stoją na pierwszej linii frontu, broniąc wolności ukraińskiego narodu, suwerenności oraz prawa do spokojnej przyszłości. Potrzebują naszego wsparcia bardziej niż kiedykolwiek.',
      ],
      'advice' => [
        'paragraph3' => 'Fundacja "Siła Kobiety" zdecydowanie popiera siły zbrojne Ukrainy w ich walce o suwerenność i wolność. Oto kilka sposobów, w jaki nasza fundacja pomaga:',
        'paragraph4' => '<ul>
          <li>Zbiórka funduszy na wsparcie medyczne dla rannych ukraińskich żołnierzy.</li>
          <li>Zakup i dostarczanie sprzętu wojskowego oraz lekarstw dla jednostek na froncie.</li>
          <li>Organizacja wydarzeń charytatywnych na rzecz rodzin poległych i rannych żołnierzy.</li>
          <li>Wsparcie psychologiczne dla weteranów wojennych oraz ich rodzin.</li>
          <li>Dystrybucja pomocy humanitarnej w regionach dotkniętych konfliktem.</li>
          <li>Promowanie świadomości społecznej na temat sytuacji na Ukrainie oraz potrzeb jej sił zbrojnych.</li>
        </ul>'
      ]
    ],
    'form' => [
      'seo' => [
        'keywords' => 'skontaktuj się z nami, dołącz do nas',
        'description' => 'Skontaktuj się z nami w sprawie zapytań lub dołącz do naszej społeczności.'
      ],
      'title' => 'Skontaktuj się z nami',
      'fields' => [
        'name' => 'Twoje imię',
        'email' => 'Twój email',
        'message' => 'Wiadomość',
        'captcha' => 'Ile to jest 3 + 4?', // Added captcha label
        'submit' => 'Wyślij'
      ],
      'messages' => [
        'captcha' => 'Niepoprawna CAPTCHA!',
        'email' => 'Nieprawidłowy format email.',
        'fail' => 'Przepraszamy, wystąpił błąd podczas wysyłania wiadomości. Proszę spróbuj ponownie później. Albo <a href="mailto:silakobietywro@gmail.com" class="button">napisz list</a>',
        'success' => 'Dziękujemy za kontakt. Skontaktujemy się z Tobą wkrótce.',
        'home' => 'Wróć do strony głównej!'
      ]
    ]
  ],
  'footer' => [
    'quote' => 'Podejmując Wyjątkowe Wyzwania,<br> Tworzymy Wyjątkową Przyszłość',
    'account_number' => 'Numer konta:',
    'useful_links' => 'Przydatne linki',
    'contact' => 'Bądźmy w kontakcie',
    'address' => 'ul. Łaciarska 32<br> 50-146 Wrocław',
    'email' => 'silakobietywro@gmail.com',
    'phone' => '+48 510 345 436',
    'krs' => 'KRS 0000968925',
    'nip' => 'NIP 8943186703',
    'regon' => 'REGON 522005281',
  ],
  '404' => [
    'title' => 'Strona nie znaleziona',
    'description' => 'Przepraszamy, ale żądana strona jest niedostępna lub nie istnieje. Być może potrzebujesz wrócić na stronę główną?',
    'button' => 'Przejdź do strony głównej',
  ]
];
