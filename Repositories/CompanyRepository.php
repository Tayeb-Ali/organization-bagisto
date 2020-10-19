<?php

use DOCore\Organization\Models\Company;
use Webkul\Core\Eloquent\Repository;

class CompanyRepository extends Repository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Company::class;
    }
}