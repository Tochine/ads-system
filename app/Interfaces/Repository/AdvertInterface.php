<?php

namespace App\Interfaces\Repository;


use Shamaseen\Repository\Generator\Utility\ContractInterface;

/**
 * Interface AdvertInterface
 * @package App\Interfaces\Repository
 */
interface AdvertInterface extends ContractInterface
{
    public function all();

    public function create(array $data);

    public function findById($advert);

    public function updateById($advert);

    public function deleteById($advert);
}
