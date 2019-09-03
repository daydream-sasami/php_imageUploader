<?php

namespace MyApp;

class ImageUploader {

  public function upload() {
    try {
      // error check
      $this->_validateUpload();

      // type_check
      $ext = $this->_validateImageType();

      // save
      // create thumbnail
    } catch (\Exception $e) {
      echo $e->getMessage();
      exit;
    }
    //redirect
    header('Location: http://' . $_SERVER['HTTP_HOST']);
    exit;
  }
  private function _validateImageType() {
    $imageType = exif_imagetype($_FILES['image']['tmp_name']);
    switch($imageType) {
      case IMAGETYPE_GIF:
        return 'gif';
      case IMAGETYPE_JPEG:
        return 'jpg';
      case IMAGETYPE_PNG:
        return 'png';
      default:
        throw new \Exception('PNG/JPEG/GIF only!');
    }
  }

  private function _validateUpload() {
    if (!isset($_FILES['image']) || !isset($_FILES['image']['error'])) {
      throw new \Exception('Upload Error!');
    }

    switch ($_FILES['image']['error']) {
      case UPLOAD_ERR_OK:
        return true;
      case UPLOAD_ERR_INI_SIZE:
      case UPLOAD_ERR_FORM_SIZE:
        throw new \Exception('File too large!');
      default:
        throw new \Exception('Err: ' . $_FILES['image']['error']);
    }
  }

}