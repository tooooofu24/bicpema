<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [20, 'ドップラー効果', 'https://dl.dropboxusercontent.com/s/18p99gcdef6wifn/doppler.js', 'https://live.staticflickr.com/65535/51591712806_5ac6dde547_k.jpg', 'https://github.com/ohiaeni/physics_simulations_processing.git', 'ドップラー効果のシミュレーション教材です。'],
            [17, '斜方投射', 'https://dl.dropboxusercontent.com/s/1gozshnziuua1gm/projectile_motion.js', 'https://live.staticflickr.com/65535/51590882762_6572c6bc77_k.jpg', 'https://github.com/ohiaeni/physics_simulations_processing.git', '斜方投射のシミュレーション教材です。'],
            [20, '光の見え方', 'https://dl.dropboxusercontent.com/s/51ete0ydx3a3d8l/RGB.js', 'https://live.staticflickr.com/65535/51591712741_45613c6545_k.jpg', 'https://github.com/ohiaeni/physics_simulations_processing.git', '光の見え方のシミュレーション教材です。'],
            [17, 'ばねの単振動', 'https://dl.dropboxusercontent.com/s/l8qesblshicu88t/spring.js', 'https://live.staticflickr.com/65535/51592371899_c9514c2fa2_k.jpg', 'https://github.com/ohiaeni/physics_simulations_processing.git', 'ばねの単振動のシミュレーション教材です。'],
            [20, '波の干渉', 'https://dl.dropboxusercontent.com/s/gldk7bfd5sltbt1/wave_interference.js', 'https://live.staticflickr.com/65535/51590882657_a98f7161ed_k.jpg', 'https://github.com/ohiaeni/physics_simulations_processing.git', '波の干渉のシミュレーション教材です。'],
        ];
        foreach ($data as $v) {
            $post = new Post;
            $post->user_id = 2;
            $post->area_id = $v[0];
            $post->title = $v[1];
            $post->js_url = $v[2];
            $post->thumbnail_url = $v[3];
            $post->download_url = $v[4];
            $post->comment = $v[5];
            $post->save();
        }
        // Post::factory()->count(100)->create();
    }
}
