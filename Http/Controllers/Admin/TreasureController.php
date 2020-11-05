<?php

namespace DOCore\Organization\Http\Controllers\Admin;

use DOCore\Organization\Models\Employ;
use DOCore\Organization\Models\Treasure;
use DOCore\Organization\Models\Group;
use DOCore\Organization\Models\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Webkul\Core\Models\Currency;

class TreasureController extends Controller
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
            $treasure = Treasure::where('company_id', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('casher', 'LIKE', "%$keyword%")
                ->orWhere('name_o', 'LIKE', "%$keyword%")
                ->orWhere('currency_code', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('credit_limit', 'LIKE', "%$keyword%")
                ->orWhere('begin_bal_credit', 'LIKE', "%$keyword%")
                ->orWhere('begin_bal_debit', 'LIKE', "%$keyword%")
                ->orWhere('curr_bal_credit', 'LIKE', "%$keyword%")
                ->orWhere('curr_bal_debit', 'LIKE', "%$keyword%")
                ->orWhere('amend_by', 'LIKE', "%$keyword%")
                ->orWhere('amend_date', 'LIKE', "%$keyword%")
                ->orWhere('last_trns_date', 'LIKE', "%$keyword%")
                ->orWhere('last_trns_value', 'LIKE', "%$keyword%")
                ->orWhere('last_trns_type', 'LIKE', "%$keyword%")
                ->orWhere('begin_bal_credit_fc', 'LIKE', "%$keyword%")
                ->orWhere('begin_bal_debit_fc', 'LIKE', "%$keyword%")
                ->orWhere('curr_bal_credit_fc', 'LIKE', "%$keyword%")
                ->orWhere('curr_bal_debit_fc', 'LIKE', "%$keyword%")
                ->orWhere('currency', 'LIKE', "%$keyword%")
                ->orWhere('analysis_code', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $treasure = Treasure::latest()->paginate($perPage);
        }

        return view($this->_config['view'], compact('treasure'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return View
     */
    public function create(Request $request)
    {
        $treasure = new Treasure;

        $treasure->fill($request->old());
        $company = Company::all('company_id', 'description');
        $employ = Employ::all();

        $currency = Currency::all();
        $group = Group::all();
        return view($this->_config['view'], compact('treasure', 'company', 'currency', 'group', 'employ'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $requestData = $request->all();

        Treasure::create($requestData);

        session()->flash('success', trans('organization::app.treasure.add-success', ['name' => 'treasure']));

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
        $treasure = Treasure::findOrFail($id);

        return view($this->_config['view'], compact('treasure'));
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
        $treasure = Treasure::findOrFail($id);
        $company = Company::all('company_id', 'description');
        $currency = Currency::all();
        $group = Group::all();
        $employ = Employ::all();

        return view($this->_config['view'], compact('treasure', 'company', 'currency', 'group', 'employ'));
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

        $treasure = Treasure::findOrFail($id);
        $treasure->update($requestData);

        session()->flash('success', trans('organization::app.treasure.update-success', ['name' => 'treasure']));

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
        $treasure = Treasure::findOrFail($id);
        if ($treasure->delete()) {
            session()->flash('success', trans('organization::app.treasure.delete-success', ['name' => 'treasure']));

            return redirect()->route($this->_config['redirect']);
        } else {
            session()->flash('warning', trans('organization::app.treasure.delete-failure'));

            return redirect()->route($this->_config['redirect']);
        }
    }
}
