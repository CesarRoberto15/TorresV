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

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\I18n\I18n;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
		
		$this->loadComponent('Auth', [
	        'authorize'=> 'Controller',   
			'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
						'password' => 'password'
                    ]
                ]
            ],
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
             // If unauthorized, return them to page they were just on
            'unauthorizedRedirect' => $this->referer()
        ]);

        // Allow the display action so our PagesController
        // continues to work. Also enable the read only actions.
        $this->Auth->allow(['display', 'changeLanguage']);
    }
	
	public function beforeRender(Event $event)
{
if(!array_key_exists('_serialize',$this->viewVars) && in_array($this->response->getType(),['application/json','application/xml'])){
	$this->set('_serialize', true);    	
}
    $this->viewBuilder()->setTheme('AdminLTE');
	
	if(!is_null($this->request->getSession()->read('Auth.User.id'))){
		$sa=$this->request->getSession()->read('Auth.User.id');
		$usr = TableRegistry::getTableLocator()->get('Users');
		$s=$usr->findById($sa)->first();
		if($s['status'] === false){
			$this->Flash->error('Desactivado');
			$this->redirect($this->Auth->logout());
		}
	}
}
	public function beforeFilter(Event $event){
		if($this->request->getSession()->check('Config.language')){
			I18n::setLocale($this->request->getSession()->read('Config.language'));
		}else{
			$this->request->getSession()->write('config.language',I18n::setLocale('en_US'));
		}
	}
	public function isAuthorized($user)
	{	
		$u=TableRegistry::getTableLocator()->get('Users')->findById($user['id'])->first();
		if($u['role_id'] == 1){
			$action = $this->request->getParam('action');
			// The add and tags actions are always allowed to logged in users.
			if (in_array($action, ['view', 'add', 'edit', 'delete', 'addre', 'addlist', 'changeLanguage', 'pay', 'deliv', 'mount'])) {
				return true;
			}
		}
		if($u['role_id'] == 2){
			return false;
		}
		// All other actions require a slug.
		$usuario = $this->request->getParam('pass.0');
		if (!$usuario) {
			return false;
		}/*
		$s=$this->Users->findById($user['id'])->first();
		if($s['status'] === false){
			$this->Flash->error('Desactivado');
		$this->redirect($this->Auth->logout());
			return false;
	}*/
}
public function changeLanguage ($language= null){
   if($language!=null && in_array($language,['en_US','es_PE','pt_BR'])){
        $this->request->getSession()->write('Config.language',$language);
        return $this->redirect($this->referer());


    }else{
        $this->request->session->write('Config.languaje',I18n::locale());
	    return $this->redirect($this->referer());



   }

}
}
