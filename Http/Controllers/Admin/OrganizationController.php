<?php

namespace DOCore\Organization\Http\Controllers\Admin;

use DOCore\Organization\Models\Company;
use Webkul\User\Models\Admin;
use Illuminate\Support\Facades\Auth;

class OrganizationController extends Controller
{
    /**
     * To hold the request variables from route file
     *
     * @var array
     */
    protected $_config;

    public function __construct()
    {
        $this->middleware('admin');
        $this->_config = request('_config');
    }

    public function index()
    {
        return view($this->_config['view']);
    }

    public function selectMainCompany(Request $request)
    {
        $company = Company::where('company_id', $request->company_id)->first(['description', 'company_id']);
        $request->session()->put('company_name', $company->description);
        $request->session()->put('company_id', $request->company_id);
        return back();


    }
}
