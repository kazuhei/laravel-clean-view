<?php

namespace Domain\Offer;

use Domain\Offer\Company\Ceo;
use Domain\Offer\Company\CompanyName;
use Domain\Offer\Company\Founded;
use Domain\Offer\Company\NumberOfEmployee;
use Domain\Offer\Company\Prefecture;
use Domain\Offer\Recruitment\Role;
use Domain\Offer\Recruitment\RoleDescription;
use Domain\Offer\Recruitment\Skills;
use Model\OfferModel;

class OfferRepository
{
    private $model;

    public function __construct(OfferModel $model)
    {
        $this->model = $model;
    }

    public function getList()
    {
        $result = $this->model->getList();

        return new OfferList(array_map(function ($model) {
            return $this->convert($model);
        }, $result));
    }

    public function get(OfferId $id)
    {
        return $this->convert($this->model->getById($id->rawValue()));
    }

    private function convert(OfferModel $model): Offer
    {
        return new Offer(
            new OfferId($model->id),
            $model->is_closed,
            new Company(
                new CompanyName($model->company_name),
                new Founded($model->founded),
                new Ceo($model->ceo),
                new Prefecture($model->prefecture),
                new NumberOfEmployee($model->number_of_employee)
            ),
            new Recruitment(
                new Role($model->role),
                new RoleDescription($model->role_description),
                new Skills($model->skills)
            )
        );
    }
}
