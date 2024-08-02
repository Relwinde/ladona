<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
        // CREME
            ['name'=> 'Crème Chauffante', 'category'=>1, 'img'=>'creme_chauffante.jpg'],
            ['name'=> 'Crème Visage', 'category'=>1, 'img'=>'creme_visage.jpg'],
            ['name'=> 'Crème Visage Banane', 'category'=>1, 'img'=>'creme_visage_banane.jpg'],
            ['name'=> 'Crème Chewing Gum', 'category'=>1, 'img'=>'creme_chewing.jpg'],
            ['name'=> 'Crème Papaya', 'category'=>1, 'img'=>'creme_papaya.jpg'],
            ['name'=> 'Crème de visage réparatrice', 'category'=>1, 'img'=>'creme_reparatrice.jpg'],
            ['name'=> 'Crème lèvres roses', 'category'=>1, 'img'=>'creme_levre.jpg'],
            ['name'=> 'Crème raffermissante', 'category'=>1, 'img'=>'creme_rafferme.jpg'],
        // GAMME
            ['name'=> 'Gamme Banane', 'category'=>2, 'img'=>'gamme_banane.jpg'],
            ['name'=> 'Gamme Brown Skin', 'category'=>2, 'img'=>'gamme_brown.jpg'],
            ['name'=> 'Gamme Chewing Gum', 'category'=>2, 'img'=>'gamme_chewing.jpg'],
            ['name'=> 'Gamme diamant noir', 'category'=>2, 'img'=>'gamme_diamond.jpg'],
            ['name'=> 'Gamme Papaya', 'category'=>2, 'img'=>'gamme_papaya.jpg'],
        // GEL
            ['name'=> 'Gel de douche Cérémonial', 'category'=>3, 'img'=>'gel_ceremonial.jpg'],
            ['name'=> 'Gel de douche gommant miel', 'category'=>3, 'img'=>'gel_miel.jpg'],
        // GOMMAGE
            ['name'=> 'Gommage de corps Banane', 'category'=>4, 'img'=>'gommage_banane.jpg'],
            ['name'=> 'Gommage de corps Chewing-Gum', 'category'=>4, 'img'=>'gommage_chwim.jpg'],
            ['name'=> 'Gommage de corps diamant noir', 'category'=>4, 'img'=>'gommage_diamant.jpg'],
            ['name'=> 'Gommage de corps papaya', 'category'=>4, 'img'=>'gommage_papaya.jpg'],
            ['name'=> 'Gommage de visage', 'category'=>4, 'img'=>'gommage_visage.jpg'],
            ['name'=> 'Gommage Extra White', 'category'=>4, 'img'=>'gommage_extra.jpg'],
            ['name'=> 'Gommage lèvres roses', 'category'=>4, 'img'=>'gommage_levre.jpg'],
        // KIT
            ['name'=> 'Kit anti acné perfect facial', 'category'=>5, 'img'=>'kit_acné.jpg'],
            ['name'=> 'Kit lèvres roses', 'category'=>5, 'img'=>'kit_levre.jpg'],
        // LAIT
            ['name'=> 'Lait de corps Brown Skin', 'category'=>6, 'img'=>'lait_brown.jpg'],
            ['name'=> 'Lait de corps diamant noir', 'category'=>6, 'img'=>'lait_diamant.jpg'],
            ['name'=> 'Lait de corps jour Banane', 'category'=>6, 'img'=>'lait_banane.jpg'],
            ['name'=> 'Lait de corps jour Chwim-Gum', 'category'=>6, 'img'=>'lait_chwim.jpg'],
            ['name'=> 'Lait de corps nuit Banane', 'category'=>6, 'img'=>'lait_banane_nuit.jpg'],
            ['name'=> 'Lait de corps nuit Chwim-Gum', 'category'=>6, 'img'=>'lait_chwim_nuit.jpg'],
            ['name'=> 'Lait de corps Papaya', 'category'=>6, 'img'=>'lait_papaya.jpg'],
        // LOTION
            ['name'=> 'Lotion de visage', 'category'=>7, 'img'=>'lotion_visage.jpg'],
        // SAVON
            ['name'=> 'Savon Chwim-Gum', 'category'=>8, 'img'=>'savon_chwim.jpg'],
            ['name'=> 'Savon de Bébé', 'category'=>8, 'img'=>'savon_bebe.jpg'],
            ['name'=> 'Savon de corps Banane', 'category'=>8, 'img'=>'savon_banane.jpg'],
            ['name'=> 'Savon de corps Bébé', 'category'=>8, 'img'=>'savon_corps_bebe.jpg'],
            ['name'=> 'Savon de corps Brown Skin', 'category'=>8, 'img'=>'savon_brown.jpg'],
            ['name'=> 'Savon de corps Chwim-Gum', 'category'=>8, 'img'=>'savon_corps_chwim.jpg'],
            ['name'=> 'Savon de corps Cocktail de fruit', 'category'=>8, 'img'=>'savon_cocktail.jpg'],
            ['name'=> 'Savon de corps Extra White', 'category'=>8, 'img'=>'savon_extra.jpg'],
            ['name'=> 'Savon de corps Papaya', 'category'=>8, 'img'=>'savon_papaye.jpg'],
            ['name'=> 'Savon de corps pour homme', 'category'=>8, 'img'=>'savon_homme.jpg'],
            ['name'=> 'Savon de luxe corps', 'category'=>8, 'img'=>'savon_luxe.jpg'],
            ['name'=> 'Savon de visage Banane', 'category'=>8, 'img'=>'savon_visage_banane.jpg'],
            ['name'=> 'Savon de visage Brown Skin', 'category'=>8, 'img'=>'savon_visage_brown.jpg'],
            ['name'=> 'Savon de visage Chwim-Gum', 'category'=>8, 'img'=>'savon_visage_chwim.jpg'],
            ['name'=> 'Savon de visage Fleur de Lune', 'category'=>8, 'img'=>'savon_visage_fleur.jpg'],
            ['name'=> 'Savon de visage Papaya', 'category'=>8, 'img'=>'savon_visage_papaya.jpg'],
            ['name'=> 'Savon de visage Vampire', 'category'=>8, 'img'=>'savon_visage_vampire.jpg'],
            ['name'=> 'Savon noir blanchissant', 'category'=>8, 'img'=>'savon_blanchissant.jpg'],
            ['name'=> 'Savon Papaya', 'category'=>8, 'img'=>'savon_papaya.jpg'],
        // SERUM
            ['name'=> 'Sérum anti vergetures', 'category'=>9, 'img'=>'serum_vergetures.jpg'],
            ['name'=> 'Sérum DONA Gold Luxury', 'category'=>9, 'img'=>'serum_gold.jpg'],
    
        ];

        foreach($products as $product){
            Product::create($product);
        }

    }
}
