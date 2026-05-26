<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class BooksController extends AppController
    {
        public function index()
        {
            $books = $this->Books->find()->all();

            $this->set(compact('books'));
        }

        public function add()
        {
            $book = $this->Books->newEmptyEntity();

            if ($this->request->is('post')) {
                $book = $this->Books->patchEntity(
                    $book,
                    $this->request->getData()   
                );

                if ($this->Books->save($book)) {
                    $this->Flash->success('Book saved successfully');
                } else {
                    $this->Flash->error('Unable to save book');
                }
            }   

            $this->set(compact('book'));
        }

        public function edit($id = null)
        {
            $book = $this->Books->get($id);

            if ($this->request->is(['post', 'put'])) {
                $book = $this->Books->patchEntity(
                    $book,
                    $this->request->getData()
                );

                if ($this->Books->save($book)) {
                    $this->Flash->success('Book updated successfully');
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error('Unable to update book');
                }
            }

            $this->set(compact('book'));
        }

        public function delete($id = null)
        {
            $this->request->allowMethod(['post', 'delete']);
            $book = $this->Books->get($id);
            if ($this->Books->delete($book)) {
                $this->Flash->success('Book deleted successfully');
            } else {
                $this->Flash->error('Unable to delete book');
            }
            return $this->redirect(['action' => 'index']);
        }

    }