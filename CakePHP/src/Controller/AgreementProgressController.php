<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;
/**
 * AgreementProgress Controller
 *
 * @property \App\Model\Table\AgreementProgressTable $AgreementProgress
 *
 * @method \App\Model\Entity\AgreementProgres[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AgreementProgressController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Agreement'],
        ];
        $agreementProgress = $this->paginate($this->AgreementProgress);

        $this->set(compact('agreementProgress'));
    }

    /**
     * View method
     *
     * @param string|null $id Agreement Progres id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agreementProgres = $this->AgreementProgress->get($id, [
            'contain' => ['Agreement'],
        ]);

        $this->set('agreementProgres', $agreementProgres);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($aggrementID)
    {
        $agreementProgres = $this->AgreementProgress->newEntity();
        if ($this->request->is('post')) {
            $agreementProgres = $this->AgreementProgress->patchEntity($agreementProgres, $this->request->getData());
            $now=Time::now();
            $now->timezone='Australia/Melbourne';

            $agreementProgres->datetime=$now;
            $agreementProgres->agreement_id=$aggrementID;
            if ($this->AgreementProgress->save($agreementProgres)) {
                $this->Flash->success(__('The agreement progres has been saved.'));

                return $this->redirect(['controller'=>'Agreement','action' => 'view',$aggrementID]);
            }
            $this->Flash->error(__('The agreement progres could not be saved. Please, try again.'));
        }
        $agreement = $this->AgreementProgress->Agreement->find('list', ['limit' => 200]);
        $this->set(compact('agreementProgres', 'agreement'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Agreement Progres id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agreementProgres = $this->AgreementProgress->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agreementProgres = $this->AgreementProgress->patchEntity($agreementProgres, $this->request->getData());
            if ($this->AgreementProgress->save($agreementProgres)) {
                $this->Flash->success(__('The agreement progres has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agreement progres could not be saved. Please, try again.'));
        }
        $agreement = $this->AgreementProgress->Agreement->find('list', ['limit' => 200]);
        $this->set(compact('agreementProgres', 'agreement'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Agreement Progres id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null,$aggrementID=null)
    {
        //$this->request->allowMethod(['post', 'delete']);
        $agreementProgres = $this->AgreementProgress->get($id);
        if ($this->AgreementProgress->delete($agreementProgres)) {
            $this->Flash->success(__('The agreement progres has been deleted.'));
        } else {
            $this->Flash->error(__('The agreement progres could not be deleted. Please, try again.'));
        }

        return $this->redirect(['controller'=>'Agreement','action' => 'view',$aggrementID]);
    }
}
