<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Historiales Controller
 *
 * @property \App\Model\Table\HistorialesTable $Historiales
 */
class HistorialesController extends AppController
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
        $historiales = $this->paginate($this->Historiales);

        $this->set(compact('historiales'));
        $this->set('_serialize', ['historiales']);
    }

    /**
     * View method
     *
     * @param string|null $id Historiale id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $historiale = $this->Historiales->get($id, [
            'contain' => ['Pacientes']
        ]);

        $this->set('historiale', $historiale);
        $this->set('_serialize', ['historiale']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $historiale = $this->Historiales->newEntity();
        if ($this->request->is('post')) {
            $historiale = $this->Historiales->patchEntity($historiale, $this->request->data);
            if ($this->Historiales->save($historiale)) {
                $this->Flash->mens('Se agrego el nuevo historial medico');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->mens('Ocurrio un error no se pudo crear el historial medico');
            }
        }
        $pacientes = $this->Historiales->Pacientes->find('list', ['limit' => 200]);
        $this->set(compact('historiale', 'pacientes'));
        $this->set('_serialize', ['historiale']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Historiale id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $historiale = $this->Historiales->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $historiale = $this->Historiales->patchEntity($historiale, $this->request->data);
            if ($this->Historiales->save($historiale)) {
                $this->Flash->mens('Se modifico el Historial medico');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->mens('Ocurrio un error al editar el historial');
            }
        }
        $pacientes = $this->Historiales->Pacientes->find('list', ['limit' => 200]);
        $this->set(compact('historiale', 'pacientes'));
        $this->set('_serialize', ['historiale']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Historiale id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $historiale = $this->Historiales->get($id);
        if ($this->Historiales->delete($historiale)) {
            $this->Flash->mens('El Historial Medico fue Eliminado');
        } else {
            $this->Flash->mens('No se elimino el Historial Medico');
        }
        return $this->redirect(['action' => 'index']);
    }
}
