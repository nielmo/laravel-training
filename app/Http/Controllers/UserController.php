<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function show()
    {
        $binding_target = [
            [
                'title' => 'Binding Target',
                'items' => [
                    [
                        'image_url' => '/photo/wanda_01.png',
                        'title' => ' ホームページって<br>いくらで作れるの？'
                    ],
                    [
                        'image_url' => '/photo/wanda_02.png',
                        'title' => 'ブランディングしたい！'
                    ],
                    [
                        'image_url' => '/photo/wanda_03.png',
                        'title' => '採用したい！'
                    ],
                    [
                        'image_url' => '/photo/wanda_04.png',
                        'title' => '他社と差別化して<br>集客したい！'
                    ]
                ]
            ]
        ];
        $binding_target = json_decode(json_encode($binding_target));

        $goal = [
            [
                'title' => 'Goal',
                'content' => 'ホームページの最大活用はゴール設定から始まります。<br>企画からUI・UX設計、動画撮影から制作まで全て社内で構築し、クライアント様の要望の実現をお手伝いします。'
            ]
        ];
        $goal = json_decode(json_encode($goal));

        $works = [
            [
                'title' => 'Works',
                'items' => [
                    [
                        'image_url' => '/photo/chutoku.png',
                        'title' => '中特グループ様'
                    ],
                    [
                        'image_url' => '/photo/takumi.png',
                        'title' => '株式会社たくみ'
                    ],
                    [
                        'image_url' => '/photo/screencapture-fuyougumi-2018-10-23-18_37_36.png',
                        'title' => '株式会社 富洋組'
                    ],
                    [
                        'image_url' => '/photo/noge.png',
                        'title' => '野毛手形'
                    ],
                    [
                        'image_url' => '/photo/sanri.png',
                        'title' => '株式会社サンリ'
                    ],
                    [
                        'image_url' => '/photo/mirai.png',
                        'title' => 'COOP'
                    ],
                    [
                        'image_url' => '/photo/shimotsu.png',
                        'title' => 'シモツトランスポート株式会社'
                    ],
                    [
                        'image_url' => '/photo/aeonsquare.png',
                        'title' => 'AEON RETAIL'
                    ],
                ],
            ]
        ];
        $works = json_decode(json_encode($works));

        $news = [
            [
                'title' => 'News',
                'items' => [
                    [
                        'image_url' => '/photo/ryoji-iwata-543189-unsplash.jpg',
                        'date' => '2018.00/00',
                        'content' => 'テキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミー',
                        'type' => 'web',
                        'type_string' => 'web制作',
                        'isNew' => true
                    ],
                    [
                        'image_url' => '/photo/ryoji-iwata-543189-unsplash.jpg',
                        'date' => '2018.00/00',
                        'content' => 'テキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミー',
                        'type' => 'promotion',
                        'type_string' => 'プロモーション',
                        'isNew' => true
                    ],
                    [
                        'image_url' => '/photo/ryoji-iwata-543189-unsplash.jpg',
                        'date' => '2018.00/00',
                        'content' => 'テキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミー',
                        'type' => 'company',
                        'type_string' => 'company',
                        'isNew' => true
                    ],
                ]
            ]
        ];
        $news = json_decode(json_encode($news));

        return view('welcome', compact('binding_target', 'goal', 'works', 'news'));
    }
}
