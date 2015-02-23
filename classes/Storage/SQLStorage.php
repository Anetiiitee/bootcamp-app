<?php

namespace \Bootcamp\Demo\Storage;

class SQLStorage implements Storage
{
  public function store($place,$data)
  {
    $sql = mysql_query("SELECT * FROM _$setprofile ORDER BY fc DESC");
    
  }
  public function get($place)
  {

  }
}
