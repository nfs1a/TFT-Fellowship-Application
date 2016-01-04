<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BasicRequest;
use Log;

use Auth;
use App\Progress;
use App\Basic;
use App\EduHistory;

class BasicController extends Controller
{
    public function create()
    {
        $userBasic = Auth::user()->basic()->first();
        $eduHistorys = isset(Auth::user()->basic()->with('eduHistorys')->first()->eduHistorys)? Auth::user()->basic()->with('eduHistorys')->first()->eduHistorys: null;
        $loginUser = Auth::check() ? Auth::user()->email : null;
        $data = compact('loginUser', 'userBasic', 'eduHistorys');
        return view('basic.create',$data);
    }

    public function api()
    {
        $userBasic = Auth::user()->basic()->first();
        $eduHistorys = isset(Auth::user()->basic()->with('eduHistorys')->first()->eduHistorys)? Auth::user()->basic()->with('eduHistorys')->first()->eduHistorys: null;
        // Log::info('------- BasicController: create -------');
        // Log::info($userBasic);
        // Log::info($eduHistorys);
        // Log::info('===============================================\n\n');
        $loginUser = Auth::check() ? Auth::user()->email : null;
        return $data = compact('loginUser', 'userBasic', 'eduHistorys');
    }


    public function store(BasicRequest $request)
    {

        $input = $request->all();
        Log::info('------- BasicController: store/input -------'); 
        Log::info($input);        
        Log::info('===============================================\n\n');

        Auth::user()->basic()->delete();
        $basic = new Basic;
        $basic->name = $input['name'];
        $basic->idNumber = $input['idNumber'];
        $basic->sex = $input['sex'];
        $basic->birthday = $input['birthday'];
        $basic->phone = $input['phone'];
        $basic->cellPhone = $input['cellPhone'];
        $basic->skype = $input['skype'];
        $basic->email = $input['email'];
        $basic->secEmail = $input['secEmail'];
        $basic->county = $input['county'];
        $basic->district = $input['district'];
        $basic->zipcode = $input['zipcode'];
        $basic->address = $input['address'];
        $basic->status = $input['status'];
        // Log::info('------- BasicController: store/basic -------'); 
        // Log::info($basic);        
        // Log::info('===============================================\n\n');
        Auth::user()->basic()->save($basic);

        Auth::user()->basic()->first()->eduHistorys()->delete();
        foreach ([0,1,2] as $i) {
            $eduHistory = new EduHistory;
            $eduHistory->school = $input['school'][$i];
            $eduHistory->degreeLevel = $input['degreeLevel'][$i];
            $eduHistory->major = $input['major'][$i];
            $eduHistory->majorMainClass = $input['majorMainClass'][$i];
            $eduHistory->majorSubClass = $input['majorSubClass'][$i];
            $eduHistory->eduMainArea = $input['eduMainArea'][$i];
            $eduHistory->eduSubArea = $input['eduSubArea'][$i];
            $eduHistory->eduPeriodStartYear = $input['eduPeriodStartYear'][$i];
            $eduHistory->eduPeriodStartMon = $input['eduPeriodStartMon'][$i];
            $eduHistory->eduPeriodEndYear = $input['eduPeriodEndYear'][$i];
            $eduHistory->eduPeriodEndMon = $input['eduPeriodEndMon'][$i];
            $eduHistory->eduStatus = $input['eduStatus'][$i];
            Auth::user()->basic()->first()->eduHistorys()->save($eduHistory);
        }

        $progress = Auth::user()->progress;
        $progress->basic = 1;
        Auth::user()->progress()->save($progress);

        return redirect('/dashboard');
    }

}
