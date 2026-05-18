emailjs.init("hgS1jGvCKrgd6vVa9")
 
const btn = document.getElementById("button");
 
document.getElementById("contact_form")
.addEventListener('submit', function(event){
    event.preventDefault();
 
    btn.innerText = 'Enviando...';
 
    const serviceID= 'service_u4mjsgd';
    const templateID='template_gwlaexl';
 
    emailjs.sendForm(serviceID, templateID, this)
    .then(()=>{
        btn.innerText='Enviar Cotizacion';
        alert("Mensaje enviado con exito has contactado al grupo de servicio");
        this.reset();
    },(err) => {
        btn.innerText = 'Enviar Cotizacion';
        alert(JSON.stringify(err));
    })
})