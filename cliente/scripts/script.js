// Cargar preferencias guardadas desde localStorage
document.addEventListener('DOMContentLoaded', () => {
    initializePreferences(); 
    initializeCart();
});

// Función para inicializar preferencias de idioma y tema
function initializePreferences() {
    const language = localStorage.getItem('language') || 'es';
    const theme = localStorage.getItem('theme') || 'light';

    const languageSelect = document.getElementById('language');
    const themeSelect = document.getElementById('theme');

    if (languageSelect) languageSelect.value = language;
    if (themeSelect) themeSelect.value = theme;

    document.body.classList.add(theme);
}

// Cambiar idioma y guardar preferencia
function setLanguagePreference() {
    const language = document.getElementById('language').value;
    localStorage.setItem('language', language);
    alert('Idioma cambiado a: ' + language);
}

// Cambiar tema y guardar preferencia
function setThemePreference() {
    const theme = document.getElementById('theme').value;
    localStorage.setItem('theme', theme);
    document.body.classList.remove('light', 'dark');
    document.body.classList.add(theme);
}

// Función para inicializar el carrito
function initializeCart() {
    if (document.getElementById('cart-items')) {
        loadCart();
    }
}

// Añadir productos al carrito
function addToCart(event) {
    event.preventDefault(); // Prevenir recarga de la página

    const select = document.getElementById('product-select');
    if (!select) return;

    const selectedOption = select.options[select.selectedIndex];
    const productName = selectedOption.text;
    const productPrice = selectedOption.getAttribute('data-price');

    const cartItems = JSON.parse(sessionStorage.getItem('cartItems')) || [];
    cartItems.push({ name: productName, price: productPrice });

    sessionStorage.setItem('cartItems', JSON.stringify(cartItems));
    loadCart();
}

// Cargar productos del carrito
function loadCart() {
    const cartItems = JSON.parse(sessionStorage.getItem('cartItems')) || [];
    const cartContainer = document.getElementById('cart-items');
    if (!cartContainer) return;

    cartContainer.innerHTML = ''; // Limpiar contenido previo

    if (cartItems.length > 0) {
        cartItems.forEach(item => {
            const div = document.createElement('div');
            div.textContent = `${item.name} - ${item.price}€`;
            cartContainer.appendChild(div);
        });
    } else {
        const emptyMessage = document.createElement('div');
        emptyMessage.textContent = "Tu carrito está vacío.";
        cartContainer.appendChild(emptyMessage);
    }
}

// Limpiar carrito
function clearCart() {
    sessionStorage.removeItem('cartItems');
    loadCart();
}
