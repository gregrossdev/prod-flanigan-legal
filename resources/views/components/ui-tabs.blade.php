<header
    class="ui-tabs-header"
    role="tablist"
>

    <span
        class="ui-tabs-header-filter"
        :class="{ 'active': activeTab === 'wrongful-death' }"
        @click="activeTab = 'wrongful-death'"
    >
              Wrongful Death
            </span>
    <span
        class="ui-tabs-header-filter"
        :class="{ 'active': activeTab === 'auto-accidents' }"
        @click="activeTab = 'auto-accidents'"
    >
              Automobile Accidents
            </span>
    <span
        class="ui-tabs-header-filter"
        :class="{ 'active': activeTab === 'insurance-bad' }"
        @click="activeTab = 'insurance-bad'"
    >
              Insurance Bad Faith
            </span>
    <span
        class="ui-tabs-header-filter"
        :class="{ 'active': activeTab === 'truck' }"
        @click="activeTab = 'truck'"
    >
              Truck Accidents
            </span>
    <span
        class="ui-tabs-header-filter"
        :class="{ 'active': activeTab === 'motorcycle' }"
        @click="activeTab = 'motorcycle'"
    >
              Motorcycle Accidents
            </span>

    <span
        class="ui-tabs-header-filter"
        :class="{ 'active': activeTab === 'premise' }"
        @click="activeTab = 'premise'"
    >
              Premises Liability
            </span>
    <span
        class="ui-tabs-header-filter"
        :class="{ 'active': activeTab === 'defective' }"
        @click="activeTab = 'defective'"
    >
              Defective Product
            </span>
    <span
        class="ui-tabs-header-filter"
        :class="{ 'active': activeTab === 'malpractice' }"
        @click="activeTab = 'malpractice'"
    >
              Medical Malpractice
            </span>
    <span
        class="ui-tabs-header-filter"
        :class="{ 'active': activeTab === 'tbi' }"
        @click="activeTab = 'tbi'"
    >
              Traumatic Brain Injuries
            </span>

    <span
        class="ui-tabs-header-filter"
        :class="{ 'active': activeTab === 'pedestrian' }"
        @click="activeTab = 'pedestrian'"
    >
              Pedestrian Accidents
            </span>

</header>

