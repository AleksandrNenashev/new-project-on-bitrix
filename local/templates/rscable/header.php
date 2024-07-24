<?php B_PROLOG_INCLUDED === true || die();
/**
 * @global CMain $APPLICATION
 */

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Application;

// категории и подкатегории для модального окна каталога
$categories = [
    [
        'title' => 'Кабели силовые',
        'url' => '/catalog/',
    ],
    [
        'title' => 'Кабели информационные',
        'url' => '/catalog/',
    ],
    [
        'title' => 'Подбор кабеля',
        'url' => '/catalog/',
    ],
    [
        'title' => 'Спецкабель',
        'url' => '/catalog/',
    ],
    [
        'title' => 'Кабели судовые',
        'url' => '/catalog/',
    ],
    [
        'title' => 'Кабели монтажные',
        'url' => '/catalog/',
    ],
    [
        'title' => 'Кабели сварочные',
        'url' => '/catalog/',
    ],
    [
        'title' => 'Кабели самонесущие',
        'url' => '/catalog/',
    ],
    [
        'title' => 'Кабели Витая пара',
        'url' => '/catalog/',
    ],
    [
        'title' => 'Кабели высоковольтные',
        'url' => '/catalog/',
    ],
//  [
//    'title' => 'Провода',
//    'url' => '/catalog/',
//  ],
];
$subCategories = [
    /** кабели силовые */
    [
        [
            'category' => [
                'title' => 'Изоляция и оболочка',
                'url' => '/catalog/',
            ],
            'items' => [
                [
                    'title' => 'С пластмассовой изоляцией',
                    'url' => '/catalog/',],
                [
                    'title' => 'С бумажной изоляцией БПИ',
                    'url' => '/catalog/',],
                [
                    'title' => 'С резиновой изоляцией',
                    'url' => '/catalog/',],
                [
                    'title' => 'С ПВХ оболочкой',
                    'url' => '/catalog/',],
                [
                    'title' => 'Безгалогенный',
                    'url' => '/catalog/',],
                [
                    'title' => 'С изоляцией из сшитого полиэтилена',
                    'url' => '/catalog/',],
                [
                    'title' => 'FRLS',
                    'url' => '/catalog/',],
            ],
        ],
        [
            'category' => ['title' => 'Часто ищут', 'url' => '#'],
            'items' => [
                ['title' => 'Экранированные', 'url' => '/catalog/',],
                ['title' => 'Бронированные', 'url' => '/catalog/',],
                ['title' => 'Огнестойкие', 'url' => '/catalog/',],
                ['title' => 'Негорючие', 'url' => '/catalog/',],
                ['title' => 'Морозостойкие', 'url' => '/catalog/',],
                ['title' => 'Плоские', 'url' => '/catalog/',],
                ['title' => 'Гибкие', 'url' => '/catalog/',],
                ['title' => 'С тросом', 'url' => '/catalog/',],
                ['title' => 'Сварочные', 'url' => '/catalog/',],
                ['title' => 'Без брони', 'url' => '/catalog/',],
                ['title' => 'Для питания', 'url' => '/catalog/',],
                ['title' => 'Для проводки', 'url' => '/catalog/',],
                ['title' => 'Для освещения', 'url' => '/catalog/',],],
        ],
        [
            'category' => ['title' => 'Популярные марки ', 'url' => '/catalog/',],
            'items' => [
                ['title' => 'ВВГНГ', 'url' => '/catalog/',],
                ['title' => 'ВВГ', 'url' => '/catalog/',],
                ['title' => 'ВВГнг(А)-LS', 'url' => '/catalog/',],
                ['title' => 'АВВГнг(А)-LS', 'url' => '/catalog/',],
                ['title' => 'ВВГ-Пнг(А)', 'url' => '/catalog/',],
                ['title' => 'ВВГ-П', 'url' => '/catalog/',],
                ['title' => 'АВВГ', 'url' => '/catalog/',],
                ['title' => 'ВБбШв', 'url' => '/catalog/',],
                ['title' => 'ВБШвнг(А)-LS', 'url' => '/catalog/',],
                ['title' => 'NUM', 'url' => '/catalog/',],],
        ],
        [
            'category' => ['title' => 'По количеству жил', 'url' => '/catalog/',],
            'items' => [
                ['title' => 'Одножильные', 'url' => '/catalog/',],
                ['title' => 'Двухжильные', 'url' => '/catalog/',],
                ['title' => 'Трехжильные', 'url' => '/catalog/',],
                ['title' => 'Четырехжильные', 'url' => '/catalog/',],
                ['title' => 'Пятижильные', 'url' => '/catalog/',],
            ],
        ],
        [
            'category' => ['title' => 'Материал жилы', 'url' => '/catalog/',],
            'items' => [
                ['title' => 'Алюминиевые силовые', 'url' => '/catalog/',],
                ['title' => 'Медные силовые', 'url' => '/catalog/',],
            ],
        ],
        [
            'category' => ['title' => 'По напряжению ', 'url' => '/catalog/',],
            'items' => [
                ['title' => '1 кВ', 'url' => '/catalog/',],
                ['title' => '6 кВ', 'url' => '/catalog/',],
                ['title' => '10 кВ', 'url' => '/catalog/',],
                ['title' => '35 кВ', 'url' => '/catalog/',],
                ['title' => '110 кВ', 'url' => '/catalog/',],],
        ],
    ],
    /** кабели информационные */
    [
        [
            'category' => ['title' => 'Контрольные', 'url' => '/catalog/',],
            'items' => [
                ['title' => 'Все контрольные кабели', 'url' => '/catalog/',],
                ['title' => 'КВВГ', 'url' => '/catalog/',],
                ['title' => 'КВВГЭ', 'url' => '/catalog/',],
                ['title' => 'КВВГнг(А)', 'url' => '/catalog/',],
                ['title' => 'КВВГЭнг(А)-LS', 'url' => '/catalog/',],
                ['title' => 'КВВГнг(А)-LS', 'url' => '/catalog/',],
                ['title' => 'КВБбШв', 'url' => '/catalog/',],
                ['title' => 'КППГнг(А)-HF', 'url' => '/catalog/',],
                ['title' => 'КВБбШвнг(А)', 'url' => '/catalog/',],
            ],
        ],
        [
            'category' => ['title' => 'Управления', 'url' => '/catalog/',],
            'items' => [
                ['title' => 'Все кабели управления', 'url' => '/catalog/',],
                ['title' => 'КУПЭВ', 'url' => '/catalog/',],
                ['title' => 'КПВ', 'url' => '/catalog/',],
                ['title' => 'КУГВВ', 'url' => '/catalog/',],
                ['title' => 'КУПВ', 'url' => '/catalog/',],
                ['title' => 'КУПР', 'url' => '/catalog/',],
                ['title' => 'КУПЭВнг(А)-LS-ХЛ', 'url' => '/catalog/',],
            ],
        ],
        [
            'category' => ['title' => 'Часто ищут', 'url' => '/catalog/',],
            'items' => [
                ['title' => 'Высокочастотные', 'url' => '/catalog/',],
                ['title' => 'Для компьютерных сетей', 'url' => '/catalog/',],
                ['title' => 'Радиочастотные', 'url' => '/catalog/',],
                ['title' => 'Кабели связи', 'url' => '/catalog/',],
                ['title' => 'Витая пара', 'url' => '/catalog/',],
                ['title' => 'Сетевые', 'url' => '/catalog/',],
                ['title' => 'Слаботочные', 'url' => '/catalog/',],
                ['title' => 'Симметричные', 'url' => '/catalog/',],
                ['title' => 'Антенные', 'url' => '/catalog/',],
                ['title' => 'Кабели FTP', 'url' => '/catalog/',],
                ['title' => 'Кабели UTP', 'url' => '/catalog/',],
            ],
        ],
    ],
    /** подбор кабеля */
    [
        [
            'category' => ['title' => 'По назначению', 'url' => '#'],
            'items' => [
                ['title' => 'Шахтные', 'url' => '#'],
                ['title' => 'Монтажные', 'url' => '#'],
                ['title' => 'Универсальные', 'url' => '#'],
                ['title' => 'Автомобильные', 'url' => '#'],
                ['title' => 'Сварочные', 'url' => '#'],
                ['title' => 'Подводные', 'url' => '#'],
                ['title' => 'Для пожарной и охранной сигнализации', 'url' => '#'],
                ['title' => 'Для сигнализации и блокировки', 'url' => '#'],
                ['title' => 'Для автоматизации систем управления', 'url' => '#'],
                ['title' => 'Водопогружные', 'url' => '#'],
                ['title' => 'Высоковольтные', 'url' => '#'],
                ['title' => 'Для локальной сети', 'url' => '#'],
            ],
        ],
        [
            'category' => ['title' => 'По свойствам', 'url' => '/catalog/',],
            'items' => [
                ['title' => 'Медные', 'url' => '/catalog/',],
                ['title' => 'Алюминиевые', 'url' => '/catalog/',],
                ['title' => 'Бронированные', 'url' => '/catalog/',],
                ['title' => 'Экранированные', 'url' => '/catalog/',],
                ['title' => 'Неэкранированные', 'url' => '/catalog/',],
                ['title' => 'Кабели с тросом', 'url' => '/catalog/',],
                ['title' => 'Водопогружные', 'url' => '/catalog/',],
                ['title' => 'Самонесущие', 'url' => '/catalog/',],
            ],
        ],
        [
            'category' => ['title' => 'По исполнению', 'url' => '/catalog/',],
            'items' => [
                ['title' => 'Огнестойкие', 'url' => '/catalog/',],
                ['title' => 'Морозостойкие', 'url' => '/catalog/',],
                ['title' => 'Не распространяющие горение', 'url' => '/catalog/',],
                ['title' => 'Безгалогеновые', 'url' => '/catalog/',],
                ['title' => 'Плоские', 'url' => '/catalog/',],
                ['title' => 'Герметичные', 'url' => '/catalog/',],
                ['title' => 'Водонепроницаемые', 'url' => '/catalog/',],
                ['title' => 'Тропические', 'url' => '/catalog/',],
            ],
        ],
        [
            'category' => ['title' => 'По количеству жил', 'url' => '/catalog/',],
            'items' => [
                ['title' => 'Одножильные', 'url' => '/catalog/',],
                ['title' => 'Двухжильные', 'url' => '/catalog/',],
                ['title' => 'Трехжильные', 'url' => '/catalog/',],
                ['title' => 'Четырехжильные', 'url' => '/catalog/',],
            ],
        ],
        [
            'category' => ['title' => 'По зоне прокладки', 'url' => '/catalog/',],
            'items' => [
                ['title' => 'Для воздушной прокладки', 'url' => '/catalog/',],
                ['title' => 'Для внутренней прокладки', 'url' => '/catalog/',],
                ['title' => 'Для внешней прокладки', 'url' => '/catalog/',],
                ['title' => 'Для подземной прокладки', 'url' => '/catalog/',],
                ['title' => 'Подобрать по другим', 'url' => '/catalog/',],
            ],
        ],
    ],
    /** спец кабель */
    [
        [
            'category' => [
                'title' => 'Кабель для Минобороны РФ',
                'url' => '/catalog/',
            ],
        ],
    ],
    /** кабели судовые */
    [
        [
            'category' => ['title' => 'Все судовые кабели', 'url' => '/catalog/',],
        ],
        [
            'category' => ['title' => 'КМПВ', 'url' => '/catalog/',],
        ],
        [
            'category' => ['title' => 'КМПВЭ', 'url' => '/catalog/',],
        ],
        [
            'category' => ['title' => 'КМПЭВ', 'url' => '/catalog/',],
        ],
        [
            'category' => ['title' => 'КМПЭВЭ', 'url' => '/catalog/',],
        ],
        [
            'category' => ['title' => 'КМПВЭВ', 'url' => '/catalog/',],
        ],
        [
            'category' => ['title' => 'КНР', 'url' => '/catalog/',],
        ],
        [
            'category' => ['title' => 'КНРЭ', 'url' => '/catalog/',],
        ],
        [
            'category' => ['title' => 'КСНРТЭл', 'url' => '/catalog/',],
        ],
        [
            'category' => ['title' => 'КСРТнг(А)', 'url' => '/catalog/',],
        ],
        [
            'category' => ['title' => 'МРШМ', 'url' => '/catalog/',],
        ],
        [
            'category' => ['title' => 'МРШНЭ', 'url' => '/catalog/',],
        ],
        [
            'category' => ['title' => 'НГРШМ', 'url' => '/catalog/',],
        ],
        [
            'category' => ['title' => 'НРШМ', 'url' => '/catalog/',],
        ],
        [
            'category' => ['title' => 'НРШМЭнг(С)-FRHF', 'url' => '/catalog/',],
        ],
        [
            'category' => ['title' => 'КМПВнг(А)-LS', 'url' => '/catalog/',],
        ],
        [
            'category' => ['title' => 'КМПВЭВнг(А)-LS', 'url' => '/catalog/',],
        ],
        [
            'category' => ['title' => 'КМПВЭнг(А)-LS', 'url' => '/catalog/',],
        ],
        [
            'category' => ['title' => 'КМПВВЭВнг(А)-FRLS', 'url' => '/catalog/',],
        ],
        [
            'category' => ['title' => 'КМПВВЭнг(А)-FRLS', 'url' => '/catalog/',],
        ],
        [
            'category' => ['title' => 'КМПВЭВнг(А)-FRLS', 'url' => '/catalog/',],
        ],
        [
            'category' => ['title' => 'КМПВЭВЭВнг(А)-FRLS', 'url' => '/catalog/',],
        ],
        [
            'category' => ['title' => 'КМПЭВнг(А)-LS', 'url' => '/catalog/',],
        ],
        [
            'category' => ['title' => 'КМПЭВЭВнг(А)-LS', 'url' => '/catalog/',],
        ],
    ],
    /** кабели монтажные */
    [
        ['category' => ['title' => 'Все монтажные кабели', 'url' => '#'],],
        ['category' => ['title' => 'КУПсЭВнг(А)-FRLS', 'url' => '#'],],
        ['category' => ['title' => 'КУПсЭВнг(А)-LS', 'url' => '#'],],
        ['category' => ['title' => 'КУПсЭПнг(А)-FRHF', 'url' => '#'],],
        ['category' => ['title' => 'КУПсЭПнг(А)-HF', 'url' => '#'],],
        ['category' => ['title' => 'КУПсЭПнг(А)-HF-ХЛ', 'url' => '#'],],
        ['category' => ['title' => 'КЭВВнг(А)-LS', 'url' => '#'],],
        ['category' => ['title' => 'КЭВЭВнг(А)-LS', 'url' => '#'],],
    ],
    /** кабели сварочные */
    [
        ['category' => ['title' => 'Все сварочные кабели', 'url' => '#'],],
        ['category' => ['title' => 'КГ', 'url' => '#'],],
        ['category' => ['title' => 'КГ-ХЛ', 'url' => '#'],],
        ['category' => ['title' => 'КГН', 'url' => '#'],],
        ['category' => ['title' => 'КОГ1', 'url' => '#'],],
        ['category' => ['title' => 'КОГ1-ХЛ', 'url' => '#'],],
    ],
    /** кабели самонесущие */
    [
        ['category' => ['title' => 'Все самонесущие кабели', 'url' => '/catalog/',],],
        ['category' => ['title' => 'АПвПТи', 'url' => '/catalog/',],],
        ['category' => ['title' => 'АПвПгТп', 'url' => '/catalog/',],],
    ],
    /** кабели витая пара */
    [
        [
            'category' => ['title' => 'Все кабели Витая пара', 'url' => '#'],
            'items' => [
                ['title' => 'КИПвЭВнг(А)-LS', 'url' => '#'],
                ['title' => 'КСПвЭнг(А)-HF', 'url' => '#'],
                ['title' => 'Лоутокс КПСВВнг(А)-LSLTx', 'url' => '#'],
                ['title' => 'СПЕЦЛАН FTP-5нг(А)-FRHF', 'url' => '#'],
                ['title' => 'СПЕЦЛАН UTP-3нг(А)-FRLSLTx', 'url' => '#'],
            ],
        ],
        [
            'category' => ['title' => 'Витая пара категории 5е', 'url' => '#'],
            'items' => [
                ['title' => 'КВПГЭфнг(А)-5e-БГ', 'url' => '#'],
                ['title' => 'КВПМЭКГнг(А)-5е-БГ', 'url' => '#'],
                ['title' => 'КВПМЭКнг(А)-5е-БГ', 'url' => '#'],
                ['title' => 'КВПМЭнг(А)-5е-БГ', 'url' => '#'],
                ['title' => 'КВПМЭУКГнг(А)-5е-БГ', 'url' => '#'],
                ['title' => 'КВПМЭУКнг(А)-5е-БГ', 'url' => '#'],
                ['title' => 'КВПМЭУнг(А)-5е-БГ', 'url' => '#'],
                ['title' => 'Лоутокс КВПнг(C)-LSLTx-5e', 'url' => '#'],
                ['title' => 'СПЕЦЛАН F/UTP Cat 5e PVC', 'url' => '#'],
            ],
        ],
        [
            'category' => ['title' => 'Витая пара категории 6', 'url' => '#'],
            'items' => [
                ['title' => 'КВПЭГ-6нг(А)-БГ', 'url' => '#'],
                ['title' => 'КВПЭГКГ-6нг(А)-БГ', 'url' => '#'],
                ['title' => 'КВПЭГУ-6нг(А)-БГ', 'url' => '#'],
                ['title' => 'КВПЭГУКГ-6нг(А)-БГ', 'url' => '#'],
            ],
        ],
        [
            'category' => ['title' => 'Витая пара категории 7', 'url' => '#'],
            'items' => [
                ['title' => 'КВПЭ-7нг(А)-БГ', 'url' => '#'],
                ['title' => 'КВПЭУ-7нг(А)-БГ', 'url' => '#'],
            ],
        ],
        [
            'category' => ['title' => 'Витая пара категории 6А', 'url' => '#'],
            'items' => [
                ['title' => 'КВПМЭ-6Анг(А)-БГ', 'url' => '#'],
                ['title' => 'КВПМЭКГ-6Анг(А)-БГ', 'url' => '#'],
                ['title' => 'КВПМЭУ-6Анг(А)-БГ', 'url' => '#'],
                ['title' => 'КВПМЭУКГ-6Анг(А)-БГ', 'url' => '#'],
                ['title' => 'КВПЭКГнг(А)-6A-БГ', 'url' => '#'],
                ['title' => 'КВПЭнг(А)-6A-БГ', 'url' => '#'],
            ],
        ],
        [
            'category' => ['title' => 'Витая пара категории 7А', 'url' => '#'],
            'items' => [
                ['title' => 'КВПЭ-7Aнг(А)-БГ', 'url' => '#'],
                ['title' => 'КВПЭКГ-7Aнг(А)-БГ', 'url' => '#'],
                ['title' => 'КВПЭУ-7Aнг(А)-БГ', 'url' => '#'],
                ['title' => 'КВПЭУКГ-7Aнг(А)-БГ', 'url' => '#'],
            ],
        ],
    ],
    /** кабели высоковольтные */
    [
        [
            'category' => ['title' => 'Все высоковольтные кабели', 'url' => '/catalog/',],
            'items' => [
                ['title' => '64 кВ', 'url' => '/catalog/',],
                ['title' => '110 кВ', 'url' => '/catalog/',],
                ['title' => '220 кВ', 'url' => '/catalog/',],
            ],
        ],
        [
            'category' => ['title' => 'С алюминиевой жилой', 'url' => '/catalog/',],
            'items' => [
                ['title' => 'АПвВ', 'url' => '/catalog/',],
                ['title' => 'АПвВнг(А)', 'url' => '/catalog/',],
                ['title' => 'АПвКП2г', 'url' => '/catalog/',],
                ['title' => 'АПвКПг', 'url' => '/catalog/',],
                ['title' => 'АПвПг', 'url' => '/catalog/',],
                ['title' => 'АПвПу2г', 'url' => '/catalog/',],
                ['title' => 'АПвПуг', 'url' => '/catalog/',],
            ],
        ],
        [
            'category' => ['title' => 'С медной жилой', 'url' => '/catalog/',],
            'items' => [
                ['title' => 'ПвВ', 'url' => '/catalog/',],
                ['title' => 'ПвВнг(А)', 'url' => '/catalog/',],
                ['title' => 'ПвВнг(А)-LS', 'url' => '/catalog/',],
                ['title' => 'ПвКПг', 'url' => '/catalog/',],
                ['title' => 'ПвП2г', 'url' => '/catalog/',],
                ['title' => 'ПвПг', 'url' => '/catalog/',],
                ['title' => 'ПвПнг(А)-HF', 'url' => '/catalog/',],
            ],
        ],
    ],
];

