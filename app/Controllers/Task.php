<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TaskModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Model;
use CodeIgniter\Router\Router;

class Task extends BaseController
{
    private $taskModel;

    public function __construct()
    {
        $this->taskModel = new TaskModel();
    }

    public function index(string $message = null): String
    {
        return view('tasks', [
            'tasks' => $this->taskModel->findAll(),
            'message' => $message,
        ]);
    }

    public function create(): String
    {
        return view('form');
    }

    public function store()
    {
        if($this->taskModel->save($this->request->getPost())){
            return $this->index('Task successfully created!');
        }
    }

    public function update($id)
    {
        return view('form', [
            'task' => $this->taskModel->find($id),
        ]);
    }

    public function delete($id): String
    {
        if(!$this->taskModel->delete($id)){
            
        }
        return $this->index('Task '. $id .' successfully deleted!');
    }
}
