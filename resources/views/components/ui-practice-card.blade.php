@props(['heading' => ''])

<article class="ui-practice-card">
    <figure class="aspect-video">
        <img class="ui-practice-card-img" {{$attributes}} />
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

{{--<article class="rounded overflow-hidden shadow-lg">--}}
{{--    <img class="w-full h-60" {{$attributes}} />--}}
{{--    <section class="px-6 py-8">--}}
{{--        <div class="font-bold text-xl mb-2">--}}
{{--            {{$heading}}--}}
{{--        </div>--}}
{{--        <p class="text-gray-700 text-base">--}}
{{--            {{$slot}}--}}
{{--        </p>--}}
{{--    </section>--}}
{{--</article>--}}
