<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Country;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Faq;
use App\Models\Product;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         User::factory()->create();
//         Contact::factory()->create();
         Country::factory(10)->create();
//         Customer::factory(10)->create();
//         Employee::factory()->create();
//         Faq::factory()->create();
//         Product::factory()->create();
//         Slider::factory()->create();
    }
}