<section class="ui-tabs-section">
    <div
        role="tabpanel"
        x-show.transition.opacity.in="activeTab === 'wrongful-death'"
    >
        <article class="ui-tabs-section-article">
            <header class="ui-tabs-section-article-header">
                <h2 class="ui-tabs-section-article-heading">
                    Wrongful Death
                </h2>

                <p class="ui-tabs-section-article-body">
                    The death of a loved one is always a devastating loss. Beyond compensation, grieving families want
                    answers. Why did this happen? How could this have been prevented? Can anything be done to make sure
                    that it does not happen to someone else?
                </p>

                <p class="ui-tabs-section-article-body">
                    Our attorneys use the justice system to uncover the truth and hold those responsible accountable for
                    their actions. If your loved one was taken from you because of someone else’s misconduct, you may
                    have grounds for a wrongful death lawsuit.
                </p>

            </header>
            <div class="ui-tabs-section-article-figure-wrapper">
                <figure class="ui-tabs-section-article-figure">
                    <img
                        src="{{asset('/assets/img/death.jpg')}}"
                        class="ui-tabs-section-article-img"
                        alt="services image"
                    />
                </figure>
            </div>
        </article>
    </div>

    <div
        role="tabpanel"
        x-show.transition.opacity.in="activeTab === 'auto-accidents'"
    >
        <article
            class="ui-tabs-section-article"
        >
            <header class="ui-tabs-section-article-header">
                <h2 class="ui-tabs-section-article-heading">
                    Automobile Accidents
                </h2>
                <p
                    class="ui-tabs-section-article-body"
                >
                    We hit hard when it comes to holding reckless drivers and insurance companies responsible. When you
                    or
                    someone you love is seriously injured because another driver behaves dangerously, you deserve a
                    lawyer
                    who will not stop fighting until you get the compensation you deserve.
                </p>

            </header>
            <div class="ui-tabs-section-article-figure-wrapper">
                <figure class="ui-tabs-section-article-figure">
                    <img
                        src="{{asset('/assets/img/car-crash.jpg')}}"
                        class="ui-tabs-section-article-img"
                        alt="services image"
                    />
                </figure>
            </div>
        </article>
    </div>

    <div
        role="tabpanel"
        x-show.transition.opacity.in="activeTab === 'insurance-bad'"
    >
        <article
            class="ui-tabs-section-article"
        >
            <header class="ui-tabs-section-article-header">
                <h2 class="ui-tabs-section-article-heading">
                    Insurance Bad Faith
                </h2>
                <p
                    class="ui-tabs-section-article-body"
                >
                    Some insurance claims are handled promptly and fairly. These instances do not require an attorney. Every insurance company in America is required by law to honor their obligations to the policyholder under the terms of the contract. When an insurance company wrongfully delays, denies, or underpays your claim, we recommend that you consult with an experienced insurance claim attorney to review your options.
                </p>

            </header>
            <div class="ui-tabs-section-article-figure-wrapper">
                <figure class="ui-tabs-section-article-figure">
                    <img
                        src="{{asset('/assets/img/insurance-bad.jpg')}}"
                        class="ui-tabs-section-article-img"
                        alt="services image"
                    />
                </figure>
            </div>
        </article>
    </div>
    <div
        role="tabpanel"
        x-show.transition.opacity.in="activeTab === 'tbi'"
    >
        <article
            class="ui-tabs-section-article"
        >
            <header class="ui-tabs-section-article-header">
                <h2 class="ui-tabs-section-article-heading">
                    Traumatic Brain Injuries
                </h2>
                <p
                    class="ui-tabs-section-article-body"
                >
                    Traumatic brain injury occurs when a sudden force or trauma causes a disruption in normal functioning of the brain. Traumatic brain injuries can cause a lifetime of pain and misery for the injured person and their loved ones. Traumatic brain injuries often occur when the brain is driven into the side of the skull by a sudden blow or by the force of shaking or an acceleration/deceleration whiplash type injury. In some of these cases, the brain will suffer bruising and swelling in others the impact is so severe to cause intracranial bleeding.
                </p>

            </header>
            <div class="ui-tabs-section-article-figure-wrapper">
                <figure class="ui-tabs-section-article-figure">
                    <img
                        src="{{asset('/assets/img/tbi.jpg')}}"
                        class="ui-tabs-section-article-img"
                        alt="services image"
                    />
                </figure>
            </div>
        </article>
    </div>

    <div
        role="tabpanel"
        x-show.transition.opacity.in="activeTab === 'truck'"
    >
        <article
            class="ui-tabs-section-article"
        >
            <header class="ui-tabs-section-article-header">
                <h2 class="ui-tabs-section-article-heading">
                    Truck Accidents
                </h2>
                <p
                    class="ui-tabs-section-article-body"
                >
                    In most truck accident cases - especially those involving large trucking companies - defendants will have highly skilled lawyers on their side from the moment the collision occurs. Insurance companies routinely send lawyers to the scene of the crash for one purpose – damage control. If you or a loved one has been involved in a crash with a commercial motor vehicle, you need an attorney on your side as soon as possible to preserve evidence, deal with insurance companies and protect your best interests.
                </p>

            </header>
            <div class="ui-tabs-section-article-figure-wrapper">
                <figure class="ui-tabs-section-article-figure">
                    <img
                        src="{{asset('/assets/img/truck-crash.jpg')}}"
                        class="ui-tabs-section-article-img"
                        alt="services image"
                    />
                </figure>
            </div>
        </article>
    </div>


    <div
        role="tabpanel"
        x-show.transition.opacity.in="activeTab === 'defective'"
    >
        <article
            class="ui-tabs-section-article"
        >
            <header class="ui-tabs-section-article-header">
                <h2 class="ui-tabs-section-article-heading">
                    Defective Product
                </h2>
                <p
                    class="ui-tabs-section-article-body"
                >
                    Each year, defective products cause injury to hundreds of thousands of people. It is illegal to make
                    or sell an unreasonably dangerous product in West Virginia. When a consumer is injured at no fault
                    of their own, the responsibility falls on the company that designed, manufactured, and sold the
                    product. If you have been injured as a result of a defective product, a West Virginia defective
                    product attorney can help you understand the process of seeking compensation through a product
                    liability claim.
                </p>

            </header>
            <div class="ui-tabs-section-article-figure-wrapper">
                <figure class="ui-tabs-section-article-figure">
                    <img
                        src="{{asset('/assets/img/defective.jpg')}}"
                        class="ui-tabs-section-article-img"
                        alt="services image"
                    />
                </figure>
            </div>
        </article>
    </div>


    <div
        role="tabpanel"
        x-show.transition.opacity.in="activeTab === 'malpractice'"
    >
        <article
            class="ui-tabs-section-article"
        >
            <header class="ui-tabs-section-article-header">
                <h2 class="ui-tabs-section-article-heading">
                    Medical Malpractice
                </h2>
                <p
                    class="ui-tabs-section-article-body"
                >
                    Medical malpractice cases are some of the most challenging and difficult cases to win. The law often
                    times works against victims, not for them.
                    In 2016, experts at Johns Hopkins Medicine “calculated that more than 250,000 deaths per year are
                    due to medical errors in the U.S.,” making it the third leading cause of death in this country.
                    Every medical negligence case is evaluated on the merits. We deal with healthcare providers to gain
                    access to pertinent medical records and any evidence which supports a claim of professional
                    negligence.
                </p>

            </header>
            <div class="ui-tabs-section-article-figure-wrapper">
                <figure class="ui-tabs-section-article-figure">
                    <img
                        src="{{asset('/assets/img/malpractice.jpg')}}"
                        class="ui-tabs-section-article-img"
                        alt="services image"
                    />
                </figure>
            </div>
        </article>
    </div>

    <div
        role="tabpanel"
        x-show.transition.opacity.in="activeTab === 'premise'"
    >
        <div
            class="ui-tabs-section-article"
        >
            <header class="ui-tabs-section-article-header">
                <h2 class="ui-tabs-section-article-heading">
                    Premise Liability
                </h2>
                <p
                    class="ui-tabs-section-article-body"
                >
                    In West Virginia, premises liability is generally defined as responsibilities placed upon owners and occupiers of property to keep their premises in a reasonably safe condition so as not to injure visitors to the property. If you have sustained an injury on someone else’s property due to that party’s negligence, you may qualify to receive compensation to cover the full cost of your injury.
                </p>

            </header>
            <div class="ui-tabs-section-article-figure-wrapper">
                <figure class="ui-tabs-section-article-figure">
                    <img
                        src="{{asset('/assets/img/premise.jpg')}}"
                        class="ui-tabs-section-article-img"
                        alt="services image"
                    />
                </figure>
            </div>
            </article>
        </div>

    </div>

    <div
        role="tabpanel"
        x-show.transition.opacity.in="activeTab === 'motorcycle'"
    >
        <article
            class="ui-tabs-section-article"
        >
            <header class="ui-tabs-section-article-header">
                <h2 class="ui-tabs-section-article-heading">
                    Motorcycle Accidents
                </h2>
                <p
                    class="ui-tabs-section-article-body"
                >
                    Motorcycles are as much a symbol of freedom as West Virginia’s country roads. Unfortunately, even the best riders are at risk. Even though there are around 50,000 motorcycles registered in West Virginia, motorcyclists are often still subjected to bias and the unfair stereotypes that by riding a motorcycle you accept a higher level of danger than those in other vehicles.
                </p>

            </header>
            <div class="ui-tabs-section-article-figure-wrapper">
                <figure class="ui-tabs-section-article-figure">
                    <img
                        src="{{asset('/assets/img/motorcycle.jpg')}}"
                        class="ui-tabs-section-article-img"
                        alt="services image"
                    />
                </figure>
            </div>
        </article>
    </div>

    <div
        role="tabpanel"
        x-show.transition.opacity.in="activeTab === 'pedestrian'"
    >
        <article
            class="ui-tabs-section-article"
        >
            <header class="ui-tabs-section-article-header">
                <h2 class="ui-tabs-section-article-heading">
                    Pedestrian Accidents
                </h2>
                <p
                    class="ui-tabs-section-article-body"
                >
                    According to the National Highway Traffic Safety Administration (NHTSA), there are more than 6,000 people killed each year in pedestrian accidents. The number of pedestrian deaths in West Virginia doubled, from 18 in 2020 to an estimated 36 in 2021. https://www.herald-dispatch.com/news/pedestrian-deaths-increase-in-west-virginia-hit-40-year-high-in-us/article_81183379-0644-5c0b-9987-490fc9a3bf59.html
                </p>

            </header>
            <div class="ui-tabs-section-article-figure-wrapper">
                <figure class="ui-tabs-section-article-figure">
                    <img
                        src="{{asset('/assets/img/pedestrian.jpg')}}"
                        class="ui-tabs-section-article-img"
                        alt="services image"
                    />
                </figure>
            </div>
        </article>
    </div>

</section>
