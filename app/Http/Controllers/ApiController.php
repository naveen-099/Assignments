<?php

namespace App\Http\Controllers;

use App\course;
use Illuminate\Http\Request;

class ApiController extends Controller
{


    public function index(){

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://api.coursera.org/api/courses.v1');
        $result = $res->getBody();
        $res_array = json_decode($result, true);

        return view('show',compact('res_array'));


    }

    public  function save(Request $request,$results){

        //echo $results;

        //dd($request->all());

        $course_data = new course();
        $course_data->course_id= $request['id'];
        $course_data->course_type= $results;
        $course_data->course_name= $request['name'];
        $course_data->save();

        return redirect('/data');

    }

    public function show(Request $request,$results){

        $data = \DB::table('courses')->select('*')->where('course_id',$results)->get();

        return view('course-view',compact('data'));
}


}
