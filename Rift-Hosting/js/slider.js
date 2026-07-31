
let billing='monthly';
function setBilling(type){
  billing=type;
  document.querySelectorAll('.price-amount').forEach(el=>{
    const m=parseFloat(el.dataset.monthly);
    el.textContent = type==='yearly' ? '$'+(m*0.85).toFixed(2) : '$'+m.toFixed(2);
  });
  document.querySelectorAll('[data-bill]').forEach(b=>{
    b.classList.toggle('btn-primary', b.dataset.bill===type);
    b.classList.toggle('btn-ghost', b.dataset.bill!==type);
  });
}
