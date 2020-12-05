<?php
/**
 * @file
 * Contains \drupal\mymodule\controller\mymodulecontroller.
 */

namespace Drupal\mymodule\Controller;

use Drupal\Core\Controller\ControllerBase;

class FirstController extends ControllerBase {
  public function content() {
        return array(
          '#type' => 'markup',
          '#markup' => t('this is my menu linked custom page'),
        );
  }
}
