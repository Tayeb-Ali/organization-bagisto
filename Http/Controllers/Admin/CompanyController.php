<?php

namespace DOCore\Organization\Http\Controllers\Admin;

use Auth;
use DOCore\Organization\Models\Client;
use DOCore\Organization\Models\Employ;
use DOCore\Organization\Models\Supplier;
use  DOCore\Organization\Repositories\CompanyRepository;
use DOCore\Organization\Http\Requests\CompanyRequest;
use DOCore\Organization\Models\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class CompanyController extends Controller
{
    /**
     * To hold the request variables from route file
     *
     * @var array
     */
    protected $_config;

    /**
     * CustomerRepository object
     *
     * @var CompanyRepository
     */
    protected $companyRepository;


    public function __construct(CompanyRepository $companyRepository)
    {
        $this->_config = request('_config');
        $this->companyRepository = $companyRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request)
    {
        $company = $this->companyRepository->index($request);
        return view($this->_config['view'], compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return View
     */
    public function create(Request $request)
    {
        $companySelect = session('company_id');
        $subCompany = Company::where('company_id', $companySelect)
            ->where('has_sub_company', 1)->get();
        $company = new Company;

        $company->fill($request->old());

        return view($this->_config['view'], compact('company', 'subCompany'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CompanyRequest $request
     *
     * @return RedirectResponse|Redirector
     */
    public function store(CompanyRequest $request)
    {
        $requestData = $request->all();
        $requestData['amend_by'] = Auth::user()->id;

        if ($request->has_sub_company) {
            if ($request->company_parent_id) {
                session()->flash('warning', trans('organization::app.company.delete-error1', ['name' => 'Company']));
                return redirect()->back();
            }
        }

        Company::create($requestData);

        session()->flash('success', trans('organization::app.company.add-success', ['name' => 'Company']));

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return View
     */
    public function show($id)
    {
        $company = Company::with('main')->findOrFail($id);
        if ($company->has_sub_company) {
            $subCompany = Company::where('company_parent_id', $id)->get();
            return view($this->_config['view'], compact('company', 'subCompany'));
        } else {
            $subCompany = '';
            return view($this->_config['view'], compact('company', 'subCompany'));
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return View
     */
    public function edit($id)
    {
//        $subCompany = Company::where('has_sub_company', 1)->get(['company_id', 'description']);
        $companySelect = session('company_id');
        $subCompany = Company::where('company_id', $companySelect)
            ->where('has_sub_company', 1)->get();
        $company = Company::findOrFail($id);

        return view($this->_config['view'], compact('company', 'subCompany'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     *
     * @return RedirectResponse|Redirector
     */
    public function update(CompanyRequest $request, $id)
    {
        $requestData = $request->all();
        $requestData['amend_by'] = Auth::user()->id;

        if ($request->has_sub_company && $request->company_parent_id) {
            session()->flash('warning', trans('organization::app.company.delete-error1', ['name' => 'Company']));
            return redirect()->back();
        }

        $company = Company::findOrFail($id);
        $company->update($requestData);

        session()->flash('success', trans('organization::app.company.update-success', ['name' => 'Company']));

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return RedirectResponse|Redirector
     */
    public function delete($id)
    {
        $employ = Employ::where('company_id', $id)->get()->count();
        $supplier = Supplier::where('company_id', $id)->get()->count();
        $client = Client::where('company_id', $id)->get()->count();
        $company = Company::findOrFail($id);
        if ($company->company_parent_id) {
            session()->flash('success', trans('organization::app.company.delete-error2', ['name' => 'Company']));
            return redirect()->route($this->_config['redirect']);
        }

        if (!isset($company->has_sub_company)) {
            session()->flash('success', trans('organization::app.company.delete-error3', ['name' => 'Company']));
            return redirect()->back();
        } elseif ($supplier || $employ || $client) {
            session()->flash('success', trans('organization::app.company.delete-error5', ['name' => 'Company']));
            return redirect() - back();
        }
        $companys = Company::where('company_parent_id', $id)->first();
        if (!$companys) {
            $company->delete();
            session()->flash('success', trans('organization::app.company.delete-success', ['name' => 'Company']));
            return redirect()->route($this->_config['redirect']);
        } else {
            session()->flash('warning', trans('organization::app.company.delete-failure'));
            return redirect()->route($this->_config['redirect']);
        }
    }


}
