<nav class="border-b border-gray-300 sticky top-0 bg-[#fff] shadow-md z-50">
    <div class="container mx-auto flex justify-between items-center py-4">
        <!-- Logo - Projeto Educação -->
        <div class="flex items-center space-x-2 text-lg font-bold">
            <a href="/" class="flex items-center">
                <img src="images/logo-plenificar.png" id="logo-plenificar" class="w-10" alt="Logo - Plenificar">
                <span class="ml-1 fw-bold text-[#A80027]">Plenificar</span>
            </a>
        </div>

        <!-- Navegação - Links -->
        <div class="hidden md:flex space-x-8">
            <a href="/" class="text-[#A80027] hover:text-[#EE0038] font-bold relative group nav-link" id="inicio">
                Início
                <span class="absolute left-0 bottom-0 w-0 h-[3px] bg-[#EE0038] transition-all group-hover:w-6"></span>
            </a>
            <a href="/blog" class="text-[#A80027] hover:text-[#EE0038] font-bold relative group nav-link" id="blog">
                Blog
                <span class="absolute left-0 bottom-0 w-0 h-[3px] bg-[#EE0038] transition-all group-hover:w-6"></span>
            </a>
            <a href="/contato" class="text-[#A80027] hover:text-[#EE0038] font-bold relative group nav-link" id="contato">
                Contato
                <span class="bg-[#EE0038] transition-all group-hover:w-6"></span>
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="menuToggle" class="block md:hidden text-[#A80027] fw-bolder">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div id="mobileMenu" class="hidden fixed inset-0 bg-[#fff] flex-col justify-center items-center space-y-6 text-center text-gray-600 z-50">
        <a href="/" class="text-lg font-bold text-[#A80027] hover:text-[#EE0038]">Início</a>
        <a href="/blog" class="text-lg font-bold text-[#A80027] hover:text-[#EE0038]">Blog</a>
        <a href="/contato" class="text-lg font-bold text-[#A80027] hover:text-[#EE0038]">Contato</a>
        <!-- Close Icon -->
        <button id="closeMenu">
            <i class="fa-regular fa-circle-xmark text-[#A80027]" style="font-size: 1.75rem;"></i>
        </button>
    </div>
</nav>
