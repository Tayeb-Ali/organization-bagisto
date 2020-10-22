<?php


namespace DOCore\Organization\Http\View\Composers;



use DOCore\Organization\Models\Company;
use Illuminate\View\View;

class CompanyComposer
{


    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with('company', Company::orderBy('company_id')->get(['company_id', 'description']));
    }
}