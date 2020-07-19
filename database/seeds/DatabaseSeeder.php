<?php

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
        $this->call([
            PermissionSeedr::class,
            CategorySeedr::class,
            SubcategorySeedr::class,
            TagsSeedr::class,
            BrandSeedr::class,
            ProductSeedr::class,
        ]);

    }
}
