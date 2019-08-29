<?php

namespace MyApp;

class ImageUploader {

  public function upload() {
    try {
      // error check
      $this->_validateUpload();

      // type_check
      // save
      // create thumbnail
    } catch (\Exception $e) {
      echo $e->getMessage();
      exit;
    }
    //redirect
    header('Location: http://' . $_SERVER['HTTP_HOST']);
  }

  private function _validateUpload() {
    
  }

}