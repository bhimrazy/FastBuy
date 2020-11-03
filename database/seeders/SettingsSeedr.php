<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingsSeedr extends Seeder
{
    /**
     * @var array
     */
    protected $settings = [
        [
            'key'                       =>  'site_name',
            'value'                     =>  'Fast Buy',
        ],
        [
            'key'                       =>  'site_title',
            'value'                     =>  'FastBuy - Home and Kitchen Appliances | Mega Shop',
        ],
        [
            'key'                       =>  'site_author',
            'value'                     =>  'Bhim Raj Yadav',
        ],
        [
            'key'                       =>  'default_email_address',
            'value'                     =>  'admin@admin.com',
        ],
        [
            'key'                       =>  'currency_code',
            'value'                     =>  'NPR',
        ],
        [
            'key'                       =>  'currency_symbol',
            'value'                     =>  'Rs',
        ],
        [
            'key'                       =>  'site_logo',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'site_favicon',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'footer_copyright_text',
            'value'                     =>  'Copyright © 2020 <a href="/">FastBuy</a>. All rights reserved.',
        ],
        [
            'key'                       =>  'seo_meta_title',
            'value'                     =>  'FastBuy - Home and Kitchen Appliances | Mega Shop',
        ],
        [
            'key'                       =>  'seo_meta_description',
            'value'                     =>  'FastBuy - Home and Kitchen Appliances | Mega Shop',
        ],
        [
            'key'                       =>  'seo_meta_keywords',
            'value'                     =>  'FastBuy - Home and Kitchen Appliances | Mega Shop',
        ],
        [
            'key'                       =>  'social_facebook',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'social_twitter',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'social_instagram',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'social_linkedin',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'google_analytics',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'facebook_pixels',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'stripe_payment_method',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'stripe_key',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'stripe_secret_key',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'paypal_payment_method',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'paypal_client_id',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'paypal_secret_id',
            'value'                     =>  '',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->settings as $index => $setting)
        {
            $result = Setting::create($setting);
            if (!$result) {
                $this->command->info("Insert failed at record $index.");
                return;
            }
        }
        $this->command->info('Inserted '.count($this->settings). ' records');
    }
}
