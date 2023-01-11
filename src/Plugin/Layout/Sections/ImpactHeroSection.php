<?php
namespace Drupal\impact\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Impact hero section php
 * @Layout(
 *  id = "impact_hero_section",
 *  label = @Translation("impact hero section"),
 *  category = @Translation("impact"),
 *  path = "layouts/sections",
 *  library = "impact/impact_hero_section", * 
 *  template = "impact-hero-section",
 *  regions = {
 *      "impact_hero_title" = {
 *          "label" = @translation("impact hero title"), 
 *      },
 *      "impact_hero_description" = {
 *          "label" = @translation("impact hero description"), 
 *      },
 *      "impact_hero_call_to_action" = {
 *          "label" = @translation("impact hero call to action"), 
 *      },
 *      "impact_hero_watch_video" = {
 *          "label" = @translation("impact watch video"), 
 *      },
 *      "impact_hero_image" = {
 *          "label" = @translation("impact hero image"), 
 *      },
 *      "impact_hero_many_elements" = {
 *          "label" = @translation("impact hero many elements"), 
 *      },
 *  }
 * )
 */


class ImpactHeroSection extends FormatageModelsSection
{

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager)
    {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'impact') . "/icons/sections/impact-hero.png");
    }

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::build
     */
    public function build(array $regions)
    {
        // TODO auto-generated method stub
        $build = parent::build($regions);
        FormatageModelsThemes::formatSettingValues($build);

        return $build;
    }

    /**
     * {@inheritdoc}
     */
    public function defaultConfiguration()
    {
        return parent::defaultConfiguration() + [
            'css' => '',
            'load_library' => true,
            'content' => [
                'builder-form' => true,
                'info' => [
                    'title' =>'Impact Hero section',
                    'loader' => 'dynamic',
                ],
                'fields' => [
                    'impact_hero_title' => [
                        'text_html' => [
                            'label' => 'impact hero title',
                            'value' => 'Welcome to Impact',
                        ]
                    ],
                    'impact_hero_description' => [
                        'text_html' => [
                            'label' => 'hero impact description',
                            'value' => 'Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.',
                        ]
                    ],
                    'impact_hero_call_to_action' => [
                        'url' => [
                            'label' => 'impact hero call to action',
                            'value' => [
                                'class' => 'link',
                                'text'  => 'Get Started',
                                'href'  => '#',
                            ]
                        ]
                    ],
                    'impact_hero_watch_video' => [
                        'url' => [
                            'label' => 'impact hero watch video',
                            'value' => [
                                'class' => 'link',
                                'text'  => 'watch video',
                                'href'  => '#',
                            ]
                        ]
                    ],
                    'impact_hero_image' => [
                        'img' => [
                            'label' => 'first container title',
                            'fids' => '',
                        ]
                    ],
                    'impact_hero_many_elements' => [
                        'text' => [
                            'label' => 'second container title',
                            'value' => 'title',
                        ]
                    ],
                ],
            ],
        ];
    }
}
