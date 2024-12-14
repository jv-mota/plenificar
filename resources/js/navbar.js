// Script para alternar o menu mobile
const menuToggle = document.getElementById('menuToggle');
const mobileMenu = document.getElementById('mobileMenu');
const closeMenu = document.getElementById('closeMenu');

// Função para definir o link ativo
function setActiveLink() {
    const links = document.querySelectorAll('.nav-link');
    links.forEach(link => {
        link.classList.remove('active'); // Remove a classe 'active' de todos os links
    });
    const currentLink = window.location.pathname.split('/')[1] || 'inicio'; // Pega o nome da rota atual
    const activeLink = document.getElementById(currentLink) || document.getElementById('inicio'); // Pega o link correspondente
    activeLink.classList.add('active'); // Adiciona a classe 'active' ao link
}

// Esconde o menu no carregamento da página
document.addEventListener('DOMContentLoaded', () => {
    mobileMenu.classList.add('hidden');
    setActiveLink(); // Define o link ativo ao carregar a página
});

// Mostra o menu quando clicado
menuToggle.addEventListener('click', () => {
    mobileMenu.classList.remove('hidden');
    mobileMenu.classList.add('flex'); // Adiciona flex para exibir o menu
});

// Fecha o menu quando clicado
closeMenu.addEventListener('click', () => {
    mobileMenu.classList.add('hidden');
    mobileMenu.classList.remove('flex'); // Remove flex para ocultar o menu
});
