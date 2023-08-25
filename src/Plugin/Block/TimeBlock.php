<?php

namespace Drupal\impact\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'TimeBlock' block.
 *
 * @Block(
 *  id = "time_block",
 *  admin_label = @Translation("Time block"),
 * )
 */
class TimeBlock extends BlockBase
{

  /**
   * {@inheritdoc}
   */
  public function build()
  {
    $build = [];
    $build['#theme'] = 'time_block';
    $build['time_block']['#markup'] = date("l");

    return $build;
  }
}
