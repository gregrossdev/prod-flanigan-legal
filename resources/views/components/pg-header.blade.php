@props(['heading' => ''])

<header class="pg-header">
    <h2 class="pg-header-heading">
        {{ $heading }}
    </h2>
    <p class="pg-header-description">
        {{ $slot }}
    </p>
</header>


{{--<div class="mx-auto lg:w-2/3">--}}
{{--    <p class="pt-5 pb-4 font-body text-md font-light leading-relaxed text-black">--}}
{{--        We respect and value the individual needs of each client. When you or a loved one is injured,--}}
{{--        you want the best personal injury attorney to represent you. We have the experience and--}}
{{--        resources to fight for accountability when negligence or wrongdoing of others is involved.--}}
{{--    </p>--}}
{{--</div>--}}
