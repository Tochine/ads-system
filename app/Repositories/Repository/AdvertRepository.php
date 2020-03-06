<?php

namespace App\Repositories\Repository;

use App\Entities\Repository\Advert;
use App\Interfaces\Repository\AdvertInterface;
use Shamaseen\Repository\Generator\Utility\AbstractRepository;
use Illuminate\Container\Container as App;

/**
 * Class AdvertRepository
 * @package App\Repositories\Repository
 * @property-read Advert $model
 */
class AdvertRepository extends AbstractRepository implements AdvertInterface
{
    protected $with = [];

    /**
     * @param App $app
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function __construct(App $app)
    {
        parent::__construct($app);
    }

    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        return Advert::class;
    }

    public function all()
    {
        return Advert::orderBy('title', 'asc')->get();

    }

    public function findById($advert)
    {
        return Advert::where('id', $advert)->firstOrFail();
    }

    public function updateById($advert)
    {
        $advert = Advert::where('id', $advert)->firstOrFail();
        $advert->update(request()->only('title'));
    }

    public function deleteById($advert)
    {
        $advert = Advert::where('id', $advert)->delete();
    }
}
