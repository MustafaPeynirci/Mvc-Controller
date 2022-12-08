<?php
namespace rifatMVC;

class Teachers extends Controllers
{
    public function __construct() 
    {
        userControl();
    }

    function index()
    {
        $model = Loader::model('Teacher');
        $teachers = $model->get_teachers();
        
        Loader::view('teachers_list', $teachers);
    }

    function create()
    {
        Loader::view('teacher_create_form');
    }
    
    function add()
    {
        $new_teacher = 
        [
            'name' => $_POST['name'],
            'surname' => $_POST['surname'],
        ];
        
        $model = Loader::model('Teacher');
        $is_success = $model->add_teacher($new_teacher);
        
        if($is_success)
            Loader::view('teacher_success');
        else
            Loader::view('teacher_fail');
    }
    
    function delete($id)
    {
        $model = Loader::model('Teacher');
        $is_success = $model->delete_teacher($id);
        
        if($is_success)
            Loader::view('teacher_success');
        else
            Loader::view('teacher_fail');
    }
    
    function show($id)
    {
        $model = Loader::model('Teacher');
        $teacher = $model->get_teacher($id);
        
        Loader::view('teacher_show', $teacher);
    }
    
    function edit($id)
    {
        $model = Loader::model('Teacher');
        $teacher = $model->get_teacher($id);
        
        Loader::view('teacher_edit_form', $teacher);
    }
    
    function update()
    {
        $new_teacher = 
        [
            'id' => $_POST['id'],
            'name' => $_POST['name'],
            'surname' => $_POST['surname'],
        ];
        
        $model = Loader::model('Teacher');
        $is_success = $model->update_teacher($new_teacher);
        
        if($is_success)
            Loader::view('teacher_success');
        else
            dd(DataBase::write_last_error());//Loader::view('teacher_fail');
    }
}

