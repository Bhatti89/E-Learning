<?php

namespace App\Http\Controllers;

use App\Models\multipleunits;
use Illuminate\Http\Request;
use App\Models\unitexams;


class unitExamController extends Controller
{
    public function showUnitExam($unit)
    {
        $data = multipleunits::findOrFail($unit);
        // $new = $data->unit;
        // return$new;
        // return $data;
        return view('admin.auth.unitExamCreate', compact('data'));

    }
    public function uploadckeditorimg(Request $request)
    {
        if($request->hasFile('upload')){
            $originName=$request->file('upload')->getClientOriginalName();
            $fileName=pathinfo($originName, PATHINFO_FILENAME);
            $extension=$request->file('upload')->getClientOriginalExtension();
            $fileName=$fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('media'), $fileName);
            $url=asset('media/'.$fileName);
            return response()->json(['fileName'=>$fileName, 'uploaded'=>1,'url'=>$url]);

        }
    }

    public function storeUnitExam(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'text_field' => 'required',
            'description' => 'required',
            // 'adminUnit_id' => 'required',
        ]);

        $unitexam = unitexams::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'text_field'=>$request->input('text_field'),
            'adminUnit_id' => $request->input('unitid'),
        ]);
        return "Created successfully";

        return redirect()->route('unitexam.show', ['unitexam' => $unitexam]);
    }

    // public function displayForStudent(){
        
    // }
  

}
