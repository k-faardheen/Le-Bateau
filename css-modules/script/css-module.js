//Selectors
const submitBtns = document.querySelectorAll('.btn-wrapper > #submit');
const showAnsBtns = document.querySelectorAll('.btn-wrapper > #show-answer'); 
let val; 


//Retrieve the JSON FILE. 
const getAnswer = async () => { 
    const response = await fetch('./json/css-module.json'); 
    const data = await response.json(); 
    return data; 
}

getAnswer().then(data => { 
    val = data; 
});

//Event Listeners

submitBtns.forEach(btn => { 
    btn.addEventListener('click', (e) => { 
        e.preventDefault();
        const parent = e.target.parentNode.parentNode.parentNode; //Grab the parent element (form tag)
        const inputBox = parent.querySelectorAll('input'); //Query the form --> Grab all the input fields in the form
        const codeSnippetWrapper = parent.querySelector('.code-snippet-wrapper'); //Retrieve the wrapper to change the contents(i.e if answer is wrong or correct) 
        let flag; 
        if(e.target.className === 'try-again') { 
            tryAgain(e.target, parent); 
            showHTMLElements(e.target.parentNode.childNodes[5]);
        }else { 
            for(i = 0; i < inputBox.length; i++) { 
                flag = true; 
                if(inputBox[i].value.toLowerCase() !== val[parent.id][i]){ //Check input value of user against answer in the JSON file. 
                    flag = false;  //Sets the a flag to TRUE if each input values are correct. 
                    break;
                }
            }
        
            if(flag){ 
                //CALL ON THE FUNCTION changeHTMLElements. 
                changeHTMLElements(e.target, codeSnippetWrapper, flag); 
            }else {
                changeHTMLElements(e.target, codeSnippetWrapper, flag)
            }
        }

    }) 
})


showAnsBtns.forEach(btn => { 
    btn.addEventListener('click', e => {    
        e.preventDefault(); 
        e.target.classList.toggle('clicked'); 
        const parent = e.target.parentNode.parentNode.parentNode; //Grab the parent element (form tag)
        const inputBox = parent.querySelectorAll('input'); //Query the form --> Grab all the input fields in the form

        if(e.target.className !== '') { 
            e.target.innerHTML = 'Hide Answer';
            hideHTMLElements(e.target.parentNode.childNodes[1]);
            for(i = 0; i < inputBox.length; i++) { 
                inputBox[i].value = val[parent.id][i];  
            }
        }else { 
            showHTMLElements(e.target.parentNode.childNodes[1]);
            e.target.innerHTML = 'Show Answer'; 
            for(j = 0; j < inputBox.length; j++) { 
                inputBox[j].value = '';  
            }
        }
    })
})


hideHTMLElements = (element) => { 
    element.style.display = "none"; 
}

showHTMLElements = (element) => { 
    element.style.display = "block"; 
}
 
changeHTMLElements = (btn,template,flag) => { 
    hideHTMLElements(template.querySelector('.code-snippet')); //HIDE THE current content in the wrapper. 
    const correctTemplate = template.querySelector('.correct'); 
    const wrongTemplate = template.querySelector('.wrong'); 
    const btnWrapper = template.querySelector('.btn-wrapper'); 
    
    if(flag){ 
        //If flag returns TRUE --> load The check mark and display message 'Correct!'
        showHTMLElements(correctTemplate);
        hideHTMLElements(btnWrapper); 
    }else { 
        btn.innerHTML = 'Try Again'; 
        btn.classList.add('try-again'); 
        hideHTMLElements(btnWrapper.childNodes[5]);
        showHTMLElements(wrongTemplate);
    }
}

tryAgain = (btn,parent) => { 
    btn.classList.toggle('try-again'); 
    const template = parent.querySelector('.code-snippet');
    const wrongTemplate = parent.querySelector('.wrong'); 
    hideHTMLElements(wrongTemplate); 
    showHTMLElements(template); 
    btn.innerHTML = 'Submit your answer'; 
}
