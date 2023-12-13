<?php

namespace Drupal\vertical_megamenu\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the vertical_megamenu entity.
 *
 * The lines below, starting with '@ConfigEntityType,' are a plugin annotation.
 * These define the entity type to the entity type manager.
 *
 * The properties in the annotation are as follows:
 *  - id: The machine name of the entity type.
 *  - label: The human-readable label of the entity type. We pass this through
 *    the "@Translation" wrapper so that the multilingual system may
 *    translate it in the user interface.
 *  - handlers: An array of entity handler classes, keyed by handler type.
 *    - access: The class that is used for access checks.
 *    - list_builder: The class that provides listings of the entity.
 *    - form: An array of entity form classes keyed by their operation.
 *  - entity_keys: Specifies the class properties in which unique keys are
 *    stored for this entity type. Unique keys are properties which you know
 *    will be unique, and which the entity manager can use as unique in database
 *    queries.
 *  - links: entity URL definitions. These are mostly used for Field UI.
 *    Arbitrary keys can set here. For example, User sets cancel-form, while
 *    Node uses delete-form.
 *
 * @see http://previousnext.com.au/blog/understanding-drupal-8s-config-entities
 * @see annotation
 * @see Drupal\Core\Annotation\Translation
 *
 * @ingroup vertical_megamenu
 *
 * @ConfigEntityType(
 *   id = "vertical_megamenu",
 *   label = @Translation("VerticalMegaMenu"),
 *   admin_permission = "administer vertical megamenus",
 *   handlers = {
 *     "access" = "Drupal\vertical_megamenu\Access\VerticalMegaMenuAccessController",
 *     "list_builder" = "Drupal\vertical_megamenu\Controller\VerticalMegaMenuListBuilder",
 *     "form" = {
 *       "add" = "Drupal\vertical_megamenu\Form\VerticalMegaMenuAddForm",
 *       "edit" = "Drupal\vertical_megamenu\Form\VerticalMegaMenuEditForm",
 *       "delete" = "Drupal\vertical_megamenu\Form\VerticalMegaMenuDeleteForm"
 *     }
 *   },
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label"
 *   },
 *   links = {
 *     "edit-form" = "/examples/vertical_megamenu/manage/{vertical_megamenu}",
 *     "delete-form" = "/examples/vertical_megamenu/manage/{vertical_megamenu}/delete"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "menu",
 *   }
 * )
 */
class VerticalMegaMenu extends ConfigEntityBase {

  /**
   * The vertical_megamenu ID.
   *
   * @var string
   */
  public $id;

  /**
   * The vertical_megamenu label.
   *
   * @var string
   */
  public $label;

  /**
   * The menu used for this vertical_megamenu.
   *
   * @var string
   */
  public $menu;

}
