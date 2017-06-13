<?php

namespace App\Containers\Revision\Providers;

use App\Ship\Parents\Providers\MainProvider;
use JohannesSchobel\Revisionable\RevisionableServiceProvider;

/**
 * Class MainServiceProvider.
 *
 * The Main Service Provider of this container, it will be automatically registered in the framework.
 *
 * @author  Johannes Schobel <johannes.schobel@googlemail.com>
 */
class MainServiceProvider extends MainProvider
{

    /**
     * Container Service Providers.
     *
     * @var array
     */
    public $serviceProviders = [
        RevisionableServiceProvider::class
    ];

    /**
     * Container Aliases
     *
     * @var  array
     */
    public $aliases = [

    ];

    /**
     * Register anything in the container.
     */
    public function register()
    {
        parent::register();

        // do your binding here..
    }
}
