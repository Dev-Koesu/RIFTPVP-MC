
const t=localStorage.getItem('rift-theme')||'dark';
document.documentElement.dataset.theme=t;
function toggleTheme(){
  const nt=document.documentElement.dataset.theme==='dark'?'light':'dark';
  document.documentElement.dataset.theme=nt;localStorage.setItem('rift-theme',nt)
}
