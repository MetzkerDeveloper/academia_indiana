function colorLinks() {
  const linksInternos = document.querySelectorAll('.container a[href^="#"]');
  const linkClass = 'ativo';

  function activeLink(index){
    linksInternos.forEach((link)=>{
      link.classList.remove('ativo')
    });
    linksInternos[index].classList.add('ativo');
  }
  linksInternos.forEach((link,index)=>{
    link.addEventListener('click',()=>{
      activeLink(index);      
    })
  });

const tabMenu = document.querySelectorAll('.container a[href^="#"]');
const tabContent = document.querySelectorAll('.caixa-section section');

if(tabMenu.length && tabContent.length) {
  tabContent[0].classList.add('ativa');
  function activeTab(index) {
    tabContent.forEach((section) => {
      section.classList.remove('ativa');
    });
    tabContent[index].classList.add('ativa');
  }
  
  tabMenu.forEach((itemMenu, index) => {
    itemMenu.addEventListener('click', () => {
      activeTab(index);
    });
  });
}
}
colorLinks();

