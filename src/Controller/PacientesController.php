<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pacientes Controller
 *
 * @property \App\Model\Table\PacientesTable $Pacientes
 */
class PacientesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $pacientes = $this->paginate($this->Pacientes);

        $this->set(compact('pacientes'));
        $this->set('_serialize', ['pacientes']);
    }

    /**
     * View method
     *
     * @param string|null $id Paciente id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paciente = $this->Pacientes->get($id, [
            'contain' => ['Users', 'Historiales', 'Recetas', 'Tratamientos']
        ]);

        $this->set('paciente', $paciente);
        $this->set('_serialize', ['paciente']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paciente = $this->Pacientes->newEntity();
        if ($this->request->is('post')) {
            $paciente = $this->Pacientes->patchEntity($paciente, $this->request->data);
            if ($this->Pacientes->save($paciente)) {
                $this->Flash->mens('Se registro correctamente al paciente.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->mens('El paciente no fue registrado ocurrio un error');
            }
        }
        $users = $this->Pacientes->Users->find('list', ['limit' => 200]);
        $this->set(compact('paciente', 'users'));
        $this->set('_serialize', ['paciente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Paciente id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paciente = $this->Pacientes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paciente = $this->Pacientes->patchEntity($paciente, $this->request->data);
            if ($this->Pacientes->save($paciente)) {
                $this->Flash->mens('Se edito correctamente al paciente');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->mens('El paciente no fue registrado ocurrio un error');
            }
        }
        $users = $this->Pacientes->Users->find('list', ['limit' => 200]);
        $this->set(compact('paciente', 'users'));
        $this->set('_serialize', ['paciente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Paciente id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paciente = $this->Pacientes->get($id);
        if ($this->Pacientes->delete($paciente)) {
            $this->Flash->mens('El paciente se Elimino correctamente');
        } else {
            $this->Flash->mens('El paciente no pudo eliminarse');
        }
        return $this->redirect(['action' => 'index']);
    }
}
