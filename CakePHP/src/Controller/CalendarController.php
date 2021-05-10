<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Date;
use Cake\I18n\Time;
/**
 * Email Controller
 *
 * @property \App\Model\Table\s
 *
 * @method \App\Model\Entity\
 */
class CalendarController extends AppController
{
    public $components = array('RequestHandler');
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->loadModel('CalendarEvent');
        $calendar_event = $this->CalendarEvent->newEntity();
        //var_dump($calendar_event);
        if ($this->request->is('post')) {
            $calendar_event = $this->CalendarEvent->patchEntity($calendar_event, $this->request->getData());
            $calendar_event["start_date"] = new Date($this->request->getData()['start_date']);
            $calendar_event["end_date"] = new Date($this->request->getData()['end_date']);
            $calendar_event["reminder_date"] = new Date($this->request->getData()['reminder']);
            $calendar_event["start_time"] = new Time($this->request->getData()['start_time']);
            $calendar_event["end_time"] = new Time($this->request->getData()['end_time']);
			//var_dump($this->request->getData());
            //var_dump($calendar_event);
            if ($this->CalendarEvent->save($calendar_event)) {
                $this->Flash->success(__('The calendar event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The calendar event could not be saved. Please, try again.'));
        }

        $this->set(compact('calendar_event'));
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
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
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
        $this->loadModel('CalendarEvent');
        $CalendarEvent = $this->CalendarEvent->get($id);

            //$CalendarEvent = $this->CalendarEvent->patchEntity($CalendarEvent, $this->request->getData());
            $CalendarEvent["title"]= $this->request->getData()["title"];
            $CalendarEvent["description"]= $this->request->getData()["description"];
            $CalendarEvent["start_date"]= new Date($this->request->getData()["start_date"]);
             $CalendarEvent["end_date"]= new Date($this->request->getData()["end_date"]);
            $CalendarEvent["reminder_date"]= new Date($this->request->getData()["reminder_date"]);
             $CalendarEvent["start_time"] = new Time($this->request->getData()['start_time']);
             $CalendarEvent["end_time"] = new Time($this->request->getData()['end_time']);
//             $CalendarEvent["category"] = $this->request->getData()['category'];
//             $CalendarEvent["color_label"] = $this->request->getData()['color_label'];
            // $this->set('CalendarEvent',$CalendarEvent);
            // $this->set('CalendarEvent2',$this->CalendarEvent->save($CalendarEvent));
            $this->CalendarEvent->save($CalendarEvent);


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
        $this->loadModel('CalendarEvent');
        $CalendarEvent = $this->CalendarEvent->get($id);
        $this->CalendarEvent->delete($CalendarEvent);

    }

    public function compose(){

    }
    function getCalendarData(){
        $this->loadModel('Agreement');
        $this->loadModel('Schedule');
        $this->loadModel('CalendarEvent');
        if($this->request->is('ajax')){
            $Agreement = $this->Agreement->find('all');
            $Schedule = $this->Schedule->find('all');
            $CalendarEvent = $this->CalendarEvent->find('all');
            $this->set(compact( 'Agreement'));
            $this->set(compact( 'Schedule'));
            $this->set(compact( 'CalendarEvent'));

    }
    }
}
