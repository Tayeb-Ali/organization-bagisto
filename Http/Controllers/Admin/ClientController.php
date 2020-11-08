<?php

namespace DOCore\Organization\Http\Controllers\Admin;

use DOCore\Organization\Http\Requests\ClientRequest;
use DOCore\Organization\Models\Client;
use DOCore\Organization\Models\CompanyBranch;
use DOCore\Organization\Models\Group;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class ClientController extends Controller
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
     * @return View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = $request->get('perPage') ? $request->get('perPage') : 25;

        if (!empty($keyword)) {
            $client = Client::where('company_id', 'LIKE', "%$keyword%")
                ->orWhere('group_id', 'LIKE', "%$keyword%")
                ->orWhere('cust_type', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('contact_person', 'LIKE', "%$keyword%")
                ->orWhere('phone', 'LIKE', "%$keyword%")
                ->orWhere('fax', 'LIKE', "%$keyword%")
                ->orWhere('pobox', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('country', 'LIKE', "%$keyword%")
                ->orWhere('city', 'LIKE', "%$keyword%")
                ->orWhere('address', 'LIKE', "%$keyword%")
                ->orWhere('have_branch', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('credit_limit', 'LIKE', "%$keyword%")
                ->orWhere('begin_bal_credit', 'LIKE', "%$keyword%")
                ->orWhere('begin_bal_debit', 'LIKE', "%$keyword%")
                ->orWhere('curr_bal_credit', 'LIKE', "%$keyword%")
                ->orWhere('curr_bal_debit', 'LIKE', "%$keyword%")
                ->orWhere('amend_by', 'LIKE', "%$keyword%")
                ->orWhere('amend_date', 'LIKE', "%$keyword%")
                ->orWhere('acc_mgr', 'LIKE', "%$keyword%")
                ->orWhere('account_code', 'LIKE', "%$keyword%")
                ->orWhere('last_trns_date', 'LIKE', "%$keyword%")
                ->orWhere('last_trns_value', 'LIKE', "%$keyword%")
                ->orWhere('last_trns_type', 'LIKE', "%$keyword%")
                ->orWhere('begin_bal_credit_fc', 'LIKE', "%$keyword%")
                ->orWhere('begin_bal_debit_fc', 'LIKE', "%$keyword%")
                ->orWhere('curr_bal_credit_fc', 'LIKE', "%$keyword%")
                ->orWhere('curr_bal_debit_fc', 'LIKE', "%$keyword%")
                ->orWhere('currency_code', 'LIKE', "%$keyword%")
                ->orWhere('allowance_days', 'LIKE', "%$keyword%")
                ->orWhere('mship_to_address', 'LIKE', "%$keyword%")
                ->orWhere('mship_to_phone', 'LIKE', "%$keyword%")
                ->orWhere('mship_to_fax', 'LIKE', "%$keyword%")
                ->orWhere('mship_to_city', 'LIKE', "%$keyword%")
                ->orWhere('mship_to_pobox', 'LIKE', "%$keyword%")
                ->orWhere('online_cust', 'LIKE', "%$keyword%")
                ->orWhere('analysis_code', 'LIKE', "%$keyword%")
                ->orWhere('sprice_list', 'LIKE', "%$keyword%")
                ->orWhere('vat_flag', 'LIKE', "%$keyword%")
                ->latest()->with(['company', 'group'])->paginate($perPage);
        } else {
            $client = Client::latest()->with(['company', 'group'])->paginate($perPage);
        }

        return view($this->_config['view'], compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(Request $request)
    {
        $client = new Client;

        $client->fill($request->old());
        $company = CompanyBranch::all('company_id', 'description');
        $group = Group::where('model_name', 'Client')->get(['group_id', 'group_desc']);


        return view($this->_config['view'], compact('client', 'company', 'group'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ClientRequest $request
     *
     * @return RedirectResponse|Redirector
     */
    public function store(ClientRequest $request)
    {
        $requestData = $request->all();
        $requestData['company_id'] = session('company_id');

        Client::create($requestData);

        session()->flash('success', trans('organization::app.client.add-success', ['name' => 'Client']));

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ClientRequest $request
     *
     * @return RedirectResponse|Redirector
     */
    public function storeAjax(ClientRequest $request)
    {
        $client = Client::create($request->all());
        if ($client) {
            return response()->json(['client' => $client, 'status' => true]);
        } else {
            return response()->json(['client' => $client, 'status' => false]);
        }


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
        $client = Client::findOrFail($id);

        return view($this->_config['view'], compact('client'));
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
        $client = Client::findOrFail($id);
        $company = CompanyBranch::all('company_id', 'description');
        $group = Group::where('model_name', 'Client')->get(['group_id', 'group_desc']);

        return view($this->_config['view'], compact('client', 'company', 'group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ClientRequest $request
     * @param int $id
     *
     * @return RedirectResponse|Redirector
     */
    public function update(ClientRequest $request, $id)
    {
        $requestData = $request->all();
        $requestData['company_id'] = session('company_id');

        $client = Client::findOrFail($id);
        $client->update($requestData);

        session()->flash('success', trans('organization::app.client.update-success', ['name' => 'Client']));

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
        $client = Client::findOrFail($id);

        if ($client->delete()) {
            session()->flash('success', trans('organization::app.client.delete-success', ['name' => 'Client']));

            return redirect()->route($this->_config['redirect']);
        } else {
            session()->flash('warning', trans('organization::app.client.delete-failure'));

            return redirect()->route($this->_config['redirect']);
        }
    }
}
