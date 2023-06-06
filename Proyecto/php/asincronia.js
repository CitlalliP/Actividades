//setTimeout(()=> {console.log("Codigo asincrono")} , 2000);
//console.log ("codigo sincrono")

/*function cuadrados (valor, callback){
    setTimeout{function () {
        callback(valor, valor, valor)
    }, Math.floor(Math.random()*10000)}
}
cuadrados(0)
cuadrados(1)
cuadrados(2)
cuadrados(3)*/


function cuadrados (valor){
    return new Promise ((resolver, rechazar)=>{
        if(typeof valor !== "number"){
            rechazar("Error: Este valor '"+valor+"'no es un número")
        }else {
            setTimeout(()=>{
                resolver({
                    valor,
                    resultado: valor * valor
                })
            }, Math.floor(Math.random()*5000));

        }
    });
}


// cuadrados(0).then((obj)=>{
//     console.log(`El cuadrado del valor ${obj.valor} es ${obj.resultado}`);
//     return cuadrados(1);
// }) .then((obj)=>{
//     console.log(`El cuadrado del valor ${obj.valor} es ${obj.resultado}`);
//     return cuadrados(2);
// }).then((obj)=>{
//     console.log(`El cuadrado del valor ${obj.valor} es ${obj.resultado}`);
//     return cuadrados(3);
// }).catch (err=>{
//     console.log(err);
// })

// console.log ("aaa")


async function imprimir (){
    cuadrado = await cuadrados(0)
    console.log(cuadrado.resultado)
}