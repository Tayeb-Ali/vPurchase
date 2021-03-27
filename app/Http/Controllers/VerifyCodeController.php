<?php

namespace App\Http\Controllers;


use App\Models\Verify;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class VerifyCodeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        return 'welcome boy';
    }


    public function check($domain)
    {
        $cehck = Verify::where('domain', $domain)->first();
        if (!isEmpty($cehck)) {
            return response()->json($cehck);
        }
        return 404;
    }

    public function verify(Request $request)
    {
        $verfiy = Verify::where('domain', $request->domain)->first();
        if (isEmpty($verfiy)) {
            $save = Verify::created($request->all());
            return $save;
        }
    }

    public function bugfix()
    {
        return null;
    }
}
