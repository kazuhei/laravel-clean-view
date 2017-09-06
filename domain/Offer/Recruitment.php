<?php

namespace Domain\Offer;

use Domain\Base\DisplayHash;
use Domain\Base\DisplayHashable;
use Domain\Offer\Recruitment\Role;
use Domain\Offer\Recruitment\RoleDescription;
use Domain\Offer\Recruitment\Skills;

class Recruitment implements DisplayHashable
{
    private $role;
    private $roleDescription;
    private $skills;

    public function __construct(Role $role, RoleDescription $roleDescription, Skills $skills)
    {
        $this->role = $role;
        $this->roleDescription = $roleDescription;
        $this->skills = $skills;
    }

    public function role(): Role
    {
        return $this->role;
    }

    public function displayHash(): DisplayHash
    {
        return DisplayHash::fromArray([
            '職種' => $this->role,
            '業務内容' => $this->roleDescription,
            '必要なスキル' => $this->skills,
        ]);
    }
}
