<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $components = array(
		'Session' ,
		'Auth' => array(
			'loginRedirect'=>array('controller' => 'quotes', 'action' => 'index'),
<<<<<<< HEAD
			'logoutRedirect'=> array('controller' =>'quotes','action' => 'index')
=======
			'logoutRedirect'=> array('controller' =>'quotes','action' => 'index'),
			'authorize' => array('Controller')
>>>>>>> 25/02/2013_whatdidido
			) 
		);



	function beforeFilter() {
		if (isset($this->params['prefix']) && $this->params['prefix'] == 'admin') {
			$this->layout = 'admin';
		} 
		/*allow des accès au site*/
		 $this->Auth->allow('index','view');

		 if($this->Auth->loggedIn()){
		 	$this->set('me', $this->Auth->user());
		 }
		 else{
		 	$this->set('me', array('is' =>0 ,'username'=>'visiteur non connecté' ));
		 }

<<<<<<< HEAD
	}


	public function isAuthorized($user){

		//default:securised
		return false;
=======
>>>>>>> 25/02/2013_whatdidido
	}


	/*public $components = array(
        'Auth' => array('authorize' => 'Controller'),
    );
    public function isAuthorized($user = null) {
        // Chacun des utilisateur enregistré peut accéder aux fonctions publiques
        if (empty($this->request->params['prefix'] == 'admin')) {
            return true;
        }

        // Seulement les administrateurs peuvent accéder aux fonctions d'administration
        if (isset($this->request->params['prefix'] == 'admin')) {
            return (bool)($user['User'] === 'admin');
        }

        // Par défaut n'autorise pas
        return false;
    }*/
}
