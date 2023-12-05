<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon; 

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->truncate();

        
        DB::table('products')->insert([
            [
                'name' => 'Защитные тактические очки с креплением к шлему',
                'price' => 1405,
                'description' => 'Защита головы только тогда полноценна, когда шлем дополнен защитой глаз. Солнцезащитные очки носят разве что, для того, чтобы уберечь органы зрения от ультрафиолета и бликов. Но чтобы организовать по-настоящему хорошую баллистическую защиту, нужны тактические очки с креплением к шлему',
                'photo' => 'images/image_test_1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Подсумок на пояс для пистолета',
                'price' => 715,
                'description' => 'Ношение пистолета открыто, на поясе либо под рукой в кобуре, как ни крути, вызывает опасение. Даже, если вы – сотрудник правоохранительных органов, спецслужб, в людных местах этого лучше не делать, чтобы не вызывать лишних вопросов. Поместите короткоствольное в  https://www.stall.com.ua/ru/product/9386/, и оно будет сокрыто от посторонних глаз.',
                'photo' => 'images/image_test_2.jpg',
                'created_at' => Carbon::now()->subDays(5), 
                'updated_at' => Carbon::now()->subDays(2), 
            ],
            [
                'name' => 'Картина на магнитном поле с подсветкой от сети 220 В',
                'price' => 1350,
                'description' => 'В длинном списке оригинальных подарков Картина на магнитном поле приковывает к себе внимание не только необычным и привлекательным внешним видом. Каждый, кто видит его впервые, поневоле пытается понять, на чем висит шарик. Магия левитации объясняется просто.  ',
                'photo' => 'images/image_test_3.jpg',
                'created_at' => Carbon::now()->subDays(10), 
                'updated_at' => Carbon::now()->subDays(4), 
            ],
            [
                'name' => 'Чашка Игра Престолов (Game of Thrones) на 600 мл',
                'price' => 1560,
                'description' => 'Чашка Игра Престолов (Game of Thrones) на 600 мл отлично подойдет как реквизит на тематическую вечеринку, Хэллоуин и т. д. Выполнена в готическом стиле, она подчеркнет вашу индивидуальность и способность к творчеству. ',
                'photo' => 'images/image_test_4.jpg',
                'created_at' => Carbon::now()->subDays(15), 
                'updated_at' => Carbon::now()->subDays(6), 
            ],
            [
                'name' => 'Модем USB Wi-Fi 4G',
                'price' => 710,
                'description' => 'Множество различных домашних устройств одновременно подключены к беспроводному маршрутизатору, но во время отсутствия доступа к электричеству возможность выхода в интернет становится невозможной? ',
                'photo' => 'images/image_test_5.jpg',
                'created_at' => Carbon::now()->subDays(20), 
                'updated_at' => Carbon::now()->subDays(8), 
            ],
            [
                'name' => 'Подарочный набор домашнего бармена 23 в 1',
                'price' => 3605,
                'description' => 'Любите готовить вкусные коктейли в домашней обстановке? Предлагаем практичный вариант посуды - набор домашнего бармена. ',
                'photo' => 'images/image_test_6.jpg',
                'created_at' => Carbon::now()->subDays(25), 
                'updated_at' => Carbon::now()->subDays(10), 
            ],
            
        ]);
    
    }
}
