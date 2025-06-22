<?php

namespace Branzia\Cms;
use Illuminate\Support\Facades\File;
use Branzia\Blueprint\BranziaServiceProvider;
use Branzia\Blueprint\Contracts\ProvidesFilamentDiscovery;
class CmsServiceProvider extends BranziaServiceProvider implements ProvidesFilamentDiscovery
{
    public function moduleName(): string
    {
        return 'Cms';
    }
    public function moduleRootPath():string{
        return dirname(__DIR__);
    }
    
    public function boot():void
    {
        parent::boot();
    }

    public function register(): void
    {
        parent::register();
    }
    public static function filamentDiscoveryPaths(): array
    {
        return [
            'resources' => [
                ['path' => __DIR__.'/Filament/Resources', 'namespace' => 'Branzia\\Cms\\Filament\\Resources'],
            ],
            'pages' => [
                ['path' => __DIR__.'/Filament/Pages', 'namespace' => 'Branzia\\Cms\\Filament\\Pages'],
            ],
            'clusters' => [
                ['path' => __DIR__.'/Filament/Clusters', 'namespace' => 'Branzia\\Cms\\Filament\\Clusters'],
            ],
            'widgets' => [
                ['path' => __DIR__.'/Filament/Widgets', 'namespace' => 'Branzia\\Cms\\Filament\\Widgets'],
            ],
        ];
    }
}

