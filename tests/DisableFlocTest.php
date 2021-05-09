<?php

namespace Chrysanthos\DisableFloc\Tests;

use Chrysanthos\DisableFloc\DisableFlocServiceProvider;
use Illuminate\Support\Facades\Route;
use Orchestra\Testbench\TestCase;

class DisableFlocTest extends TestCase
{
    public function test_that_the_header_is_added_successfully()
    {
        Route::middleware('web')
            ->group(function () {
                Route::get('no-floc', function () {
                    return 'Bye Google!';
                });
            });

        $this
            ->get('no-floc')
            ->assertSuccessful()
            ->assertSee('Bye Google!')
            ->assertHeader('Permissions-Policy', 'interest-cohort=()');
    }

    protected function getPackageProviders($app)
    {
        return [
            DisableFlocServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('app.key', 'base64:KYr9VlshYmVt5Xogy80TJhhIetfQ93+vbGqCnnIyoXg=');
    }
}
