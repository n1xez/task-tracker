<?php

namespace App\Http\Controllers;

use App\Models\Tasks\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * @var Task
     */
    private $task;

    /**
     * TaskController constructor.
     * @param Task $task
     */
    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $tasks = $this->task->all();

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.add');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->task->create($request->all());

        return redirect('/')->with('success', 'cool');
    }

    public function edit(Request $request)
    {
        return view('tasks.edit');
    }

    public function update()
    {
        return redirect()->back()->with('success', 'cool');
    }
}