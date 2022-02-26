const lists = document.querySelectorAll('.menu ul > li');
const headerId = document.querySelector('.header-wrapper').id;  
console.log(lists); 

lists.forEach(li => { 
    if(li.className === 'selected' && li.id !== headerId) { 
        li.className.toggle(); 
    }else if (li.id === headerId && li.className === ''){
        li.setAttribute('class', 'selected');
    }
})