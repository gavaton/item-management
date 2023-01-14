<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->truncate();
        DB::table('items')->insert([
            [
                'id' => 1,
                'name' => 'ニホンカモシカ50円普通切手原画',
                'type' =>'2',
                'price' =>'8283',
                'detail' => '通年で販売している普通切手をNFTにしました。切手原画を基に構成しています。一本一本丁寧に描かれた動物の毛並み、繊細に表現された花、奥行のある景色など、普通切手のサイズ縦25.5×横21.5mmでは気づけない魅力を高画質の原画データを通して再発見できます。 ※通常の切手との違いを明確にするため、「JP」、「NFT ART」の文字を新たにデザインしました。 ※切手としては使用できません。',
                'secondary_category_id' =>1,
            ],

            [
                'id' => 2,
                'name' => 'ワンピース 20部限定NFT マンガアート',
                'type' =>'2',
                'price' =>'399900',
                'detail' => '作品 ONE PIECE / SPEEDSTERS!
                作家名 尾田栄一郎
                サイズ A1 (841 x 594mm), A2 (594 x 420mm)
                素材 紙にインクジェットプリント
                ',
                'secondary_category_id' => 8,
            ],

            [
                'id' => 3,
                'name' => 'エクストレイル',
                'type' =>'1',
                'price' =>'3598000',
                'detail' => '商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細',
                'secondary_category_id' => 5,
            ],

            [
                'id' => 4,
                'name' => 'クラウン',
                'type' =>'1',
                'price' =>'6400000',
                'detail' => '商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細',
                'secondary_category_id' => 3,
            ],

            [
                'id' => 5,
                'name' => 'スカイライン',
                'type' =>'2',
                'price' =>'5569400',
                'detail' => '商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細',
                'secondary_category_id' => 6,
            ],

            [
                'id' => 6,
                'name' => 'セレナ',
                'type' =>'3',
                'price' =>'3730100',
                'detail' => '商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細',
                'secondary_category_id' => 4,
            ],

            [
                'id' => 7,
                'name' => 'CX-8',
                'type' =>'1',
                'price' =>'2994200',
                'detail' => '商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細',
                'secondary_category_id' => 8,
            ],

            [
                'id' => 8,
                'name' => 'プリウス',
                'type' =>'2',
                'price' =>'3640000',
                'detail' => '商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細',
                'secondary_category_id' => 3,
            ],

            [
                'id' => 9,
                'name' => 'ラウンドグルーザー',
                'type' =>'2',
                'price' =>'5543000',
                'detail' => '商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細',
                'secondary_category_id' => 2,
            ],

            [
                'id' => 10,
                'name' => 'アルファード',
                'type' =>'3',
                'price' =>'7752000',
                'detail' => '商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細',
                'secondary_category_id' => 1,
            ],

            [
                'id' => 11,
                'name' => 'MAZDA6 SEDAN',
                'type' =>'3',
                'price' =>'2962300',
                'detail' => '商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細',
                'secondary_category_id' => 9,
            ],

            [
                'id' => 12,
                'name' => 'キャラバン',
                'type' =>'3',
                'price' =>'3420000',
                'detail' => '商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細',
                'secondary_category_id' => 4,
            ],

            [
                'id' => 13,
                'name' => 'CX-30',
                'type' =>'3',
                'price' =>'2840000',
                'detail' => 'ライブエッジの活版印刷の決まり文句、サルビアファニーパック謙虚な自慢のイッカクポートランド。
                VHSマンブレードパロサントパーカーブランチ信託基金。ビターズハッシュタグチョッキファッションアックスチアユニ
                コーン。チェック柄のフィクシーシャンブレー90年代、スロー炭水化物のエッツィーターメリック。クレイパグあなたはお
                そらくそれらを聞いたことがないでしょう 六角形キックスタータークラフトビールポークシック。',
                'secondary_category_id' => 8,
            ],

            [
                'id' => 14,
                'name' => 'MX-30',
                'type' =>'3',
                'price' =>'2980000',
                'detail' => '商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細',
                'secondary_category_id' => 8,
            ],

            [
                'id' => 15,
                'name' => 'センチュリー',
                'type' =>'3',
                'price' =>'20080000',
                'detail' => '商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細',
                'secondary_category_id' => 3,
            ],
        ]);
    }
}
