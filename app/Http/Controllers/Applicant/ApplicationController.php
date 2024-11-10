<?php

namespace App\Http\Controllers\Applicant;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Applicant\BioData;
use App\Models\Applicant\Programme;
use App\Http\Controllers\Controller;
use App\Models\Applicant\Experience;
use App\Models\Applicant\Qualification;
use Illuminate\Support\Facades\Validator;

class ApplicationController extends Controller
{
    //admin

    public function index(){
        $data = BioData::with('skills')->with('qualification')->with('program')->with('user')->with('origin')->with('lga_origin')->with('residence')->with('residence_lga')->paginate(20);
        return Inertia::render('Dashboard',['data'=> $data]);
    }
    //





    public function preview(Request $request){
       
        $data = BioData::where(['user_pid' => $request->pid])->with('skills')->with('qualification')->with('program')->with('user')->with('origin')->with('lga_origin')->with('residence')->with('residence_lga')->first();
        return Inertia::render('Applicant/Preview',['data'=> $data]);
    }

    // applicant 
    //
    public function applicant(){
        $data = BioData::where(['user_pid' => getUserPid()])->with('skills')->with('qualification')->with('program')->with('user')->with('origin')->with('lga_origin')->with('residence')->with('residence_lga')->first();
        return Inertia::render('Applicant/Dashboard',['data'=> $data]);
    }
    //

    public function apply(){

        return Inertia::render('Applicant/Application');
    }

    public function bioData(Request $request){
        // logError($request->all());
        $validator = Validator::make($request->all(), [
            'nin' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'gender' => 'required|string',
            'dob' => 'required|string',
            'state_of_origin' => 'required',
            'lga_of_origin' => 'required',
            'residence_state' => 'required',
            'residence_lga' => 'required',
            'address' => 'required|string',
            // 'passport' => 'required|string',
            // 'nin_path' => 'required|string',
        ], [
            'quals.*.institution.required' => 'This is required',
            'quals.*.institution.string' => 'This must be a text',
            'quals.*.field.required' => 'This is required',
            'quals.*.year.required' => 'This is required',
            'quals.*.degree.required' => 'This is required',
            'quals.*.grade.required' => 'This is required',
        ]);

        if (!$validator->fails()) {

            try {
                // Store the file
                // if ($request->file('nin_path')) {
                //     $path = $request->file('nin_path')->store('files/bio', 'public'); // Store in public/uploads
                // }
                $data  = [
                    'user_pid' => getUserPid(),
                    'nin' => $request->nin,
                    // 'nin_path' => $request->,
                    // 'passport' => $request->,
                    'last_name' => $request->last_name,
                    'first_name' => $request->first_name,
                    'gender' => $request->gender,
                    'gsm' => $request->gsm,
                    'dob' => $request->dob,
                    'state_of_origin' => $request->state_of_origin,
                    'lga_of_origin' => $request->lga_of_origin,
                    'residence_state' => $request->residence_state,
                    'residence_lga' => $request->residence_lga,
                    'address' => $request->address,
                ];
                // Store the file
                if ($request->file('nin_path')) {
                    $data['nin_path'] = $request->file('nin_path')->store('files/bio', 'public'); // Store in public/uploads
                }
                // Store the file
                if ($request->file('passport')) {
                    $data['passport'] = $request->file('passport')->store('files/bio', 'public'); // Store in public/uploads
                }

                $result  = BioData::updateOrCreate(['user_pid' => $data['user_pid']],$data);
                return pushResponse($result, $request->pid ? 'Bio Data Updated' : 'Bio Data Recorded');

                return redirect()-> back()->with('success', 'Bio Data submitted successfully!');
            } catch (\Throwable $e) {
                logError($e->getMessage());
                return responseMessage(status: 204, data: [], msg: ERR_500);
            }
    }
        return responseMessage(data: $validator->errors()->toArray(), status: 422, msg: STS_422);


    }

    public function addEducation(Request $request){
        // logError($request->all());
        $validator = Validator::make($request->all(), [
            'quals.*.institution' => 'required|string',
            'quals.*.field' => 'required|string',
            'quals.*.year' => 'required|string',
            'quals.*.degree' => 'required|string',
            'quals.*.grade' => 'required|string',
        ],[
            'quals.*.institution.required' => 'This is required',
            'quals.*.institution.string' => 'This must be a text',
            'quals.*.field.required' => 'This is required',
            'quals.*.year.required' => 'This is required',
            'quals.*.degree.required' => 'This is required',
            'quals.*.grade.required' => 'This is required',
        ]);
        if (!$validator->fails()) {
            try {
                $count = count($request->quals);
                // return;
                $result = false;
                for ($i=0; $i < $count; $i++) {
                    $data = [
                        'user_pid' => getUserPid(),
                        'institution' => $request->quals[$i]['institution'],
                        'field' => $request->quals[$i]['field'],
                        'year' => $request->quals[$i]['year'],
                        'degree' => $request->quals[$i]['degree'],
                        'grade' => $request->quals[$i]['grade'],
                        'id' => $request->quals[$i]['id'] ?? null,
                    ]; 
                $result = Qualification::updateOrCreate(['id' =>$data['id']],$data);
                }
                return pushResponse($result, 'Education Details added');
                if($result){

                    return redirect()->back()->with('success', 'Education Details added');
                }
                return redirect()->back()->with('warning', 'Failed to add records');
                
                return $result;
            } catch (\Throwable $e) {
                logError($e->getMessage());
                return redirect()->back()->with('error', ERR_500);
            }
        }
        return responseMessage(data: $validator->errors()->toArray(), status: 422, msg: STS_422);
       
    }
    
    public function addProgram(Request $request){
        // logError($request->all());
        $request->validate([
            'program' => 'required',
            'sub_program' => 'required',
            'category' => 'required',
            'skills.*.skill' => 'required|string',
            'skills.*.certification' => 'required|string',
            'skills.*.year' => 'required|string',
        ],[
            'skills.*.skill.required' => 'This is required',
            'skills.*.skill.string' => 'This must be a text',
            'skills.*.certification.required' => 'This is required',
            'skills.*.year.required' => 'This is required',
            'skills.*.year.required' => 'This is required',
        ]);

        try {
            $data = [
                'user_pid' => getUserPid(),
                'program' => $request->program,
                'sub_program' =>$request->sub_program ,
                'category' => $request->category ,
            ];

            $result  = Programme::updateOrcreate(['user_pid' => $data['user_pid']],$data);
            $count = count($request->skills);
            if($count>0){
                // logError($request->skills);
                for ($i = 0; $i < $count; $i++) {
                    $fillable  = [
                        'user_pid' => getUserPid(),
                        'skill' => $request->skills[$i]['skill'],
                        'certification' => $request->skills[$i]['certification'],
                        'year' => $request->skills[$i]['year'],
                        'id' => $request->skills[$i]['id'] ?? null,
                        // 'path' => $request->skills[$i][''],
                    ];
                    // logError($request->file($request->skills[$i]['path']));
                    if ($request->file($request->skills[$i]['path'])) {
                        $fillable['path'] = $request->file($request->skills[$i]['path'])->store('files/bio', 'public'); // Store in public/uploads
                    }
                    $result  = Experience::updateOrCreate(['id' => $fillable['id']], $fillable);
                }
            }

            if ($result) {

                return to_route('applicant')->with('success', 'Program data Details added');
            }
            return redirect()->back()->with('warning', 'Failed to add Program record');
        } catch (\Throwable $e) {
            logError($e->getMessage());
            return redirect()->back()->with('error', ERR_500);
        }


        

        // logError($request->all());
        // return $request->all();
    }

}
