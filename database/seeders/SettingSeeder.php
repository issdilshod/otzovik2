<?php

namespace Database\Seeders;

use App\Models\Admin\Setting\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            // global
            [
                'key' => 'header_vk',
                'value' => ''
            ],
            [
                'key' => 'header_telegram',
                'value' => ''
            ],
            [
                'key' => 'header_viber',
                'value' => ''
            ],
            // index
            [
                'page' => Config::get('pages.index'),
                'key' => Config::get('pages.index').'_banner_h1',
                'value' => 'Независимый сервис по оценке ВУЗов'
            ],
            [
                'page' => Config::get('pages.index'),
                'key' => Config::get('pages.index').'_banner_p',
                'value' => 'Узнай что реально пишут о учебных заведениях которые вы рассматриваете для поступления!'
            ],
            [
                'page' => Config::get('pages.index'),
                'key' => Config::get('pages.index').'_counter_reviews',
                'value' => '452 851'
            ],
            [
                'page' => Config::get('pages.index'),
                'key' => Config::get('pages.index').'_counter_answers',
                'value' => '22 851'
            ],
            [
                'page' => Config::get('pages.index'),
                'key' => Config::get('pages.index').'_counter_companies',
                'value' => '8 512'
            ],
            [
                'page' => Config::get('pages.index'),
                'key' => Config::get('pages.index').'_info_universities_h3',
                'value' => 'Оценивайте и находите компании!'
            ],
            [
                'page' => Config::get('pages.index'),
                'key' => Config::get('pages.index').'_info_universities_p',
                'value' => "Наш сервис помогает сформировать наилучшие отношения между клиентом и компанией! Если вы клиент вы можете оставить свой честный отзыв и получить ответ от официального представительства.Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.\n\nПо своей сути рыбатекст является альтернативой традицинному."
            ],
            [
                'page' => Config::get('pages.index'),
                'key' => Config::get('pages.index').'_info_universities_button',
                'value' => 'Добавить вуз'
            ],
            [
                'page' => Config::get('pages.index'),
                'key' => Config::get('pages.index').'_info_students_h3',
                'value' => 'Оценивайте и находите компании!'
            ],
            [
                'page' => Config::get('pages.index'),
                'key' => Config::get('pages.index').'_info_students_p',
                'value' => "Наш сервис помогает сформировать наилучшие отношения между клиентом и компанией! Если вы клиент вы можете оставить свой честный отзыв и получить ответ от официального представительства.Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.\n\nПо своей сути рыбатекст является альтернативой традицинному."
            ],
            [
                'page' => Config::get('pages.index'),
                'key' => Config::get('pages.index').'_info_students_button',
                'value' => 'Оставить отзыв'
            ],
            // search
            [
                'page' => Config::get('pages.search'),
                'key' => Config::get('pages.search').'_form_h3',
                'value' => 'Где получить образование'
            ],
            // universities
            [
                'page' => Config::get('pages.universities'),
                'key' => Config::get('pages.universities').'_info_h1',
                'value' => 'Текстовый блок'
            ],
            [
                'page' => Config::get('pages.universities'),
                'key' => Config::get('pages.universities').'_info_p',
                'value' => 'Отзыв.ru – интернет-портал для старшеклассников, абитуриентов, студентов. Наша работа – это забота о том, чтобы поиск информации о вузе или колледже, будущей профессии и специальности стал для вас максимально удобным и простым. Поэтому каждый день мы совершенствуем наш сайт и наполняем его новыми интересными материалами, чтобы вы могли найти гораздо больше, чем просто ответы на вопросы.'
            ],

        ];

        foreach($settings as $key => $value):
            $value['lang'] = Config::get('app.locale');

            $tmpSetting = Setting::where('key', $value['key'])
                                ->where('lang', $value['lang'])
                                ->first();
            if ($tmpSetting==null){
                Setting::create($value);
            }else{
                $tmpSetting->update($value);
            }
        endforeach;
    }
}
