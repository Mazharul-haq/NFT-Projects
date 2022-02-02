<div class="shadow sticky top-0  z-50  bg-white">
    <header class="container lg:px-8">
        <nav

            class="

          flex flex-wrap
          items-center
          justify-between
          w-full
          py-4
          md:py-0
          px-4
          text-lg text-gray-700
          bg-white

        "
        >
            <div>
                <a href="#">
                    <img src="{{asset('img/logo/nft-logo.png')}}" style="height: 100px" alt="22">
                </a>
            </div>

            <svg
                xmlns="http://www.w3.org/2000/svg"
                id="menu-button"
                class="h-6 w-6 cursor-pointer md:hidden block"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                />
            </svg>

            <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
                <ul
                    class="
              pt-4
              text-base text-gray-700
              md:flex
              md:justify-between
              md:pt-0
                font-bold
                "

                >
                    <li>
                        <a class="md:p-4 py-2  block hover:text-purple-400" href="#"
                        >Home</a
                        >
                    </li>
                    <li>
                        <a class="md:p-4 py-2 block hover:text-purple-400" href="#"
                        >Event</a
                        >
                    </li>
                    <li>
                        <a class="md:p-4 py-2 block hover:text-purple-400" href="#"
                        >Customers</a
                        >
                    </li>
                    <li>
                        <a class="md:p-4 py-2 block hover:text-purple-400" href="#"
                        >Blog</a
                        >
                    </li>
                    <li class="">

                        <a
                            class="md:p-4 block hover:text-purple-400 bg-primary md:text-base   hover:bg-white text-white  hover:text-primary border rounded-full mb-2"
                            href="{{route('frontend.submit-project')}}"
                        ><i class="fas fa-plus "></i> SUBMIT PROJECT</a
                        >
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</div>
