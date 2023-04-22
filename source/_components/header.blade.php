<header class="sticky inset-0 z-50 border-b border-neutral-900 bg-neutral-900 shadow-sm">
  <nav x-ref="nav" class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="#" @click.prevent="window.scrollTo({top: $refs.nav.offsetTop, behavior: 'smooth'})">
        <span class="sr-only">Stabilize</span>
        <img class="h-10 w-auto lg:h-12" src="/assets/images/stabilize-white-text-emerald-logo.png" alt="" />
      </a>
    </div>
    <div class="flex lg:hidden">
      <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-neutral-400">
        <span class="sr-only">Open main menu</span>
        <svg
          class="h-6 w-6"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          aria-hidden="true"
        >
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-6">
      <a
        @click.prevent="window.scrollTo({top: $refs.technologies.offsetTop - $refs.nav.scrollHeight/2, behavior: 'smooth'})"
        href="#technologies"
        class="text-lg font-semibold leading-6 text-white hover:text-emerald-500"
        >Technologies</a
      >

      <a
        @click.prevent="window.scrollTo({top: $refs.tenets.offsetTop - $refs.nav.scrollHeight/2, behavior: 'smooth'})"
        href="#tenets"
        class="text-lg font-semibold leading-6 text-white hover:text-emerald-500"
        >Tenets</a
      >

      <a
        @click.prevent="window.scrollTo({top: $refs.team.offsetTop - $refs.nav.scrollHeight/2, behavior: 'smooth'})"
        href="#team"
        class="text-lg font-semibold leading-6 text-white hover:text-emerald-500"
        >Team</a
      >

      <a
        @click.prevent="window.scrollTo({top: $refs.talk_to_us.offsetTop - $refs.nav.scrollHeight/2, behavior: 'smooth'})"
        href="#talk-to-us"
        class="text-lg font-semibold leading-6 text-white hover:text-emerald-500"
        >Talk To Us</a
      >
    </div>
  </nav>
  <!-- Mobile menu, show/hide based on menu open state. -->
  <div class="hidden" role="dialog" aria-modal="true">
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <div class="fixed inset-0 z-50"></div>
    <div
      class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-neutral-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white/10"
    >
      <div class="flex items-center justify-between">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=emerald&shade=500" alt="" />
        </a>
        <button type="button" class="-m-2.5 rounded-md p-2.5 text-neutral-400">
          <span class="sr-only">Close menu</span>
          <svg
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            aria-hidden="true"
          >
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="mt-6 flow-root">
        <div class="-my-6 divide-y divide-neutral-500/25">
          <div class="space-y-2 py-6">
            <a
              href="#"
              class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-neutral-800"
              >Product</a
            >

            <a
              href="#"
              class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-neutral-800"
              >Features</a
            >

            <a
              href="#"
              class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-neutral-800"
              >Marketplace</a
            >

            <a
              href="#"
              class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-neutral-800"
              >Company</a
            >
          </div>
          <div class="py-6">
            <a
              href="#"
              class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-white hover:bg-neutral-800"
              >Log in</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
