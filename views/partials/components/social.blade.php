<ul class="social-links">
    @php
        $socials = [
            'facebook' => [
                'icon' => 'social_icons social_facebook_square'
            ],
            'instagram' => [
                'icon' => 'social_icons social_instagram_square'
            ],
            'twitter' => [
                'icon' => 'social_icons social_twitter_square'
            ],
            'youtube' => [
                'icon' => 'social_icons social_youtube_square'
            ],
            'linkedin' => [
                'icon' => 'social_icons social_linkedin_square'
            ],
            'google'   => [
                'icon' => 'social_icons social_googleplus_square'
            ]
        ];
    @endphp
    @foreach($socials as $social => $socialSettings)
        @if(@setting('theme::'.$social))
            <li><a target="_blank" href="{{ setting('theme::'.$social) }}"><i class="{{ $socialSettings['icon'] }}"></i></a></li>
        @endif
    @endforeach
</ul>
