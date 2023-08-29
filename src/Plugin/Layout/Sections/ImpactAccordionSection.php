<?php

namespace Drupal\impact\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Impact Accordion section php
 * @Layout(
 *  id = "impact_accordion_section",
 *  label = @Translation("impact accordion section"),
 *  category = @Translation("impact"),
 *  path = "layouts/sections",
 *  library = "impact/impact_accordion_section", * 
 *  template = "impact-accordion-section",
 *  regions = {
 *      "impact_accordion_title" = {
 *          "label" = @translation("impact accordion title"), 
 *      },
 *      "impact_accordion_description" = {
 *          "label" = @translation("impact accordion description"), 
 *      },
 *      "impact_accordion_call_to_action" = {
 *          "label" = @translation("impact accordion call to action"), 
 *      },
 *      "impact_accordion_image_btn" = {
 *          "label" = @translation("impact button on image"), 
 *      },
 *      "impact_accordion_image" = {
 *          "label" = @translation("impact accordion image"), 
 *      },
 *      "impact_accordion_fields" = {
 *          "label" = @translation("impact accordion field"), 
 *      },
 *  }
 * )
 */


class ImpactAccordionSection extends FormatageModelsSection {

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager) {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'impact') . "/icons/sections/impact-accordion.png");
    }

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::build
     */
    public function build(array $regions) {
        // TODO auto-generated method stub
        $build = parent::build($regions);
        FormatageModelsThemes::formatSettingValues($build);

        return $build;
    }

    /**
     * {@inheritdoc}
     */
    public function defaultConfiguration() {
        return parent::defaultConfiguration() + [
            'css' => '',
            'load_library' => true,
            'content' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Impact accordion section',
                    'loader' => 'dynamic',
                ],
                'fields' => [
                    'impact_accordion_title' => [
                        'text_html' => [
                            'label' => 'impact accordion title',
                            'value' => 'Welcome to Impact',
                        ]
                    ],
                    'impact_accordion_description' => [
                        'text_html' => [
                            'label' => 'accordion impact description',
                            'value' => 'Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.',
                        ]
                    ],
                    'impact_accordion_call_to_action' => [
                        'url' => [
                            'label' => 'impact accordion call to action',
                            'value' => [
                                'class' => 'link',
                                'text'  => 'Get Started',
                                'href'  => '#',
                            ]
                        ]
                    ],
                    'impact_accordion_image_btn' => [
                        'url' => [
                            'label' => 'impact accordion button on image',
                            'value' => [
                                'class' => 'link',
                                'text'  => 'action',
                                'href'  => '#',
                            ]
                        ]
                    ],
                    'impact_accordion_image' => [
                        'img' => [
                            'label' => 'first container title',
                            'fids' => '',
                        ]
                    ],
                    'impact_accordion_fields' => [
                        'text_html' => [
                            'label' => 'Accordion fields',
                        ]
                    ],
                ],
            ],
        ];
    }
}