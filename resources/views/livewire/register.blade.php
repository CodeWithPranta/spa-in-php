<x-slot name="title">
    {{__('Registration Form')}}
</x-slot>
<!-- ====== Forms Section Start -->
<section class="bg-[#F4F7FF] py-20 lg:py-[120px]">
    <div class="container mx-auto">



      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4">
          <div
            class="relative mx-auto max-w-[525px] overflow-hidden rounded-lg bg-white py-16 px-10 text-center sm:px-12 md:px-[60px]"
          >

          <x-session-message />

            <div class="mb-10 text-center md:mb-16">
              <a
                href="javascript:void(0)"
                class="mx-auto inline-block max-w-[160px]"
              >
                <span class="text-xl">Registration</span>
              </a>
            </div>
            <form wire:submit="register">
              <div class="mb-6">
                    <input wire:model.blur="name"
                      type="text"
                      placeholder="Name"
                      class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none"
                    />
                    <span class="text-red-500">@error('name') {{ $message }} @enderror</span>
              </div>

              <div class="mb-6">
                <input wire:model.blur="email"
                  type="text"
                  placeholder="Email"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none"
                />
                <span class="text-red-500">@error('email') {{ $message }} @enderror</span>
              </div>
              <div class="mb-6">
                <input wire:model.blur="password"
                  type="password"
                  placeholder="Password"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none"
                />
                <span class="text-red-500">@error('password') {{ $message }} @enderror</span>
              </div>

              <div class="mb-6">
                <input wire:model.defer="password_confirmation"
                  type="password"
                  placeholder="Confirm Password"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none"
                />
              </div>

              <div class="mb-10">
                <input
                  type="submit"
                  value="Sign Up"
                  class="bordder-primary w-full cursor-pointer rounded-md border bg-primary py-3 px-5 text-base text-white transition hover:bg-opacity-90"
                />
              </div>
            </form>

            <a
              href="javascript:void(0)"
              class="mb-2 inline-block text-base text-[#adadad] hover:text-primary hover:underline"
            >
              Forget Password?
            </a>
            <p class="text-base text-[#adadad]">
              Already have an account?
              <a href="/login" wire:navigate.hover class="text-primary hover:underline">
                Login
              </a>
            </p>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Forms Section End -->

