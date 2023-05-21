<x-layout.main>

    <x-pg-banner title="Contact" />


    <section class="container my-16 md:my-20 lg:my-24">
        <div class="flex flex-col-reverse justify-between lg:flex-row">
            <article class="mx-auto pt-12 sm:w-3/4 md:w-9/10 lg:mx-0 lg:w-1/2 lg:pt-0">
                <div class="flex items-center">
                    <h3
                        class="pr-6 font-header text-2xl text-black sm:text-3xl md:pr-12 md:text-4xl xl:text-5xl"
                    >
                        Leave a Message
                    </h3>
                    <div class="flex h-1 grow-0 bg-primary"></div>
                </div>
                <p class="pt-6 font-body text-sm font-light text-black">
                    Feel free to ask any questions over the phone, or get in touch via our contact form below.
                </p>
                <form>
                    <div
                        class="grid grid-cols-1 gap-5 pt-8 md:grid-cols-2 md:pt-10 lg:pt-8 xl:pt-10"
                    >
                        <div class="w-full">
                            <input
                                type="text"
                                class="form-input"
                                placeholder="Name"
                                id="contact_name"
                            />
                        </div>
                        <div class="w-full">
                            <input
                                type="email"
                                class="form-input"
                                placeholder="Email"
                                id="contact_email"
                            />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-5 pt-4 md:grid-cols-2 md:pt-6">
                        <div class="w-full">
                            <input
                                type="tel"
                                class="form-input"
                                placeholder="Phone"
                                id="contact_phone"
                            />
                        </div>
                        <div class="w-full">
                            <input
                                type="text"
                                class="form-input"
                                placeholder="Address"
                                id="contact_address"
                            />
                        </div>
                    </div>
                    <div class="pt-4 md:pt-6">
          <textarea
              class="form-textarea h-48"
              placeholder="Description"
              id="contact_message"
          ></textarea>
                    </div>
                    <button
                        type="submit"
                        class="btn btn-primary mt-4 w-full md:mt-6"
                        aria-label="Submit button"
                    >
                        SEND MESSAGE
                    </button>
                </form>
            </article>
            <article class="mx-auto sm:w-3/4 md:w-9/10 lg:mx-0 lg:w-2/5">
                <div class="flex items-center pb-12">
                    <h3
                        class="pr-6 font-header text-2xl text-black sm:text-3xl md:pr-12 md:text-4xl xl:text-5xl"
                    >
                        Quick Contact
                    </h3>
                    <div class="flex h-1 flex-1 bg-primary"></div>
                </div>
                <div class="flex items-center pb-8">
        <span
        ><img
                src="/assets/img/icons/icon-phone.svg"
                alt="phone icon"
                class="h-auto w-20"
            /></span>
                    <div class="pl-8 md:pl-10">
                        <p
                            class="font-semibold font-body text-base uppercase text-primary md:text-lg"
                        >
                            PHONE
                        </p>
                        <p class="font-body text-sm font-light text-black">
                            <a
                                href="tel:+13042337766"
                                class="btn btn-primary hidden lg:block"
                            >304-233-7766</a
                        </p>
                    </div>
                </div>
                <div class="flex items-center pb-8">
                    <div>
                        <img
                            src="/assets/img/icons/icon-email.svg"
                            alt="email icon"
                            class="h-auto w-20"
                        />
                    </div>
                    <div class="pl-8 md:pl-10">
                        <p
                            class="font-semibold font-body text-base uppercase text-primary md:text-lg"
                        >
                            Email
                        </p>
                        <p class="font-body text-sm font-light text-black">
                            info@flaniganlegal.com
                        </p>
                    </div>
                </div>
                <!-- <div class="flex items-center pb-8">
        <span
        ><img
                src="/assets/img/icons/icon-clock.svg"
                alt="time icon"
                class="h-auto w-20"
            /></span>
                    <div class="pl-8 md:pl-10">
                        <p
                            class="font-semibold font-body text-base uppercase text-primary md:text-lg"
                        >
                            WORKING HOURS
                        </p>
                        <p class="font-body text-sm font-light text-black">
                            Monday - Friday: 9:00AM - 6:00PM
                        </p>
                        <p class="font-body text-sm font-light text-black">
                            Saturday - Sunday: 9:00AM - 4:00PM
                        </p>
                    </div>
                </div> -->
            </article>
        </div>
    </section>

