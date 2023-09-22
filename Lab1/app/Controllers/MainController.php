<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SectionModel;
use App\Models\StudentModel;

class MainController extends BaseController
{

    private $students;
    private $section;
    private $genders = ['Male', 'Female', 'unknown'];
    

    function __construct()
    {
        $this->students = new StudentModel();
        $this->section = new SectionModel();
    }
    
    
    public function students(){
        $data = [
         'students' => $this->students->findAll(),
         'section' => $this->section->findAll(),
          'genders' => ['Male', 'Female', 'unknown']
        ];
        return view('main', $data);
        
    }

    public function save(){
        $ID = $this->request->getVar('ID');
        $data = [
            'StudID' =>$this ->request->getVar('StudID'),
            'StudName' =>$this ->request->getVar('StudName'),
            'StudGender' =>$this ->request->getVar('StudGender'),
            'StudCourse'=>$this ->request->getVar('StudCourse'),
            'StudSection' =>$this ->request->getVar('StudSection'),
            'StudYear'=>$this ->request->getVar('StudYear')
        ];
        if ($ID !== null) {
            $this->students->set($data)->where('ID', $ID) ->update();
        } 
        else 
        {
            $this->students->insert($data);
        }

        return redirect()->to('/students');
    }

    public function delete($ID=null){
        $this->students->delete($ID);
        return redirect()->to('/students');
    }
    public function edit($ID=null){
    $data = [
      'students' => $this->students->findAll(),
      'section' => $this->section->findAll(),
      'genders' => $this->genders,
      'studentEdit' => $this->students->where('ID', $ID)->first()
    ];
    return view('main', $data);
   

    }
}

