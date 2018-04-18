<?php
use Drupal\paragraphs\ParagraphInterface;
use Drupal\Core\Entity\Display\EntityViewDisplayInterface;
/**
 * Utility function to provide context links to paragraphs that have been embedded into body text.
 *
 * @param array $build
 * @param \ParagraphInterface $entity
 * @param \EntityViewDisplayInterface $display
 */
function northcrossgroup_paragraph_view_alter(array &$build, ParagraphInterface $entity, EntityViewDisplayInterface $display) {
  // Skip adding contextual links if the Paragraph is in a QuickEdit form context
  // to avoid causing conflicts with Quickedit JS
  if (\Drupal::routeMatch()->getRouteName() == 'quickedit.field_form') {
    return;
  }

  // Skip adding contextual links, if the Paragraph is in a AdminRoute context.
  // That can happen on forms with Paragraph form display setting
  // "Edit mode: Preview" enabled.
  if (\Drupal::service('router.admin_context')->isAdminRoute()) {
    return;
  }

  $build['#contextual_links']['paragraph'] = [
    'route_parameters' => [
      'root_parent_type' => $entity->getEntityTypeId(),
      'root_parent' => $entity->id(),
      'paragraph' => $entity->id(),
    ],
    //'metadata' => ['changed' => $entity->getChangedTime()],
  ];
}