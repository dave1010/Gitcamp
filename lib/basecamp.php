<?php

Class Basecamp 
{

  public function list_projects()
  {
    $call = 'listprojects';
    $connect = new Api_connector();
    $data = $connect->api_connect($call);
    if(is_object($data))
    {
      foreach($data as $row)
      {
        echo (string) $row->id[0] . ":" . $row->name[0]  . "\n";
      }
    }
  }

}

?>
