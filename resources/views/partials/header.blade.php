<header class="position-fixed z-3 top-0 shadow-lg">
    <div class="container animate__animated animate__fadeInDown">
      <div class="logoheader">
        <img
          src="{{ asset('img/dc-logo.png') }}"
          alt="dclogo"
          class="rotate-x-infinite"
        />
      </div>
      <div role="navigation" class="menubar">
        <ul>
          <li v-for="(item, index) in menu" :key="index">
            {{ item.name }}
          </li>
        </ul>
      </div>
      <div role="search" class="searchbar">
        <label for="search" class="px-2" @click="cleanResult"
          ><i class="fa fa-search" aria-hidden="true"></i
        ></label>
        <input
          type="search"
          placeholder="Search"
          v-model="searchQuery"
          @input="search"
        />
        <div v-if="searchResults.length" class="dropdown position-absolute z-3 bg-white p-3 shadow-lg">
          <div v-for="(result, index) in searchResults" :key="index">
            <a href="#" class="text-decoration-none text-black p-1">{{ result.series }}</a>
          </div>
        </div>
      </div>
    </div>
  </header>
