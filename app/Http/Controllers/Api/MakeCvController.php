<?php

namespace App\Http\Controllers\Api;

use App\Enclose;
use App\Http\Controllers\Controller;
use App\Language;
use App\Personal;
use App\Professional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MakeCvController extends Controller
{
    protected $data;

    public function index()
    {
        return "ok";
    }

    public function store(Request $request)
    {
//        dd('ff');

        DB::transaction(function () use ($request) {
            try {
                $personal = Personal::create($request->all());


                $pro_country = explode(',', $request->pro_country);
                $years = explode(',',$request->years);
                $company_name = explode(',',$request->company_name);
                $position = explode(',',$request->position);
                $from = explode(',', $request->from);
                $to = explode(',',$request->to);


                foreach ($pro_country as $key => $no) {
                    $input['pro_country '] = $no;
                    $input['candidate_id'] = $personal->id;
                    $input['years'] = $years[$key];
                    $input['company_name'] = $company_name[$key];
                    $input['position'] = $position[$key];
                    $input['from'] = $from[$key];
                    $input['to'] = $to[$key];

                    Professional::create($input);

                }


                $enclose = new Enclose();
                $enclose->candidate_id = $personal->id;
                $enclose->passport = $this->imageupload($request->passport, 'passport');
                $enclose->photo = $this->imageupload($request->photo, 'photo');
                $enclose->education = $this->imageupload($request->education, 'education');
                $enclose->experience = $this->imageupload($request->experience, 'experience');
                $enclose->langu = $this->imageupload($request->langu, 'langu');
                $enclose->police = $this->imageupload($request->police, 'police');
                $enclose->skill = $this->imageupload($request->skill, 'skill');
                $enclose->medical = $this->imageupload($request->medical, 'medical');
                $enclose->idcard = $this->imageupload($request->job_test, 'job_test');
                $enclose->save();
                Language::create(['candidate_id' => $personal->id] + $request->all());
                $this->data['satus_code'] = 200;
                $this->data['message'] = 'Successfully saved';
            } catch (\Exception $e) {
                $this->data['satus_code'] = 400;
                $this->data['message'] = $e;
            }

        });

        return response()->json($this->data);
    }
}
