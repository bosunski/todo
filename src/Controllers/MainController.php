<?php

namespace Bosunski\Todo\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Bosunski\Todo\TaskRepository;
use Bosunski\Todo\CategoryRepository;

class MainController extends Controller
{
    public function __construct(TaskRepository $task, CategoryRepository $category)
    {
        $this->task = $task;
        $this->category = $category;
    }

    public function index()
    {
        $data['categories'] = $this->category->getAll();
        $data['tasks'] = $this->task->getAll();
        return view('todo::index', $data);
    }

    public function saveTask(Request $request)
    {
        $task = $this->task->create($request->all());
        if ($task) {
            return ['done' => true];
        }
    }
    public function deleteTask(Request $request, $id)
    {
        $task = $this->task->delete($id);
        if ($task) {
            return ['done' => true];
        }
    }

    public function editTask(Request $request)
    {
        $task = $this->task->editTask($request->all());
        if ($task) {
            return ['done' => true];
        }
    }

    public function addCategory(Request $request)
    {
        $category = $this->category->create($request->all());
        if ($category) {
            return redirect()->back();
        }
    }


    public function editCategory(Request $request)
    {
        $category = $this->category->editCategory($request->all());
        if ($category) {
            return redirect()->back();
        }
    }
}
