<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produit::create([
            'titre'=>'p1',
            'prix'=>50,
            'image'=>'p1.jpg',
            'createur'=>1,
            'stock'=>4,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p2',
            'prix'=>50,
            'image'=>'p2.jpg',
            'createur'=>1,
            'stock'=>4,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p3',
            'prix'=>50,
            'image'=>'p3.jpg',
            'createur'=>1,
            'stock'=>3,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p4',
            'prix'=>50,
            'image'=>'p4.jpg',
            'createur'=>1,
            'stock'=>1,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p5',
            'prix'=>50,
            'image'=>'p5.jpg',
            'createur'=>1,
            'stock'=>1,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p6',
            'prix'=>50,
            'image'=>'p6.jpg',
            'createur'=>1,
            'stock'=>4,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p7',
            'prix'=>50,
            'image'=>'p7.jpg',
            'createur'=>1,
            'stock'=>2,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p8',
            'prix'=>50,
            'image'=>'p8.jpg',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p9',
            'prix'=>50,
            'image'=>'p9.jpg',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p10',
            'prix'=>50,
            'image'=>'p10.jpg',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p12',
            'prix'=>50,
            'image'=>'p6.jpg',
            'createur'=>1,
            'stock'=>1,
            'categorie'=>'Plastic chair',
        ]);
        Produit::create([
            'titre'=>'p13',
            'prix'=>50,
            'image'=>'p1.jpg',
            'createur'=>1,
            'stock'=>15,
            'categorie'=>'Plastic chair',
        ]);
        Produit::create([
            'titre'=>'p14',
            'prix'=>50,
            'image'=>'p4.jpg',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Plastic chair',
        ]);
        Produit::create([
            'titre'=>'p15',
            'prix'=>50,
            'image'=>'p2.jpg',
            'createur'=>1,
            'stock'=>3,
            'categorie'=>'Plastic chair',
        ]);


    }
}
