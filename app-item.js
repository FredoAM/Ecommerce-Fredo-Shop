const minus = document.querySelector('.fa-minus');
const add = document.querySelector('.fa-plus');
const quantity = document.querySelector('.quantity');
const price = document.querySelector('.card-precio');
const addToCart = document.querySelector('.add-toCart');
const itemTitle = document.querySelector('.item-title');
const itemDescription = document.querySelector('.item-description');
const itemPic = document.querySelector('.item-pic img');
const imageUrl = itemPic.getAttribute('src');
const imageId = itemPic.getAttribute('alt');
const menu = document.querySelector('.menu'); 

let number = 1;
    
quantity.innerHTML = number;


let nuevoPrecio = parseInt(price.innerHTML.slice(2));


    
minus.addEventListener('click', (e)=>{
    e.preventDefault();
    minusQuantity();
    

})


add.addEventListener('click', (e)=>{
    e.preventDefault();
    addQuantity();

})


const storedCarrito = JSON.parse(localStorage.getItem('carrito')) || [];

addToCart.addEventListener('click', (e) => {
    e.preventDefault();

    const newItem = {
        id_user: localStorage.getItem('usuario'),
        title: itemTitle.innerHTML,
        id: Math.floor(Math.random() * 9999),
        id_item: parseInt(imageId),
        image:  imageUrl,
        description: itemDescription.innerHTML,
        fullPrice: parseInt(price.innerHTML.slice(2)),
        price: parseInt(price.innerHTML.slice(2))/number,
        quantity: number
    };

    // Agregar el nuevo elemento al carrito
    storedCarrito.push(newItem);

    // Convertir el carrito actualizado a JSON
    const carroNuevo = JSON.stringify(storedCarrito);

    // Guardar el carrito en localStorage
    localStorage.setItem('carrito', carroNuevo);

    window.location.href = "carrito.php";
    // Actualizar cualquier otra lógica de la interfaz de usuario que dependa del carrito
});




const minusQuantity = ()=>{

    if(number > 1){
    number-=1;

    quantity.innerHTML = number;

    }else{
        return
    }

    let  newPrice = (nuevoPrecio * number)
    price.innerHTML = `$ ${newPrice}`

}
const addQuantity = ()=>{
    
    if(number <20){

        number+=1;
        quantity.innerHTML = number;
    }else{
        return
    }

    let  newPrice = (nuevoPrecio * number)
    price.innerHTML = `$ ${newPrice}`

}
