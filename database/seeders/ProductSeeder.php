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

    // ১৩. ট্রেডমিল
    Product::create([
        'name' => 'Manual Treadmill M1',
        'category' => 'Gym',
        'brand' => 'FitPro',
        'price' => 18500,
        'stock' => 5,
        'description' => 'বাসায় সহজে ব্যায়াম করার জন্য ফোল্ডেবল ম্যানুয়াল ট্রেডমিল।',
    ]);

    // ১৪. পুশ আপ বার
    Product::create([
        'name' => 'Push Up Bar Stand',
        'category' => 'Gym',
        'brand' => 'GymShark',
        'price' => 450,
        'stock' => 50,
        'description' => 'কব্জির ওপর চাপ না কমিয়ে পারফেক্ট পুশ-আপ দেওয়ার জন্য গ্রিপ বার।',
    ]);

    // ১৫. রেজিস্ট্যান্স ব্যান্ড
    Product::create([
        'name' => 'Resistance Band Set 5-in-1',
        'category' => 'Gym',
        'brand' => 'FitPro',
        'price' => 750,
        'stock' => 40,
        'description' => '৫টি ভিন্ন ওজনের এবং কালারের ফুল বডি ওয়ার্কআউট ব্যান্ড সেট।',
    ]);

    // ১৬. এক্সারসাইজ বল
    Product::create([
        'name' => 'Gym Ball 65cm',
        'category' => 'Gym',
        'brand' => 'Bolster',
        'price' => 850,
        'stock' => 20,
        'description' => 'ব্যালেন্স এবং কোর স্ট্রেন্থ বাড়ানোর জন্য অ্যান্টি-বার্স্ট জিম বল।',
    ]);

    // ১৭. রানিং গ্রিপ গ্লাভস
    Product::create([
        'name' => 'Gym Workout Gloves',
        'category' => 'Gym',
        'brand' => 'GymShark',
        'price' => 350,
        'stock' => 60,
        'description' => 'হাতের তালু সুরক্ষায় আরামদায়ক এবং অ্যান্টি-স্লিপ গ্লাভস।',
    ]);

    // ১৮. অ্যাব রোলার
    Product::create([
        'name' => 'Ab Roller Wheel',
        'category' => 'Gym',
        'brand' => 'FitPro',
        'price' => 600,
        'stock' => 25,
        'description' => 'পেটের চর্বি কমাতে এবং সিক্স প্যাক অ্যাবস তৈরির রোলার হুইল।',
    ]);

    // ১৯. রিস্ট সাপোর্ট গ্রিপার
    Product::create([
        'name' => 'Hand Gripper Adjustable',
        'category' => 'Gym',
        'brand' => 'Bolster',
        'price' => 250,
        'stock' => 80,
        'description' => '১০ থেকে ৬০ কেজি পর্যন্ত অ্যাডজাস্টেবল হ্যান্ড গ্রিপার।',
    ]);

    // ২০. স্কিপিং রোপ
    Product::create([
        'name' => 'Digital Skipping Rope',
        'category' => 'Gym',
        'brand' => 'FitPro',
        'price' => 400,
        'stock' => 100,
        'description' => 'জাম্প কাউন্টারসহ হাই-স্পিড ক্যালরি বার্নিং স্কিপিং রোপ।',
    ]);

    }
}
