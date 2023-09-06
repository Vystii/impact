<?php

declare(strict_types=1);

namespace Drupal\impact\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a book parking block.
 *
 * @Block(
 *   id = "impact_book_parking",
 *   admin_label = @Translation("Book Parking"),
 *   category = @Translation("Custom"),
 * )
 */
final class BookParkingBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration(): array {
    return [
      'example' => $this->t('Hello world!'),
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state): array {
    $form['example'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Example'),
      '#default_value' => $this->configuration['example'],
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state): void {
    $this->configuration['example'] = $form_state->getValue('example');
  }

  /**
   * {@inheritdoc}
   */
  public function build(): array {
    $build['content'] = [
      '#type' => "html_tag",
      '#tag' => 'section',
      "#attributes" => [
        'id' => 'app-parking',
        'class' => [
          'm-5',
        ]
      ]
    ];
    $build['content']['#attached']['library'][] = 'impact/impact_vue_lib';
    $build['content']['#attached']['library'][] = 'impact/impact_booking_parking';
    return $build;
  }
}
