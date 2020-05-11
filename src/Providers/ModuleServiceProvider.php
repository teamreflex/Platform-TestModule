<?php

namespace Platform\Test\Providers;

use App\Framework\ModuleProvider;

class ModuleServiceProvider extends ModuleProvider
{
    protected string $modulePath = __DIR__ . '/../module.php';
}
