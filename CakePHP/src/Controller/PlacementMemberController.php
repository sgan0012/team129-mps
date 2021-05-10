<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PlacementMember Controller
 *
 * @property \App\Model\Table\PlacementMemberTable $PlacementMember
 *
 * @method \App\Model\Entity\PlacementMember[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PlacementMemberController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        // $this->paginate = [
        //     'contain' => ['Department'],
        // ];
        $placementMember = $this->PlacementMember->find('all')->contain(['Department'])->toList();

        $this->set(compact('placementMember'));
    }

    /**
     * View method
     *
     * @param string|null $id Placement Member id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $placementMember = $this->PlacementMember->get($id, [
            'contain' => ['Department'],
        ]);

        $this->set('placementMember', $placementMember);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $placementMember = $this->PlacementMember->newEntity();
        if ($this->request->is('post')) {
            $placementMember = $this->PlacementMember->patchEntity($placementMember, $this->request->getData());
            if ($this->PlacementMember->save($placementMember)) {
                $this->Flash->success(__('The placement member has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The placement member could not be saved. Please, try again.'));
        }
        $department = $this->PlacementMember->Department->find('list', ['limit' => 200]);
        $this->set(compact('placementMember', 'department'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Placement Member id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $placementMember = $this->PlacementMember->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $placementMember = $this->PlacementMember->patchEntity($placementMember, $this->request->getData());
            if ($this->PlacementMember->save($placementMember)) {
                $this->Flash->success(__('The placement member has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The placement member could not be saved. Please, try again.'));
        }
        $department = $this->PlacementMember->Department->find('list', ['limit' => 200]);
        $this->set(compact('placementMember', 'department'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Placement Member id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        /**$this->request->allowMethod(['post', 'delete']);*/
        $placementMember = $this->PlacementMember->get($id);
        if ($this->PlacementMember->delete($placementMember)) {
            $this->Flash->success(__('The placement member has been deleted.'));
        } else {
            $this->Flash->error(__('The placement member could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
