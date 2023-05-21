@props(['heading' => ''])

<article class="ui-practice-card">
    <figure class="aspect-video">
        <img class="object-cover" {{$attributes}} />
    </figure>
    <section class="px-6 py-8">
        <h4 class="ui-practice-card-heading">
            {{$heading}}
        </h4>
        <p class="ui-practice-card-description">
            {{$slot}}
        </p>
    </section>
</article>
