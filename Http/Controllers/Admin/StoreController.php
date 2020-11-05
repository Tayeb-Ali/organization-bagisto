<?php

namespace DOCore\Organization\Http\Controllers\Admin;

use DOCore\Organization\Http\Requests\StoreRequest;
use DOCore\Organization\Models\Employ;
use DOCore\Organization\Models\Store;
use DOCore\Organization\Models\Group;
use DOCore\Organization\Models\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Webkul\Core\Models\Currency;

class StoreController extends Controller
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
     * @param Request $request
     * @return View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = $request->get('perPage') ? $request->get('perPage') : 25;
        if (!empty($keyword)) {
            $store = Store::where('company_id', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('store_keeper', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('credit_limit', 'LIKE', "%$keyword%")
                ->orWhere('begin_bal_credit', 'LIKE', "%$keyword%")
                ->orWhere('begin_bal_debit', 'LIKE', "%$keyword%")
                ->orWhere('curr_bal_credit', 'LIKE', "%$keyword%")
                ->orWhere('curr_bal_debit', 'LIKE', "%$keyword%")
                ->orWhere('amend_by', 'LIKE', "%$keyword%")
                ->orWhere('amend_date', 'LIKE', "%$keyword%")
                ->orWhere('last_trns_date', 'LIKE', "%$keyword%")
                ->orWhere('dept_code', 'LIKE', "%$keyword%")
                ->orWhere('sub_store_mandatory', 'LIKE', "%$keyword%")
                ->orWhere('store_location', 'LIKE', "%$keyword%")
                ->orWhere('last_trns_value', 'LIKE', "%$keyword%")
                ->orWhere('last_trns_type', 'LIKE', "%$keyword%")
                ->orWhere('curr_bal_credit_fc', 'LIKE', "%$keyword%")
                ->orWhere('cost_center_code', 'LIKE', "%$keyword%")
                ->orWhere('curr_bal_debit_fc', 'LIKE', "%$keyword%")
                ->orWhere('currency', 'LIKE', "%$keyword%")
                ->orWhere('analysis_code', 'LIKE', "%$keyword%")
                ->latest()->with('group')->paginate($perPage);
        } else {
            $store = Store::latest()->with('group')->paginate($perPage);
        }

        return view($this->_config['view'], compact('store'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return View
     */
    public function create(Request $request)
    {
        $store = new Store;

        $store->fill($request->old());
        $company = Company::all('company_id', 'description');

        $currency = Currency::all();
        $group = Group::all();
        $employ = Employ::all();
        return view($this->_config['view'], compact('store', 'company', 'currency', 'group', 'employ'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     *
     * @return RedirectResponse|Redirector
     */
    public function store(StoreRequest $request)
    {
        $requestData = $request->all();

        Store::create($requestData);

        session()->flash('success', trans('organization::app.store.add-success', ['name' => 'Store']));

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
        $store = Store::findOrFail($id);

        return view($this->_config['view'], compact('store'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return View
     *
     */
    public function edit($id)
    {
        $store = Store::findOrFail($id);
        $company = Company::all('company_id', 'description');
        $currency = Currency::all();
        $group = Group::all();
        $employ = Employ::all();
        return view($this->_config['view'], compact('store', 'company', 'currency', 'group', 'employ'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     *
     * @return RedirectResponse|Redirector
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();

        $store = Store::findOrFail($id);
        $store->update($requestData);

        session()->flash('success', trans('organization::app.store.update-success', ['name' => 'Store']));

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
        $store = Store::findOrFail($id);

        if ($store->delete()) {
            session()->flash('success', trans('organization::app.store.delete-success', ['name' => 'Store']));

            return redirect()->route($this->_config['redirect']);
        } else {
            session()->flash('warning', trans('organization::app.store.delete-failure'));

            return redirect()->route($this->_config['redirect']);
        }
    }
}
