<?php


namespace App\Services;

use App\Repositories\PlantsRepository;

class PlantsService
{
    private $plantsRepository;

    public function __construct(PlantsRepository $plantsRepository)
    {
        $this->plantsRepository = $plantsRepository;
    }

}