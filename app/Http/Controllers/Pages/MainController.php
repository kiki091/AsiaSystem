<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Custom\Facades\DataHelper;
use App\Http\Controllers\FrontController;
use App\Services\Api\Response as ResponseService;

use Auth;
use Session;
use Validator;
use ValidatesRequests;

class MainController extends FrontController
{

	protected $response;
    protected $validationMessage = '';

    public function __construct(ResponseService $response)
    {
        $this->response = $response;
    }

    /**
     * Index Data 
     */

    public function index(Request $request)
    {
    	$blade = self::URL_BLADE_FRONT_SITE.'.main';

        if(view()->exists($blade)) 
        {
            return view($blade);
        }
        return abort(404);
    }
}