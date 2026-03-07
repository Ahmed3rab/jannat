@if ($record->map_url)
    <iframe width="100%" height="400" style="border:0;border-radius:8px" loading="lazy"
        src="https://www.google.com/maps?output=embed&q={{ urlencode($record->map_url) }}">
    </iframe>
@endif
