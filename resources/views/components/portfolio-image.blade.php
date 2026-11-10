@props([
    'path',
    'alt',
    'flush' => false,
])

@php
    $imageExists = file_exists(public_path($path));
@endphp

<div {{ $attributes->merge(['class' => $flush ? 'img-frame img-frame-flush' : 'img-frame']) }}>
    @if ($imageExists)
        <img src="{{ asset($path) }}" alt="{{ $alt }}" loading="lazy">
    @else
        <div class="img-placeholder" role="img" aria-label="{{ $alt }}">
            <div class="img-placeholder-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <rect width="18" height="18" x="3" y="3" rx="2"/>
                    <circle cx="9" cy="9" r="2"/>
                    <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/>
                </svg>
            </div>
            <p class="img-placeholder-title">{{ $alt }}</p>
            <p class="img-placeholder-path">Replace with your image at<br><code>public/{{ $path }}</code></p>
        </div>
    @endif
</div>
