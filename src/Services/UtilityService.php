<?php

namespace Drupal\vertical_megamenu\Services;

use Drupal\Component\Plugin\Exception\PluginNotFoundException;
use Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\Entity\EntityTypeManager;

/**
 * Base Class for UtilityService.
 *
 * @package Drupal\ccamlr_main_utils
 */
class UtilityService {

  use StringTranslationTrait;

  /**
   * Entity Type Manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManager
   */
  protected $entityTypeManager;

  /**
   * UtilityService constructor.
   *
   * @param \Drupal\Core\Entity\EntityTypeManager $entityTypeManager
   *   Entity Type manager.
   */
  public function __construct(
    EntityTypeManager $entityTypeManager,
  ) {
    $this->entityTypeManager = $entityTypeManager;
  }

  /**
   * Get the list of menus as an associative array.
   */
  public function getMenuListAssoc() {

    $menus = [];
    $system_menus = $this->entityTypeManager->getStorage('menu')->loadMultiple();
    foreach ($system_menus as $key => $menu) {
      $menus[$key] = $menu->label();
    }

    return $menus;
  }

}
