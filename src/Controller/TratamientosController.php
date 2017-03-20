<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tratamientos Controller
 *
 * @property \App\Model\Table\TratamientosTable $Tratamientos
 */
class TratamientosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pacientes']
        ];
        $tratamientos = $this->paginate($this->Tratamientos);

        $this->set(compact('tratamientos'));
        $this->set('_serialize', ['tratamientos']);
    }

    /**
     * View method
     *
     * @param string|null $id Tratamiento id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tratamiento = $this->Tratamientos->get($id, [
            'contain' => ['Pacientes', 'Cuentas']
        ]);

        $this->set('tratamiento', $tratamiento);
        $this->set('_serialize', ['tratamiento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tratamiento = $this->Tratamientos->newEntity();
        if ($this->request->is('post')) {
            $tratamiento = $this->Tratamientos->patchEntity($tratamiento, $this->request->data);
            if ($this->Tratamientos->save($tratamiento)) {
                $this->Flash->mens('Se agrego correctamente el tratamiento');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->mens('No se pudo agregar el tratamiento');
            }
        }
        $pacientes = $this->Tratamientos->Pacientes->find('list', ['limit' => 200]);
        $this->set(compact('tratamiento', 'pacientes'));
        $this->set('_serialize', ['tratamiento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tratamiento id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tratamiento = $this->Tratamientos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tratamiento = $this->Tratamientos->patchEntity($tratamiento, $this->request->data);
            if ($this->Tratamientos->save($tratamiento)) {
                $this->Flash->mens('Se modifico correctamente el Tratamiento');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->mens('No se modifico el tratamiento');
            }
        }
        $pacientes = $this->Tratamientos->Pacientes->find('list', ['limit' => 200]);
        $this->set(compact('tratamiento', 'pacientes'));
        $this->set('_serialize', ['tratamiento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tratamiento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tratamiento = $this->Tratamientos->get($id);
        if ($this->Tratamientos->delete($tratamiento)) {
            $this->Flash->mens('Se elimino correctamente el tratamiento');
        } else {
            $this->Flash->mens('No se pudo eliminar el tratamiento');
        }
        return $this->redirect(['action' => 'index']);
    }
}
