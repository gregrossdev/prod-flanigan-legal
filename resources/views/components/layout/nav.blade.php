<nav class="ui-nav">
    <div class="container">
        <article class="ui-nav-wrapper">
            <a href="/">
                <img
                    src="/assets/img/logo.svg"
                    class="ui-nav-logo-img"
                    alt="logo"
                />
            </a>
            <ul class="ui-nav-item-wrapper">
                <li class="ui-nav-item">
                    <a
                        href="/"
                        class="ui-nav-item-link"
                    >
                    Home
                    </a>
                </li>

                <li class="ui-nav-item">
                    <a
                        href="/about"
                        class="ui-nav-item-link"
                    >
                    About
                    </a>
                </li>

                <li class="ui-nav-item">
                    <a
                        href="/practices"
                        class="ui-nav-item-link"
                    >
                    Practices
                    </a>
                </li>

                <li class="ui-nav-item">
                    <a
                        href="/faq"
                        class="ui-nav-item-link"
                    >
                    FAQ
                    </a>
                </li>
                <li class="ui-nav-item">
                    <a
                        href="/contact"
                        class="ui-nav-item-link"
                    >
                    Contact
                    </a>
                </li>
                <li class="ui-nav-item">
                    <a
                        href="/contact"
                        class="btn btn-primary hidden lg:block"
                    >Free consultation</a
                    >
                </li>
                <li class="ui-nav-item">
                    <a
                        href="tel:+13042337766"
                        class="btn btn-primary btn-primary-light lg:block"
                    >
                        304-233-7766
                    </a>
                </li>
            </ul>
            <i
                @click="mobileMenu = true"
                class="bx bx-menu block text-4xl text-white lg:hidden"
            ></i>
        </article>
    </div>
</nav>

{{-- Mobile --}}
<nav class="ui-m-nav"
    :class="{ 'active': mobileMenu }"
>
    <button
        :class="{ 'hidden': !mobileMenu }"
        @click="mobileMenu = false"
        class="ui-m-nav-button"
    ></button>
    <div class="ui-m-nav-container">
        <article class="ui-m-nav-wrapper">
            <i
                @click="mobileMenu = false"
                class="bx bx-x ml-auto block text-4xl text-white"
            ></i>
            <ul>
                <li class="ui-m-nav-item">
                    <a
                        href="/"
                        class="ui-m-nav-item-link"
                    >
                    Home
                    </a>
                </li>

                <li class="ui-m-nav-item">
                    <a
                        href="/about"
                        class="ui-m-nav-item-link"
                    >
                    About
                    </a>
                </li>

                <li class="ui-m-nav-item">
                    <a
                        href="/practices"
                        class="ui-m-nav-item-link"
                    >
                    Practices
                    </a>
                </li>

                <li class="ui-m-nav-item">
                    <a
                        href="/faq"
                        class="ui-m-nav-item-link"
                    >
                    FAQ
                    </a>
                </li>


                <li class="ui-m-nav-item">
                    <a
                        href="/contact"
                        class="ui-m-nav-item-link"
                    >
                    Contact
                    </a>
                </li>

            </ul>
            <a
                href="tel:+13042337766"
                class="btn btn-primary mt-6 text-xs sm:text-base"
            >
                304-233-7766
            </a>
            <a
                href="/contact"
                class="btn btn-primary mt-6 text-xs sm:text-base"
            >Free consultation</a
            >
        </article>
    </div>
</nav>



