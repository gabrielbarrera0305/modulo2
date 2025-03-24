let num = prompt("ingrese un numero: ");
function impar (num = 0) {
   return (num % 2 !== 0) ? "el numero es impar" : "el numero es par";
}
console.log(impar(num));