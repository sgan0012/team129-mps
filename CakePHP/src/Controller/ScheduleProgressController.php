<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;
/**
 * ScheduleProgress Controller
 *
 * @property \App\Model\Table\ScheduleProgressTable $ScheduleProgress
 *
 * @method \App\Model\Entity\ScheduleProgres[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ScheduleProgressController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Schedule'],
        ];
        $scheduleProgress = $this->paginate($this->ScheduleProgress);

        $this->set(compact('scheduleProgress'));
    }

    /**
     * View method
     *
     * @param string|null $id Schedule Progres id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $scheduleProgres = $this->ScheduleProgress->get($id, [
            'contain' => ['Schedule'],
        ]);

        $this->set('scheduleProgres', $scheduleProgres);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($scheduleID=null)
    {
        $scheduleProgres = $this->ScheduleProgress->newEntity();
        if ($this->request->is('post')) {
           
            $scheduleProgres = $this->ScheduleProgress->patchEntity($scheduleProgres, $this->request->getData());
            $now=Time::now();
            $now->timezone='Australia/Melbourne';

            $scheduleProgres->datetime=$now;
            $scheduleProgres->schedule_id=$scheduleID;
            if ($this->ScheduleProgress->save($scheduleProgres)) {
                $this->Flash->success(__('The schedule progres has been saved.'));

                return $this->redirect(['controller'=>'Schedule','action' => 'view',$scheduleID]);
            }
            $this->Flash->error(__('The schedule progres could not be saved. Please, try again.'));
        }
        $schedule = $this->ScheduleProgress->Schedule->find('list', ['limit' => 200]);
        $this->set(compact('scheduleProgres', 'schedule'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Schedule Progres id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $scheduleProgres = $this->ScheduleProgress->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $scheduleProgres = $this->ScheduleProgress->patchEntity($scheduleProgres, $this->request->getData());
            if ($this->ScheduleProgress->save($scheduleProgres)) {
                $this->Flash->success(__('The schedule progres has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The schedule progres could not be saved. Please, try again.'));
        }
        $schedule = $this->ScheduleProgress->Schedule->find('list', ['limit' => 200]);
        $this->set(compact('scheduleProgres', 'schedule'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Schedule Progres id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null,$scheduleID=null)
    {
       // $this->request->allowMethod(['post', 'delete']);
        $scheduleProgres = $this->ScheduleProgress->get($id);
        if ($this->ScheduleProgress->delete($scheduleProgres)) {
            $this->Flash->success(__('The schedule progres has been deleted.'));
        } else {
            $this->Flash->error(__('The schedule progres could not be deleted. Please, try again.'));
        }

        return $this->redirect(['controller'=>'Schedule','action' => 'view',$scheduleID]);
    }
}
