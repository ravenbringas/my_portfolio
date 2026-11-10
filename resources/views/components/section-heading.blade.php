@props([
    'label',
    'title',
    'intro' => null,
    'centered' => false,
])

<div {{ $attributes->merge(['class' => $centered ? 'reveal mx-auto max-w-2xl text-center' : 'reveal']) }}>
    <span class="eyebrow {{ $centered ? 'eyebrow-centered' : '' }}">{{ $label }}</span>
    <h2 class="section-title mt-4">{{ $title }}</h2>
    @if ($intro)
        <p class="section-intro mt-4 {{ $centered ? 'mx-auto' : '' }}">{{ $intro }}</p>
    @endif
</div>
