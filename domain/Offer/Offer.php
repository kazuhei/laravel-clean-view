<?php

namespace Domain\Offer;

use Domain\Base\DisplayHash;

class Offer
{
    private $id;
    private $isClosed;
    private $company;
    private $recruitment;

    public function __construct(OfferId $id, bool $isClosed, Company $company, Recruitment $recruitment)
    {
        $this->id = $id;
        $this->isClosed = $isClosed;
        $this->company = $company;
        $this->recruitment = $recruitment;
    }

    public function id(): OfferId
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->company->name();
    }

    public function type(): string
    {
        return $this->isClosed ? 'closed' : 'open';
    }

    public function isOpen(): bool
    {
        return !$this->isClosed;
    }

    public function summaryDisplayHash():DisplayHash
    {
        return DisplayHash::fromArray([
            '都道府県' => $this->company->prefecture(),
            '職種' => $this->recruitment->role(),
            '従業員数' => $this->company->numberOfEmployee(),
        ]);
    }

    public function companyDisplayHash(): DisplayHash
    {
        return $this->company->displayHash();
    }

    public function recruitmentDisplayHash(): DisplayHash
    {
        return $this->recruitment->displayHash();
    }
}
