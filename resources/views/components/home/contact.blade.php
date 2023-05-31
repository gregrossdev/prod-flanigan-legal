<section class="bg-grey py-20">
    <div class="container flex flex-col py-20 md:py-24 lg:flex-row lg:py-32">
        <div class="hidden w-full lg:block lg:w-1/2 xl:w-2/5">
            <figure class="aspect-w-3 aspect-h-4 h-96">
                <img
                    src="https://media.istockphoto.com/id/687643376/photo/no-win-no-fee.jpg?s=612x612&w=0&k=20&c=d7kLUw8ik_heweyWC1JaoSWxoRk6GeKlKE8949ik8y8="
                    class="object-cover"
                    alt="contact image"
                />
            </figure>
        </div>
        <article class="pt-10 md:pt-0 lg:w-3/5 lg:pl-16 xl:pl-32">
            <h4 class="sub-heading">
                Reach Out Now
            </h4>
            <h2 class="pt-2 font-header text-2xl text-white sm:text-3xl md:text-4xl xl:pt-5 xl:text-5xl">
                Free Consultation
            </h2>
            <p class="pt-3 font-body text-sm font-light text-white">
                Call us at (304) 233-7766 or fill out the form below. Our lawyers are here to help.
            </p>
            <form method="post" action="{{route('contact.send')}}" enctype="multipart/form-data">
                @csrf
                <section class="ui-form-wrapper pt-8 md:pt-10 lg:pt-8 xl:pt-10">
                    <div class="ui-form-input-wrapper">
                        <label
                            for="home_name"
                            class="ui-form-label"
                        >Name</label
                        >
                        <input
                            type="text"
                            class="ui-form-input"
                            placeholder="Name"
                            id="home_name"
                        />
                    </div>
                    <div class="ui-form-input-wrapper">
                        <label
                            for="home_email"
                            class="ui-form-label"
                        >Email</label
                        >
                        <input
                            type="email"
                            class="ui-form-input"
                            placeholder="Email"
                            id="home_email"
                        />
                    </div>
                </section>
                <section class="ui-form-wrapper md:pt-6">
                    <div class="ui-form-input-wrapper">
                        <label
                            for="home_phone"
                            class="ui-form-label"
                        >Phone</label
                        >
                        <input
                            type="tel"
                            class="ui-form-input"
                            placeholder="Phone"
                            id="home_phone"
                        />
                    </div>
                    <div class="ui-form-input-wrapper">
                        <label
                            for="home_address"
                            class="ui-form-label"
                        >Address</label
                        >
                        <input
                            type="text"
                            class="ui-form-input"
                            placeholder="Address"
                            id="home_address"
                        />
                    </div>
                </section>
                <article class="pt-0 md:pt-6">
                    <label
                        for="home_message"
                        class="ui-form-label"
                    >Message</label
                    >
                    <textarea
                        class="form-textarea form-textarea-transparent h-48"
                        placeholder="Description"
                        id="home_message"
                    ></textarea>
                </article>
                <button
                    class="btn btn-primary mt-6"
                    type="submit"
                    aria-label="Submit button"
                >
                    Request Consultation
                </button>
            </form>
        </article>
    </div>
</section>
