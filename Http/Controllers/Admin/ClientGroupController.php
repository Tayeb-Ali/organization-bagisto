<?php

namespace DOCore\Organization\Http\Controllers\Admin;

use DOCore\Organization\Http\Controllers\Admin\Controller;
use DOCore\Organization\Models\ClientGroup;
use DOCore\Organization\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Webkul\User\Models\Admin;

class ClientGroupController extends Controller
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
            $clientgroup = ClientGroup::where('company_id', 'LIKE', "%$keyword%")
                ->orWhere('group_desc', 'LIKE', "%$keyword%")
                ->orWhere('account_code', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('amend_by', 'LIKE', "%$keyword%")
                ->orWhere('amend_date', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $clientgroup = ClientGroup::latest()->paginate($perPage);
        }

        return view($this->_config['view'], compact('clientgroup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $clientgroup = new ClientGroup;

        $clientgroup->fill($request->old());
        $company = Company::all('company_id', 'description');

        return view($this->_config['view'], compact(['clientgroup', 'company']));
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
			'company_id' => 'required',
			'group_desc' => 'required'
		]);
        $requestData = $request->all();
        
        ClientGroup::create($requestData);

        session()->flash('success', trans('organization::app.client-group.add-success', ['name' => 'ClientGroup']));

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
        $clientgroup = ClientGroup::findOrFail($id);

        return view($this->_config['view'], compact('clientgroup'));
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
        $clientgroup = ClientGroup::findOrFail($id);
        $company = Company::all('company_id', 'description');


        return view($this->_config['view'], compact('clientgroup', 'company'));
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
			'company_id' => 'required',
			'group_desc' => 'required'
		]);
        $requestData = $request->all();
        
        $clientgroup = ClientGroup::findOrFail($id);
        $clientgroup->update($requestData);

        session()->flash('success', trans('organization::app.client-group.update-success', ['name' => 'ClientGroup']));

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
        $clientgroup = ClientGroup::findOrFail($id);

        if ($clientgroup->delete())
        {
            session()->flash('success', trans('organization::app.client-group.delete-success', ['name' => 'ClientGroup']));

            return redirect()->route($this->_config['redirect']);
        }
        else
        {
            session()->flash('warning', trans('organization::app.client-group.delete-failure'));

            return redirect()->route($this->_config['redirect']);
        }
    }
}
