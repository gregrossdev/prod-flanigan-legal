<x-layout.main>

    <x-pg-banner title="About"/>

    <div class="container">

       
        <section class="py-12">
            <x-pg-header heading="Our Partners"/>
            <div class="grid grid-cols-1 gap-10 pt-5 md:grid-cols-2 md:pt-8 lg:pt-12 lg:px-48">

                <x-ui-about-card
                    person="J. William Flanigan"
                    src="{{asset('/assets/img/bill.webp')}}"
                    alt="staff member picture"
                />

                <x-ui-about-card
                    person="George N. Sidiropolis"
                    src="{{asset('/assets/img/george.webp')}}"
                    alt="staff member picture"
                />

            </div>
        </section>

{{--        --}}{{-- Paralegals --}}
{{--        <section class="py-12">--}}
{{--            <x-pg-header heading="Our Talented Legal Staff"/>--}}
{{--            <div class="grid grid-cols-1 gap-10 pt-5 md:grid-cols-2 lg:grid-cols-3 md:pt-8 lg:pt-12">--}}

{{--                <x-ui-about-card--}}
{{--                    person="George N. Sidiropolis"--}}
{{--                    src="https://source.unsplash.com/1000x640/?sexy"--}}
{{--                    alt="staff member picture"--}}
{{--                />--}}

{{--                <x-ui-about-card--}}
{{--                    person="George N. Sidiropolis"--}}
{{--                    src="https://source.unsplash.com/1000x640/?woman"--}}
{{--                    alt="staff member picture"--}}
{{--                />--}}

{{--                <x-ui-about-card--}}
{{--                    person="George N. Sidiropolis"--}}
{{--                    src="https://source.unsplash.com/1000x640/?girl"--}}
{{--                    alt="staff member picture"--}}
{{--                />--}}

{{--            </div>--}}
{{--        </section>--}}

        {{-- Values --}}
        <section class="py-12">
            <x-pg-header heading="Core Values" />

            <div class="grid grid-cols-1 pt-10 md:grid-cols-2">

                <x-ui-value-card
                    value="INTEGRITY"
                    alt="INTEGRITY"
                    src="{{asset('/assets/img/icons/icon-integrity.svg')}}"
                >
                    We fight hard because we care about our clients. When we take your case, you get our best. That is our promise. We do not believe in fast cash and quick settlements. We dedicate the same level of professionalism, skill, and resources to every case, no matter the size. This is personal for our clients. So, it’s personal for us. Our clients call us when something terrible has happened and they need our help. The stakes are high. We are committed to getting them the help they need, so that they can rebuild their lives. We won't shy away  from taking any corporate giant to the courtroom.
                </x-ui-value-card>

                <x-ui-value-card
                    value="Community"
                    alt="Community"
                    src="{{asset('/assets/img/icons/icon-collaboration.svg')}}"
                >
                    There is nothing more important to us than using our skills as trial lawyers to make the
                    world a better place. We are committed to making a difference in our client’s lives and
                    in our community. Our attorneys uncover the truth and fearlessly pursue justice. Holding
                    wrongdoers accountable is our job.
                </x-ui-value-card>

                <x-ui-value-card
                    value="Individualization"
                    alt="Individualization"
                    src="{{asset('/assets/img/icons/icon-client.svg')}}"
                >
                    Our business model focuses on quality not quantity. Fewer cases means more time for our
                    clients. Our clients deserve personal attention. Fighting for best possible outcome for
                    each of out clients demands that we incredibly selective in the kinds of cases we agree to take. Because we limit the number of cases we accept, our attorneys and staff are able to focus their efforts on you and your case and put in the time and resources it takes to achieve the best possible result.
                </x-ui-value-card>

                <x-ui-value-card
                    value="Communication"
                    alt="Communication"
                    src="{{asset('assets/img/icons/icon-service.svg')}}"
                >
                    You’ll have a team working for you, including a non-lawyer client advocate assigned to
                    your case. Our legal team listens, cares, and provides solutions. Our clients speak directly
                    with an attorney during the duration of their case, not just the paralegals who assist them.
                </x-ui-value-card>

                <x-ui-value-card
                    value="Creativity"
                    alt="Creativity"
                    src="{{asset('/assets/img/icons/icon-rigor.svg')}}"
                >
                    We are not afraid to think outside of the box. Our attorney’s innovative strategies
                    advance novel legal theories to push the law in new directions. We understand that it is our
                    responsibility to better the legal system in order to win our clients’ cases.
                </x-ui-value-card>

                <x-ui-value-card
                    value="Guidance"
                    alt="Guidance"
                    src="{{asset('assets/img/icons/icon-support.svg')}}"
                >
                    We’re here to help you navigate through hard times. When tragedy happens, our team of
                    professionals will guide you through the complex legal process so you can focus on your
                    recovery and regain your peace of mind and well-being.
                </x-ui-value-card>

                <x-ui-value-card
                    value="Compassion"
                    alt="Compassion"
                    src="{{asset('/assets/img/icons/icon-professional.svg')}}"
                >
                    We treat our clients with kindness and understanding. Responding to our clients’ unique
                    experience with care and concern that is solution focused. Our clients come to us for a
                    remedy and we understand that that means we are measured by our results.
                </x-ui-value-card>




            </div>
        </section>

    </div>
</x-layout.main>
