<?php

namespace App\Domain\EstateManagement\Service;

use App\Domain\EstateManagement\Repository\Contract\Directorate\JobTitleRepository;
use App\Domain\EstateManagement\Repository\Contract\Directorate\RoleTaskRepository;
use App\Domain\EstateManagement\Service\Contract\JobTitleServiceInterface;
use Illuminate\Support\Collection;

class StockService implements StockServiceInterface
{


    public function __construct(

    ) {

    }

    /**
     * 役職取得
     *
     * @param int $estateId
     * @return Collection
     */
    public function findJobTitles(int $estateId): Collection
    {
        return $this->jobTitleRepository->find($estateId);
    }

    /**
     * 役職に紐づく詳細を取得
     *
     * @param int $estateId
     * @return Collection
     */
    public function getWithJobTitles(int $estateId): Collection
    {
        return $this->jobTitleRepository->getWithJobTitles($estateId);
    }

    /**
     * クラセルでのやる事リスト取得
     *
     * @return Collection
     */
    public function findRoleTasks(): Collection
    {
        return $this->roleTaskRepository->find();
    }

    /**
     * 役職の追加
     * @param array $jobTitle
     * @return int
     */
    public function createJobTitle(array $jobTitle): int
    {
        return $this->jobTitleRepository->create($jobTitle);
    }

    /**
     * クラセル以外のやる事の追加
     * @param array $jobTitleTasks
     * @param int $jobTitleId
     * @return int
     */
    public function createJobTitleTask(array $jobTitleTasks, int $jobTitleId): int
    {
        return $this->jobTitleRepository->createJobTitleTask($jobTitleTasks, $jobTitleId);
    }

    /**
     * 役職の編集
     * 役職IDに紐づく詳細を取得
     *
     * @param int $jobTitleId
     * @return Collection
     */
    public function getJobTitle(int $jobTitleId): Collection
    {
        return $this->jobTitleRepository->getWithJobTitle($jobTitleId);
    }
}
