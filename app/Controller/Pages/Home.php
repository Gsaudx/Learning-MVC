<?php
//! Gerencia as requisições que chegam na home do site

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page{

  /**
   * Method responsible for returning home view content 
   * @return string //Returns a string because HTML content is a string
   */
  public static function getHome() {
    //ORGANIZATION
    $obOrganization = new Organization();

    //HOME VIEW
    $content = View::render('pages/home', [
      'name' => $obOrganization->name,
      'description' => $obOrganization->description,
      'website' => $obOrganization->website
    ]);

    // Returns page view
    return parent::getPage('Gsaudx - HOME', $content);
  }

}


?>