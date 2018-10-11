<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
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

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $task = $this->task->find($id);
        if (!$task) {
            abort(404, 'не нашел');
        }

        return view('tasks.detail', compact('task'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $task = $this->task->find($id);
        if (!$task) {
            abort(404, 'не нашел');
        }

        return view('tasks.edit', compact('task'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $task = $this->task->find($id);
        if (!$task) {
            redirect()->back()->withErrors('error');
        }
        $task->update($request->all());

        return redirect()->back()->with('success', 'cool');
    }

    /**
     * @param $id
     */
    public function destroy($id)
    {
        $task = $this->task->find($id);
        if ($task) {
            $task->delete();
        }
    }
}
