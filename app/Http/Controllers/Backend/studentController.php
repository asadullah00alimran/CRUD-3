<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\stdudentModel;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.student.manage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new stdudentModel;
        $student->name = $request->name;
        $student->roll = $request->roll;
        $student->registration_no = $request->registration_no;
        $student->department = $request->department;
        $student->semester = $request->semester;
        $student->father_name = $request->father_name;
        $student->mother_name = $request->mother_name;
        $student->gender = $request->gender;
        $student->status = $request->status;
        $student->save();
        return response()->json([
            'status'=>'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $student = stdudentModel::all();
        return response()->json([
            'status'=>'success',
            'data'=>$student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = stdudentModel::find($id);
        $student->name = $request->name;
        $student->roll = $request->roll;
        $student->registration_no = $request->registration_no;
        $student->department = $request->department;
        $student->semester = $request->semester;
        $student->father_name = $request->father_name;
        $student->mother_name = $request->mother_name;
        $student->gender = $request->gender;
        $student->status = $request->status;
        $student->update();
        return response()->json([
            'status'=>'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $student = stdudentModel::find($id);
        $student->delete();
        return response()->json([
            'status'=>'success',
        ]);
    }
    
    public function status($id)
    {
        
        $student = stdudentModel::find($id);
        if($student->status==1){
            $student->status=0;
        }
        else{
            $student->status=1;
        }
        $student->update();
        return response()->json([
            'status'=>'success',
        ]);
    }

    
    public function get($id)
    {
        $student = stdudentModel::find($id);
        return response()->json([
            'status'=>'success',
            'data'=>$student
        ]);
    }
}
