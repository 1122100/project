<div class="navbar bg-gray-200">
    <div class="navbar-start">
        <div class="dropdown">
          <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16M4 18h7" />
            </svg>
          </div>
          <ul
            tabindex="0"
            class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">

            <li>
              <a href="{{ url('/cek') }}"
                 class="{{ Request::is('homepage') ? 'text-blue-500' : 'hover:text-blue-500' }} relative inline-block after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-blue-500 after:transition-all after:duration-300 hover:after:w-full">
                Homepage
              </a>
            </li>

            <li>
              <a href="{{ url('/collection') }}"
                 class="{{ Request::is('collection') ? 'text-blue-500' : 'hover:text-blue-500' }} relative inline-block after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-blue-500 after:transition-all after:duration-300 hover:after:w-full">
                Collection
              </a>
            </li>

            <li>
              <a href="{{ url('/shop') }}"
                 class="{{ Request::is('shop') ? 'text-blue-500' : 'hover:text-blue-500' }} relative inline-block after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-blue-500 after:transition-all after:duration-300 hover:after:w-full">
                Shop
              </a>
            </li>

            <li>
              <a href="{{ url('/about') }}"
                 class="{{ Request::is('about') ? 'text-blue-500' : 'hover:text-blue-500' }} relative inline-block after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-blue-500 after:transition-all after:duration-300 hover:after:w-full">
                About
              </a>
            </li>

            <li>
              <a href="{{ url('/contact') }}"
                 class="{{ Request::is('contact') ? 'text-blue-500' : 'hover:text-blue-500' }} relative inline-block after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-blue-500 after:transition-all after:duration-300 hover:after:w-full">
                Contact
              </a>
            </li>

          </ul>
        </div>
      </div>

    <div class="navbar-center">
      <a class="btn btn-ghost text-xl">PlantWorld</a>
    </div>
    <div class="navbar-end relative">
        <!-- Button to toggle search input -->
        <button id="searchButton" class="btn btn-ghost btn-circle">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </button>

        <!-- Search input (initially hidden) -->
        <div id="searchInputContainer" class="absolute right-0 mt-2 hidden">
            <input
                type="text"
                placeholder="Cari produk..."
                class="input input-bordered w-48 md:w-64"
                id="searchInput" />
        </div>
    </div>
      <button class="btn btn-ghost btn-circle">
        <div class="indicator">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
          </svg>
          <span class="badge badge-xs badge-primary indicator-item"></span>
        </div>
      </button>
    </div>
  </div>
