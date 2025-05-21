<?php

namespace App\Http\Controllers;
use App\Models\projects;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    function exp(){
    	return  view('home').view('nav').view('exp');
    }
    function certificate(){
    	return  view('home').view('nav').view('cft');
    }
    public function storeproject(Request $r)
    {  
		$res= new projects;
        $res->id=$r->post('id');
        $res->projectname=$r->input('projname');
        $res->projectpath=$r->input('projpath');
        $res->projecttype=$r->input('projecttype');
        $res->status=1;
        $res->save();

		return redirect('admin/add_proj'); 
        //$r->session()->flash('msg','project Added Successfully');
        
    } 
    public function showprojectsphp()
    {
    	//$data=projects::all();
    	$data=DB::table('projects')->where('projecttype','php')->get();
	  	return view('home').view('nav').view('php',['members'=>$data]);        
    }
    public function showphplar()
    {
    	$data=DB::table('projects')->where('projecttype','phplaravel')->get();
	  	return view('home').view('nav').view('phplaravel',['members'=>$data]);        
    }
    public function showpython()
    {
    	$data=DB::table('projects')->where('projecttype','python')->get();
	  	return view('home').view('nav').view('python',['members'=>$data]);        
    }
}
