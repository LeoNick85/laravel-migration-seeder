<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Generator as Faker;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $dati_prodotti = config('products_data');

        foreach ($dati_prodotti as $dati_prodotto) {
            $nuovo_prodotto = new Product();
            $nuovo_prodotto->product_name = $dati_prodotto['product_name'];
            $nuovo_prodotto->price = $dati_prodotto['price'];
            $nuovo_prodotto->product_code = $dati_prodotto['product_code'];
            $nuovo_prodotto->save();
        }

        for ($i=0; $i < 10; $i++) {
            $nuovo_prodotto = new Product();
            $nuovo_prodotto->product_name = $faker->word;
            $nuovo_prodotto->price = $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 200);
            $nuovo_prodotto->product_code = $faker->text($maxNbChars = 6);
            $nuovo_prodotto->save();
        }
    }
}
