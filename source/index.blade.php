@extends('_layouts.main') @section('body')
<main class="relative isolate max-w-7xl mx-auto">
  <!-- Background -->
  <div
    class="absolute inset-x-0 top-4 -z-10 flex transform-gpu justify-center overflow-hidden blur-3xl"
    aria-hidden="true"
  >
    <div
      class="aspect-[1108/632] w-[69.25rem] flex-none bg-gradient-to-r from-zinc-900 to-emerald-500 opacity-10"
      style="
        clip-path: polygon(
          73.6% 51.7%,
          91.7% 11.8%,
          100% 46.4%,
          97.4% 82.2%,
          92.5% 84.9%,
          75.7% 64%,
          55.3% 47.5%,
          46.5% 49.4%,
          45% 62.9%,
          50.3% 87.2%,
          21.3% 64.1%,
          0.1% 100%,
          5.4% 51.1%,
          21.4% 63.9%,
          58.9% 0.2%,
          73.6% 51.7%
        );
      "
    ></div>
  </div>

  <div class="px-6 pt-14 lg:px-8">
    <div class="mx-auto pt-12 sm:pt-20 max-w-2xl">
      <h2 class="space-y-2 text-5xl font-semibold tracking-tight text-white lg:text-6xl">
        <span class="block lg:inline-block">
          Eliminate
          <span class="text-emerald-600">Friction</span>
          <span class="text-3xl -ml-3">,</span>
        </span>
        <span class="block lg:inline-block">
          Maximize
          <span class="text-emerald-600">Momentum</span>
        </span>
      </h2>
      <p class="my-10 leading-8 text-neutral-300 text-xl lg:my-8 lg:text-xl">
        We make tools so your team can build quality software efficiently. Focus on creating and enjoy the freedom of
        <span class="italic font-semibold text-emerald-500">stability</span>.
      </p>
    </div>
  </div>

  <!-- Companies Section -->
  <div class="mt-16 sm:mt-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div
        class="mx-auto grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-12 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 sm:gap-y-14 lg:mx-0 lg:max-w-none lg:grid-cols-5"
      >
        <img
          class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
          src="https://tailwindui.com/img/logos/158x48/transistor-logo-white.svg"
          alt="Transistor"
          width="158"
          height="48"
        />
        <img
          class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
          src="https://tailwindui.com/img/logos/158x48/reform-logo-white.svg"
          alt="Reform"
          width="158"
          height="48"
        />
        <img
          class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
          src="https://tailwindui.com/img/logos/158x48/tuple-logo-white.svg"
          alt="Tuple"
          width="158"
          height="48"
        />
        <img
          class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1"
          src="https://tailwindui.com/img/logos/158x48/savvycal-logo-white.svg"
          alt="SavvyCal"
          width="158"
          height="48"
        />
        <img
          class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1"
          src="https://tailwindui.com/img/logos/158x48/statamic-logo-white.svg"
          alt="Statamic"
          width="158"
          height="48"
        />
      </div>
      <div class="mt-16 flex justify-center">
        <p class="relative rounded-full bg-neutral-950 px-4 py-1.5 text-sm leading-6 text-neutral-300">
          <span class="hidden md:inline">Over 2500 companies use our tools to better their business.</span>
          <a href="#" class="font-semibold text-emerald-500"
            ><span class="absolute inset-0" aria-hidden="true"></span> Read our customer stories
            <span aria-hidden="true">&rarr;</span></a
          >
        </p>
      </div>
    </div>
  </div>

  <!-- Values section -->
  <div class="mx-auto mt-16 max-w-7xl px-6 sm:mt-20 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl">
        Our <span class="text-emerald-500">tenets</span>
      </h2>
      <p class="mt-6 text-lg leading-8 text-neutral-300">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor
        cupiditate blanditiis.
      </p>
    </div>
    <dl
      class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8 text-base leading-7 text-neutral-300 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:gap-x-16"
    >
      <div class="relative pl-9">
        <dt class="inline font-semibold text-white">
          <svg
            class="absolute left-1 top-1 h-5 w-5 text-emerald-500"
            viewBox="0 0 20 20"
            fill="currentColor"
            aria-hidden="true"
          >
            <path
              fill-rule="evenodd"
              d="M4.606 12.97a.75.75 0 01-.134 1.051 2.494 2.494 0 00-.93 2.437 2.494 2.494 0 002.437-.93.75.75 0 111.186.918 3.995 3.995 0 01-4.482 1.332.75.75 0 01-.461-.461 3.994 3.994 0 011.332-4.482.75.75 0 011.052.134z"
              clip-rule="evenodd"
            />
            <path
              fill-rule="evenodd"
              d="M5.752 12A13.07 13.07 0 008 14.248v4.002c0 .414.336.75.75.75a5 5 0 004.797-6.414 12.984 12.984 0 005.45-10.848.75.75 0 00-.735-.735 12.984 12.984 0 00-10.849 5.45A5 5 0 001 11.25c.001.414.337.75.751.75h4.002zM13 9a2 2 0 100-4 2 2 0 000 4z"
              clip-rule="evenodd"
            />
          </svg>
          Be world-class.
        </dt>
        <dd class="inline">Lorem ipsum, dolor sit amet consectetur adipisicing elit aute id magna.</dd>
      </div>

      <div class="relative pl-9">
        <dt class="inline font-semibold text-white">
          <svg
            class="absolute left-1 top-1 h-5 w-5 text-emerald-500"
            viewBox="0 0 20 20"
            fill="currentColor"
            aria-hidden="true"
          >
            <path
              fill-rule="evenodd"
              d="M11 2a1 1 0 10-2 0v6.5a.5.5 0 01-1 0V3a1 1 0 10-2 0v5.5a.5.5 0 01-1 0V5a1 1 0 10-2 0v7a7 7 0 1014 0V8a1 1 0 10-2 0v3.5a.5.5 0 01-1 0V3a1 1 0 10-2 0v5.5a.5.5 0 01-1 0V2z"
              clip-rule="evenodd"
            />
          </svg>
          Take responsibility.
        </dt>
        <dd class="inline">
          Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.
        </dd>
      </div>

      <div class="relative pl-9">
        <dt class="inline font-semibold text-white">
          <svg
            class="absolute left-1 top-1 h-5 w-5 text-emerald-500"
            viewBox="0 0 20 20"
            fill="currentColor"
            aria-hidden="true"
          >
            <path
              d="M10 9a3 3 0 100-6 3 3 0 000 6zM6 8a2 2 0 11-4 0 2 2 0 014 0zM1.49 15.326a.78.78 0 01-.358-.442 3 3 0 014.308-3.516 6.484 6.484 0 00-1.905 3.959c-.023.222-.014.442.025.654a4.97 4.97 0 01-2.07-.655zM16.44 15.98a4.97 4.97 0 002.07-.654.78.78 0 00.357-.442 3 3 0 00-4.308-3.517 6.484 6.484 0 011.907 3.96 2.32 2.32 0 01-.026.654zM18 8a2 2 0 11-4 0 2 2 0 014 0zM5.304 16.19a.844.844 0 01-.277-.71 5 5 0 019.947 0 .843.843 0 01-.277.71A6.975 6.975 0 0110 18a6.974 6.974 0 01-4.696-1.81z"
            />
          </svg>
          Be supportive.
        </dt>
        <dd class="inline">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus voluptas blanditiis et.</dd>
      </div>

      <div class="relative pl-9">
        <dt class="inline font-semibold text-white">
          <svg
            class="absolute left-1 top-1 h-5 w-5 text-emerald-500"
            viewBox="0 0 20 20"
            fill="currentColor"
            aria-hidden="true"
          >
            <path
              fill-rule="evenodd"
              d="M9.664 1.319a.75.75 0 01.672 0 41.059 41.059 0 018.198 5.424.75.75 0 01-.254 1.285 31.372 31.372 0 00-7.86 3.83.75.75 0 01-.84 0 31.508 31.508 0 00-2.08-1.287V9.394c0-.244.116-.463.302-.592a35.504 35.504 0 013.305-2.033.75.75 0 00-.714-1.319 37 37 0 00-3.446 2.12A2.216 2.216 0 006 9.393v.38a31.293 31.293 0 00-4.28-1.746.75.75 0 01-.254-1.285 41.059 41.059 0 018.198-5.424zM6 11.459a29.848 29.848 0 00-2.455-1.158 41.029 41.029 0 00-.39 3.114.75.75 0 00.419.74c.528.256 1.046.53 1.554.82-.21.324-.455.63-.739.914a.75.75 0 101.06 1.06c.37-.369.69-.77.96-1.193a26.61 26.61 0 013.095 2.348.75.75 0 00.992 0 26.547 26.547 0 015.93-3.95.75.75 0 00.42-.739 41.053 41.053 0 00-.39-3.114 29.925 29.925 0 00-5.199 2.801 2.25 2.25 0 01-2.514 0c-.41-.275-.826-.541-1.25-.797a6.985 6.985 0 01-1.084 3.45 26.503 26.503 0 00-1.281-.78A5.487 5.487 0 006 12v-.54z"
              clip-rule="evenodd"
            />
          </svg>
          Always learning.
        </dt>
        <dd class="inline">
          Iure sed ab. Aperiam optio placeat dolor facere. Officiis pariatur eveniet atque et dolor.
        </dd>
      </div>

      <div class="relative pl-9">
        <dt class="inline font-semibold text-white">
          <svg
            class="absolute left-1 top-1 h-5 w-5 text-emerald-500"
            viewBox="0 0 20 20"
            fill="currentColor"
            aria-hidden="true"
          >
            <path
              d="M15.98 1.804a1 1 0 00-1.96 0l-.24 1.192a1 1 0 01-.784.785l-1.192.238a1 1 0 000 1.962l1.192.238a1 1 0 01.785.785l.238 1.192a1 1 0 001.962 0l.238-1.192a1 1 0 01.785-.785l1.192-.238a1 1 0 000-1.962l-1.192-.238a1 1 0 01-.785-.785l-.238-1.192zM6.949 5.684a1 1 0 00-1.898 0l-.683 2.051a1 1 0 01-.633.633l-2.051.683a1 1 0 000 1.898l2.051.684a1 1 0 01.633.632l.683 2.051a1 1 0 001.898 0l.683-2.051a1 1 0 01.633-.633l2.051-.683a1 1 0 000-1.898l-2.051-.683a1 1 0 01-.633-.633L6.95 5.684zM13.949 13.684a1 1 0 00-1.898 0l-.184.551a1 1 0 01-.632.633l-.551.183a1 1 0 000 1.898l.551.183a1 1 0 01.633.633l.183.551a1 1 0 001.898 0l.184-.551a1 1 0 01.632-.633l.551-.183a1 1 0 000-1.898l-.551-.184a1 1 0 01-.633-.632l-.183-.551z"
            />
          </svg>
          Share everything you know.
        </dt>
        <dd class="inline">Laudantium tempora sint ut consectetur ratione. Ut illum ut rem numquam fuga delectus.</dd>
      </div>

      <div class="relative pl-9">
        <dt class="inline font-semibold text-white">
          <svg
            class="absolute left-1 top-1 h-5 w-5 text-emerald-500"
            viewBox="0 0 20 20"
            fill="currentColor"
            aria-hidden="true"
          >
            <path
              d="M10 2a.75.75 0 01.75.75v1.5a.75.75 0 01-1.5 0v-1.5A.75.75 0 0110 2zM10 15a.75.75 0 01.75.75v1.5a.75.75 0 01-1.5 0v-1.5A.75.75 0 0110 15zM10 7a3 3 0 100 6 3 3 0 000-6zM15.657 5.404a.75.75 0 10-1.06-1.06l-1.061 1.06a.75.75 0 001.06 1.06l1.06-1.06zM6.464 14.596a.75.75 0 10-1.06-1.06l-1.06 1.06a.75.75 0 001.06 1.06l1.06-1.06zM18 10a.75.75 0 01-.75.75h-1.5a.75.75 0 010-1.5h1.5A.75.75 0 0118 10zM5 10a.75.75 0 01-.75.75h-1.5a.75.75 0 010-1.5h1.5A.75.75 0 015 10zM14.596 15.657a.75.75 0 001.06-1.06l-1.06-1.061a.75.75 0 10-1.06 1.06l1.06 1.06zM5.404 6.464a.75.75 0 001.06-1.06l-1.06-1.06a.75.75 0 10-1.061 1.06l1.06 1.06z"
            />
          </svg>
          Enjoy downtime.
        </dt>
        <dd class="inline">Culpa dolorem voluptatem velit autem rerum qui et corrupti. Quibusdam quo placeat.</dd>
      </div>
    </dl>
  </div>

  <!-- Team section -->
  <div class="mx-auto mt-16 sm:mt-20 max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl">
        Our <span class="text-emerald-500">team</span>
      </h2>
      <p class="mt-6 text-lg leading-8 text-neutral-300">
        Excepturi repudiandae alias ut. Totam aut facilis. Praesentium in neque vel omnis. Eos error odio. Qui fugit
        voluptatibus eum culpa.
      </p>
    </div>
    <ul
      role="list"
      class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-14 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-4"
    >
      <li>
        <img class="aspect-[14/13] w-full rounded-2xl object-cover" src="/assets/images/team/felipe.jpeg" alt="" />
        <h3 class="mt-6 text-lg font-semibold leading-8 tracking-tight text-emerald-500">Felipe Vega</h3>
        <p class="text-base leading-7 text-neutral-300">Co-Founder / CEO</p>
        <p class="text-sm leading-6 text-neutral-500">Los Angeles, California</p>
      </li>
      <li>
        <img class="aspect-[14/13] w-full rounded-2xl object-cover" src="/assets/images/team/michael.jpeg" alt="" />
        <h3 class="mt-6 text-lg font-semibold leading-8 tracking-tight text-emerald-500">Michael Diaz</h3>
        <p class="text-base leading-7 text-neutral-300">Co-Founder / CEO</p>
        <p class="text-sm leading-6 text-neutral-500">Los Angeles, California</p>
      </li>
      <li>
        <img class="aspect-[14/13] w-full rounded-2xl object-cover" src="/assets/images/team/matt.jpeg" alt="" />
        <h3 class="mt-6 text-lg font-semibold leading-8 tracking-tight text-emerald-500">Matt Geller</h3>
        <p class="text-base leading-7 text-neutral-300">Co-Founder / CEO</p>
        <p class="text-sm leading-6 text-neutral-500">Los Angeles, California</p>
      </li>

      <!-- More people... -->
    </ul>
  </div>

  <div class="mx-auto grid max-w-7xl grid-cols-1 lg:grid-cols-2 mt-16 sm:mt-20">
    <div class="px-6 lg:px-8">
      <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">
        <h2 class="text-3xl font-semibold tracking-tight text-white">
          Let's <span class="text-emerald-500">talk</span>
        </h2>
        <p class="mt-6 text-lg leading-8 text-neutral-300">
          Proin volutpat consequat porttitor cras nullam gravida at. Orci molestie a eu arcu. Sed ut tincidunt integer
          elementum id sem. Arcu sed malesuada et magna.
        </p>
        <dl class="mt-10 space-y-4 text-base leading-7 text-neutral-300">
          <div class="flex gap-x-4">
            <dt class="flex-none">
              <span class="sr-only">Address</span>
              <svg
                class="h-7 w-6 text-emerald-500"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                aria-hidden="true"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z"
                />
              </svg>
            </dt>
            <dd>545 Mavis Island<br />Chicago, IL 99191</dd>
          </div>
          <div class="flex gap-x-4">
            <dt class="flex-none">
              <span class="sr-only">Telephone</span>
              <svg
                class="h-7 w-6 text-emerald-500"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                aria-hidden="true"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"
                />
              </svg>
            </dt>
            <dd><a class="hover:text-white" href="tel:+1 (555) 234-5678">+1 (555) 234-5678</a></dd>
          </div>
          <div class="flex gap-x-4">
            <dt class="flex-none">
              <span class="sr-only">Email</span>
              <svg
                class="h-7 w-6 text-emerald-500"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                aria-hidden="true"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"
                />
              </svg>
            </dt>
            <dd><a class="hover:text-white" href="mailto:hello@example.com">hello@example.com</a></dd>
          </div>
        </dl>
      </div>
    </div>
    <form action="#" method="POST" class="px-6 lg:px-8">
      <div class="mx-auto max-w-xl lg:mr-0 lg:max-w-lg">
        <div class="grid grid-cols-1 gap-x-8 gap-y-6">
          <div>
            <label for="first-name" class="block text-sm font-semibold leading-6 text-white">Name</label>
            <div class="mt-2.5">
              <input
                type="text"
                name="first-name"
                id="first-name"
                autocomplete="given-name"
                class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-emerald-500 sm:text-sm sm:leading-6"
              />
            </div>
          </div>
          <div>
            <label for="email" class="block text-sm font-semibold leading-6 text-white">Email</label>
            <div class="mt-2.5">
              <input
                type="email"
                name="email"
                id="email"
                autocomplete="email"
                class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-emerald-500 sm:text-sm sm:leading-6"
              />
            </div>
          </div>
          <div>
            <label for="message" class="block text-sm font-semibold leading-6 text-white">Message</label>
            <div class="mt-2.5">
              <textarea
                name="message"
                id="message"
                rows="4"
                class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-emerald-500 sm:text-sm sm:leading-6"
              ></textarea>
            </div>
          </div>
        </div>
        <div class="mt-8 flex justify-end">
          <button
            type="submit"
            class="rounded-md bg-emerald-500 px-3.5 py-2.5 text-center text-sm font-semibold text-neutral-800 shadow-sm hover:bg-emerald-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-500"
          >
            Send message
          </button>
        </div>
      </div>
    </form>
  </div>
</main>
@endsection
