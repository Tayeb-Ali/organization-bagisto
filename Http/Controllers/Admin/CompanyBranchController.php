<?php

namespace DOCore\Organization\Http\Controllers\Admin;

use DOCore\Organization\Http\Controllers\Admin\Controller;
use DOCore\Organization\Models\CompanyBranch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Webkul\User\Models\Admin;

class CompanyBranchController extends Controller
{
    /**
     * To hold the request variables from route file
     *
     * @var array
     */
    protected $_config;

    public function __construct()
    {
        $this->_config = request('_config');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = $request->get('perPage') ? $request->get('perPage') : 25;

        if (!empty($keyword)) {
            $companybranch = CompanyBranch::where('company_id', 'LIKE', "%$keyword%")
                ->orWhere('short_desc', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('branch_country', 'LIKE', "%$keyword%")
                ->orWhere('branch_weight', 'LIKE', "%$keyword%")
                ->orWhere('branch_manager', 'LIKE', "%$keyword%")
                ->orWhere('currency', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('amend_by', 'LIKE', "%$keyword%")
                ->orWhere('amend_date', 'LIKE', "%$keyword%")
                ->orWhere('phone', 'LIKE', "%$keyword%")
                ->orWhere('fax', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('cost_center', 'LIKE', "%$keyword%")
                ->orWhere('ship_to_address', 'LIKE', "%$keyword%")
                ->orWhere('ship_to_phone', 'LIKE', "%$keyword%")
                ->orWhere('ship_to_fax', 'LIKE', "%$keyword%")
                ->orWhere('ship_to_city', 'LIKE', "%$keyword%")
                ->orWhere('ship_to_country', 'LIKE', "%$keyword%")
                ->orWhere('bill_to_address', 'LIKE', "%$keyword%")
                ->orWhere('bill_to_phone', 'LIKE', "%$keyword%")
                ->orWhere('bill_to_fax', 'LIKE', "%$keyword%")
                ->orWhere('bill_to_city', 'LIKE', "%$keyword%")
                ->orWhere('bill_to_country', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $companybranch = CompanyBranch::latest()->paginate($perPage);
        }

        return view($this->_config['view'], compact('companybranch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $companybranch = new CompanyBranch;

        $companybranch->fill($request->old());

        return view($this->_config['view'], compact('companybranch'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'short_desc' => 'required'
		]);
        $requestData = $request->all();
        
        CompanyBranch::create($requestData);

        session()->flash('success', trans('organization::app.company-branch.add-success', ['name' => 'CompanyBranch']));

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $companybranch = CompanyBranch::findOrFail($id);

        return view($this->_config['view'], compact('companybranch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $companybranch = CompanyBranch::findOrFail($id);

        return view($this->_config['view'], compact('companybranch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'short_desc' => 'required'
		]);
        $requestData = $request->all();
        
        $companybranch = CompanyBranch::findOrFail($id);
        $companybranch->update($requestData);

        session()->flash('success', trans('organization::app.company-branch.update-success', ['name' => 'CompanyBranch']));

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete($id)
    {
        $companybranch = CompanyBranch::findOrFail($id);

        if ($companybranch->delete())
        {
            session()->flash('success', trans('organization::app.company-branch.delete-success', ['name' => 'CompanyBranch']));

            return redirect()->route($this->_config['redirect']);
        }
        else
        {
            session()->flash('warning', trans('organization::app.company-branch.delete-failure'));

            return redirect()->route($this->_config['redirect']);
        }
    }
}
