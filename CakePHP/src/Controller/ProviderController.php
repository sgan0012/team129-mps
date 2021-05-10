<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Provider Controller
 *
 * @property \App\Model\Table\ProviderTable $Provider
 *
 * @method \App\Model\Entity\Provider[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProviderController extends AppController
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
            $provider = $this->Provider->find('all')->where(['Or'=>['name like'=>'%'.$keyword.'%', 'email_address like'=>'%'.$keyword.'%']])->toList();
        } else {
            $provider = $this->Provider->find('all')->toList();
        }

        //$provider = $this->paginate($query);

        $this->set(compact('provider'));
    }

    /**
     * View method
     *
     * @param string|null $id Provider id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $provider = $this->Provider->get($id, [
            'contain' => [],
        ]);

        $this->set('provider', $provider);
    }

    /**
     * ABN Validator
     * Will return false if invalid ABN is given
     */
    public function abn_valid($abn) {
        /*
        Rules:
        - ABN must be 11 digits
        1. Subtract 1 from the first (left-most) digit of the ABN to give a new 11 digit number
        2. Multiply each of the digits in this new number by a "weighting factor" based on its position as shown in the table below
        3. Sum the resulting 11 products
        4. Divide the sum total by 89, noting the remainder
        5. If the remainder is zero the number is a valid ABN
        */

        $weight = array(10, 1, 3, 5, 7, 9, 11, 13, 15, 17, 19);
        $weightSum = 0;

        // Rule 1
        $abn = intval($abn);
        $abn = $abn - 10000000000;
        $abn = strval($abn);

        // Checking if ABN contains letter or not 11 digits
        if (strlen($abn) != 11) {
            return false;
        }

        // Rule 2 & 3
        // Go through ABN and multiply by the weight
        for ($i = 0; $i < 11; $i++) {
            $weightSum = $weightSum + intval($abn[$i]) * $weight[$i];
        }

        return $weightSum % 89 == 0;
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $provider = $this->Provider->newEntity();
        if ($this->request->is('post')) {
            $provider = $this->Provider->patchEntity($provider, $this->request->getData());
            //var_dump($provider);die;

            // Validate ABN
            $abn = $this->request->getData('abn');

            if (!$this->abn_valid($abn)) {
                return $this->Flash->error(__('The provider could not be saved, please enter a valid ABN.'));
            }

            if ($this->Provider->save($provider)) {
                $this->Flash->success(__('The provider has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The provider could not be saved. Please, try again.'));
        }
        $this->set(compact('provider'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Provider id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $provider = $this->Provider->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $provider = $this->Provider->patchEntity($provider, $this->request->getData());
            if ($this->Provider->save($provider)) {
                $this->Flash->success(__('The provider has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The provider could not be saved. Please, try again.'));
        }
        $this->set(compact('provider'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Provider id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        /**$this->request->allowMethod(['post', 'delete']);*/
        $provider = $this->Provider->get($id);
        if ($this->Provider->delete($provider)) {
            $this->Flash->success(__('The provider has been deleted.'));
        } else {
            $this->Flash->error(__('The provider could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
