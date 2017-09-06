<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class OfferModel extends Model
{
    protected $fillable = [
        'id',
        'company_name',
        'founded',
        'ceo',
        'prefecture',
        'number_of_employee',
        'is_closed',
        'role',
        'role_description',
        'skills',
    ];

    public static function getList()
    {
        return self::dataSource();
    }

    public static function getById(int $id)
    {
        return self::dataSource()[$id - 1];
    }

    private static function dataSource()
    {
        return [
            new OfferModel([
                'id' => 1,
                'company_name' => '会社名AAAAAA',
                'founded' => 1997,
                'ceo' => '菊田 由宇',
                'prefecture' => '東京都',
                'number_of_employee' => 2219,
                'is_closed' => 0,
                'role' => 'エンジニア',
                'role_description' => 'Laravelを使ったWeb開発をして頂きます。',
                'skills' => 'LAMP環境での開発経験3年以上。'
            ]),
            new OfferModel([
                'id' => 2,
                'company_name' => '会社名BBBBBB',
                'founded' => 2008,
                'ceo' => '白井 聡',
                'prefecture' => '東京都',
                'number_of_employee' => 39,
                'is_closed' => 1,
                'role' => 'エンジニア',
                'role_description' => 'Laravelを使ったWeb開発をして頂きます。',
                'skills' => '未経験可'
            ]),
            new OfferModel([
                'id' => 3,
                'company_name' => '会社名CCCCCC',
                'founded' => 1976,
                'ceo' => '依田 奈々',
                'prefecture' => '奈良県',
                'number_of_employee' => 909,
                'is_closed' => 0,
                'role' => '営業',
                'role_description' => '新規開拓営業をしてもらいます。',
                'skills' => '未経験歓迎です'
            ]),
            new OfferModel([
                'id' => 4,
                'company_name' => '会社名DDDDDD',
                'founded' => 1955,
                'ceo' => '山田太郎',
                'prefecture' => '東京都',
                'number_of_employee' => 159,
                'is_closed' => 0,
                'role' => '企画職',
                'role_description' => 'ユーザー様向けに当社EC独自の商品の販促施策を企画していただきます。',
                'skills' => '食品関係の知識'
            ]),
        ];
    }

    public function isOpen()
    {
        return !$this->is_closed;
    }
}
