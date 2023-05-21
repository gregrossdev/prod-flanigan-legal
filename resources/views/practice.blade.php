<x-site.layout>
    <main class="pad bg-gray-50">
        <article class="mx-auto p-4 lg:p-8 prose md:prose-lg lg:prose-2xl">
            <figure class="">
                <img src="{{url('storage/'.$practice->banner)}}" alt="" class="h-80 w-full shadow-xl rounded-2xl">
            </figure>
            <h2>
                {{$practice->title}}
            </h2>
            {!! $practice->content !!}
        </article>
    </main>
</x-site.layout>
