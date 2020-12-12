<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product = new Product();
        $product->title = "Jarret de veau, carottes";
        $product->slug = "Slug1";
        $product->subtitle = "Exitium quandoque generalibus urbem ex";
        $product->description = "Quam ob rem id primum videamus, si placet, quatenus amor in amicitia progredi debeat. Numne, si Coriolanus habuit amicos, ferre contra patriam arma illi cum Coriolano debuerunt? num Vecellinum amici regnum adpetentem, num Maelium debuerunt iuvare?";
        $product->price = 65;
        $product->image = "jarret-veau.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Aiguillettes de homard au vin du Jura";
        $product->slug = "Slug2";
        $product->subtitle = "Exitium quandoque generalibus urbem ex";
        $product->description = "Quam ob rem id primum videamus, si placet, quatenus amor in amicitia progredi debeat. Numne, si Coriolanus habuit amicos, ferre contra patriam arma illi cum Coriolano debuerunt? num Vecellinum amici regnum adpetentem, num Maelium debuerunt iuvare?";
        $product->price = 140;
        $product->image = "aiguillettes.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Saint-Jacques, céleri";
        $product->slug = "Slug3";
        $product->subtitle = "Exitium quandoque generalibus urbem ex";
        $product->description = "Quam ob rem id primum videamus, si placet, quatenus amor in amicitia progredi debeat. Numne, si Coriolanus habuit amicos, ferre contra patriam arma illi cum Coriolano debuerunt? num Vecellinum amici regnum adpetentem, num Maelium debuerunt iuvare?";
        $product->price = 125;
        $product->image = "saint-jacques.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Risotto d’épeautre aux girolles et truffes";
        $product->slug = "Slug4";
        $product->subtitle = "Exitium quandoque generalibus urbem ex";
        $product->description = "Quam ob rem id primum videamus, si placet, quatenus amor in amicitia progredi debeat. Numne, si Coriolanus habuit amicos, ferre contra patriam arma illi cum Coriolano debuerunt? num Vecellinum amici regnum adpetentem, num Maelium debuerunt iuvare?";
        $product->price = 85;
        $product->image = "risotto.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Grosses langoustines soufflées";
        $product->slug = "Slug5";
        $product->subtitle = "Exitium quandoque generalibus urbem ex";
        $product->description = "Quam ob rem id primum videamus, si placet, quatenus amor in amicitia progredi debeat. Numne, si Coriolanus habuit amicos, ferre contra patriam arma illi cum Coriolano debuerunt? num Vecellinum amici regnum adpetentem, num Maelium debuerunt iuvare?";
        $product->price = 60;
        $product->image = "langoustines.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Poulet de Bresse aux gousses d’ail et foie gras aux cèpes";
        $product->slug = "Slug6";
        $product->subtitle = "Exitium quandoque generalibus urbem ex";
        $product->description = "Quam ob rem id primum videamus, si placet, quatenus amor in amicitia progredi debeat. Numne, si Coriolanus habuit amicos, ferre contra patriam arma illi cum Coriolano debuerunt? num Vecellinum amici regnum adpetentem, num Maelium debuerunt iuvare?";
        $product->price = 120;
        $product->image = "poulet-bresse.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Jambon blanc, truffe, spaghetti au parmesan";
        $product->slug = "Slug7";
        $product->subtitle = "Exitium quandoque generalibus urbem ex";
        $product->description = "Quam ob rem id primum videamus, si placet, quatenus amor in amicitia progredi debeat. Numne, si Coriolanus habuit amicos, ferre contra patriam arma illi cum Coriolano debuerunt? num Vecellinum amici regnum adpetentem, num Maelium debuerunt iuvare?";
        $product->price = 89;
        $product->image = "jambon-blanc.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Steak tartare";
        $product->slug = "Slug8";
        $product->subtitle = "Exitium quandoque generalibus urbem ex";
        $product->description = "Quam ob rem id primum videamus, si placet, quatenus amor in amicitia progredi debeat. Numne, si Coriolanus habuit amicos, ferre contra patriam arma illi cum Coriolano debuerunt? num Vecellinum amici regnum adpetentem, num Maelium debuerunt iuvare?";
        $product->price = 45;
        $product->image = "steak-tartare.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Salade façon César";
        $product->slug = "Slug9";
        $product->subtitle = "Exitium quandoque generalibus urbem ex";
        $product->description = "Quam ob rem id primum videamus, si placet, quatenus amor in amicitia progredi debeat. Numne, si Coriolanus habuit amicos, ferre contra patriam arma illi cum Coriolano debuerunt? num Vecellinum amici regnum adpetentem, num Maelium debuerunt iuvare?";
        $product->price = 35;
        $product->image = "salade-cesar.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Hamburger maison";
        $product->slug = "Slug10";
        $product->subtitle = "Exitium quandoque generalibus urbem ex";
        $product->description = "Quam ob rem id primum videamus, si placet, quatenus amor in amicitia progredi debeat. Numne, si Coriolanus habuit amicos, ferre contra patriam arma illi cum Coriolano debuerunt? num Vecellinum amici regnum adpetentem, num Maelium debuerunt iuvare?";
        $product->price = 23;
        $product->image = "hamburger-maison.jpg";
        $product->save();


    }
}
