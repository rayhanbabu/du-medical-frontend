<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    
    public function home_page(Request $request){
        return view('home.home');
    }

    public function office_page(Request $request){
        $office=$request->office;
        $page_id=$request->page_id;

          $response = Http::get(baseURL().'/page/'.$page_id);
          if($response['status']=="success"){
              return view('home.officePage',['data'=>$response['data']]);
           }else{
               return "No Data Found";
           }
    }


      public function schedule(Request $request){
        $office=$request->office;
       
          $response = Http::get(baseURL().'/serviceSchedule');
          if($response['status']=="success"){
              return view('home.schedule',['data'=>$response['data']]);
           }else{
               return "No Data Found";
           }
      }


      public function schedule_detail(Request $request){
         $office=$request->office;
         $service_name=$request->service_name;

          $response = Http::get(baseURL().'/serviceScheduleDetail/'.$service_name);
          if($response['status']=="success"){
              return view('home.scheduleDetail',['data'=>$response['data']]);
           }else{
               return "No Data Found";
           }
      }


      public function people(Request $request){
          return view('home.people');
      }

}
