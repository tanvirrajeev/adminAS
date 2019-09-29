<?php
  namespace App\Controller;
  use App\Controller\AppController;

  class ArchivesController extends AppController{
    public function initialize(){
      parent::initialize();
      $this->loadModel("Archives");
      $this->viewBuilder()->setLayout("layout");
    }

    public function index(){
      $this->set("title", "Archive List");
      $archive = $this->Archives->find()->toArray();
      //print_r($archive);
      $this->set("archive", $archive);
      $keyword = $this->request->query("keyword");
      if(!empty($keyword)){
        $this->Archives = [
          "conditions"=>["file"=>$keyword]
        ];
      }
    }

    public function edit($id){
      $this->set("title", "Edit");
      $archive = $this->Archives->get($id);
      $this->set("archive", $archive);
    }

    public function update(){
      //update
        $this->autoRender = false;
        $form_data = $this->request->data;
        $archive = $this->Archives->get($form_data['archiveID']);
        //print_r($form_data);
        $archive->file = $form_data["file"];
        $archive->rack = $form_data["rack"];
        $archive->location = $form_data["location"];
        $archive->item = $form_data["item"];
        $archive->itemdesp = $form_data["itemdesp"];
        $archive->department = $form_data["department"];
        $archive->division = $form_data["division"];
        $archive->responsible = $form_data["responsible"];
        $this->Archives->save($archive);
        $this->redirect(["action"=>"index"]);
    }

    public function delete($id){
      $this->autoRender = false;
      $archive = $this->Archives->get($id);
      $this->Archives->delete($archive);
      $this->redirect(["action"=>"index"]);
    }

    public function create(){
      $this->set("title", "Archive an Item");
    }

    public function save(){
      $this->autoRender = false;
      $archive = $this->Archives->newEntity($this->request->data);
      $form_data = $this->request->data;
      //print_r($form_data);
      $archive->file = $form_data["file"];
      $archive->rack = $form_data["rack"];
      $archive->location = $form_data["location"];
      $archive->item = $form_data["item"];
      $archive->itemdesp = $form_data["itemdesp"];
      $archive->department = $form_data["department"];
      $archive->division = $form_data["division"];
      $archive->responsible = $form_data["responsible"];
      $this->Archives->save($archive);
      $this->redirect(["action"=>"index"]);
    }

    public function view($id){
      $this->set("title", "View");
      $archive = $this->Archives->get($id);
      $this->set("archive", $archive);
    }


  }
 ?>
