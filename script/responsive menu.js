const button = document.querySelector('.bar-icon > button');
const menu = document.querySelector('.responsive-menu') 

button.addEventListener('click', e => { 
    e.preventDefault(); 
    

    if(button.className === 'show') { 
        menu.style.display = 'none';
    }else { 
        menu.style.display = 'block';
    }
    
    button.classList.toggle('show'); 
   
})
