const cart = document.querySelector('#cart');
const checkout = document.querySelector('.checkout');
const clearCart = document.querySelector('.btn-clear');
const container = document.querySelector('.container-carrito');
const menu = document.querySelector('.menu');

// Función para renderizar el carrito
function renderCarrito(storedCarrito) {
    // Limpiar el contenido actual del carrito
    cart.innerHTML = '';

    if (storedCarrito === null || storedCarrito.length === 0) {
        const carro = document.createElement('article');
        carro.className = 'product';
        carro.innerHTML = `
        <div class="empty-cart"> 
            <img src="img/empty-cart.png" alt="">
            <span>There is no item here</span>
            <a href="index.php"><span class="btn">SHOP NOW</span></a>
        </div>
        `
        cart.appendChild(carro);
        console.log(storedCarrito);
    } else {
        storedCarrito.forEach(carrito => {
            const carro = document.createElement('article');
            carro.className = 'product';
            let quantity = carrito.quantity;

            carro.innerHTML = `
                <header>
                    <img src="${carrito.image}" alt="">
                </header>

                <div class="content">
                    <a class="card-btn" href="item.php?item=${carrito.id_item}"><h1>${carrito.title}</h1></a >
                     
                    <span class="delete"><i class="fa-solid fa-x" data-id="${carrito.id}"></i></span>
                    ${carrito.description}
                </div>

                <footer class="content">
                    <span class="qt">x ${carrito.quantity}</span>

                    <h2 class="full-price">
                       $ ${carrito.price * quantity}
                    </h2>

                    <h2 class="price">
                       $ ${carrito.price}
                    </h2>
                </footer>
            `;

            const remove = carro.querySelector('.delete i');
            remove.addEventListener('click', () => {
                const updatedCarrito = storedCarrito.filter(item => item.id !== carrito.id);
                localStorage.setItem('carrito', JSON.stringify(updatedCarrito));
                renderCarrito(updatedCarrito); // Renderizar el carrito actualizado
                calculateTotal(updatedCarrito); // Calcular la suma total con el carrito actualizado
            });

            cart.appendChild(carro);
        });

        // Calcular la suma total inicial y actualizar el checkout
        calculateTotal(storedCarrito);
    }
}

// Función para calcular la suma total y actualizar el checkout
function calculateTotal(storedCarrito) {
    let sumaTotal = 0;

    storedCarrito.forEach(carrito => {
        const totalPrice = carrito.price * carrito.quantity;
        sumaTotal += totalPrice;
    });

    checkout.textContent = `$ ${sumaTotal.toFixed(2)}`;
}

// Obtener el carrito almacenado en localStorage
const storedCarrito = JSON.parse(localStorage.getItem('carrito'));

// Inicializar el carrito
renderCarrito(storedCarrito);


clearCart.addEventListener('click', ()=>{
    localStorage.removeItem('carrito');
    renderCarrito([]);
})