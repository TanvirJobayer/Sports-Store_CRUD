<?php

namespace Database\Seeders;

use App\Models\Product;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    // ১. ক্রিকেট ব্যাট
    Product::create([
        'name' => 'English Willow Bat',
        'category' => 'Cricket',
        'brand' => 'SS',
        'price' => 8500,
        'stock' => 12,
        'description' => 'কাশ্মীরি উইলো দিয়ে তৈরি ব্যাট।',
    ]);

    // ২. ক্রিকেট বল
    Product::create([
        'name' => 'Leather Cricket Ball',
        'category' => 'Cricket',
        'brand' => 'Kookaburra',
        'price' => 1200,
        'stock' => 40,
        'description' => 'হাতে সেলাই করা লেদার বল, ১৫৬ গ্রাম।',
    ]);

    // ৩. উইকেটকিপিং গ্লাভস
    Product::create([
        'name' => 'Wicket Keeping Gloves',
        'category' => 'Cricket',
        'brand' => 'SS',
        'price' => 2500,
        'stock' => 10,
        'description' => 'লেদার পাম ও ভেতরে এক্সট্রা প্যাডিং।',
    ]);

    // ৪. ফুটবল
    Product::create([
        'name' => 'Match Football',
        'category' => 'Football',
        'brand' => 'Adidas',
        'price' => 1500,
        'stock' => 30,
        'description' => 'FIFA অনুমোদিত সাইজ ৫ বল।',
    ]);

    // ৫. গোলকিপার গ্লাভস
    Product::create([
        'name' => 'Goalkeeper Gloves',
        'category' => 'Football',
        'brand' => 'Nike',
        'price' => 1800,
        'stock' => 14,
        'description' => 'গ্রিপি রাবার পাম, জেল-প্যাডেড।',
    ]);

    // ৬. ব্যাডমিন্টন র‍্যাকেট
    Product::create([
        'name' => 'Carbon Badminton Racket',
        'category' => 'Badminton',
        'brand' => 'Yonex',
        'price' => 4200,
        'stock' => 8,
        'description' => 'হালকা কার্বন ফ্রেম, ৮৫ গ্রাম।',
    ]);

    // ৭. শাটলকক
    Product::create([
        'name' => 'Shuttlecock Box (12 pcs)',
        'category' => 'Badminton',
        'brand' => 'Yonex',
        'price' => 1500,
        'stock' => 22,
        'description' => 'ফেদার শাটলকক, এক বক্সে ১২টি।',
    ]);

    // ৮. ব্যাডমিন্টন নেট
    Product::create([
        'name' => 'Badminton Net',
        'category' => 'Badminton',
        'brand' => 'Cosco',
        'price' => 1100,
        'stock' => 16,
        'description' => 'স্ট্যান্ডার্ড সাইজ নাইলন নেট।',
    ]);

    // ৯. রানিং শু
    Product::create([
        'name' => 'Running Shoe',
        'category' => 'Tennis',
        'brand' => 'Nike',
        'price' => 6200,
        'stock' => 20,
        'description' => 'ট্রেনিং ও দৌড়ানোর জন্য হালকা জুতা।',
    ]);

    // ১০. টেনিস র‍্যাকেট
    Product::create([
        'name' => 'Tennis Racket',
        'category' => 'Tennis',
        'brand' => 'Wilson',
        'price' => 7500,
        'stock' => 6,
        'description' => 'গ্রাফাইট ফ্রেম, ব্যালান্সড স্ট্রিং।',
    ]);

    // ১১. ডাম্বেল সেট
    Product::create([
        'name' => 'Dumbbell Set 10kg',
        'category' => 'Gym',
        'brand' => 'FitPro',
        'price' => 3000,
        'stock' => 15,
        'description' => 'রাবার কোর্টেড ডাম্বেল জোড়া।',
    ]);

    // ১২. যোগা ম্যাট
    Product::create([
        'name' => 'Yoga Mat 6mm',
        'category' => 'Gym',
        'brand' => 'Bolster',
        'price' => 950,
        'stock' => 35,
        'description' => 'অ্যান্টি-স্লিপ ৬ মিমি ম্যাট।',
    ]);
    }
}