// массив товаров для тестирования
$fakeProducts = [
    [
        'title' => 'Кабель NYM-J 3х1,5, 1 кВ',
        'code' => '95342345',
        'url' => '/product/',
        'price' => '5 000',
        'priceOld' => '6 400',
        'images' => [
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_1.jpg',
                'alt' => 'img description',
            ],
        ],
        'isInStock' => true,
        'isRecommended' => true,
        'isOrderAble' => false,
        'isHit' => true,
        'parameters' => [
            ['key' => 'Экран', 'value' => 'Нет',],
            ['key' => 'Холодостойкий', 'value' => 'Нет',],
            ['key' => 'Материал жилы', 'value' => 'Медь',],
            ['key' => 'Материал изоляции', 'value' => 'ПВХ',],
            ['key' => 'Гибкий', 'value' => 'Нет',],
            ['key' => 'Количество жил', 'value' => '5',],
        ],
    ],
    [
        'title' => 'Кабель NYM-J 3х1,5, 1 кВ',
        'code' => '95342345',
        'url' => '/product/',
        'price' => '5 000',
        'priceOld' => 0,
        'images' => [
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_3.jpg',
                'alt' => 'img description',
            ],
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_2.jpg',
                'alt' => 'img description',
            ],
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_4.jpg',
                'alt' => 'img description',
            ],
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_1.jpg',
                'alt' => 'img description',
            ],
        ],
        'isInStock' => true,
        'isRecommended' => true,
        'isOrderAble' => false,
        'isHit' => false,
        'parameters' => [
            ['key' => 'Экран', 'value' => 'Нет',],
            ['key' => 'Холодостойкий', 'value' => 'Нет',],
            ['key' => 'Материал жилы', 'value' => 'Медь',],
            ['key' => 'Материал изоляции', 'value' => 'ПВХ',],
            ['key' => 'Гибкий', 'value' => 'Нет',],
            ['key' => 'Количество жил', 'value' => '5',],
        ],
    ],
    [
        'title' => 'Кабель КШВЭББШВ-6 3х95+1х10+1х16, 1 кВ',
        'code' => '95342345',
        'url' => '/product/',
        'price' => 0,
        'priceOld' => 0,
        'images' => [
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_3.jpg',
                'alt' => 'img description',
            ],
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_2.jpg',
                'alt' => 'img description',
            ],
        ],
        'isInStock' => false,
        'isRecommended' => false,
        'isOrderAble' => true,
        'isHit' => false,
        'parameters' => [
            ['key' => 'Экран', 'value' => 'Нет',],
            ['key' => 'Холодостойкий', 'value' => 'Нет',],
            ['key' => 'Материал жилы', 'value' => 'Медь',],
            ['key' => 'Материал изоляции', 'value' => 'ПВХ',],
            ['key' => 'Гибкий', 'value' => 'Нет',],
            ['key' => 'Количество жил', 'value' => '5',],
        ],
    ],
    [
        'title' => 'Кабель СШВ 3х150+1х120, 1 кВ',
        'code' => '95342345',
        'url' => '/product/',
        'price' => '120 000',
        'priceOld' => '133 000',
        'images' => [
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_4.jpg',
                'alt' => 'img description',
            ],
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_2.jpg',
                'alt' => 'img description',
            ],
        ],
        'isInStock' => false,
        'isRecommended' => false,
        'isOrderAble' => true,
        'isHit' => true,
        'parameters' => [],
    ],
    [
        'title' => 'Кабель СШВ 3х150+1х120, 1 кВ',
        'code' => '95342345',
        'url' => '/product/',
        'price' => '120 000',
        'priceOld' => '133 000',
        'images' => [
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_3.jpg',
                'alt' => 'img description',
            ],
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_2.jpg',
                'alt' => 'img description',
            ],
        ],
        'isInStock' => false,
        'isRecommended' => false,
        'isOrderAble' => true,
        'isHit' => false,
        'parameters' => [
            ['key' => 'Экран', 'value' => 'Нет',],
            ['key' => 'Холодостойкий', 'value' => 'Нет',],
            ['key' => 'Материал жилы', 'value' => 'Медь',],
            ['key' => 'Материал изоляции', 'value' => 'ПВХ',],
            ['key' => 'Гибкий', 'value' => 'Нет',],
            ['key' => 'Количество жил', 'value' => '5',],
        ],
    ],
    [
        'title' => 'Кабель NYM-J 3х1,5, 1 кВ',
        'code' => '846857434',
        'url' => '/product/',
        'price' => 0,
        'priceOld' => 0,
        'images' => [
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_1.jpg',
                'alt' => 'img description',
            ],
        ],
        'isInStock' => true,
        'isRecommended' => false,
        'isOrderAble' => false,
        'isHit' => false,
        'parameters' => [
            ['key' => 'Экран', 'value' => 'Нет',],
            ['key' => 'Холодостойкий', 'value' => 'Нет',],
            ['key' => 'Материал жилы', 'value' => 'Медь',],
            ['key' => 'Материал изоляции', 'value' => 'ПВХ',],
            ['key' => 'Гибкий', 'value' => 'Нет',],
            ['key' => 'Количество жил', 'value' => '5',],
        ],
    ],
    [
        'title' => 'Кабель NYM-J 3х1,5, 1 кВ',
        'code' => '34564536',
        'url' => '/product/',
        'price' => '5 000',
        'priceOld' => '6 400',
        'images' => [
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_1.jpg',
                'alt' => 'img description',
            ],
        ],
        'isInStock' => true,
        'isRecommended' => false,
        'isOrderAble' => false,
        'isHit' => true,
        'parameters' => [],
    ],
    [
        'title' => 'Кабель NYM-J 3х1,5, 1 кВ',
        'code' => '123421423',
        'url' => '/product/',
        'price' => '5 000',
        'priceOld' => '6 400',
        'images' => [
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_1.jpg',
                'alt' => 'img description',
            ],
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_2.jpg',
                'alt' => 'img description',
            ],
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_1.jpg',
                'alt' => 'img description',
            ],
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_2.jpg',
                'alt' => 'img description',
            ],
        ],
        'isInStock' => true,
        'isRecommended' => true,
        'isOrderAble' => false,
        'isHit' => false,
        'parameters' => [
            ['key' => 'Экран', 'value' => 'Нет',],
            ['key' => 'Холодостойкий', 'value' => 'Нет',],
            ['key' => 'Материал жилы', 'value' => 'Медь',],
            ['key' => 'Материал изоляции', 'value' => 'ПВХ',],
            ['key' => 'Гибкий', 'value' => 'Нет',],
            ['key' => 'Количество жил', 'value' => '5',],
        ],
    ],
    [
        'title' => 'Кабель КШВЭББШВ-6 3х95+1х10+1х16, 1 кВ',
        'code' => '95342345',
        'url' => '/product/',
        'price' => '51 000',
        'priceOld' => '62 400',
        'images' => [
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_1.jpg',
                'alt' => 'img description',
            ],
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_2.jpg',
                'alt' => 'img description',
            ],
        ],
        'isInStock' => false,
        'isRecommended' => false,
        'isOrderAble' => true,
        'isHit' => false,
        'parameters' => [
            ['key' => 'Экран', 'value' => 'Нет',],
            ['key' => 'Холодостойкий', 'value' => 'Нет',],
            ['key' => 'Материал жилы', 'value' => 'Медь',],
            ['key' => 'Материал изоляции', 'value' => 'ПВХ',],
            ['key' => 'Гибкий', 'value' => 'Нет',],
            ['key' => 'Количество жил', 'value' => '5',],
        ],
    ],
    [
        'title' => 'Кабель NYM-J 3х1,5, 1 кВ',
        'code' => '95342345',
        'url' => '/product/',
        'price' => '5 000',
        'priceOld' => 0,
        'images' => [
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_3.jpg',
                'alt' => 'img description',
            ],
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_2.jpg',
                'alt' => 'img description',
            ],
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_4.jpg',
                'alt' => 'img description',
            ],
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_1.jpg',
                'alt' => 'img description',
            ],
        ],
        'isInStock' => true,
        'isRecommended' => true,
        'isOrderAble' => false,
        'isHit' => false,
        'parameters' => [
            ['key' => 'Экран', 'value' => 'Нет',],
            ['key' => 'Холодостойкий', 'value' => 'Нет',],
            ['key' => 'Материал жилы', 'value' => 'Медь',],
            ['key' => 'Материал изоляции', 'value' => 'ПВХ',],
            ['key' => 'Гибкий', 'value' => 'Нет',],
            ['key' => 'Количество жил', 'value' => '5',],
        ],
    ],
    [
        'title' => 'Кабель КШВЭББШВ-6 3х95+1х10+1х16, 1 кВ',
        'code' => '95342345',
        'url' => '/product/',
        'price' => 0,
        'priceOld' => 0,
        'images' => [
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_3.jpg',
                'alt' => 'img description',
            ],
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_2.jpg',
                'alt' => 'img description',
            ],
        ],
        'isInStock' => false,
        'isRecommended' => false,
        'isOrderAble' => true,
        'isHit' => false,
        'parameters' => [
            ['key' => 'Экран', 'value' => 'Нет',],
            ['key' => 'Холодостойкий', 'value' => 'Нет',],
            ['key' => 'Материал жилы', 'value' => 'Медь',],
            ['key' => 'Материал изоляции', 'value' => 'ПВХ',],
            ['key' => 'Гибкий', 'value' => 'Нет',],
            ['key' => 'Количество жил', 'value' => '5',],
        ],
    ],
    [
        'title' => 'Кабель СШВ 3х150+1х120, 1 кВ',
        'code' => '95342345',
        'url' => '/product/',
        'price' => '120 000',
        'priceOld' => '133 000',
        'images' => [
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_4.jpg',
                'alt' => 'img description',
            ],
            [
                'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_2.jpg',
                'alt' => 'img description',
            ],
        ],
        'isInStock' => false,
        'isRecommended' => false,
        'isOrderAble' => true,
        'isHit' => true,
        'parameters' => [],
    ],
];

