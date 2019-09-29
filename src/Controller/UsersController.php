<?php
  namespace App\Controller;
  use App\Controller\AppController;

  class UsersController extends AppController{

    public function initialize(){
      parent::initialize();
      $this->loadModel("Users");
      //$this->loadModel("Archives");
      $this->viewBuilder()->setLayout("layout");
    }

    public function index(){
      $this->set("title", "User List");
      $user = $this->Users->find()->toArray();
      //print_r($user);
      $this->set("user", $user);
    }

    public function create(){
      $this->set("title", "Create User");
    }

    public function save(){
      $this->autoRender = false;
      $user = $this->Users->newEntity($this->request->data);
      $form_data = $this->request->data;
      //print_r($form_data);
      $user->name = $form_data["name"];
      $user->email = $form_data["email"];
      $user->username = $form_data["username"];
      $user->password = $form_data["password"];
      $this->Users->save($user);
      $this->redirect(["action"=>"index"]);
    }

    public function edit($id){
      $this->set("title", "Edit User");
      $user = $this->Users->get($id);
      $this->set("user", $user);
    }

    public function update(){
      //update
        $this->autoRender = false;
        $form_data = $this->request->data;
        $user = $this->Users->get($form_data['userID']);
        //print_r($form_data);
        $user->name = $form_data["name"];
        $user->email = $form_data["email"];
        $user->username = $form_data["username"];
        $user->password = $form_data["password"];
        $this->Users->save($user);
        $this->redirect(["action"=>"index"]);
    }

    public function delete($id){
      $this->autoRender = false;
      $user = $this->Users->get($id);
      $this->Users->delete($user);
      $this->redirect(["action"=>"index"]);
    }

    public function login(){
      if ($this->request->is('post')) {
          $user = $this->Auth->identify();
          if ($user) {
              $this->Auth->setUser($user);
              return $this->redirect($this->Auth->redirectUrl());
          } else {
              $this->Flash->error(__('Username or password is incorrect'));
          }
      }
    }

  public function logout(){
    return $this->redirect($this->Auth->logout());
  }

  public function home(){
    $this->set("title", "Home");
  }

}
?>
