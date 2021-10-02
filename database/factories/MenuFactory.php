<?php

namespace Database\Factories;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Menu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $menu_name = $this->faker->unique()->words($nb = 4, $asText = true);
        $slug = Str::slug($menu_name);

        return [
            'name' => $menu_name,
            'slug' => $slug,
            'description' => $this->faker->text(500),
            'regular_price' => $this->faker->numberBetween(10, 500),
            'MENU' => 'FOOD'.$this->faker->unique()->numberBetween(100, 500),
            'stock_status' => 'instock',
            'quantity' => $this->faker->numberBetween(100, 200),
            'image' => 'menu-'. $this->faker->unique()->numberBetween(1, 20),
            'category_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
