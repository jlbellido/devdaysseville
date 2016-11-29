<?php

namespace Drupal\dddsvq_tickets\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'BuyTicketBlock' block.
 *
 * @Block(
 *  id = "buy_ticket_block",
 *  admin_label = @Translation("Buy ticket block"),
 * )
 */
class BuyTicketBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];

    $build['buy_ticket']['#theme'] = 'buy_ticket';

    return $build;
  }

}
