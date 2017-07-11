<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Task;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $tasks;

    public function __construct()
    {
        $this->middleware('auth');
        $this->tasks = Task::all();
    }

    public function index()
    {
        return view('welcome')->withTasks($this->tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function validateRequest(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required'
            ]);
    }

    public function store(Request $request)
    {
        $this->validateRequest($request);
        Task::create($request->all());
        $this->SessionSuccess('The task has been created');
        return redirect()->route('Task');
    }

    public function SessionSuccess($msg)
    {
        Session::flash('success',$msg);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit')->withTask($task);
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
        $this->validateRequest($request);
        $task = Task::find($id);
        $task->name = $request->name;
        $task->description = $request->description;
        $task->update();
        $this->SessionSuccess('The task has been updated');
        return redirect()->route('Task');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        $this->SessionSuccess('The task has been deleted');
        return redirect()->route('Task');
    }
}