// города для модального окна города и выбора города
$citiesPopular = [
    'Москва',
    'Санкт-Петербург',
    'Новосибирск',
    'Екатеринбург',
    'Казань',
    'Нижний Новгород',
    'Красноярск',
    'Челябинск',
    'Самара',
    'Уфа',
    'Ростов-на-Дону',
    'Краснодар',
    'Омск',
    'Воронеж',
    'Пермь',
    'Волгоград',
];
$citiesAll = [
    'Абакан',
    'Адыгейск',
    'Амурск',
    'Анадырь',
    'Апатиты',
    'Арзамас',
    'Архангельск',
    'Астрахань',
    'Ачинск',
    'Балашиха',
    'Барнаул',
    'Белгород',
    'Бердск',
    'Бийск',
    'Биробиджан',
    'Благовещенск',
    'Бокситогорск',
    'Братск',
    'Брянск',
    'Бузулук',
    'Великие Луки',
    'Великий Новгород',
    'Великий Устюг',
    'Верхоянск',
    'Владивосток',
    'Владикавказ',
    'Владимир',
    'Волгоград',
    'Вологда',
    'Воркута',
    'Воронеж',
    'Воткинск',
    'Всеволожск',
    'Выборг',
    'Вышний Волочёк',
    'Гатчина',
    'Геленджик',
    'Глазов',
    'Горно-Алтайск',
    'Грозный',
    'Гусь-Хрустальный',
    'Дзержинск',
    'Долгопрудный',
    'Донецк',
    'Екатеринбург',
    'Елабуга',
    'Елец',
    'Иваново',
    'Ижевск',
    'Иркутск',
    'Йошкар-Ола',
    'Казань',
    'Калининград',
    'Калуга',
    'Кемерово',
    'Керчь',
    'Кингисепп',
    'Киров',
    'Кировск',
    'Кисловодск',
    'Козельск',
    'Коломна',
    'Комсомольск-на-Амуре',
    'Кондопога',
    'Королёв',
    'Кострома',
    'Котлас',
    'Красногорск',
    'Краснодар',
    'Красноярск',
    'Куйбышев',
    'Курган',
    'Курильск',
    'Курск',
    'Кызыл',
    'Лахденпохья',
    'Липецк',
    'Лодейное Поле',
    'Луга',
    'Люберцы',
    'Магадан',
    'Магас',
    'Магнитогорск',
    'Майкоп',
    'Махачкала',
    'Миасс',
    'Алейск',
    'Минусинск',
    'Мирный',
    'Москва',
    'Мурманск',
    'Муром',
    'Мытищи',
    'Набережные',
    'Челны',
    'Назрань',
    'Нальчик',
    'Нарьян-Мар',
    'Находка',
    'Нефтекамск',
    'Нефтеюганск',
    'Нижневартовск',
    'Нижнекамск',
    'Нижний Новгород',
    'Нижний Тагил',
    'Новокузнецк',
    'Новороссийск',
    'Новосибирск',
    'Новочеркасск',
    'Новый Уренгой',
    'Норильск',
    'Ноябрьск',
    'Обнинск',
    'Одинцово',
    'Омск',
    'Орёл',
    'Оренбург',
    'Орск',
    'Остров',
    'Пенза',
    'Переславль-Залесский',
    'Пермь',
    'Петрозаводск',
    'Петропавловск-Камчатский',
    'Подольск',
    'Приозерск',
    'Псков',
    'Пятигорск',
    'Раменское',
    'Реутов',
    'Ржев',
    'Россошь',
    'Ростов',
    'Ростов-на-Дону',
    'Рыбинск',
    'Рязань',
    'Салават',
    'Салехард',
    'Самара',
    'Санкт-Петербург',
    'Саранск',
    'Саратов',
    'Саров',
    'Саяногорск',
    'Северодвинск',
    'Североморск',
    'Североуральск',
    'Серпухов',
    'Смоленск',
    'Советск',
    'Соликамск',
    'Сортавала',
    'Сосновый Бор',
    'Сосногорск',
    'Сочи',
    'Спасск',
    'Ставрополь',
    'Старый Оскол',
    'Суздаль',
    'Сургут',
    'Сызрань',
    'Сыктывкар',
    'Таганрог',
    'Тамбов',
    'Тверь',
    'Тихвин',
    'Тобольск',
    'Тольятти',
    'Томск',
    'Тула',
    'Тында',
    'Тюмень',
    'Углич',
    'Улан-Удэ',
    'Ульяновск',
    'Уссурийск',
    'Уфа',
    'Ухта',
    'Хабаровск',
    'Ханты-Мансийск',
    'Химки',
    'Чаплыгин',
    'Чебоксары',
    'Челябинск',
    'Череповец',
    'Черкесск',
    'Чёрмоз',
    'Чита',
    'Чусовой',
    'Щёлково',
    'Электросталь',
    'Элиста',
    'Энгельс',
    'Южно-Сахалинск',
    'Якутск',
    'Ярославль',

];
$cityCurrent = 'Санкт-Петербург';

