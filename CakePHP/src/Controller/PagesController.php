<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found
     * @throws \Cake\View\Exception\MissingTemplateException In debug mode.
     */
    public function display(...$path)
    {
        if (!$path) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }

         $this->loadModel('Provider');
          $this->loadModel('Schedule');
           $this->loadModel('Agreement');
        $providerNum= $this->Provider->find()->count();
         $ScheduleNum= $this->Schedule->find('all',['conditions'=>['status'=>'Ongoing']])->count();  //ongoing schedule
        $scheduleTotalNum= $this->Schedule->find()->count();
          $AgreementNum= $this->Agreement->find('all',['conditions'=>['status'=>'Ongoing']])->count(); //ongoing agreement

          $notStartAgreement=$this->Agreement->find('all',['conditions'=>['status'=>'Not Started']])->count(); //Not Started agreement
          $CompletedAgreement=$this->Agreement->find('all',['conditions'=>['status'=>'Completed']])->count(); //Completed agreement
          $DueAgreement=$this->Agreement->find('all',['conditions'=>['status'=>'Due']])->count(); //Due agreement
          $allAgreement= $this->Agreement->find('all')->count(); //all agreement

          $notStartSchedule=$this->Schedule->find('all',['conditions'=>['status'=>'Not Started']])->count(); //Not Started Schedule
          $CompletedSchedule=$this->Schedule->find('all',['conditions'=>['status'=>'Completed']])->count(); //Completed Schedule
          $DueASchedule=$this->Schedule->find('all',['conditions'=>['status'=>'Due']])->count(); //Due Schedule
          $allSchedule= $this->Schedule->find('all')->count(); //all Schedule

        $this->set(compact('page', 'subpage'));
        $this->set('providerNum',$providerNum);
        $this->set('scheduleTotalNum',$scheduleTotalNum);
         $this->set('AgreementNum',$AgreementNum);
         $this->set('ScheduleNum',$ScheduleNum);
         $this->set('notStartAgreement',$notStartAgreement);
         $this->set('CompletedAgreement',$CompletedAgreement);
         $this->set('DueAgreement',$DueAgreement);
         $this->set('allAgreement',$allAgreement);
         $this->set('notStartSchedule',$notStartSchedule);
         $this->set('CompletedSchedule',$CompletedSchedule);
         $this->set('DueASchedule',$DueASchedule);
         $this->set('allSchedule',$allSchedule);

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }


    }


}
