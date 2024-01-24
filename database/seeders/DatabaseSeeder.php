<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Transaction;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Roles;
use App\Models\Wallet;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         Roles::create([
            "name" => "bank"
         ]);

         Roles::create([
            "name" => "kantin"
         ]);

         Roles::create([
            "name" => "siswa"
         ]);


         User::create([
            "name" => "mamad",
            "role_id" => 3,
            "password" => bcrypt("mamad123")
         ]);

         User::create([
            "name" => "bank",
            "role_id" => 2,
            "password" => bcrypt("bank")
         ]);



         Category::create([
            "name" => "Desert"
         ]);

         Category::create([
            "name" => "Snack"
         ]);


         Category::create([
            "name" => "Drink"
         ]);

         Category::create([
            "name" => "Makanan Berat"
         ]);

         Product::create([
            "name" => "Roti Goreng",
            "price" =>  6000,
            "stock" => 64,
            "photo" => "test",
            "desc" => "test",
            "category_id" => 4,
            "stand" => 2
         ]);

         Product::create([
            "name" => "Lemon Ice Tea",
            "price" =>  5000,
            "stock" => 56,
            "photo" => "test",
            "desc" => "test",
            "category_id" => 3,
            "stand" => 2
         ]);

         Product::create([
            "name" => "Es Yakjuz",
            "price" =>  9000,
            "stock" => 36,
            "photo" => "https://www.errenskitchen.com/wp-content/uploads/2014/08/lemon-Iced-Tea.jpg",
            "desc" => "test",
            "category_id" => 3,
            "stand" => 2
         ]);


         Product::create([
            "name" => "Mie Makjuz",
            "price" =>  15000,
            "stock" => 26,
            "photo" => "test",
            "desc" => "test",
            "category_id" => 1,
            "stand" => 2
         ]);

         Product::create([
            "name" => "kwetiaw syirem",
            "price" =>  15000,
            "stock" => 26,
            "photo" => "test",
            "desc" => "test",
            "category_id" => 2,
            "stand" => 2
         ]);

         Product::create([
            "name" => "Jus mangga",
            "price" =>  15000,
            "stock" => 26,
            "photo" => "test",
            "desc" => "test",
            "category_id" => 3,
            "stand" => 2
         ]);

         Product::create([
            "name" => "Siomay",
            "price" =>  15000,
            "stock" => 26,
            "photo" => "test",
            "desc" => "test",
            "category_id" => 2,
            "stand" => 2
         ]);

         Wallet::create([
           "user_id" => 1,
           "credit" => 100000,
           "debit" => 0,
           "status" => "confirmed"
        ]);

         Wallet::create([
            "user_id" => 2,
            "credit" => 300000,
            "debit" => 0,
            "status" => "confirmed"
          ]);



         Transaction::create([
            "user_id" => 2,
            "product_id" => 1,
            "status" => 'not_paid',
            "order_id" => 'INV-12345',
            "quantity" => 2,
            "price" => 3000
         ]);



    }
}
