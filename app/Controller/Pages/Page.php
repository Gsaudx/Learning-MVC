<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Page {

  /**
   * Method responsible for rendering page header
   * @return string
   */

  private static function getHeader() {
    return View::render('pages/header');
  }

  /**
   * Method responsible for rendering page footer
   * @return string
   */

  private static function getFooter()
  {
    return View::render('pages/footer');
  }

  /**
   * Method responsible for returning default page layout 
   * @return string
   */
  public static function getPage($title, $content) {
    return View::render('pages/page', [
      'header' => self::getHeader(),
      'footer' => self::getFooter(),
      'title' => $title,
      'content' => $content
    ]);
  }
}
