<?php

//! Responsável por gerenciar as views (resources/view)

namespace App\Utils;

class View {

  /**
   * Method responsible for returning view content
   * @param string $view
   * @param string
   */

  private static function getContentView($view) {
    $file = __DIR__.'/../../resources/view/'.$view.'.html';
    return file_exists($file) ? file_get_contents($file) : '';
  }

  /**
   * Method responsible for returning rendered view content
   * @param string $view
   * @param array $vars (string/numeric)
   * @return string
   */

  public static function render($view, $vars = []) {
    //VIEW CONTENT
    $contentView = self::getContentView($view);

    //ARRAY INDEXES
    $keys = array_keys($vars);
    $keys = array_map(function($item) {
      return '{{' .$item. '}}';
    }, $keys);

    //* Retorna o conteúdo renderizado
    return str_replace($keys, array_values($vars), $contentView);
  } 

}

?>