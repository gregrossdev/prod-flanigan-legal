<x-layout.main>


    <x-pg-banner title="Frequently Asked Questions"/>

    <div class="container">
        {{-- FAQ Accordion --}}
        <section class="py-16 md:py-20">
            <p class="pt-5 font-body font-light leading-relaxed text-black text-center md:text-lg lg:text-xl">
                If you have questions about personal injury cases, accident lawyers, or how to get
                recovery after a car accident or other incident, you’re not alone.
            </p>
            <p class="pt-5 font-body font-light leading-relaxed text-black text-center md:text-lg lg:text-xl">
                We’ve gathered some of those
                commonly asked questions to help you get started.
            </p>
            <div x-data="{ activeTab: 'faq', activeFAQ: '' }">
                <div class="tab-content relative px-3 pt-8 xl:px-4">
                    <div role="tabpanel" class="tab-pane service-tab transition-opacity"
                         :class="{ 'active': activeTab === 'faq' }">

                        <div class="ui-faq">
                            <div class="ui-faq-question"
                                :class="{ 'active': activeFAQ === 'faq-1' }"
                                @click="activeFAQ === 'faq-1' ? activeFAQ = '' : activeFAQ = 'faq-1'">
                                <header class="w-5/6 text-left">
                                    <h3 class="ui-faq-item-header-heading">
                                        Do I need to hire an attorney?
                                    </h3>
                                </header>
                                <div class="w-1/6 text-right">
                                    <i class="bx text-2xl"
                                       :class="activeFAQ === 'faq-1' ? 'bx-minus' : 'bx-plus'"></i>
                                </div>
                            </div>
                            <div class="faq-answer overflow-hidden border-primary transition-all"
                                 :class="{ 'active': activeFAQ === 'faq-1' }">
                                <div class="px-5 py-5 md:px-8">
                                    <p class="ui-faq-item-body">
                                        An attorney will advocate for you against the insurance companies, and can
                                        help maximize your recovery. Insurance companies know this is fact. For
                                        example, management consulting firm McKinsey and Company and Allstate have
                                        conspired to reduce attorney representation because attorney represented
                                        claims settled on average five times more than those without.
                                    </p>
                                    <p class="ui-faq-item-body">
                                        Although you can try to handle your claim on your own, there is a serious
                                        risk the insurance company will be protecting its own interests, not yours.
                                        An attorney can help you navigate the many different insurance coverages
                                        that may apply, negotiate and resolve any liens that may exist against your
                                        case, ensure that your medical bills are properly paid, and assess and
                                        explain your options. Before you talk to the insurance company, talk to an
                                        attorney.

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="ui-faq">
                            <div class="ui-faq-question"
                                :class="{ 'active': activeFAQ === 'faq-2' }"
                                @click="activeFAQ === 'faq-2' ? activeFAQ = '' : activeFAQ = 'faq-2'">
                                <header class="w-5/6 text-left">
                                    <h3 class="ui-faq-item-header-heading">
                                        If I call you, will there be any pressure to immediately sign a contract?
                                    </h3>
                                </header>
                                <div class="w-1/6 text-right">
                                    <i class="bx text-2xl"
                                       :class="activeFAQ === 'faq-2' ? 'bx-minus' : 'bx-plus'"></i>
                                </div>
                            </div>
                            <div class="faq-answer overflow-hidden border-primary transition-all"
                                 :class="{ 'active': activeFAQ === 'faq-2' }">
                                <div class="px-5 py-5 md:px-8">
                                    <p class="ui-faq-item-body">
                                        No – absolutely not. Your decision to hire an attorney may be one of the
                                        most important decisions you will make in your life. It should not be taken
                                        lightly, and you should be very careful in choosing a lawyer.

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="ui-faq">
                            <div class="ui-faq-question"
                                :class="{ 'active': activeFAQ === 'faq-3' }"
                                @click="activeFAQ === 'faq-3' ? activeFAQ = '' : activeFAQ = 'faq-3'">
                                <header class="w-5/6 text-left">
                                    <h3 class="ui-faq-item-header-heading">
                                        How much do you charge to review a case?

                                    </h3>
                                </header>
                                <div class="w-1/6 text-right">
                                    <i class="bx text-2xl"
                                       :class="activeFAQ === 'faq-3' ? 'bx-minus' : 'bx-plus'"></i>
                                </div>
                            </div>
                            <div class="faq-answer overflow-hidden border-primary transition-all"
                                 :class="{ 'active': activeFAQ === 'faq-3' }">
                                <div class="px-5 py-5 md:px-8">
                                    <p class="ui-faq-item-body">
                                        An initial appointment with an attorney at Flanigan Legal, PLLC to discuss
                                        the facts of a potential case is free. You can also ask any questions you
                                        may have regarding your case. There is no obligation to choose our firm. In
                                        most cases, where it appears that the claim is meritorious, we will advance
                                        the costs necessary to investigate and prosecute the claim. In the event we
                                        undertake formal representation, any costs advanced are reimbursed to us at
                                        the conclusion of the case, assuming we are able to make a recovery on your
                                        behalf.

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="ui-faq">
                            <div class="ui-faq-question"
                                :class="{ 'active': activeFAQ === 'faq-4' }"
                                @click="activeFAQ === 'faq-4' ? activeFAQ = '' : activeFAQ = 'faq-4'">
                                <header class="w-5/6 text-left">
                                    <h3 class="ui-faq-item-header-heading">
                                        What are your fees?
                                    </h3>
                                </header>
                                <div class="w-1/6 text-right">
                                    <i class="bx text-2xl"
                                       :class="activeFAQ === 'faq-4' ? 'bx-minus' : 'bx-plus'"></i>
                                </div>
                            </div>
                            <div class="faq-answer overflow-hidden border-primary transition-all"
                                 :class="{ 'active': activeFAQ === 'faq-4' }">
                                <div class="px-5 py-5 md:px-8">
                                    <p class="ui-faq-item-body">
                                        We accept cases on a contingent fee basis, which means that we collect no
                                        attorney’s fee unless we succeed in recovering damages for you through
                                        settlement or trial. We also advance all costs and expenses involved in the
                                        investigation and proof of your case, and we only recover our expenses if we
                                        are successful on your behalf.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="ui-faq">
                            <div class="ui-faq-question"
                                :class="{ 'active': activeFAQ === 'faq-5' }"
                                @click="activeFAQ === 'faq-5' ? activeFAQ = '' : activeFAQ = 'faq-5'">
                                <header class="w-5/6 text-left">
                                    <h3 class="ui-faq-item-header-heading">
                                        What is a contingency fee?
                                    </h3>
                                </header>
                                <div class="w-1/6 text-right">
                                    <i class="bx text-2xl"
                                       :class="activeFAQ === 'faq-5' ? 'bx-minus' : 'bx-plus'"></i>
                                </div>
                            </div>
                            <div class="faq-answer overflow-hidden border-primary transition-all"
                                 :class="{ 'active': activeFAQ === 'faq-5' }">
                                <div class="px-5 py-5 md:px-8">
                                    <p class="ui-faq-item-body">
                                        A contingency fee is a legal fee that is dependent upon the successful
                                        outcome of a claim. We represent clients on a contingent fee basis. If we
                                        recover money for you, our fee is a percentage of the amount recovered. The
                                        percentage typically ranges from 1/3 to 40% depending on when the case is
                                        resolved and the total amount recovered. If we do not recover any money for
                                        your, then you owe us nothing.
                                    </p>
                                    <p class="ui-faq-item-body">
                                        We believe in our clients causes and spend our own money to finance our
                                        clients’ cases. We don’t make money unless our clients make money. One of
                                        the reasons that Flanigan Legal, PLLC utilizes contingency fee agreements is
                                        because lawsuits are often very expensive. Injured people rarely can afford
                                        to pay an attorney for service rendered on an hourly basis. If there is no
                                        recovery in a contingency fee case, we receive nothing. When there is a
                                        recovery, the ultimate total recovery provides a fund from which the
                                        attorneys’ fees are paid. Contingency fees are open to negotiation between
                                        attorney and client; however, in certain types of cases (e.g., claims
                                        against the Federal Government) maximum fee limits are established by law.
                        
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="ui-faq">
                            <div class="ui-faq-question"
                                :class="{ 'active': activeFAQ === 'faq-6' }"
                                @click="activeFAQ === 'faq-6' ? activeFAQ = '' : activeFAQ = 'faq-6'">
                                <header class="w-5/6 text-left">
                                    <h3 class="ui-faq-item-header-heading">
                                        What work will I have to do if I hire your law firm?
                                    </h3>
                                </header>
                                <div class="w-1/6 text-right">
                                    <i class="bx text-2xl"
                                       :class="activeFAQ === 'faq-6' ? 'bx-minus' : 'bx-plus'"></i>
                                </div>
                            </div>
                            <div class="faq-answer overflow-hidden border-primary transition-all"
                                 :class="{ 'active': activeFAQ === 'faq-6' }">
                                <div class="px-5 py-5 md:px-8">
                                    <p class="ui-faq-item-body">
                                        You are not responsible for preparing your case for trial. It is your
                                        responsibility to provide our office with information that you have
                                        available to you, but you will not have to do work to prepare your case.
                                        That is our job. It’s a job we take seriously and we have spent years
                                        learning how to do.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="ui-faq">
                            <div class="ui-faq-question"
                                :class="{ 'active': activeFAQ === 'faq-7' }"
                                @click="activeFAQ === 'faq-7' ? activeFAQ = '' : activeFAQ = 'faq-7'">
                                <header class="w-5/6 text-left">
                                    <h3 class="ui-faq-item-header-heading">
                                        Do I have to go to court?

                                    </h3>
                                </header>
                                <div class="w-1/6 text-right">
                                    <i class="bx text-2xl"
                                       :class="activeFAQ === 'faq-7' ? 'bx-minus' : 'bx-plus'"></i>
                                </div>
                            </div>
                            <div class="faq-answer overflow-hidden border-primary transition-all"
                                 :class="{ 'active': activeFAQ === 'faq-7' }">
                                <div class="px-5 py-5 md:px-8">
                                    <p class="ui-faq-item-body">
                                        We prepare every case as if it will be tried to verdict in court. Some cases
                                        resolve without litigation. Other cases do not. Our experience is that
                                        often to get the insurance available a lawsuit needs filed. If we have to
                                        file a lawsuit, then you may have to give a deposition, attend a mediation
                                        or court hearings. You may eventually have to testify at trial. We will
                                        discuss all possible options with you and will help you determine which is
                                        the best course of action to pursue in your particular case.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="ui-faq">
                            <div class="ui-faq-question"
                                :class="{ 'active': activeFAQ === 'faq-8' }"
                                @click="activeFAQ === 'faq-8' ? activeFAQ = '' : activeFAQ = 'faq-8'">
                                <header class="w-5/6 text-left">
                                    <h3 class="ui-faq-item-header-heading">
                                        Will my case go to trial?
                                    </h3>
                                </header>
                                <div class="w-1/6 text-right">
                                    <i class="bx text-2xl"
                                       :class="activeFAQ === 'faq-8' ? 'bx-minus' : 'bx-plus'"></i>
                                </div>
                            </div>
                            <div class="faq-answer overflow-hidden border-primary transition-all"
                                 :class="{ 'active': activeFAQ === 'faq-8' }">
                                <div class="px-5 py-5 md:px-8">
                                    <p class="ui-faq-item-body">
                                        Not necessarily. Many people settle their claims in negotiation, but you
                                        need a strong legal team to ensure you receive a fair settlement. If their
                                        offers don’t meet your needs, you and your attorney may decide to file a
                                        lawsuit, which is the formal beginning of a court-based process that ends in
                                        trial. Many people are able to settle before trial, but if you can’t, it’s
                                        in your best interest to have an experienced attorney on your side during
                                        this process.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="ui-faq">
                            <div class="ui-faq-question"
                                :class="{ 'active': activeFAQ === 'faq-9' }"
                                @click="activeFAQ === 'faq-9' ? activeFAQ = '' : activeFAQ = 'faq-9'">
                                <header class="w-5/6 text-left">
                                    <h3 class="ui-faq-item-header-heading">
                                        How long does a personal injury case take?
                                    </h3>
                                </header>
                                <div class="w-1/6 text-right">
                                    <i class="bx text-2xl"
                                       :class="activeFAQ === 'faq-9' ? 'bx-minus' : 'bx-plus'"></i>
                                </div>
                            </div>
                            <div class="faq-answer overflow-hidden border-primary transition-all"
                                 :class="{ 'active': activeFAQ === 'faq-9' }">
                                <div class="px-5 py-5 md:px-8">
                                    <p class="ui-faq-item-body">
                                        Our goal is to resolve every case as quickly as possible. It is impossible
                                        to predict how long any particular case will take to resolve. Every case is
                                        different. However, we can give you a more accurate estimate of how long
                                        your particular case will take.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="ui-faq">
                            <div class="ui-faq-question"
                                :class="{ 'active': activeFAQ === 'faq-10' }"
                                @click="activeFAQ === 'faq-10' ? activeFAQ = '' : activeFAQ = 'faq-10'">
                                <header class="w-5/6 text-left">
                                    <h3 class="ui-faq-item-header-heading">
                                        What is the time limit for me to make a claim?

                                    </h3>
                                </header>
                                <div class="w-1/6 text-right">
                                    <i class="bx text-2xl"
                                       :class="activeFAQ === 'faq-10' ? 'bx-minus' : 'bx-plus'"></i>
                                </div>
                            </div>
                            <div class="faq-answer overflow-hidden border-primary transition-all"
                                 :class="{ 'active': activeFAQ === 'faq-10' }">
                                <div class="px-5 py-5 md:px-8">
                                    <p class="ui-faq-item-body">
                                        Different rules govern different types of cases. The statute of limitations
                                        (time limit for filing a claim in court) in West Virginia for a negligence
                                        claim is two years. The limitations period starts to run when the cause of
                                        action arises, the plaintiff knows, or by the exercise of reasonable
                                        diligence should know that the plaintiff has been injured, the identity of
                                        the entity who owed the plaintiff a duty to act with due care and who may
                                        have engaged in conduct that breached that duty and that the conduct of that
                                        entity has a causal relation to the injury.
                                    </p>
                                    <p class="ui-faq-item-body">
                                        The statute of limitations for filing a lawsuit is sometimes complicated and
                                        you should consult with a West Virginia lawyer immediately if you are
                                        concerned about that you are approaching the time limit for filing a claim.
                                    </p>
                                    <p class="ui-faq-item-body">
                                        To illustrate this point, in West Virginia, the statute of limitations for
                                        breach of a written contract is ten years. The time limit for breach of an
                                        oral contract is five years. The limitations period starts to run when the
                                        breach of contract occurs, or when the act breaching the contract is
                                        discovered. However, the limitations period for a sales contract under the
                                        Uniform Commercial Code is four years.
                                    </p>
                                    <p class="ui-faq-item-body">
                                        The statue of limitations for an insurance bad faith case in West Virginia
                                        is one year for a bad faith claim based on a common law theory or a
                                        statutory theory under the West Virginia Unfair Trade Practices Act.
                                    </p>
                                    <p class="ui-faq-item-body">
                                        It is impossible in this space to set forth the rules that apply in all
                                        cases. Where injury does not manifest itself for many years after an event
                                        or exposure (such as during a period of latency after exposure to harmful
                                        chemicals) the statute of limitations may not run for many, many years.
                                    </p>


                                </div>
                            </div>
                        </div>

                        <div class="ui-faq">
                            <div class="ui-faq-question"
                                :class="{ 'active': activeFAQ === 'faq-11' }"
                                @click="activeFAQ === 'faq-11' ? activeFAQ = '' : activeFAQ = 'faq-11'">
                                <header class="w-5/6 text-left">
                                    <h3 class="ui-faq-item-header-heading">
                                        What is the Statute of Limitations for Filing a Wrongful Death Claim in West
                                        Virginia?

                                    </h3>
                                </header>
                                <div class="w-1/6 text-right">
                                    <i class="bx text-2xl"
                                       :class="activeFAQ === 'faq-11' ? 'bx-minus' : 'bx-plus'"></i>
                                </div>
                            </div>
                            <div class="faq-answer overflow-hidden border-primary transition-all"
                                 :class="{ 'active': activeFAQ === 'faq-11' }">
                                <div class="px-5 py-5 md:px-8">
                                    <p class="ui-faq-item-body">
                                        Although we know that this is an emotionally trying time for your family to
                                        go through, it is important to pursue legal action in a timely manner. In
                                        West Virginia, there is a two-year statute of limitations for wrongful death
                                        actions. West Virginia's discovery rule applies to wrongful death actions.
                                        Under the discovery rule, the statute of limitations begins to run when the
                                        plaintiff knows, or by the exercise of reasonable diligence should know: (1)
                                        there is an injury; (2) the identity of the party who owed the injured party
                                        a duty to act with due care; and (3) the entity's conduct has a causal
                                        relation to the injury.
                                    <p/>
                                    <p class="ui-faq-item-body">
                                        We understand that dealing with the death of a family member is incredibly
                                        difficult emotionally and financially. We promise your case will be handled
                                        with compassion and integrity. It is beneficial for surviving parties to
                                        contact our team of wrongful death lawyers soon after the death occurs so
                                        that we can bring the full force of the law against those responsible.

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="ui-faq">
                            <div class="ui-faq-question"
                                :class="{ 'active': activeFAQ === 'faq-12' }"
                                @click="activeFAQ === 'faq-12' ? activeFAQ = '' : activeFAQ = 'faq-12'">
                                <header class="w-5/6 text-left">
                                    <h3 class="ui-faq-item-header-heading">
                                        What Kind of Damages can be Collected in a Wrongful Death Case?

                                    </h3>
                                </header>
                                <div class="w-1/6 text-right">
                                    <i class="bx text-2xl"
                                       :class="activeFAQ === 'faq-12' ? 'bx-minus' : 'bx-plus'"></i>
                                </div>
                            </div>
                            <div class="faq-answer overflow-hidden border-primary transition-all"
                                 :class="{ 'active': activeFAQ === 'faq-12' }">
                                <div class="px-5 py-5 md:px-8">
                                    <p class="ui-faq-item-body">
                                        In West Virginia, the damages a wrongful death claimant is entitled to as
                                        the surviving family member or dependent include loss of care, love, and
                                        protection, pain and suffering, loss of companionship, medical care,
                                        treatments, and hospitalization expenses, loss of income, funeral and burial
                                        expenses. Our West Virginia wrongful death lawyers understand that this is a
                                        difficult time for you and your family. It is recommended that families
                                        contact our wrongful death lawyers as soon as possible to expedite the legal
                                        process and ensure a positive outcome.

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="ui-faq">
                            <div class="ui-faq-question"
                                :class="{ 'active': activeFAQ === 'faq-13' }"
                                @click="activeFAQ === 'faq-13' ? activeFAQ = '' : activeFAQ = 'faq-13'">
                                <header class="w-5/6 text-left">
                                    <h3 class="ui-faq-item-header-heading">
                                        Who Can Sue for Wrongful Death?

                                    </h3>
                                </header>
                                <div class="w-1/6 text-right">
                                    <i class="bx text-2xl"
                                       :class="activeFAQ === 'faq-13' ? 'bx-minus' : 'bx-plus'"></i>
                                </div>
                            </div>
                            <div class="faq-answer overflow-hidden border-primary transition-all"
                                 :class="{ 'active': activeFAQ === 'faq-13' }">
                                <div class="px-5 py-5 md:px-8">
                                    <p class="ui-faq-item-body">
                                        In West Virginia, only the deceased’s personal representative (also referred
                                        to as an estate administrator/executor appointed by the court) can file the
                                        wrongful death claim. It is recommended that families contact our wrongful
                                        death lawyers as soon as possible to expedite the legal process and ensure a
                                        positive outcome.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="ui-faq">
                            <div class="ui-faq-question"
                                :class="{ 'active': activeFAQ === 'faq-14' }"
                                @click="activeFAQ === 'faq-14' ? activeFAQ = '' : activeFAQ = 'faq-14'">
                                <header class="w-5/6 text-left">
                                    <h3 class="ui-faq-item-header-heading">
                                        What is Wrongful Death?

                                    </h3>
                                </header>
                                <div class="w-1/6 text-right">
                                    <i class="bx text-2xl"
                                       :class="activeFAQ === 'faq-14' ? 'bx-minus' : 'bx-plus'"></i>
                                </div>
                            </div>
                            <div class="faq-answer overflow-hidden border-primary transition-all"
                                 :class="{ 'active': activeFAQ === 'faq-14' }">
                                <div class="px-5 py-5 md:px-8">
                                    <p class="ui-faq-item-body">
                                        In West Virginia, a wrongful death lawsuit seeks damages when one person's
                                        death is another party's fault. This horrific scenario can arise in cases
                                        involving motor vehicle crashes, medical malpractice, intentional acts
                                        (including crimes resulting in death), work place accidents or any other
                                        type of fatal personal injury. It is recommended that families contact our
                                        wrongful death lawyers as soon as possible to expedite the legal process and
                                        ensure a positive outcome.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="ui-faq">
                            <div class="ui-faq-question"
                                :class="{ 'active': activeFAQ === 'faq-15' }"
                                @click="activeFAQ === 'faq-15' ? activeFAQ = '' : activeFAQ = 'faq-15'">
                                <header class="w-5/6 text-left">
                                    <h3 class="ui-faq-item-header-heading">
                                        What Should I Do Immediately Following an Auto Accident?
                                    </h3>
                                </header>
                                <div class="w-1/6 text-right">
                                    <i class="bx text-2xl"
                                       :class="activeFAQ === 'faq-15' ? 'bx-minus' : 'bx-plus'"></i>
                                </div>
                            </div>
                            <div class="faq-answer overflow-hidden border-primary transition-all"
                                 :class="{ 'active': activeFAQ === 'faq-15' }">
                                <div class="px-5 py-5 md:px-8">
                                    <p class="ui-faq-item-body">
                                        Call 911. Stay at the scene of the accident. Provide law enforcement the
                                        information they request. If it is safe, you or another occupant of the
                                        automobile should photograph all of the vehicles involved in the crash.
                                        Document information about the circumstances surrounding the crash. If
                                        injured, please request immediate medical attention. Sometimes, injuries are
                                        not immediately felt after a crash and become painful in the days and weeks
                                        following an accident. Regardless of when you first feel discomfort, it is
                                        important to see a doctor right away
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="ui-faq">
                            <div class="ui-faq-question"
                                :class="{ 'active': activeFAQ === 'faq-16' }"
                                @click="activeFAQ === 'faq-16' ? activeFAQ = '' : activeFAQ = 'faq-16'">
                                <header class="w-5/6 text-left">
                                    <h3 class="ui-faq-item-header-heading">
                                        When should I seek medical care?
                                    </h3>
                                </header>
                                <div class="w-1/6 text-right">
                                    <i class="bx text-2xl"
                                       :class="activeFAQ === 'faq-16' ? 'bx-minus' : 'bx-plus'"></i>
                                </div>
                            </div>
                            <div class="faq-answer overflow-hidden border-primary transition-all"
                                 :class="{ 'active': activeFAQ === 'faq-16' }">
                                <div class="px-5 py-5 md:px-8">
                                    <p class="ui-faq-item-body">
                                        You should seek medical care as soon as possible. Delays in treatment can be
                                        detrimental to your health and can adversely affect your recovery.
                                        Sometimes, injuries are not immediately apparent. If your injuries are
                                        immediately apparent, you should request emergency treatment at the scene.
                                        Some injuries are not immediately obvious. Often times, pain does not set in
                                        until hours, days or even weeks later. Regardless of when your pain begins,
                                        it is important to see a doctor right away so you can address and treat any
                                        injuries you might have. The longer you wait to see a doctor in the hope
                                        that your pain will resolve on its own, the more likely the insurance
                                        company will deny or minimize your claim.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
            </div>
        </section>
    </div>


</x-layout.main>
