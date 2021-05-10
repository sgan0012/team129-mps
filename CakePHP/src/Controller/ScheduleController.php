<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Date;
/**
 * Schedule Controller
 *
 * @property \App\Model\Table\ScheduleTable $Schedule
 *
 * @method \App\Model\Entity\Schedule[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ScheduleController extends AppController
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
            $schedule = $this->Schedule->find('all')->where(['Or'=>[
                'Department.name like'=>'%'.$keyword.'%',
                'PlacementMember.name like'=>'%'.$keyword.'%',
                'Provider.name like'=>'%'.$keyword.'%'
                ]]
            )->contain( ['Department', 'PlacementMember', 'Provider'])->toList();
        } else {
            $schedule = $this->Schedule->find('all')->contain( ['Department', 'PlacementMember', 'Provider'])->toList();
        }

        // $this->paginate = [
        //     'contain' => ['Department', 'PlacementMember', 'Provider'],
        // ];
        //$schedule = $this->paginate($query);

        $this->set(compact('schedule'));
    }

    /**
     * View method
     *
     * @param string|null $id Schedule id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $schedule = $this->Schedule->get($id, [
            'contain' => ['Department', 'PlacementMember', 'Provider'],
        ]);
        $this->loadModel('ScheduleProgress');
        $scheduleProgress=$this->ScheduleProgress->find('all',['conditions'=>['schedule_id'=>$id],'order'=>'datetime desc'])->toList();

        $this->set('schedule', $schedule);
        $this->set('scheduleProgress', $scheduleProgress);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $schedule = $this->Schedule->newEntity();
        if ($this->request->is('post')) {
            $schedule = $this->Schedule->patchEntity($schedule, $this->request->getData());
            $schedule->start_date=new Date($this->request->getData()['start_date']);
            $schedule->end_date=new Date($this->request->getData()['end_date']);
            $schedule->reminder=new Date($this->request->getData()['reminder']);
          //  var_dump($schedule);
            if ($this->Schedule->save($schedule)) {
                $this->Flash->success(__('The schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The schedule could not be saved. Please, try again.'));
        }
        $department = $this->Schedule->Department->find('list', ['limit' => 200]);
        $placementMember = $this->Schedule->PlacementMember->find('list', ['limit' => 200]);
        $provider = $this->Schedule->Provider->find('list', ['limit' => 200]);
        $this->set(compact('schedule', 'department', 'placementMember', 'provider'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Schedule id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $schedule = $this->Schedule->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $schedule = $this->Schedule->patchEntity($schedule, $this->request->getData());
            if ($this->Schedule->save($schedule)) {
                $this->Flash->success(__('The schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The schedule could not be saved. Please, try again.'));
        }
        $department = $this->Schedule->Department->find('list', ['limit' => 200]);
        $placementMember = $this->Schedule->PlacementMember->find('list', ['limit' => 200]);
        $provider = $this->Schedule->Provider->find('list', ['limit' => 200]);
        $this->set(compact('schedule', 'department', 'placementMember', 'provider'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Schedule id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
//        $this->request->allowMethod(['post', 'delete']);
        $schedule = $this->Schedule->get($id);
        if ($this->Schedule->delete($schedule)) {
            $this->Flash->success(__('The schedule has been deleted.'));
        } else {
            $this->Flash->error(__('The schedule could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
