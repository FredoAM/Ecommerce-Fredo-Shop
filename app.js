const menu = document.querySelector('.menu');
const toggleMenu = document.querySelector('.toggle');


document.addEventListener('DOMContentLoaded', async function() {


    

    // Verificar si el valor ya existe en localStorage
    const storedUsuario = localStorage.getItem('usuario');

    if (storedUsuario == null) {
        let usuario = Math.floor(Math.random() * 9999);
        
        // Guardar el valor en localStorage
        localStorage.setItem('usuario', usuario.toString());
    } 
    

   

    try {
    // Fetch product data from the server
        const response = await fetch('products.php');
        const products = await response.json();
        products.length = 10


        
        
        const cardsContainer = document.querySelector('.arrivals-container');

        products.forEach((product)=>{
            
            const card = document.createElement('div');
            card.className = 'card';

            card.innerHTML = `
                <div class="card-header">
                    <img src="${product.image}" alt="ropa">
                </div>
                <div class="card-overview">
                    <span class="card-titulo">${product.title}</span>
                    <span class="card-precio">$ ${product.price}</span>
                    <a class="card-btn" href="item.php?item=${product.id}">Agregar</a >
                </div>
            `
            cardsContainer.appendChild(card)


        })
        const cartaContainer = document.querySelector('.best-sellers-container');

        let productos = products;
        productos.length = 5;

        productos.forEach((producto)=>{
            
            const card = document.createElement('div');
            card.className = 'card';

            card.innerHTML = `
                <div class="card-header">
                    <img src="${producto.image}" alt="ropa">
                </div>
                <div class="card-overview">
                    <span class="card-titulo">${producto.title}</span>
                    <span class="card-precio">$ ${producto.price}</span>
                    <a class="card-btn" href="item.php?item=${producto.id}">Agregar</a >
                </div>
            `
            cartaContainer.appendChild(card)


        })
                
    }
    catch(error){
        console.error(error);
    }
})

const clickToggle = ()=>{
    toggleMenu.addEventListener('click', (e)=>{
        menu.classList.toggle('active');
    })
}

clickToggle();


