window.addEventListener("load",()=>{
    let btnNo=document.querySelector("#no");
    let btnSi=document.querySelector("#si");
    let contenedor =document.querySelector("#contenedor");
    let contador =0;

    btnNo.addEventListener("mouseover", ()=>{
        if(contador==0){
        contenedor.removeChild(btnNo);
        document.body.appendChild(btnNo);
        contador++;
        }
        let x = Math.round(Math.random()*100);
    })

})