{{--    <section class="relative bg-grey">--}}
{{--        <div class="container flex flex-col items-center lg:flex-row">--}}
{{--            <div class="py-16 sm:w-3/4 md:w-9/10 md:py-24 lg:w-3/5 lg:py-32">--}}
{{--                <div class="text-center md:text-left lg:pr-24 xl:pr-32">--}}
{{--                    <p class="font-header text-2xl text-white md:text-4xl lg:text-5xl">--}}
{{--                        Our Branches--}}
{{--                    </p>--}}
{{--                    <div class="mt-8 flex flex-wrap md:mt-12">--}}

{{--                        <div--}}
{{--                            class="group w-full border-t border-r border-l border-primary transition-colors last:border-b hover:bg-primary md:w-1/2 md:border"--}}
{{--                        >--}}
{{--                            <div class="px-5 py-8 md:px-8 lg:px-10 lg:py-10">--}}
{{--                                <h4--}}
{{--                                    class="font-semibold pb-3 font-body text-base uppercase text-primary transition-colors group-hover:text-white md:text-lg"--}}
{{--                                >--}}
{{--                                    PRINCIPAL BRANCH--}}
{{--                                </h4>--}}
{{--                                <p class="font-body text-sm font-light text-white">--}}
{{--                                    109 Fieldcrest Road--}}
{{--                                </p>--}}
{{--                                <p class="font-body text-sm font-light text-white">--}}
{{--                                    Long Island City, NY 11101--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div--}}
{{--                            class="group w-full border-t border-r border-l border-primary transition-colors last:border-b hover:bg-primary md:w-1/2 md:border"--}}
{{--                        >--}}
{{--                            <div class="px-5 py-8 md:px-8 lg:px-10 lg:py-10">--}}
{{--                                <h4--}}
{{--                                    class="font-semibold pb-3 font-body text-base uppercase text-primary transition-colors group-hover:text-white md:text-lg"--}}
{{--                                >--}}
{{--                                    TEXAS BRANCH--}}
{{--                                </h4>--}}
{{--                                <p class="font-body text-sm font-light text-white">--}}
{{--                                    3006 Werninger Street--}}
{{--                                </p>--}}
{{--                                <p class="font-body text-sm font-light text-white">--}}
{{--                                    3006 Werninger Street--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div--}}
{{--                            class="group w-full border-t border-r border-l border-primary transition-colors last:border-b hover:bg-primary md:w-1/2 md:border"--}}
{{--                        >--}}
{{--                            <div class="px-5 py-8 md:px-8 lg:px-10 lg:py-10">--}}
{{--                                <h4--}}
{{--                                    class="font-semibold pb-3 font-body text-base uppercase text-primary transition-colors group-hover:text-white md:text-lg"--}}
{{--                                >--}}
{{--                                    MISSISSIPPI BRANCH--}}
{{--                                </h4>--}}
{{--                                <p class="font-body text-sm font-light text-white">--}}
{{--                                    1024 Oxford Court--}}
{{--                                </p>--}}
{{--                                <p class="font-body text-sm font-light text-white">--}}
{{--                                    Greenwood, MS 38930--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div--}}
{{--                            class="group w-full border-t border-r border-l border-primary transition-colors last:border-b hover:bg-primary md:w-1/2 md:border"--}}
{{--                        >--}}
{{--                            <div class="px-5 py-8 md:px-8 lg:px-10 lg:py-10">--}}
{{--                                <h4--}}
{{--                                    class="font-semibold pb-3 font-body text-base uppercase text-primary transition-colors group-hover:text-white md:text-lg"--}}
{{--                                >--}}
{{--                                    CALIFORNIA BRANCH--}}
{{--                                </h4>--}}
{{--                                <p class="font-body text-sm font-light text-white">--}}
{{--                                    11984 Locust View Drive--}}
{{--                                </p>--}}
{{--                                <p class="font-body text-sm font-light text-white">--}}
{{--                                    Larkspur, CA 94939--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div--}}
{{--            class="inset-y-0 right-0 z-50 h-88 w-full overflow-hidden md:h-auto lg:absolute lg:w-2/5"--}}
{{--        >--}}
{{--            <iframe--}}
{{--                src="https://snazzymaps.com/embed/158465"--}}
{{--                width="100%"--}}
{{--                height="690px"--}}
{{--                style="border: none"--}}
{{--                title="Main office map"--}}
{{--            ></iframe>--}}
{{--        </div>--}}
{{--    </section>--}}






</x-layout.main>
