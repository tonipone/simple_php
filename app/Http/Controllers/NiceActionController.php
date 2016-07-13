<?php


namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;

class NiceActionController extends BaseController
{
    public function getNiceAction($action,$name = null){


        return view('actions.'.$action,['name' => $name]);
    }

    public function postNiceAction(Request $request){

        if(isset($request['action']) && $request['name']){
            if(strlen($request['name']) > 0){
                return view('actions.nice',['action' => $request['action'], 'name' => $this->transformName($request['name'])]);
            }
            return redirect()->back();
        }

        return redirect()->back();

    }


    public function transformName($name)
    {

        $prefix = 'KING ';
        return $prefix . strtoupper($name);
    }
}