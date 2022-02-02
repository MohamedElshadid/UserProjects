<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile(){
        $user= User::find(Auth::user()->id);
        $user->avatar = $user->getAvatar();
        $user->tasks = $user->tasks()->sum('num_tasks');
        
        if($user->targettasks)
            $user->target_task = round(($user->targettasks->target_tasks / $user->tasks) * 100 );
        else
            $user->target_task = 0;

        $projects = Project::leftJoin('tasks','projects.id','tasks.project_id')
                    ->where('tasks.user_id',Auth::user()->id)
                    ->select([
                        'projects.id',
                        'projects.project_name',
                        'projects.date',
                        'projects.status',
                        'projects.location',
                        'tasks.num_tasks',
                    ])
                    ->get();

        return response(['user'=>$user , 'projects' => $projects],200);
    }
}
