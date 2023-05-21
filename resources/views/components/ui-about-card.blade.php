@props(['person' => ''])

<article class="ui-about-card">
    <figure class="aspect-video">
        <img
            class="object-cover object-top w-full h-88" {{$attributes}}
        />
    </figure>
    <footer class="py-8 sm:py-10">
        <h4 class="ui-about-card-heading">
            {{$person}}
        </h4>
    </footer>
</article>
