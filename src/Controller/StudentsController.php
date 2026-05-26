<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class StudentsController extends AppController
    {

        public function index()
        {
            $students = $this->Students->find()->all();

            $this->set(compact('students'));
        }

        public function add()
        {
            $student = $this->Students->newEmptyEntity();

            if ($this->request->is('post')){
                $student = $this->Students->patchEntity(
                    $student,
                    $this-> request->getData()
                );

                $this->Students->save($student);

            }
        }

    }