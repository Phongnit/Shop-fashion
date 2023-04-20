<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    // how to write seeder shop fashion?
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $faker = FakerFactory::create();

        // for ($i = 1; $i <= 20; $i++) {
        //     $name = $faker->productName();
        //     $image = $faker->imageUrl(640, 480, 'products', true);
        //     $size = $faker->randomElement(['S', 'M', 'L', 'XL']);
        //     $color = $faker->colorName();
        //     $price = $faker->randomFloat(2, 10, 100);
        //     $sale = $faker->boolean(30); // 30% số sản phẩm có giảm giá
        //     $quantity = $faker->numberBetween(10, 100);
        //     $cate_id = $faker->numberBetween(1, 5); // ID của danh mục sản phẩm
        //     $brand_id = $faker->numberBetween(1, 10); // ID của thương hiệu sản phẩm

        //     DB::table('products')->insert([
        //         'name' => $name,
        //         'image' => $image,
        //         'size' => $size,
        //         'color' => $color,
        //         'price' => $price,
        //         'sale' => $sale,
        //         'quantity' => $quantity,
        //         'cate_id' => $cate_id,
        //         'brand_id' => $brand_id,
        //     ]);
        // }
    }
}
