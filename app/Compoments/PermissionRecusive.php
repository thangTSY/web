<?php
namespace App\Components;
class PermissionRecusive {
    private $data;
    private $htmlSelect;
    public function __construct($data)
    {
         $this->data =$data;
    }

    public function permissionRecusive($id = 0)
    {
        foreach ($this->data as $value)
        {
            if($id){
                $this->htmlSelect .="<option>" . $text . $value['name'] . "</option>";
                $this->permissionRecusive($value['id'], $text );
            }
        }
    }


}