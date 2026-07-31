
document.addEventListener('DOMContentLoaded',()=>{
  const y=document.querySelectorAll('[data-year]'); y.forEach(e=>e.textContent=new Date().getFullYear());
  console.log('Rift-Hosting v2.0 - OK');
});
