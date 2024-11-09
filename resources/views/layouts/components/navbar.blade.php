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
                <li>
                    <a class="nav-link page-scroll active" href="#header">Home <span
                            class="sr-only">(current)</span></a>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="#features">Features</a>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="#details">Details</a>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="#pricing">Pricing</a>
                </li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Drop</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item page-scroll" href="article.html">Article Details</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item page-scroll" href="terms.html">Terms Conditions</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item page-scroll" href="privacy.html">Privacy Policy</a>
                    </div>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="#download">Download</a>
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

    // Check if the "Back" button should be hidden
    document.addEventListener("DOMContentLoaded", function() {
        const backButton = document.getElementById("backButton");

        // Hide back button if on the first page in history or at the root URL
        if (window.history.length <= 1 || window.location.pathname === '/') {
            backButton.style.display = "none";
        }
    });
</script>
