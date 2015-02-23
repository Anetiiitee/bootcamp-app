<?php

namespace Bootcamp\Demo\Storage;

class FileStorage implements Storage
{
  public function store($place,$data)
  {
    file_put_contents($place,$data);
  }
  public function get($place)
  {
    file_get_contents($place);
  }
}
