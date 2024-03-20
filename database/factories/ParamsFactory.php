<?php

namespace Database\Factories;

use SicoHelpers\Helpers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Params>
 */
class ParamsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nom"=>"ShallomFinance",
            "slogan"=>"The Bank Slogan",
            "logo"=>"public/img/logos/logoComplet.png",
            "url"=>"http://127.0.0.1:8000/",
            "defaultCurrency"=>"€",
            "defaultLanguage"=>"francais",
            "token"=>Helpers::tokener()
        ];
    }
}
