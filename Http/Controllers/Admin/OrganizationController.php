<?php

namespace DOCore\Organization\Http\Controllers\Admin;

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
}
