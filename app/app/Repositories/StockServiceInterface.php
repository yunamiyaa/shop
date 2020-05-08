<?php


namespace App\Repositories;

interface StockServiceInterface
{
    public function create($desired_condition);

    public function update($request,$job_seeker_id);
}
