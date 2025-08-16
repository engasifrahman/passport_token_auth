<?php

namespace Tests\Feature;

use Laravel\Passport\Client;
use Illuminate\Support\Facades\Artisan;

class PassportAccessClient
{
    /**
     * Create a personal access client if it doesn't exist
     *
     * @return void
     */
    public static function createPersonalAccessClient()
    {
        if (! Client::where('personal_access_client', 1)->first()) {
            Artisan::call('passport:client --personal --no-interaction');
        }
    }
}
