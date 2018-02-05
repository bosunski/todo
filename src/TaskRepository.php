<?php

namespace Bosunski\Todo;

use Bosunski\Todo\Task;

class TaskRepository
{
    public function create($data)
    {
        $task = new Task;
        $task->title = $data['title'];
        $task->category_id = $data['category_id'] ?? 1;
        $task->completed = 0;
        $task->save();
        return $task;
    }

    public function getAll()
    {
        return Task::with('category')->orderBy('completed')->get();
    }

    public function delete($id)
    {
        return Task::where('id', $id)->delete();
    }

    public function editTask($data)
    {
        //dd($data);
        $update = [
            'category_id' => $data['category_id'],
            'title' => $data['title'],
            'completed' => $data['completed'] ? 0 : 1,
        ];

        $task = Task::where('id', $data['id'])->update($update);
        return $task;
    }
}
