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
                'name' => '『シスルのミラこすッ』NFT シスル01（特典動画付き)',
                'type' =>'2',
                'price' =>'3000',
                'detail' => '人気コスプレイヤー「シスル」の番組公式NFT ver.01。番組でも着用〝うさぎ〟をモチーフにしたオリジナル衣装を纏った限定写真が手に入ります。さらに特典として「シスルの一問一答形式のインタビュー動画vol.１」が同封されています。',
                'secondary_category_id' => 5,
            ],

            [
                'id' => 4,
                'name' => ' 小瀬村真美 Anatomical Observation',
                'type' =>'1',
                'price' =>'55000',
                'detail' => '新しく継続される小瀬村真美の写真シリーズ「Anatomical Observation（解剖学的観察）」は「観察すること」、「物を視ること」に主題を置いたシリーズです。このシリーズの制作過程では、植物を研究目的で描かれた植物画の解剖学的なルールに従って配置し、カメラで正確にピントを合わせ、超高精細カメラにて撮影しています。また、植物を描く基本に従ってデジタル画像上で加筆され、本来の写真プリントでは再現出来ない高度な細密さの植物画を描いています。',
                'secondary_category_id' => 3,
            ],

            [
                'id' => 5,
                'name' => '原画 MY PLANET CAMP プレリリースver.',
                'type' =>'2',
                'price' =>'11627',
                'detail' => '商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細',
                'secondary_category_id' => 6,
            ],

            [
                'id' => 6,
                'name' => '村生ミオ「男の時間」vol,1',
                'type' =>'3',
                'price' =>'10000',
                'detail' => '商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細',
                'secondary_category_id' => 4,
            ],

            [
                'id' => 7,
                'name' => '畑中 純「月夜の音楽会」vol,5',
                'type' =>'1',
                'price' =>'2990',
                'detail' => '商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細',
                'secondary_category_id' => 8,
            ],

            [
                'id' => 8,
                'name' => 'SEVEN VS ALIEN BRIS デジタルアート',
                'type' =>'2',
                'price' =>'36400',
                'detail' => '商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細',
                'secondary_category_id' => 3,
            ],

            [
                'id' => 9,
                'name' => '米フェス2022×長岡花火 メモリアルNFT Ver.3',
                'type' =>'2',
                'price' =>'10000',
                'detail' => '商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細',
                'secondary_category_id' => 2,
            ],

            [
                'id' => 10,
                'name' => 'アンダービースティー',
                'type' =>'3',
                'price' =>'3000',
                'detail' => '商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細、商品詳細',
                'secondary_category_id' => 1,
            ],

        ]);
    }
}
