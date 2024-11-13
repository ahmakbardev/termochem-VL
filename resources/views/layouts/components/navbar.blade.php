<!-- Navigation -->
<nav class="navbar fixed-top">
    <div class="sm:px-4 lg:px-8 flex flex-wrap items-center justify-between lg:flex-nowrap">

        <!-- Image Logo -->
        <div class="flex flex-col justify-start">
            <a class="inline-block mr-4 py-0.5 text-xl whitespace-nowrap hover:no-underline focus:no-underline"
                href="/">
                <h1 class="text-2xl font-semibold">Thermochem-VL</h1>
            </a>
            <!-- Back Button -->
            <button id="backButton" onclick="goBack()" class="text-xl font-semibold w-fit text-blue-500 hover:underline">
                Kembali
            </button>
        </div>

        <button
            class="background-transparent rounded text-xl leading-none hover:no-underline focus:no-underline lg:hidden lg:text-gray-400"
            type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon inline-block w-8 h-8 align-middle"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse lg:flex lg:flex-grow lg:items-center" id="navbarsExampleDefault">
            <ul class="pl-0 mt-3 mb-2 ml-auto flex flex-col list-none lg:mt-0 lg:mb-0 lg:flex-row">
                <!-- Existing Nav Items Here -->

                <!-- Profile and Logout Button -->
                <li class="relative">
                    <button id="profileButton"
                        class="w-10 h-10 z-10 rounded-full bg-gray-200 flex items-center justify-center focus:outline-none"
                        onclick="toggleDropdown()">
                        <img src="{{ asset('assets/images/profile.png') }}" alt="Profile" class="w-8 h-8 rounded-full">
                    </button>

                    <!-- Dropdown for Logout -->
                    <div id="dropdownMenu" class="absolute right-0 mt-2 w-32 bg-white rounded-md shadow-lg hidden">
                        <form action="{{ route('logout') }}" method="POST" class="w-full text-center">
                            @csrf
                            <button type="submit"
                                class="w-full px-4 py-2 text-gray-700 hover:bg-gray-100 focus:outline-none">
                                Logout
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
        </div> <!-- end of navbar-collapse -->
    </div> <!-- end of container -->
</nav> <!-- end of navbar -->

<script>
    // Function to navigate back
    function goBack() {
        window.history.back();
    }

    // Toggle Dropdown
    function toggleDropdown() {
        const dropdown = document.getElementById("dropdownMenu");
        dropdown.classList.toggle("hidden");
    }

    // Close dropdown if clicked outside
    document.addEventListener("click", function(event) {
        const dropdown = document.getElementById("dropdownMenu");
        const profileButton = document.getElementById("profileButton");

        if (!profileButton.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.classList.add("hidden");
        }
    });

    // Check if the "Back" button should be hidden
    document.addEventListener("DOMContentLoaded", function() {
        const backButton = document.getElementById("backButton");

        // Hide back button if on the first page in history or at the root URL
        if (window.history.length <= 1 || window.location.pathname === '/') {
            backButton.style.display = "none";
        }
    });
</script>
