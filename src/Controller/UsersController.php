<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 */
class UsersController extends AppController
{
    public function index()
    {
        $users = $this->paginate($this->Users);
        $this->set('users', $users);
    }

    public function view($name)
    {
        echo 'Detalle del Usuario ' . $name;
        exit();
    }

    public function add()
    {
        $user = $this->Users->newEntity();

        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);

            if ($this->Users->save($user)) {
                $this->Flash->success('El Usuario ha sido creado correctamente.');
                return $this->redirect(['controller' => 'Users', 'action' => 'index']);
            } else {
                $this->Flash->error('El Usuario no pudo ser creado, por favor vuelva a intentarlo.');
            }
        }

        $this->set(compact('user'));
    }
}