//$isAuth = Router::$params->get('auth') == 'true';
//$isCartEmpty = Router::$params->get('cart_empty') == 'true';


$cartProducts = [
    [
        'title' => 'Кабель КШВЭББШВ-6 3х95+1х10+1х16, 1 кВ',
        'url' => '/product/',
        'quantity' => '3 шт.',
        'imgUrl' => '/assets/img/cables/cable-1.png',
        'price' => '14 320 ₽',
        'priceOld' => '15 340 ₽',
    ],
    [
        'title' => 'Еще один товар с несколько более длинным названием',
        'url' => '/product/',
        'quantity' => '254 шт.',
        'imgUrl' => '/assets/img/cables/cable-2.png',
        'price' => '1 250 ₽',
        'priceOld' => null,
    ],
    [
        'title' => 'Кабель КШВ 654ЭББШВ-6 3х95+1х10+1х16, 1 кВ',
        'url' => '/product/',
        'quantity' => '35 шт.',
        'imgUrl' => '/assets/img/cables/cable-3.png',
        'price' => '14 320 ₽',
        'priceOld' => '15 340 ₽',
    ],
    [
        'title' => 'Еще какой-то товар с удивительно длинным названием, содержащий длинные слова',
        'url' => '/product/',
        'quantity' => '1 шт.',
        'imgUrl' => '/assets/img/cables/cable-4.png',
        'price' => '630 ₽',
        'priceOld' => null,
    ],
    [
        'title' => 'Кабель КШВЭББШВ-6 3х95+1х10+1х16, 1 кВ',
        'url' => '/product/',
        'quantity' => '3 шт.',
        'imgUrl' => '/assets/img/cables/cable-5.png',
        'price' => '14 320 ₽',
        'priceOld' => null,
    ],
    [
        'title' => 'Еще один товар с несколько более длинным названием',
        'url' => '/product/',
        'quantity' => '254 шт.',
        'imgUrl' => '/assets/img/cables/cable-6.png',
        'price' => '1 250 ₽',
        'priceOld' => null,
    ],
];
$cartProductsQuantity = count($cartProducts);
?>
<!doctype html>
<html lang="<?=LANGUAGE_ID?>">
<head itemscope itemtype="https://schema.org/WPHeader">
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <meta content="320" name="MobileOptimized">
    <meta content="True" name="HandheldFriendly">

    <!-- main -->
    <meta content="Краткое описание страницы для поисковых систем" itemprop="description"
          name="description">
    <meta content="ключевые, слова, для, поисковых, систем" itemprop="keywords" name="keywords">
    <meta content="index, follow, noarchive" name="robots">
    <meta content="rscable" name="author">
    <meta content="rscable" name="copyright">
    <meta content="rscable" lang="ru" name="Author">

    <!-- opengraph -->
    <meta content="ru_RU" property="og:locale">
    <meta content="rscable" property="og:site_name">
    <meta content="rscable.ru" property="og:url">
    <meta content="website" property="og:type">
    <meta content="Заголовок страницы" property="og:title">
    <meta content="Краткое описание страницы" property="og:description">
    <meta content="src/assets/favicon/social.jpg" property="og:image">
    <meta content="1600" property="og:image:width">
    <meta content="900" property="og:image:height">

    <!-- twitter -->
    <meta content="Краткое описание страницы" name="twitter:description">
    <meta content="Заголовок страницы" name="twitter:title">
    <meta content="summary" name="twitter:card">
    <meta content="rscable.ru" name="twitter:url">
    <meta content="src/assets/favicon/social.jpg" name="twitter:image">

    <title itemprop="headline">
        <?php $APPLICATION->showTitle() ?>
    </title>
    <link href="src/assets/favicon/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
    <link href="src/assets/favicon/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
    <link href="src/assets/favicon/favicon-194x194.png" rel="icon" sizes="194x194" type="image/png">
    <link href="src/assets/favicon/android-chrome-192x192.png" rel="icon" sizes="192x192"
          type="image/png">
    <link href="src/assets/favicon/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
    <link href="src/assets/favicon/site.webmanifest" rel="manifest">
    <link color="black" href="src/assets/favicon/safari-pinned-tab.svg" rel="mask-icon">
    <link href="src/assets/favicon/favicon.ico" rel="shortcut icon">
    <meta content="black" name="msapplication-TileColor">
    <meta content="src/assets/favicon/mstile-144x144.png" name="msapplication-TileImage">
    <meta content="black" name="theme-color">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/main.css">
    <script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
    <?php $APPLICATION->showHead() ?>
