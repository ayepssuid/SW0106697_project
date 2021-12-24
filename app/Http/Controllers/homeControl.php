<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Projects;


class homeControl extends Controller
{
    


    function index()
    {
        return view("home");
    }

    /*function dashboard()
    {
        $projects = Project::all();
        return view('projectmanager.pmanager',compact("data"));

    }*/

    function redirectFunct()
    {
        $typeuser=optional(Auth::user())->usertype;

        if ($typeuser=='1')
        {
            $data=user::all();
            return view('admin.adminpage',compact("data"));
        }
        elseif($typeuser=='2')
        {
            /*$data=user::all();
            return view('projectmanager.pmanager',compact("data")); */

            
            $projects = projects::all();

           // $projects = projects::with('projects','users')->get();
            return view('projectmanager.pmanager',['projects'=>$projects,'layout'=>'redirectFunct']);
            
        }
        elseif($typeuser=='3')
        {
            /*$data=user::all();
            return view('projectmanager.pmanager',compact("data")); */

            
            $projects = projects::all();

           // $projects = projects::with('projects','users')->get();
            return view('projectleader.leaderpage',['projects'=>$projects,'layout'=>'redirectFunct']);
            
        }
        else
        {
            return view('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
      $projects = projects::all() ;
      return view('projectmanager.pmanager',['projects'=>$projects,'layout'=>'create']);
    }

    public function store(Request $request)
    {
        $projects = new projects() ;

  


        $projects->project_name = $request->input('project_name') ;
        $projects->start_date = $request->input('start_date') ;
        $projects->end_date = $request->input('end_date') ;
        $projects->duration = $request->input('duration') ;
        $projects->cost = $request->input('cost') ;
        $projects->project_status = $request->input('project_status') ;
        $projects->project_stage = $request->input('project_stage') ;
        $projects->save() ;
        return redirect('/redirect') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)    
    {
      $project = projects::find($id) ;
      $projects = projects::all() ;
      return view('projectleader.leaderpage','projectmanager.pmanager',['projects'=>$projects,'project'=>$project,'layout'=>'show']);
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)    
    {
      $project = projects::find($id) ;
      $projects = projects::all() ;
      return view('projectleader.leaderpage',['projects'=>$projects,'project'=>$project,'layout'=>'edit']);
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
      $projects = projects::find($id);
      $projects->project_name = $request->input('project_name') ;
      $projects->start_date = $request->input('start_date') ;
      $projects->end_date = $request->input('end_date') ;
      $projects->duration = $request->input('duration') ;
      $projects->cost = $request->input('cost') ;
      $projects->project_status = $request->input('project_status') ;
      $projects->project_stage = $request->input('project_stage') ;
      $projects->save() ;
      return redirect('/redirect') ;
    }
    



    function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

   


    
}
