<?php

namespace Domain\Offer;

use Domain\Base\DisplayHash;
use Domain\Base\DisplayHashable;
use Domain\Offer\Company\Ceo;
use Domain\Offer\Company\CompanyName;
use Domain\Offer\Company\Founded;
use Domain\Offer\Company\NumberOfEmployee;
use Domain\Offer\Company\Prefecture;

class Company implements DisplayHashable
{
    private $name;
    private $founded;
    private $ceo;
    private $prefecture;
    private $numberOfEmployee;

    public function __construct(CompanyName $name, Founded $founded, Ceo $ceo, Prefecture $prefecture, NumberOfEmployee $numberOfEmployee)
    {
        $this->name = $name;
        $this->founded = $founded;
        $this->ceo = $ceo;
        $this->prefecture = $prefecture;
        $this->numberOfEmployee = $numberOfEmployee;
    }

    public function name(): CompanyName
    {
        return $this->name;
    }

    public function prefecture(): Prefecture
    {
        return $this->prefecture;
    }

    public function numberOfEmployee(): NumberOfEmployee
    {
        return $this->numberOfEmployee;
    }

    public function displayHash(): DisplayHash
    {
        return DisplayHash::fromArray([
            '会社名' => $this->name,
            '設立年度' => $this->founded,
            '代表者名' => $this->ceo,
            '都道府県' => $this->prefecture,
            '従業員数' => $this->numberOfEmployee,
        ]);
    }
}
