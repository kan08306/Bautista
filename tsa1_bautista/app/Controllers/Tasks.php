<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function today(): string
    {
        $model = new TaskModel();
        $today = date('Y-m-d');

        $data = [
            'currentDate' => date('F j, Y'),
            'tasks' => $model
                ->where('task_date', $today)
                ->orderBy('task_date', 'ASC')
                ->findAll(),
        ];

        return view('tsa1_bautista/index', $data);
    }

    public function index(): string
    {
        $model = new TaskModel();

        $data = [
            'tasks' => $model
                ->orderBy('task_date', 'ASC')
                ->findAll(),
        ];

        return view('tsa1_bautista/pages/tasks', $data);
    }
}
