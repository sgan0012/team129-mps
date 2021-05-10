<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CalendarEvent Controller
 *
 * @property \App\Model\Table\CalendarEventTable $CalendarEvent
 *
 * @method \App\Model\Entity\CalendarEvent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CalendarEventController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $calendarEvent = $this->paginate($this->CalendarEvent);

        $this->set(compact('calendarEvent'));
    }

    /**
     * View method
     *
     * @param string|null $id Calendar Event id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $calendarEvent = $this->CalendarEvent->get($id, [
            'contain' => [],
        ]);

        $this->set('calendarEvent', $calendarEvent);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $calendarEvent = $this->CalendarEvent->newEntity();
        if ($this->request->is('post')) {
            $calendarEvent = $this->CalendarEvent->patchEntity($calendarEvent, $this->request->getData());
            if ($this->CalendarEvent->save($calendarEvent)) {
                $this->Flash->success(__('The calendar event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The calendar event could not be saved. Please, try again.'));
        }
        $this->set(compact('calendarEvent'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Calendar Event id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $calendarEvent = $this->CalendarEvent->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $calendarEvent = $this->CalendarEvent->patchEntity($calendarEvent, $this->request->getData());
            if ($this->CalendarEvent->save($calendarEvent)) {
                $this->Flash->success(__('The calendar event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The calendar event could not be saved. Please, try again.'));
        }
        $this->set(compact('calendarEvent'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Calendar Event id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $calendarEvent = $this->CalendarEvent->get($id);
        if ($this->CalendarEvent->delete($calendarEvent)) {
            $this->Flash->success(__('The calendar event has been deleted.'));
        } else {
            $this->Flash->error(__('The calendar event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
