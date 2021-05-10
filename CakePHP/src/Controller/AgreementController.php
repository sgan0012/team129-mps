<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Date;

/**
 * Agreement Controller
 *
 * @property \App\Model\Table\AgreementTable $Agreement
 *
 * @method \App\Model\Entity\Agreement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AgreementController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $keyword = $this->request->getQuery('search');

        if ($keyword) {
            $agreement = $this->Agreement->find('all')->where(['Or'=>[
                'PlacementMember.name like'=>'%'.$keyword.'%',
                'Provider.name like'=>'%'.$keyword.'%']]
            )->contain(['Provider', 'PlacementMember'])->toList();
        } else {
            $agreement = $this->Agreement->find('all')->contain(['Provider', 'PlacementMember'])->toList();
        }

        // $this->paginate = [
        //     'contain' => ['Provider', 'PlacementMember'],
        // ];
        //$agreement = $this->paginate($query);
        //var_dump($agreement);
        $this->set(compact('agreement'));
    }

    /**
     * View method
     *
     * @param string|null $id Agreement id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agreement = $this->Agreement->get($id, [
            'contain' => ['Provider', 'PlacementMember'],
        ]);

        $this->loadModel('AgreementProgress');
        $agreementProgress=$this->AgreementProgress->find('all',['conditions'=>['agreement_id'=>$id],'order'=>'datetime desc'])->toList();
      //  var_dump($agreementProgress);
        $this->set('agreement', $agreement);
        $this->set('agreementProgress', $agreementProgress);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agreement = $this->Agreement->newEntity();
        if ($this->request->is('post')) {
            $agreement = $this->Agreement->patchEntity($agreement, $this->request->getData());
            $agreement->start_date=new Date($this->request->getData()['start_date']);
            $agreement->end_date=new Date($this->request->getData()['end_date']);
            $agreement->reminder=new Date($this->request->getData()['reminder']);
		//	var_dump($agreement);
            if ($this->Agreement->save($agreement)) {
                $this->Flash->success(__('The agreement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agreement could not be saved. Please, try again.'));
        }
        $provider = $this->Agreement->Provider->find('list', ['limit' => 200]);
        $placementMember = $this->Agreement->PlacementMember->find('list', ['limit' => 200]);
        $this->set(compact('agreement', 'provider', 'placementMember'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Agreement id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agreement = $this->Agreement->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agreement = $this->Agreement->patchEntity($agreement, $this->request->getData());
            if ($this->Agreement->save($agreement)) {
                $this->Flash->success(__('The agreement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agreement could not be saved. Please, try again.'));
        }
        $provider = $this->Agreement->Provider->find('list', ['limit' => 200]);
        $placementMember = $this->Agreement->PlacementMember->find('list', ['limit' => 200]);
        $this->set(compact('agreement', 'provider', 'placementMember'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Agreement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
//        $this->request->allowMethod(['post', 'delete']);
        $agreement = $this->Agreement->get($id);
        if ($this->Agreement->delete($agreement)) {
            $this->Flash->success(__('The agreement has been deleted.'));
        } else {
            $this->Flash->error(__('The agreement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
