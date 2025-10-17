<?php

namespace Xivarri\ACF;

use Extended\ACF\Fields\Email;
use Extended\ACF\Fields\File;
use Extended\ACF\Fields\Group;
use Extended\ACF\Fields\Image;
use Extended\ACF\Fields\Text;
use Extended\ACF\Fields\URL;
use Extended\ACF\Location;

class ThemeOptions extends FieldGroup
{
    public static $title = 'Theme Options';

    public static $style = 'seamless';

    public function __construct()
    {
        parent::__construct();

        acf_add_options_page([
            'icon_url' => svg_to_base64('adjustments-vertical'),
            'menu_slug' => 'theme_options',
            'page_title' => static::$title,
            'redirect' => false,
        ]);
    }

    public function fields()
    {
        return [
            Group::make(__('Contact'), 'contact')
                ->layout('row')
                ->fields([
                    Email::make(__('Email'), 'email'),
                    Text::make(__('Phone'), 'phone'),
                ]),
            Group::make(__('Event Details'), 'event_details')
                ->layout('row')
                ->fields([
                    Text::make(__('Date'), 'date'),
                    Text::make(__('Time'), 'time'),
                ]),
            URL::make(__('Tickets URL'), 'tickets_url'),
            Group::make(__('Social Links'), 'social_links')
                ->layout('row')
                ->fields([
                    URL::make(__('Instagram'), 'instagram'),
                    URL::make(__('TikTok'), 'tiktok'),
                    URL::make(__('LinkedIn'), 'linkedin'),
                    URL::make(__('YouTube'), 'youtube'),
                ]),
            Group::make(__('Location'), 'location')
                ->layout('row')
                ->fields([
                    Text::make(__('Name'), 'name'),
                    Text::make(__('Address'), 'address'),
                    URL::make(__('Google Maps URL'), 'google_maps_url'),
                    Image::make(__('Map Image'), 'map_image')
                        ->format('id')
                        ->previewSize('thumbnail'),
                ]),
            File::make('iCal File', 'ics_file')
                ->acceptedFileTypes(['ics'])
                ->format('url'),
        ];
    }

    public function location()
    {
        return [
            Location::where('options_page', 'theme_options'),
        ];
    }
}

new ThemeOptions;
