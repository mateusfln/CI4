<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TaskModel;

class Task extends BaseController
{
    private $taskModel;

    public function __construct()
    {
        $this->taskModel = new TaskModel();
    }

    public function index()
    {
        return view('tasks', [
            'tasks' => $this->taskModel->findAll(),
        ]);
    }

    public function create()
    {
        return view('form');
    }

    public function store()
    {
        $postData = $this->request->getPost();
        if ($this->taskModel->save($postData)) {
            session()->setFlashdata('success', 'Task successfully '. ($postData['id'] ? 'updated!' : 'created!'));
            return redirect('tasks');
        }

        session()->setFlashdata('error', 'Failed to create task.');
        return redirect()->back()->withInput();
    
    }

    public function update($id)
    {
        return view('form', [
            'task' => $this->taskModel->find($id),
        ]);
    }

    public function delete($id)
    {
        $this->taskModel->delete($id)
            ? session()->setFlashdata('success', 'Task '. $id .' successfully deleted!')
            : session()->setFlashdata('error', 'Failed to delete task.');

        return redirect('tasks');
    }
}
