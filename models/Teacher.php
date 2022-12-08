<?php
namespace rifatMVC;

class Teacher extends Models 
{
    public function get_teachers()
    {
        $sql = 'select * from teachers';
        return DataBase::get_data_uses_by_sql($sql);
    }
    
    public function add_teacher($new_teacher)
    {
        $sql = "insert into teachers values (NULL, '".$new_teacher['name']."', '".$new_teacher['surname']."')";
        return DataBase::run_sql($sql);
    }
    
    public function delete_teacher($teacher_id)
    {
        $sql = "delete from teachers where id = $teacher_id";
        return DataBase::run_sql($sql);

        $DB->table("teachers")->find($id)->delete();
    }

    public function get_teacher($id)
    {
        $sql = 'select * from teachers where id = ' . $id;
        $data = DataBase::get_data_uses_by_sql($sql);
        
        return @$data[0];
    }

    public function update_Teacher($new_teacher)
    {
        $sql = "update teachers set name = '".$new_teacher['name']."', surname = '".$new_teacher['surname']."' where id = ".$new_teacher['id'];
        return DataBase::run_sql($sql);
    }
}
