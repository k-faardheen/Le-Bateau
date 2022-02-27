document.addEventListener('DOMContentLoaded', ()=>{
    const drop = document.getElementById('countries')
    fetch('https://restcountries.com/v2/all').then(res=>{
        return res.json();
    }).then(data=>{
        
        let display = ""
        data.forEach(country => {
            display+=`<option>${country.name}</option>`
           
        });
        drop.innerHTML=display
    })
})