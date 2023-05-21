<section class="relative z-20 bg-grey-dark py-88">
    <div class="container sm:w-9/10 lg:w-5/6">
        <div class="-my-120 bg-white">
            {{-- About --}}
            <section class="about-section">
                <div class="about-section-inner">
                    <div class="about-section-figure-wrapper">
                        <figure class="about-section-figure">
                            <img
                                src="{{asset('/assets/img/bill.webp')}}"
                                class="about-section-img"
                                alt="about featured image"
                            />
                        </figure>
                    </div>
                    <article class="about-section-article">
                        <h4 class="sub-heading">
                            Every Injury is Personal
                        </h4>
                        <h2 class="about-section-article-heading">
                            We are here to help!
                        </h2>
                        <p class="about-section-article-body">
                            We represent clients against insurance companies, the government and large corporations.  In the legal system, these types of cases are called civil rights cases, but we prefer to think of them as human rights cases.  We uphold the sanctity of the constitutional right to trial by jury.  All civil cases are handled on a contingency basis which means you pay no fees until we win.
                        </p>
                        <a href="/about" class="btn btn-primary btn-large">
                            READ MORE
                        </a>
                    </article>
                </div>
            </section>

            {{-- Areas of Practice--}}
            <section class="practice-section">
                <header class="practice-section-header">
                    <h4 class="practice-section-sub-heading">
                        LAW SERVICES
                    </h4>
                    <h2 class="practice-section-heading">
                        Areas of Practice
                    </h2>
                </header>
                <div x-data="{ activeTab: 'wrongful-death' }">
                    <x-ui-tabs/>
                </div>
            </section>
        </div>
    </div>
</section>
