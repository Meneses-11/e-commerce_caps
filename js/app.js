//Funcion para almacenar y traer los datos que se almacenan
function guardarAlmacenamientoLocal(llave, valor_a_guardar){
    localStorage.setItem(llave, JSON.stringify(valor_a_guardar))
}
function obtenerAlmacenamientoLocal(llave){
    const datos = JSON.parse(localStorage.getItem(llave))
    return datos
}

let almacen = [
    {nombre: 'Luna',
    valor: 180.99,
    existencia: 30,
    urlImagen: './assets/img1.jpg'},
    {nombre: 'Queen',
    valor: 180.99,
    existencia: 30,
    urlImagen: './assets/img2.jpg'},
    {nombre: 'Fe',
    valor: 180.99,
    existencia: 25,
    urlImagen: './assets/img3.jpg'},
    {nombre: 'Rich Vagos',
    valor: 180.99,
    existencia: 25,
    urlImagen: './assets/img4.jpg'},
    {nombre: 'Nube Naruto',
    valor: 180.99,
    existencia: 20,
    urlImagen: './assets/img5.jpg'},
    {nombre: 'Rayo',
    valor: 180.99,
    existencia: 20,
    urlImagen: './assets/img6.jpg'},
    {nombre: 'Allien',
    valor: 180.99,
    existencia: 29,
    urlImagen: './assets/img7.jpg'},
    {nombre: 'Dona',
    valor: 180.99,
    existencia: 15,
    urlImagen: './assets/img8.jpg'},
    {nombre: 'Dinosaurio',
    valor: 180.99,
    existencia: 35,
    urlImagen: './assets/img9.jpg'},
    {nombre: 'Bill',
    valor: 180.99,
    existencia: 10,
    urlImagen: './assets/img10.jpg'},
    {nombre: 'Fantasma',
    valor: 180.99,
    existencia: 23,
    urlImagen: './assets/img11.jpg'},
    {nombre: 'Banana',
    valor: 180.99,
    existencia: 15,
    urlImagen: './assets/img12.jpg'},
    {nombre: 'Harry Potter',
    valor: 180.99,
    existencia: 2,
    urlImagen: './assets/img13.jpg'},
    {nombre: 'Peace',
    valor: 180.99,
    existencia: 1,
    urlImagen: './assets/img14.jpg'},
    {nombre: 'Puerquito',
    valor: 180.99,
    existencia: 3,
    urlImagen: './assets/img15.jpg'}
];

//let productos = obtenerAlmacenamientoLocal('productos') || [];
let productos = almacen;

// Variables que traemos de nuestro html
const informacionCompra = document.getElementById('informacionCompra');
const contenedorCompra = document.getElementById('contenedorCompra');
//const contenedorCompra = document.querySelector('.contenedorCompra');
const productosCompra = document.getElementById('productosCompra');
const contenedor = document.getElementById('contenedor');
//const carrito = document.getElementById('carrrito');
const carrito = document.querySelector('.carrito');
const salir = document.querySelector('.salir');
const numero = document.getElementById("numero");
const header = document.querySelector("#header");
const total = document.getElementById('total');
const body = document.querySelector("body");
const x = document.getElementById('x');

//variables que vamos a usar en nuestro proyecto
let lista = []
let valortotal = 0

//Scroll de nuestra página
window.addEventListener("scroll", function(){
    if(contenedor.getBoundingClientRect().top < 10){
        header.classList.add("scroll")
    } else{
        header.classList.remove("scroll")
    }
})

window.addEventListener('load', () => {
    visualizarProductos();
    contenedorCompra.classList.add("none")
})

function visualizarProductos(){
    contenedor.innerHTML = ""
    for(let i = 0; i < productos.length; i++){
        console.log(productos[i].urlImagen)
        if(productos[i].existencia > 0){
            contenedor.innerHTML += `<div><img src="${productos[i].urlImagen}"><div class="informacion"><p>${productos[i].nombre}</p><p class="precio">$${productos[i].valor}</p><button onclick=comprar(${i})>Comprar</button></div></div>`
        } else{
            contenedor.innerHTML += `<div><img src="${productos[i].urlImagen}"><div class="informacion"><p>${productos[i].nombre}</p><p class="precio">$${productos[i].valor}</p><p class="soldOut">Sold Out</p></div></div>`
        }

    }
}

function comprar(indice){
    lista.push( {nombre: productos[indice].nombre, precio: productos[indice].valor})

    let van = true
    let i = 0
    while(van == true){
        if(productos[i].nombre == productos[indice].nombre){
            productos[i].existencia -= 1
            if(productos[i].existencia == 0){
                visualizarProductos()
            }
            van = false
        }
        almacen = productos;
        //guardarAlmacenamientoLocal("productos", productos)
        i += 1;
    }
    numero.innerHTML = lista.length
    numero.classList.add("diseñoNumero")
    //console.log(productos)
    return lista
}

carrito.addEventListener("click", function(){
    body.style.overflow = "hidden"
    contenedorCompra.classList.remove('none')
    contenedorCompra.classList.add('contenedorCompra')
    informacionCompra.classList.add('informacionCompra')
    mostrarElementosLista()
})

salir.addEventListener("click",function(){
    window.location.href = "./index.php"
})


function mostrarElementosLista(){
    productosCompra.innerHTML = ""
    valortotal = 0
    for(let i=0; i<lista.length; i++){
        productosCompra.innerHTML += `<div><div class="img"><button onclick=eliminar(${i}) class="botonTrash"><img src="./assets/eliminar.png"></button><p>${lista[i].nombre}</p></div><p> $${lista[i].precio}</p></div>`
        valortotal += parseInt(lista[i].precio)
    }
    total.innerHTML = `<p>Valor Total</p> <p><span>$${valortotal}</span></p>`
}

function eliminar(indice){
    let van = true
    let i = 0
    while(van == true){
        if(productos[i].nombre == lista[indice].nombre){
            productos[i].existencia += 1
            lista.splice(indice, 1)
            van = false
        }
        i += 1;
    }
    almacen = productos;
    //guardarAlmacenamientoLocal("productos", productos)
        
    numero.innerHTML = lista.length
    if(lista.length == 0){
        numero.classList.remove("diseñoNumero")
    }
    visualizarProductos()
    mostrarElementosLista()
}

x.addEventListener("click", function(){
    body.style.overflow = "auto"
    contenedorCompra.classList.add('none')
    contenedorCompra.classList.remove('contenedorCompra')
    informacionCompra.classList.remove('informacionCompra')
})




