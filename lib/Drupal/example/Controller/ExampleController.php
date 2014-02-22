<?php
/**
* @file
* Contains \Drupal\example\Controller\ExampleController.
*/

namespace Drupal\example\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
* Controller routines for example module routes.
*/
class ExampleController extends ControllerBase {

 
/**
   * Return the 'Example World' page.
   *
   * @return string
   *   A render array containing our 'Example World' page content.
   */
  public function exampleWorld() {
    $output = array();

    $output['example'] = array(
      '#markup' => 'Example World!',
    );

    return $output;
  }

}
?>
