<?php

namespace Chrysanthos\DisableFloc;

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider;

class DisableFlocServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make(Kernel::class)
            ->prependMiddlewareToGroup('web', DisableFlocMiddleware::class);
    }
}
