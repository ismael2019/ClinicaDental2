<?php
namespace App\Controller;
use Cake\Event\Event;
use App\Controller\AppController;

/**
 * Suggestions Controller
 *
 * @property \App\Model\Table\SuggestionsTable $Suggestions
 */
class SuggestionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public $paginate = [
        'limit' => 3
        
    ];
    public function index()
    {
        $suggestions = $this->paginate($this->Suggestions);

        $this->set(compact('suggestions'));
        $this->set('_serialize', ['suggestions']);
    }

    /**
     * View method
     *
     * @param string|null $id Suggestion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
     public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add']);
    }
    public function view($id = null)
    {
        $suggestion = $this->Suggestions->get($id, [
            'contain' => []
        ]);

        $this->set('suggestion', $suggestion);
        $this->set('_serialize', ['suggestion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $suggestion = $this->Suggestions->newEntity();
        if ($this->request->is('post')) {
            $suggestion = $this->Suggestions->patchEntity($suggestion, $this->request->data);
            if ($this->Suggestions->save($suggestion)) {
                $this->Flash->mens('Se agrego correctamente la sugerencia');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->mens('No se agrego la sugerencia ocurrio un problema');
            }
        }
        $this->set(compact('suggestion'));
        $this->set('_serialize', ['suggestion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Suggestion id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $suggestion = $this->Suggestions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $suggestion = $this->Suggestions->patchEntity($suggestion, $this->request->data);
            if ($this->Suggestions->save($suggestion)) {
                $this->Flash->mens('Se edito correctamente la sugerecia');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->mens('No se pudo modificar la sugerencia');
            }
        }
        $this->set(compact('suggestion'));
        $this->set('_serialize', ['suggestion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Suggestion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $suggestion = $this->Suggestions->get($id);
        if ($this->Suggestions->delete($suggestion)) {
            $this->Flash->mens('Se elimino de forma correcta la sugerencia');
        } else {
            $this->Flash->mens('No se pudo eliminar la Sugerecia');
        }
        return $this->redirect(['action' => 'index']);
    }
     
}
