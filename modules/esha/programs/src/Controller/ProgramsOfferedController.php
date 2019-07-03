<?php

namespace Drupal\programs\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ProgramsOfferedController.
 */
class ProgramsOfferedController extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello($name) {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: hello with parameter(s): $name'),
    ];
  }

}
