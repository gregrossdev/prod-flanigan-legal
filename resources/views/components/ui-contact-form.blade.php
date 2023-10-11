
<form method="post" action="{{route('contact.send')}}" enctype="multipart/form-data">
    @csrf
    <div
        class="grid grid-cols-1 gap-5 pt-8 md:grid-cols-2 md:pt-10 lg:pt-8 xl:pt-10"
    >
        <div class="w-full">
            <input
                type="text"
                class="form-input"
                placeholder="Name"
                name="name"
                value=""
            />
        </div>
        <div class="w-full">
            <input
                type="email"
                class="form-input"
                placeholder="Email"
                name="email"
                value=""
            />
        </div>
    </div>
    <div class="grid grid-cols-1 gap-5 pt-4 md:grid-cols-3 md:pt-6">
        <div class="w-full">
            <input
                type="tel"
                class="form-input"
                placeholder="Phone"
                name="phone"
                value=""
            />
        </div>
        <div class="w-full">
            <input
                type="text"
                class="form-input"
                placeholder="City"
                name="city"
                value=""
            />
        </div>
        <div class="w-full">
            <input
                type="text"
                class="form-input"
                placeholder="State"
                name="state"
                value=""
            />
        </div>
    </div>
    <div class="pt-4 md:pt-6">
          <textarea
              class="form-textarea h-48"
              placeholder="Description"
              name="message"
              value=""
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