</head>
<body>
<div id="panel">
    <?php $APPLICATION->showPanel() ?>
</div>
<div id="app">
    <header class="header">
        <div class="headerDesktop">
            <div class="headerDesktopTop">
                <div class="headerLocation">
                    <button class="headerLocation" data-modal-open="region" type="button">
                        <span class="iconfont icon-location"></span>
                        <span><?= $cityCurrent ?></span>
                    </button>
                    <div class="headerLocationModal _active">
                        <button class="headerLocationModalClose" type="button">
                            <span class="iconfont icon-close"></span>
                        </button>
                        <div class="headerLocationModalTitle">
                            Ваш город <?= $cityCurrent ?>?
                        </div>
                        <div class="headerLocationModalButtons">
                            <button class="headerLocationModalAccept" type="button">
                                Да, все верно
                            </button>
                            <button class="headerLocationModalChoose" data-modal-open="region" type="button">
                                Нет, выбрать другой
                            </button>
                        </div>
                    </div>
                </div>
                <a class="headerTel" href="tel:+7 (812) 561-96-12">
                    <span class="iconfont icon-tel"></span>
                    +7 (812) 561-96-12
                </a>
                <button class="headerFeedback" data-modal-open="feedback" type="button">
                    Заказать звонок
                </button>
                <a class="headerEmail" href="mailto:1820metrov@rscable.shop">
                    <span class="iconfont icon-email"></span>
                    1820metrov@rscable.shop
                </a>
                <a class="headerPersonal" href="/personal/">
                    <span class="iconfont icon-person"></span>
                    <?php if ($isAuth): ?>
                        <span>Семенов Семен Семенович</span>
                    <?php else: ?>
                        <span>Личный кабинет</span>
                    <?php endif; ?>
                </a>
            </div>
            <div class="headerDesktopMiddle">
                <a class="headerLogo" href="/" title="Главная страница">
                    <img alt="logo" class="headerLogoImg" loading="lazy" src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg">
                    <span class="headerSlogan"> Оптовые поставки кабеля по России</span>
                </a>
                <button class="headerCatalog" data-modal-toggle="catalog" type="button">
                    <span class="iconfont icon-menu"></span>
                    <span class="iconfont icon-close"></span>
                    Каталог
                </button>
                <div class="dropdown">
                    <div class="dropdownHead">
                        <a class="headerLink" href="#">
                            Компания
                            <span class="iconfont icon-arrow-down"></span>
                        </a>
                    </div>
                    <div class="dropdownBody">
                        <?php
                        $items = [
                            [
                                'title' => 'О компании',
                                'url' => '#',
                            ],
                            [
                                'title' => 'Новости',
                                'url' => '#',
                            ],
                            [
                                'title' => 'Сертификаты',
                                'url' => '#',
                            ],
                            [
                                'title' => 'Благодарности',
                                'url' => '#',
                            ],
                            [
                                'title' => 'Документы',
                                'url' => '#',
                            ],
                            [
                                'title' => 'Камеры',
                                'url' => '#',
                            ],
                            [
                                'title' => 'Наши проекты',
                                'url' => '#',
                            ],
                            [
                                'title' => 'Отзывы',
                                'url' => '#',
                            ],
                            [
                                'title' => 'Блог',
                                'url' => '#',
                            ],
                        ];
                        foreach ($items as $item):
                            $title = $item['title'];
                            $url = $item['url'];
                            ?>
                            <a class="dropdownBodyItem" href="<?= $url ?>">
                                <?= $title ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="dropdown">
                    <div class="dropdownHead">
                        <a class="headerLink" href="#">
                            Оплата и доставка
                            <span class="iconfont icon-arrow-down"></span>
                        </a>
                    </div>
                    <div class="dropdownBody">
                        <?php
                        $items = [
                            [
                                'title' => 'Условия доставки',
                                'url' => '#',
                            ],
                            [
                                'title' => 'Условия оплаты',
                                'url' => '#',
                            ],
                            [
                                'title' => 'Вопросы и ответы',
                                'url' => '#',
                            ],
                            [
                                'title' => 'Акции и предложения',
                                'url' => '#',
                            ],
                        ];
                        foreach ($items as $item):
                            $title = $item['title'];
                            $url = $item['url'];
                            ?>
                            <a class="dropdownBodyItem" href="<?= $url ?>">
                                <?= $title ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <a class="headerLink" href="#">
                    Партнерство
                </a>
                <a class="headerLink" href="#">
                    Контакты
                </a>
                <div class="headerSearch" data-field="field">
                    <div class="headerSearchIcon">
                        <span class="iconfont icon-search"></span>
                    </div>
                    <input class="headerSearchInput"
                           data-modal-open="search"
                           placeholder="Категория, модель или артикул"
                           data-field="input"
                           type="text">
                    <button class="headerSearchClear" type="button" data-field="clear">
                        <span class="iconfont icon-close"></span>
                    </button>
                </div>
                <a class="headerButton" href="/personal/compare/">
                    <span class="iconfont icon-stats-bars"></span>
                    <span class="headerButtonQuantity">0</span>
                </a>
                <a class="headerButton" href="/personal/fav/">
                    <span class="iconfont icon-heart"></span>
                    <span class="headerButtonQuantity">12</span>
                </a>
                <a class="headerButton" href="/personal/cart/" data-hover="cart">
                    <span class="iconfont icon-cart"></span>
                    <span class="headerButtonQuantity">9</span>
                </a>
            </div>
        </div>
        <div class="headerMobile">
            <button class="headerButton" data-modal-open="menu-mobile" type="button">
                <span class="iconfont icon-menu"></span>
            </button>
            <a class="headerLogo" href="/">
                <img alt="logo" class="headerLogoImg" loading="lazy" src="/assets/img/logo.svg">
            </a>

            <button class="headerButton" data-modal-open="search" type="button">
                <span class="iconfont icon-search"></span>
            </button>
            <a class="headerButton" href="/personal/compare/">
                <span class="iconfont icon-stats-bars"></span>
                <span class="headerButtonQuantity">0</span>
            </a>
            <a class="headerButton" href="/personal/favorite/">
                <span class="iconfont icon-heart"></span>
                <span class="headerButtonQuantity">12</span>
            </a>
            <a class="headerButton" href="/personal/cart/">
                <span class="iconfont icon-cart"></span>
                <span class="headerButtonQuantity">9</span>
            </a>
            <a class="headerButton" href="/personal/">
                <span class="iconfont icon-person"></span>
            </a>
        </div>
    </header>

    <main class="main">
        <?php
        $images = [
            [
                'url' => 'https://cdn.vseinstrumenti.ru/res/content/banners/home_page_top_placeholder_2.jpg',
                'alt' => 'image description',
            ],
            [
                'url' => 'https://cable.ru/images/slider/new_slide_registry.png',
                'alt' => 'image description',
            ],
            [
                'url' => 'https://nsk.cable.ru/images/slider/new_slide_creditb2b.png',
                'alt' => 'image description',
            ],
        ];
        ?>

        <section class="sectionHero">
            <div class="sectionHeroContainer">
                <div class="swiper sectionHeroSlider">
                    <div class="swiper-wrapper">
                        <?php foreach ($images as $img):
                            $url = $img['url'];
                            $alt = $img['alt']
                            ?>
                            <div class="swiper-slide sectionHeroSlide">
                                <picture>
                                    <img alt="<?= $alt ?>" class="sectionHeroSlideImg" loading="lazy"
                                         src="<?= $url ?>">
                                </picture>
                                <div class="swiper-lazy-preloader"></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="sectionHeroForm">
                    <?php $forms = [
                        'title' => 'Оставьте заявку на обратную связь',
                        'description' => 'Оптовая компания "РОСКАБ" специализируется на поставках с минимальным заказом в 100 000 ₽.',
                        'inputs' => [
                            [
                                'label' => 'Контактное лицо',
                                'isRequired' => true,
                                'validationSchemes' => 'human_name',
                                'placeholder' => 'Имя и Фамилия',
                                'errorText' => 'Это обязательное поле',
                            ],
                            [
                                'label' => 'Телефон',
                                'isRequired' => true,
                                'validationSchemes' => 'tel',
                                'placeholder' => '+7-xxx-xxx-xx-xx',
                                'errorText' => 'Введите номер телефона в формате +7-xxx-xxx-xx-xx',
                            ],
                        ],
                    ] ?>

                    <form class="formFeedback" data-form="form">

                        <div class="formFeedbackLoader"></div>

                        <h2 class="formFeedbackTitle">
                            <?= $forms['title'] ?>
                        </h2>
                        <div class="formFeedbackNote">
                            <?= $forms['description'] ?>
                        </div>
                        <div class="formFeedbackBody">
                            <?php foreach ($inputs as $input) :
                                $label = $input['label'];
                                $isRequired = $input['isRequired'];
                                $validationSchemes = $input['validationSchemes'];
                                $placeholder = $input['placeholder'];
                                $errorText = $input['errorText'];
                                ?>
                                <label class="formFeedbackField" data-form="field">
                                <span class="formFeedbackFieldLabel">
                                  <span><?= $label ?></span>
                                  <?php if ($isRequired): ?>
                                      <span class="formFeedbackFieldLabelRequired">*</span>
                                  <?php endif; ?>
                                </span>
                                    <input type="text"
                                           data-form="field-input"
                                           class="formFeedbackFieldInput"
                                           placeholder="<?= $placeholder ?>"
                                           data-validate="<?= $validationSchemes ?>"
                                        <?= $isRequired ? 'required' : '' ?> >
                                    <span class="formFeedbackFieldError" data-form="error">
                                  <?= $errorText ?>
                                </span>
                                </label>
                            <?php endforeach; ?>
                            <button class="formFeedbackSubmit" type="submit" data-form="submit">
                                Отправить заявку
                            </button>
                        </div>
                        <label class="formFeedbackNote">
                            <input type="checkbox" required>
                            Отправляя данную форму вы соглашаетесь с обработкой персональных данных и
                            <a href="/privacy-policy/">
                                политикой конфиденциальности
                            </a>
                        </label>
                    </form>
                </div>
            </div>
        </section>
        <?php $sectionCategories = [
            'sectionTitle' => 'Категории',
            'sectionButtonTitle' => 'Перейти в каталог',
            'sectionButtonUrl' => '/catalog/',
            'categories' => [
                [
                    'title' => 'Автомобильные кабели',
                    'url' => '/catalog/',
                    'imgUrl' => '/assets/img/cables/cable-1.png',
                ], [
                    'title' => 'Информационные кабели',
                    'url' => '/catalog/',
                    'imgUrl' => '/assets/img/cables/cable-2.png',
                ], [
                    'title' => 'Сварочные кабели',
                    'url' => '/catalog/',
                    'imgUrl' => '/assets/img/cables/cable-3.png',
                ], [
                    'title' => 'Монтажные кабели',
                    'url' => '/catalog/',
                    'imgUrl' => '/assets/img/cables/cable-4.png',
                ], [
                    'title' => 'Силовые кабели',
                    'url' => '/catalog/',
                    'imgUrl' => '/assets/img/cables/cable-5.png',
                ], [
                    'title' => 'Судовые кабели',
                    'url' => '/catalog/',
                    'imgUrl' => '/assets/img/cables/cable-6.png',
                ],
            ],
        ]; ?>
        <section class="sectionCategories">
            <div class="sectionCategoriesContainer">
                <div class="sectionCategoriesHeader">
                    <h2 class="sectionCategoriesTitle"><?= $sectionTitle ?></h2>
                    <a href="<?= $sectionButtonUrl ?>" class="sectionCategoriesButton">
                        <?= $sectionButtonTitle ?>
                    </a>
                </div>
                <div class="sectionCategoriesLayout">
                    <?php foreach ($categories as $category):
                        $title = $category['title'];
                        $url = $category['url'];
                        $imgUrl = $category['imgUrl'];
                        ?>
                        <article class="sectionCategoriesCard">
                            <h3 class="sectionCategoriesCardTitle">
                                <a href="<?= $url ?>"> <?= $title ?> </a>
                            </h3>
                            <a href="<?= $url ?>" class="sectionCategoriesCardImg">
                                <img loading="lazy" src="<?= $imgUrl ?>" alt="<?= $title ?>">
                            </a>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <section class="sectionNumbers">
            <div class="sectionNumbersContainer">
                <div class="sectionNumbersHeader">
                    <h2 class="sectionNumbersTitle">Числа и факты</h2>
                    <a href="/about" class="sectionNumbersButton">Подробнее</a>
                </div>
                <div class="sectionNumbersLayout">
                    <article class="sectionNumbersItem">
                        <div class="sectionNumbersItemIcon">
                            <span class="iconfont icon-user-suit"></span>
                        </div>
                        <div class="sectionNumbersItemBody">
                            <h3 class="sectionNumbersItemTitle">
                                <span data-counter="9">0</span>
                                лет
                            </h3>
                            <div class="sectionNumbersItemDescription">
                                на рынке кабеля в России и СНГ
                            </div>
                        </div>
                    </article>
                    <article class="sectionNumbersItem">
                        <div class="sectionNumbersItemIcon">
                            <span class="iconfont icon-speed"></span>
                        </div>
                        <div class="sectionNumbersItemBody">
                            <h3 class="sectionNumbersItemTitle">
                                от
                                <span data-counter="24">0</span>
                                часов
                            </h3>
                            <div class="sectionNumbersItemDescription">
                                Оперативно соберем заказ и доставим в любую точку России и СНГ
                            </div>
                        </div>
                    </article>
                    <article class="sectionNumbersItem">
                        <div class="sectionNumbersItemIcon">
                            <span class="iconfont icon-medal"></span>
                        </div>
                        <div class="sectionNumbersItemBody">
                            <h3 class="sectionNumbersItemTitle">
                                более
                                <span data-counter="150000">0</span>
                                позиций
                                <br>
                            </h3>
                            <div class="sectionNumbersItemDescription">
                                Широкий ассортимент кабельной продукции от ведущих заводов России
                            </div>
                        </div>
                    </article>
                    <article class="sectionNumbersItem">
                        <div class="sectionNumbersItemIcon">
                            <span class="iconfont icon-handshake"></span>
                        </div>
                        <div class="sectionNumbersItemBody">
                            <h3 class="sectionNumbersItemTitle">
                                свыше
                                <span data-counter="20000">0</span>
                                клиентов
                            </h3>
                            <div class="sectionNumbersItemDescription">
                                Отличные отзывы и гарантия качества
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <?php $sectionAdvisable = [
            'sectionTitle' => 'Вам может понравится',
            'sectionButtonTitle' => 'Перейти в каталог',
            'sectionButtonUrl' => '/catalog/',
        ]; ?>
        <section class="sectionAdvisable">
            <div class="sectionAdvisableContainer">
                <div class="sectionAdvisableHeader">
                    <h2 class="sectionAdvisableTitle">
                        <a href="<?= $sectionButtonUrl ?>">
                            <?= $sectionTitle ?>
                        </a>
                    </h2>
                    <a href="<?= $sectionButtonUrl ?>" class="sectionAdvisableButton">
                        <?= $sectionButtonTitle ?>
                    </a>
                </div>
                <div class="sectionAdvisableWrapper">
                    <div class="sectionAdvisableSlider swiper">
                        <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <article class="productCard">
                                        <div class="productCardTags">
                                            <?php if ($isRecommended) : ?>
                                                <div class="productCardTag _recommended">
                                                    <span class="icon-dot"></span>
                                                    <span>Советуем</span>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($isHit) : ?>
                                                <div class="productCardTag _hit">
                                                    <span class="icon-dot"></span>
                                                    <span>Хит</span>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="productCardButtons">
                                            <button class="productCardFav" type="button" title="Добавить в избранное"
                                                    aria-label="Добавить в избранное">
                                                <span class="iconfont icon-heart"></span>
                                            </button>
                                            <button class="productCardCompare" type="button" title="Сравнить"
                                                    aria-label="Сравнить">
                                                <span class="iconfont icon-stats-bars"></span>
                                            </button>
                                            <button class="productCardView" type="button" title="Быстрый просмотр"
                                                    aria-label="Быстрый просмотр" data-modal-open="product">
                                                <span class="iconfont icon-eye"></span>
                                            </button>
                                            <button class="productCardBuy" type="button" title="Купить в один клик"
                                                    aria-label="Купить в один клик" data-modal-open="feedback">
                                                <span class="iconfont icon-credit-card"></span>
                                            </button>
                                        </div>

                                        <?php // если картинок несколько рендерим слайдер
                                        if (count($images) > 1) : ?>
                                            <div class="productCardSlider swiper" data-product-card="slider">
                                                <div class="swiper-wrapper">
                                                    <?php foreach ($images as $img):
                                                        $imgUrl = $img['url'];
                                                        $imgAlt = $img['alt']; ?>
                                                        <div class="swiper-slide">
                                                            <a href="<?= $url ?>" title="<?= $title ?>">
                                                                <img src="<?= $imgUrl ?>" alt="<?= $imgAlt ?>" class="productCardImg" loading="lazy">
                                                            </a>
                                                            <div class="swiper-lazy-preloader"></div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        <?php else:
                                            // если изображение одно рендерим простую ссылку и картинку
                                            $imgUrl = $images[0]['url'];
                                            $imgAlt = $images[0]['alt']; ?>
                                            <div class="productCardSlider">
                                                <a href="<?= $url ?>" title="<?= $title ?>">
                                                    <img src="<?= $imgUrl ?>" alt="<?= $imgAlt ?>" class="productCardImg" loading="lazy">
                                                </a>
                                            </div>
                                        <?php endif; ?>

                                        <div class="productCardBody">
                                            <div class="productCardMain">
                                                <h3 class="productCardTitle">
                                                    <a href="<?= $url ?>" title="<?= $title ?>">
                                                        <?= $title ?>
                                                    </a>
                                                </h3>
                                                <div class="productCardParameters">
                                                    <?php if ($isInStock) : ?>
                                                        <div class="productCardStatus _stock">
                                                            <span class="iconfont icon-dot"></span>
                                                            <span class="productCardStatusText">В наличии: 3 450 шт.</span>
                                                        </div>
                                                    <?php else : ?>
                                                        <div class="productCardStatus _order">
                                                            <span class="iconfont icon-dot"></span>
                                                            <span class="productCardStatusText">Нет в наличии</span>
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="productCardParameter _code">
                                                        <div class="productCardParameterKey">Артикул:</div>
                                                        <div class="productCardParameterValue"><?= $code ?></div>
                                                    </div>
                                                    <?php // Расширенные параметры продукта. Не отображаются когда карточка в виде плитки.
                                                    foreach ($parameters as $parameter):
                                                        $parameterKey = $parameter['key'];
                                                        $parameterValue = $parameter['value'];
                                                        ?>
                                                        <div class="productCardParameter _extra">
                                                            <div class="productCardParameterKey"><?= $parameterKey ?></div>
                                                            <div class="productCardParameterValue"><?= $parameterValue ?></div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <div class="productCardBottom">
                                                <div class="productCardDelivery">
                                                    <span class="iconfont icon-truck"></span>
                                                    Доставка от 2 дней
                                                </div>
                                                <div class="productCardPrices">
                                                    <?php /** Значение цены 0 трактуется как Цена не указана. Можете изменить проверку на свое усмотрение, например обозначить отсутствие указанной цены как null. */

                                                    /** Если цена не равна 0 и старая цена равна 0 выводим обычное отображение */
                                                    if ($priceOld === 0 && $price !== 0) : ?>
                                                        <div class="productCardPrice"> <?= $price ?> ₽</div>
                                                        <div class="productCardPricesTax"> c НДС</div>
                                                    <?php /** Если цена 0, выводим кнопку для открытия модального окна обратной связи */
                                                    elseif ($price === 0): ?>
                                                        <button data-modal-open="feedback" class="productCardPrice _request" type="button">
                                                            Цена по запросу
                                                        </button>
                                                    <?php /** Если цена больше 0 и есть старая цена, стилизуем как скидку */
                                                    else: ?>
                                                        <div class="productCardPrice _prev"><?= $priceOld ?> ₽</div>
                                                        <div class="productCardPrice _current"><?= $price ?> ₽</div>
                                                        <div class="productCardPricesTax"> c НДС</div>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="productCardFooter">
                                                    <?php if ($isInStock) : ?>
                                                        <div class="productCardQuantity">
                                                            <button class="productCardQuantityButton" title="Убрать" type="button">
                                                                <span>-</span>
                                                            </button>
                                                            <input class="productCardQuantityInput" type="text" value="1">
                                                            <button class="productCardQuantityButton" title="Добавить" type="button">
                                                                <span>+</span>
                                                            </button>
                                                        </div>
                                                        <button class="productCardCart" type="button" title="Добавить в корзину"
                                                                aria-label="Добавить в корзину">
                                                            <span class="iconfont icon-cart"></span>
                                                            <span>В корзину</span>
                                                        </button>
                                                    <?php else: ?>
                                                        <button class="productCardCart" type="button" title="Запросить под заказ"
                                                                data-modal-open="feedback" aria-label="Запросить под заказ">
                                                            <span>Заказать</span>
                                                        </button>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                        </div>
                    </div>
                    <button class="sectionAdvisableSliderPrev swiper-button-prev" type="button">
                        <span class="iconfont icon-arrow-left"></span>
                    </button>
                    <button class="sectionAdvisableSliderNext swiper-button-next" type="button">
                        <span class="iconfont icon-arrow-right"></span>
                    </button>
                </div>
            </div>
        </section>
        <?php

        $brandsPopular = [
            [
                'title' => 'title',
                'url' => '#',
                'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/24.jpg',
            ],
            [
                'title' => 'title',
                'url' => '#',
                'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/407.jpg',
            ],
            [
                'title' => 'title',
                'url' => '#',
                'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/3.jpg',
            ],
            [
                'title' => 'title',
                'url' => '#',
                'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/103.jpg',
            ],
            [
                'title' => 'title',
                'url' => '#',
                'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/13251.jpg',
            ],
            [
                'title' => 'title',
                'url' => '#',
                'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/426.jpg',
            ],
            [
                'title' => 'title',
                'url' => '#',
                'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/4.jpg',
            ],
            [
                'title' => 'title',
                'url' => '#',
                'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/586.jpg',
            ],
            [
                'title' => 'title',
                'url' => '#',
                'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/67.jpg',
            ],
            [
                'title' => 'title',
                'url' => '#',
                'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/22628.jpg',
            ],
            [
                'title' => 'title',
                'url' => '#',
                'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/737.jpg',
            ],
            [
                'title' => 'title',
                'url' => '#',
                'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/13251.jpg',
            ],
            [
                'title' => 'title',
                'url' => '#',
                'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/2059248.jpg',
            ],
            [
                'title' => 'title',
                'url' => '#',
                'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/13656.jpg',
            ],
            [
                'title' => 'title',
                'url' => '#',
                'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/13528.jpg',
            ],
        ];
        $brandsExclusive = [
            [
                'title' => 'title',
                'url' => '#',
                'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/785.jpg',
            ],
            [
                'title' => 'title',
                'url' => '#',
                'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/13528.jpg',
            ],
            [
                'title' => 'title',
                'url' => '#',
                'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/737.jpg',
            ],
            [
                'title' => 'title',
                'url' => '#',
                'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/67.jpg',
            ],
            [
                'title' => 'title',
                'url' => '#',
                'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/13251.jpg',
            ],
        ];
        $brandsPrivate = [
            [
                'url' => '#',
                'title' => 'inforce',
                'imgUrl' => 'https://cdn.vseinstrumenti.ru/res/content/page_templates/d1953333c8dc802d838e936bef8ce361.jpeg',
            ],
            [
                'url' => '#',
                'title' => 'gigant',
                'imgUrl' => 'https://cdn.vseinstrumenti.ru/res/content/page_templates/1267a1fa332c2b6db707620fbf59f86b.jpeg',
            ],
        ];
        ?>

        <section class="sectionBrands">
            <div class="sectionBrandsContainer">
                <div class="sectionBrandsHeader">
                    <h2 class="sectionBrandsTitle">
                        <a href="#">
                            Бренды
                        </a>
                    </h2>
                    <a href="#" class="sectionBrandsButton">
                        Все производители
                    </a>
                </div>
                <div class="sectionBrandsLayout">
                    <article class="sectionBrandsPopular">
                        <h2 class="sectionBrandsSubTitle">
                            <a href="#">
                                Популярные бренды
                            </a>
                        </h2>
                        <div class="sectionBrandsPopularLayout">
                            <?php foreach ($brandsPopular as $brand):
                                $url = $brand['url'];
                                $title = $brand['title'];
                                $imgUrl = $brand['imgUrl']; ?>
                                <a href="<?= $url ?>" class="sectionBrandsBrand" title="<?= $title ?>">
                                    <img src="<?= $imgUrl ?>" alt="<?= $title ?>" loading="lazy"
                                         class="sectionBrandsBrandImg">
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </article>
                    <article class="sectionBrandsExclusive">
                        <h2 class="sectionBrandsSubTitle">
                            <a href="#">
                                Эксклюзивные бренды
                            </a>
                        </h2>
                        <div class="sectionBrandsPopularLayout">
                            <?php foreach ($brandsExclusive as $brand):
                                $url = $brand['url'];
                                $title = $brand['title'];
                                $imgUrl = $brand['imgUrl']; ?>
                                <a href="<?= $url ?>" class="sectionBrandsBrand" title="<?= $title ?>">
                                    <img src="<?= $imgUrl ?>" alt="<?= $title ?>" loading="lazy"
                                         class="sectionBrandsBrandImg">
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </article>
                    <article class="sectionBrandsPrivate">
                        <h2 class="sectionBrandsSubTitle">
                            <a href="#">
                                Собственные торговые марки
                            </a>
                        </h2>
                        <div class="sectionBrandsPrivateLayout">
                            <?php foreach ($brandsPrivate as $brand):
                                $url = $brand['url'];
                                $title = $brand['title'];
                                $imgUrl = $brand['imgUrl']; ?>
                                <a href="<?= $url ?>" class="sectionBrandsBrand" title="<?= $title ?>">
                                    <img src="<?= $imgUrl ?>" alt="<?= $title ?>" loading="lazy"
                                         class="sectionBrandsBrandImg">
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <?php

        $partners = [
            [
                'title' => 'Тестовое название партнера',
                'imgUrl' => 'https://rscable.ru/upload/iblock/c2a/c2a75d4b43933d19ff378cd4c1710bf7.png',
            ],
            ['title' => 'Тестовое название партнера',
                'imgUrl' => 'https://nsk.cable.ru/assets/images/certificates/%D0%9E%D0%9E%D0%9E%20%D0%AD%D0%BD%D0%B5%D1%80%D0%B3%D0%B8%D1%8F%20%28%D0%AD%D0%BB%D0%BA%D0%BE%D0%BC%29.jpg',
            ],
            ['title' => 'Тестовое название партнера',
                'imgUrl' => 'https://rscable.ru/upload/iblock/e09/e091301c643a577e3b43de3aae12d164.png',
            ],
            ['title' => 'Здесь может быть изображение сертификата',
                'imgUrl' => 'https://nsk.cable.ru/assets/images/certificates/%D0%A1%D0%B5%D1%80%D1%82%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%82%20TOR.png',
            ],
            ['title' => 'Или изображение логотипа в хорошем качестве',
                'imgUrl' => 'https://rscable.ru/upload/iblock/695/6950d9e2a7d961072e24b93ca9c3928f.png',
            ],
            ['title' => 'Тестовое название партнера',
                'imgUrl' => 'https://rscable.ru/upload/iblock/7d0/fjrltajhe52v8rgg5zvpksna8erpmzbu.png',
            ],
            ['title' => 'ЭнергоКомплект',
                'imgUrl' => 'https://rscable.ru/upload/iblock/966/bqqvlnr1kd10htonovthqd6w8oqrxqpz.png',
            ],
        ];
        ?>

        <section class="sectionPartners">
            <div class="sectionPartnersContainer">
                <div class="sectionPartnersHeader">
                    <h2 class="sectionPartnersTitle">Наши партнеры</h2>
                    <a href="/partners/" class="sectionPartnersButton" title="Стать партнером">
                        Стать партнером
                    </a>
                </div>
                <div class="swiper" data-section-partners="slider">
                    <div class="swiper-wrapper">
                        <?php foreach ($partners as $partner) :
                            $imgUrl = $partner['imgUrl'];
                            $title = $partner['title'];
                            ?>
                            <article class="swiper-slide sectionPartnersSlide">
                                <a href="<?= $imgUrl ?>" data-fancybox="section-partners" data-caption="<?= $title; ?>"
                                   title="Открыть в галерее" aria-label="Открыть в галерее">
                                    <img src="<?= $imgUrl ?>" alt="img" loading="lazy" class="sectionPartnersSlideImg">
                                </a>
                                <h3 class="sectionPartnersSlideTitle">
                                    <a href="#" target="_blank" title="Перейти на сайт партнера"
                                       aria-label="Перейти на сайт партнера">
                                        <?= $title; ?>
                                    </a>
                                </h3>
                                <div class="swiper-lazy-preloader"></div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-footer">
                        <button type="button" class="swiper-button-prev">
                            <span class="iconfont icon-arrow-left"></span>
                        </button>
                        <div class="swiper-pagination"></div>
                        <button type="button" class="swiper-button-next">
                            <span class="iconfont icon-arrow-right"></span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="products">
            <div class="products-container">
                <div class="products-header">
                    <h2 class="products-title">Популярные товары</h2>
                    <a href="/catalog/" class="products-button" title="Смотреть все" aria-label="Смотреть все">
                        Перейти в каталог
                    </a>
                </div>
                <div class="products-cards">
                    <div class="products-cards-loader">
                        <!--<div class="iconfont icon-spinner"></div>-->
                    </div>
                    <article class="productCard">
                        <div class="productCardTags">
                            <?php if ($isRecommended) : ?>
                                <div class="productCardTag _recommended">
                                    <span class="icon-dot"></span>
                                    <span>Советуем</span>
                                </div>
                            <?php endif; ?>
                            <?php if ($isHit) : ?>
                                <div class="productCardTag _hit">
                                    <span class="icon-dot"></span>
                                    <span>Хит</span>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="productCardButtons">
                            <button class="productCardFav" type="button" title="Добавить в избранное"
                                    aria-label="Добавить в избранное">
                                <span class="iconfont icon-heart"></span>
                            </button>
                            <button class="productCardCompare" type="button" title="Сравнить"
                                    aria-label="Сравнить">
                                <span class="iconfont icon-stats-bars"></span>
                            </button>
                            <button class="productCardView" type="button" title="Быстрый просмотр"
                                    aria-label="Быстрый просмотр" data-modal-open="product">
                                <span class="iconfont icon-eye"></span>
                            </button>
                            <button class="productCardBuy" type="button" title="Купить в один клик"
                                    aria-label="Купить в один клик" data-modal-open="feedback">
                                <span class="iconfont icon-credit-card"></span>
                            </button>
                        </div>

                        <?php // если картинок несколько рендерим слайдер
                        if (count($images) > 1) : ?>
                            <div class="productCardSlider swiper" data-product-card="slider">
                                <div class="swiper-wrapper">
                                    <?php foreach ($images as $img):
                                        $imgUrl = $img['url'];
                                        $imgAlt = $img['alt']; ?>
                                        <div class="swiper-slide">
                                            <a href="<?= $url ?>" title="<?= $title ?>">
                                                <img src="<?= $imgUrl ?>" alt="<?= $imgAlt ?>" class="productCardImg" loading="lazy">
                                            </a>
                                            <div class="swiper-lazy-preloader"></div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        <?php else:
                            // если изображение одно рендерим простую ссылку и картинку
                            $imgUrl = $images[0]['url'];
                            $imgAlt = $images[0]['alt']; ?>
                            <div class="productCardSlider">
                                <a href="<?= $url ?>" title="<?= $title ?>">
                                    <img src="<?= $imgUrl ?>" alt="<?= $imgAlt ?>" class="productCardImg" loading="lazy">
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="productCardBody">
                            <div class="productCardMain">
                                <h3 class="productCardTitle">
                                    <a href="<?= $url ?>" title="<?= $title ?>">
                                        <?= $title ?>
                                    </a>
                                </h3>
                                <div class="productCardParameters">
                                    <?php if ($isInStock) : ?>
                                        <div class="productCardStatus _stock">
                                            <span class="iconfont icon-dot"></span>
                                            <span class="productCardStatusText">В наличии: 3 450 шт.</span>
                                        </div>
                                    <?php else : ?>
                                        <div class="productCardStatus _order">
                                            <span class="iconfont icon-dot"></span>
                                            <span class="productCardStatusText">Нет в наличии</span>
                                        </div>
                                    <?php endif; ?>
                                    <div class="productCardParameter _code">
                                        <div class="productCardParameterKey">Артикул:</div>
                                        <div class="productCardParameterValue"><?= $code ?></div>
                                    </div>
                                    <?php // Расширенные параметры продукта. Не отображаются когда карточка в виде плитки.
                                    foreach ($parameters as $parameter):
                                        $parameterKey = $parameter['key'];
                                        $parameterValue = $parameter['value'];
                                        ?>
                                        <div class="productCardParameter _extra">
                                            <div class="productCardParameterKey"><?= $parameterKey ?></div>
                                            <div class="productCardParameterValue"><?= $parameterValue ?></div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="productCardBottom">
                                <div class="productCardDelivery">
                                    <span class="iconfont icon-truck"></span>
                                    Доставка от 2 дней
                                </div>
                                <div class="productCardPrices">
                                    <?php /** Значение цены 0 трактуется как Цена не указана. Можете изменить проверку на свое усмотрение, например обозначить отсутствие указанной цены как null. */

                                    /** Если цена не равна 0 и старая цена равна 0 выводим обычное отображение */
                                    if ($priceOld === 0 && $price !== 0) : ?>
                                        <div class="productCardPrice"> <?= $price ?> ₽</div>
                                        <div class="productCardPricesTax"> c НДС</div>
                                    <?php /** Если цена 0, выводим кнопку для открытия модального окна обратной связи */
                                    elseif ($price === 0): ?>
                                        <button data-modal-open="feedback" class="productCardPrice _request" type="button">
                                            Цена по запросу
                                        </button>
                                    <?php /** Если цена больше 0 и есть старая цена, стилизуем как скидку */
                                    else: ?>
                                        <div class="productCardPrice _prev"><?= $priceOld ?> ₽</div>
                                        <div class="productCardPrice _current"><?= $price ?> ₽</div>
                                        <div class="productCardPricesTax"> c НДС</div>
                                    <?php endif; ?>
                                </div>
                                <div class="productCardFooter">
                                    <?php if ($isInStock) : ?>
                                        <div class="productCardQuantity">
                                            <button class="productCardQuantityButton" title="Убрать" type="button">
                                                <span>-</span>
                                            </button>
                                            <input class="productCardQuantityInput" type="text" value="1">
                                            <button class="productCardQuantityButton" title="Добавить" type="button">
                                                <span>+</span>
                                            </button>
                                        </div>
                                        <button class="productCardCart" type="button" title="Добавить в корзину"
                                                aria-label="Добавить в корзину">
                                            <span class="iconfont icon-cart"></span>
                                            <span>В корзину</span>
                                        </button>
                                    <?php else: ?>
                                        <button class="productCardCart" type="button" title="Запросить под заказ"
                                                data-modal-open="feedback" aria-label="Запросить под заказ">
                                            <span>Заказать</span>
                                        </button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="productsNote">
                    Это все популярные товары. Не нашли то что искали? Посетите наш
                    <a
                            href="/catalog/">каталог
                    </a>
                    или воспользуйтесь
                    <button data-modal-open="search">поиском на сайте</button>
                </div>
                <button class="productsLoadMore" type="button" title="Загрузить еще">
                    Загрузить еще
                </button>
            </div>
        </section>
        <section class="sectionAdvantages">
            <div class="sectionAdvantagesContainer">
                <div class="sectionAdvantagesHeader">
                    <h2 class="sectionAdvantagesTitle">Наши преимущества</h2>
                    <a href="/about/" class="sectionAdvantagesButton" title="Подробнее о компании"
                       aria-label="Подробнее">
                        Подробнее
                    </a>
                </div>
                <div class="sectionAdvantagesCards">
                    <article class="sectionAdvantagesCard">
                        <div class="sectionAdvantagesCardImg">
                            <span class="iconfont icon-medal"></span>
                        </div>
                        <h3 class="sectionAdvantagesCardTitle">Качество</h3>
                        <div class="sectionAdvantagesCardDescription">
                            Вся представленная нами продукция соответствует требованиям нормативных документов РФ
                        </div>
                    </article>
                    <article class="sectionAdvantagesCard">
                        <div class="sectionAdvantagesCardImg">
                            <span class="iconfont icon-hammer"></span>
                        </div>
                        <h3 class="sectionAdvantagesCardTitle">Страхование</h3>
                        <div class="sectionAdvantagesCardDescription">
                            Страхуем грузы в компании надежного страхового партнера
                        </div>
                    </article>
                    <article class="sectionAdvantagesCard">
                        <div class="sectionAdvantagesCardImg">
                            <span class="iconfont icon-handshake"></span>
                        </div>
                        <h3 class="sectionAdvantagesCardTitle">Честная цена</h3>
                        <div class="sectionAdvantagesCardDescription">
                            Являясь дилером и официальным партнером российских заводов, мы предлагаем выгодные цены
                        </div>
                    </article>
                    <article class="sectionAdvantagesCard">
                        <div class="sectionAdvantagesCardImg">
                            <span class="iconfont icon-truck"></span>
                        </div>
                        <h3 class="sectionAdvantagesCardTitle">Доставка/оплата</h3>
                        <div class="sectionAdvantagesCardDescription">
                            Осуществляем доставку продукции по всей территории РФ, даже в самые отдаленные уголки
                            страны
                        </div>
                    </article>
                    <article class="sectionAdvantagesCard">
                        <div class="sectionAdvantagesCardImg">
                            <span class="iconfont icon-return"></span>
                        </div>
                        <h3 class="sectionAdvantagesCardTitle">Возврат</h3>
                        <div class="sectionAdvantagesCardDescription">
                            Гарантируем возврат или обмен товара согласно действующему законодательству РФ
                        </div>
                    </article>
                    <article class="sectionAdvantagesCard">
                        <div class="sectionAdvantagesCardImg">
                            <span class="iconfont icon-speed"></span>
                        </div>
                        <h3 class="sectionAdvantagesCardTitle">Ответ за 15 минут</h3>
                        <div class="sectionAdvantagesCardDescription">
                            Оставьте заявку любым удобным способом, и в течение 15 минут менеджер свяжется с Вами
                        </div>
                    </article>
                </div>
                <div class="sectionAdvantagesBanner">
                    <div class="sectionAdvantagesBannerContainer">
                        <h3 class="sectionAdvantagesBannerTitle">
                            Весь кабель в наличии!
                        </h3>
                        <div class="sectionAdvantagesBannerBody">
                            <p>Обширная сеть складов и выгодные условия доставки по всей России и СНГ.</p>
                            <p>Внушительный ассортимент продукции и бонусы за покупки всем клиентам.</p>
                            <p>Кабели представленные в нашем
                                <a href="/catalog">каталоге</a>
                                , имеют сертификаты качества от заводов
                                производителей.
                            </p>
                        </div>
                    </div>
                    <picture>
                        <source srcset="/assets/img/banners/banner-advantages.jpg" media="(min-width: 768px)">
                        <img src="/assets/img/banners/banner-advantages-mobile.jpg" alt="img"
                             class="sectionAdvantagesBannerImg" loading="lazy">
                    </picture>

                </div>

                <div class="sectionAdvantagesNote">
                    Посетите наш
                    <a href="/catalog/">каталог</a>
                    и выберите продукт под Ваши нужды.
                </div>
            </div>
        </section>
    </main>
    