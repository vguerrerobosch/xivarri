<?php

namespace Xivarri\ACF;

use Xivarri\ACF\FieldGroup;
use Extended\ACF\Fields\FlexibleContent;
use Extended\ACF\Fields\Gallery;
use Extended\ACF\Fields\Image;
use Extended\ACF\Fields\Layout;
use Extended\ACF\Fields\Repeater;
use Extended\ACF\Fields\Select;
use Extended\ACF\Fields\Text;
use Extended\ACF\Fields\Textarea;
use Extended\ACF\Fields\URL;
use Extended\ACF\Location;

class PageFlexibleContent extends FieldGroup
{
    public static $title = 'Flexible Content';

    public static $hide_on_screen = [
        'the_content',
    ];

    public static $style = "seamless";

    public function layouts()
    {
        return [
            $this->layoutHero(),
            $this->layoutIntro(),
            $this->layoutVideo(),
            $this->layoutAgenda(),
            $this->layoutDyptich(),
            $this->layoutCta(),
            $this->layoutGallery(),
        ];
    }

    protected function layoutHero()
    {
        return [
            'name' => 'hero',
            'label' => 'Hero',
            'fields' => [
                Text::make(__('Intro', 'xivarri'), 'intro')->required(),
                Text::make(__('Tagline', 'xivarri'), 'tagline')->required(),
            ],
        ];
    }

    protected function layoutIntro()
    {
        return [
            'name' => 'intro',
            'label' => 'Intro',
            'fields' => [
                Textarea::make(__('Quote', 'xivarri'), 'quote')
                    ->rows(2)
                    ->required(),
                Textarea::make(__('Intro', 'xivarri'), 'intro')
                    ->rows(2)
                    ->required(),
                Textarea::make(__('Description', 'xivarri'), 'description')
                    ->rows(2)
                    ->required(),
            ],
        ];
    }

    protected function layoutVideo()
    {
        return [
            'name' => 'video',
            'label' => 'Video',
            'fields' => [
                Text::make(__('YouTube ID', 'xivarri'), 'youtube_id')->required(),
            ],
        ];
    }

    protected function layoutAgenda()
    {
        return [
            'name' => 'agenda',
            'label' => 'Agenda',
            'fields' => [
                Text::make(__('Title', 'xivarri'), 'title')->required(),
                Text::make(__('Subtitle', 'xivarri'), 'subtitle')->required(),
                Text::make(__('Date', 'xivarri'), 'date')->required(),
                FlexibleContent::make(__('Items', 'xivarri'), 'items')
                    ->button(__('Add agenda item', 'xivarri'))
                    ->layouts([
                        Layout::make(__('Agenda Item', 'xivarri'), 'agenda_item')
                            ->fields([
                                Text::make(__('Time', 'xivarri'), 'time')->required(),
                                Text::make(__('Text', 'xivarri'), 'text')->required(),
                                Select::make(__('Style', 'xivarri'), 'class')
                                    ->choices([
                                        '' => __('Default', 'xivarri'),
                                        'bg-blue-light' => __('Light Blue', 'xivarri'),
                                        'bg-apricot' => __('Apricot', 'xivarri'),
                                    ]),
                            ]),
                        Layout::make(__('Agenda Item Featured', 'xivarri'), 'agenda_item_featured')
                            ->fields([
                                Text::make(__('Time', 'xivarri'), 'time')->required(),
                                Text::make(__('Tagline', 'xivarri'), 'tagline')->required(),
                                Text::make(__('Title', 'xivarri'), 'title')->required(),
                                Text::make(__('Description', 'xivarri'), 'description')->required(),
                            ]),
                    ]),
            ],
        ];
    }

    protected function layoutDyptich()
    {
        return [
            'name' => 'dyptich',
            'label' => 'Dyptich',
            'fields' => [
                Text::make(__('Section Title', 'xivarri'), 'section_title')->required(),
                Image::make(__('Image', 'xivarri'), 'image')
                    ->previewSize('thumbnail')
                    ->format('id')
                    ->required(),
                Text::make(__('Tagline', 'xivarri'), 'tagline')->required(),
                Text::make(__('Title', 'xivarri'), 'title')->required(),
                Textarea::make(__('Description', 'xivarri'), 'description')
                    ->rows(3)
                    ->required(),
                Text::make(__('Speaker Name', 'xivarri'), 'speaker_name')->required(),
                Text::make(__('Speaker Description', 'xivarri'), 'speaker_description')->required(),
                Repeater::make(__('Speaker Socials', 'xivarri'), 'speaker_socials')
                    ->button(__('Add Social Link', 'xivarri'))
                    ->fields([
                        Select::make(__('Icon', 'xivarri'), 'icon')
                            ->choices([
                                'linkedin' => __('LinkedIn', 'xivarri'),
                                'twitter' => __('Twitter', 'xivarri'),
                                'facebook' => __('Facebook', 'xivarri'),
                                'instagram' => __('Instagram', 'xivarri'),
                            ])
                            ->required(),
                        Text::make(__('URL', 'xivarri'), 'url')->required(),
                    ]),
            ],
        ];
    }

    protected function layoutCta()
    {
        return [
            'name' => 'cta',
            'label' => 'Call to Action',
            'fields' => [
                Textarea::make(__('Call to Action', 'xivarri'), 'cta')
                    ->rows(2)
                    ->required(),
                Text::make(__('Title', 'xivarri'), 'title')->required(),
                Textarea::make(__('Description', 'xivarri'), 'description')
                    ->rows(2)
                    ->required(),
                Text::make(__('Button Text', 'xivarri'), 'button_text')->required(),
                URL::make(__('Button URL', 'xivarri'), 'button_url')->required(),
            ],
        ];
    }

    protected function layoutGallery()
    {
        return [
            'name' => 'gallery',
            'label' => 'Gallery',
            'fields' => [
                Text::make(__('Title', 'xivarri'), 'title')->required(),
                Gallery::make(__('Images', 'xivarri'), 'images')
                    ->previewSize('thumbnail')
                    ->minFiles(8)
                    ->format('id')
                    ->required(),
            ],
        ];
    }

    public function fields()
    {
        return [
            FlexibleContent::make(__('Components', 'xivarri'), 'components')
                ->helpertext(__('Add components to build the page layout.', 'xivarri'))
                ->button(__('Add component', 'xivarri'))
                ->layouts(array_map(function ($layout) {
                    return Layout::make(__($layout['label'], 'xivarri'), $layout['name'])
                        ->layout('block')
                        ->fields($layout['fields']);
                }, $this->layouts())),
        ];
    }

    public function location()
    {
        return [
            Location::where('page_type', 'front_page'),
        ];
    }
}

new PageFlexibleContent;
