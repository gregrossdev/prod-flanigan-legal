@props(['heading' => '', 'target' => ''])

<article class="ui-faq-item">
    <header
        class="ui-faq-item-header"
        :class="{ 'active': activeFAQ === 'bank-finance-1' }"
        @click="activeFAQ === 'bank-finance-1' ? activeFAQ = '' : activeFAQ = 'bank-finance-1'">
        <div class="w-5/6 text-left">
            <h3 class="ui-faq-item-header-heading">
                {{ $heading }}
            </h3>
        </div>
        <div class="w-1/6 text-right">
            <i class="bx text-2xl"
               :class="activeFAQ === 'bank-finance-1' ? 'bx-minus' : 'bx-plus'"></i>
        </div>
    </header>
    <section class="faq-answer overflow-hidden border-primary transition-all"
         :class="{ 'active': activeFAQ === 'bank-finance-1' }">
        <div class="px-5 py-5 md:px-8">
            {{ $slot }}
        </div>
    </section>
</article>
