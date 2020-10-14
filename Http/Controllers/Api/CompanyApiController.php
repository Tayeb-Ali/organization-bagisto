<?php

namespace DOCore\Organization\Http\Controllers\Api;

use DOCore\Organization\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Webkul\User\Models\Admin;

class CompanyApiController extends Controller
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
     * @return Company
     */
    public function index()
    {
        return Company::all();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Company
     */
    public function show($id)
    {
        return Company::findOrFail($id);
    }

}
