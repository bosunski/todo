<?php

namespace Bosunski\Todo;

use Bosunski\Todo\Task;

class CategoryRepository
{
    public function create($data)
    {
        $task = new Category;
        $task->title = $data['title'];
        $task->save();
        return $task;
    }

    public function getAll()
    {
        return Category::all();
    }

    public function delete($id)
    {
        return Category::where('id', $id)->delete();
    }


    public function editCategory($data)
    {
        $update = [
            'title' => $data['title'],
        ];

        $task = Category::where('id', $data['category_id'])->update($update);
        return $task;
    }
}
