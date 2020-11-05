<?php

namespace DOCore\Organization\Http\Controllers\Admin;

use DOCore\Organization\Http\Requests\BankRequest;
use DOCore\Organization\Models\Bank;
use DOCore\Organization\Models\CompanyBranch;
use DOCore\Organization\Models\Group;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Webkul\Core\Models\Currency;

class BankController extends Controller
{
    /**
     * To hold the request variables from route file
     *
     * @var array
     */
    protected $_config;

    private $modelPath;

    public function __construct(Group $group)
    {
        $this->modelPath = $group;
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
            $bank = Bank::where('company_id', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('phone', 'LIKE', "%$keyword%")
                ->orWhere('fax', 'LIKE', "%$keyword%")
                ->orWhere('pobox', 'LIKE', "%$keyword%")
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
            $bank = Bank::latest()->paginate($perPage);
        }

        return view($this->_config['view'], compact('bank'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return View
     */
    public function create(Request $request)
    {
        $bank = new Bank;

        $bank->fill($request->old());
        $company = CompanyBranch::all('company_id', 'description');

        $currency = Currency::all();
        $group = Group::where('model_name', '=', 'Bank')->get(['group_id', 'group_desc']);
        return view($this->_config['view'], compact('bank', 'company', 'currency', 'group'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BankRequest $request
     *
     * @return RedirectResponse|Redirector
     */
    public function store(BankRequest $request)
    {
        $requestData = $request->all();

        Bank::create($requestData);

        session()->flash('success', trans('organization::app.bank.add-success', ['name' => 'Bank']));

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
        $bank = Bank::with('group')->findOrFail($id);
        return view($this->_config['view'], compact('bank'));
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
        $bank = Bank::findOrFail($id);
        $company = CompanyBranch::all('company_id', 'description');
        $currency = Currency::all();
        $group = Group::where('model_name', '=', 'Bank')->get(['group_id', 'group_desc']);


        return view($this->_config['view'], compact('bank', 'company', 'currency', 'group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BankRequest $request
     * @param int $id
     *
     * @return RedirectResponse|Redirector
     */
    public function update(BankRequest $request, $id)
    {
        $requestData = $request->all();

        $bank = Bank::findOrFail($id);
        $bank->update($requestData);

        session()->flash('success', trans('organization::app.bank.update-success', ['name' => 'Bank']));

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
        $bank = Bank::findOrFail($id);

        if ($bank->delete()) {
            session()->flash('success', trans('organization::app.bank.delete-success', ['name' => 'Bank']));

            return redirect()->route($this->_config['redirect']);
        } else {
            session()->flash('warning', trans('organization::app.bank.delete-failure'));

            return redirect()->route($this->_config['redirect']);
        }
    }
}
