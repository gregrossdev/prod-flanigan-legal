@props(['value' => ''])

<article class="ui-value-card">
    <figure class="md:w-2/6 lg:w-1/6">
        <img class="h-auto w-24" {{$attributes}} />
    </figure>
    <section class="p-5 md:w-4/6 lg:w-5/6">
        <h2 class="ui-value-card-heading">
            {{ $value }}
        </h2>
        <p class="ui-value-card-description">
            {{ $slot }}
        </p>
    </section>
</article>
