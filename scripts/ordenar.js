var platos = [
  { nombre: "chistorra",
    precio: "25",
    cantidad: 0, },
  { nombre: "pulpo",
    precio: "50",
    cantidad: 0, },
  { nombre: "jugoCarne",
    precio: "40",
    cantidad: 0, },
  { nombre: "ensalada",
    precio: "30",
    cantidad: 0, },
  { nombre: "solomillo",
    precio: "100",
    cantidad: 0, },
  { nombre: "arrachera",
    precio: "150",
    cantidad: 0, },
  { nombre: "salmon",
    precio: "125",
    cantidad: 0, },
  { nombre: "limonada",
    precio: "25",
    cantidad: 0, },
  { nombre: "marques",
    precio: "65",
    cantidad: 0, },
  { nombre: "helado",
    precio: "35",
    cantidad: 0, }
];

let totalDia = 0;

function ordenar() {
  var i;
  let suma = 0;
  let ticket = "Pedido: \n";
  for(i = 0; i < platos.length; i++){
    platos[i].cantidad = document.getElementById(platos[i].nombre).selectedIndex;
    if(platos[i].cantidad != 0){
      suma += (platos[i].cantidad * platos[i].precio);
      ticket += platos[i].nombre + "\t" + "$" + platos[i].precio + ".00 X " + platos[i].cantidad + "\n";
    }
  }
  if(suma != 0){
    alert(ticket +"\nTotal = $" + suma + ".00");
    totalDia += suma;
  }else{
    alert("Su pedido esta vacio");
  }
}

function reset(){
  for(i = 0; i < platos.length; i++){
    document.getElementById(platos[i].nombre).selectedIndex = 0;
  }
}

function finalizarDia(){
  alert("El total del dia fue $"+totalDia+".00");
  totalDia = 0;
}

document.getElementById("ordenar").onclick = function (){
  ordenar();
  reset();
}

document.getElementById("finalizar").onclick = function (){
  finalizarDia();
}
