<?php

namespace App\Http\Controllers;


use App\Models\Verify;
use App\Models\WebLog;
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
        if (!$verfiy) {
            $save = new Verify();
            $save->fill($request->all());
            $save->save();
            $this->createLog($request);
            return $save;
        }
        if ($verfiy) {
            $this->createLog($request);
            return $verfiy;
        }
        return false;
    }

    public function bugfix()
    {
        return null;
    }

    /**
     * @param $data
     * @return WebLog
     */
    public function createLog(Request $data)
    {
        $log = new WebLog();
        $log->domain = $data->domain;
        $log->log_content = json_encode($data->all());
        $log->save();
        return $log;
    }
}
