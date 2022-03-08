//Selectors
const submitBtns = document.querySelectorAll('.btn-wrapper > #submit');
const showAnsBtns = document.querySelectorAll('.btn-wrapper > #show-answer'); 
let val = ''; 
let PATH = ''; 
let get_path; 
const id = document.querySelector('.header-wrapper').id; 

getId = () => { 
    switch(id) { 
        case '1':
            return PATH = 'json/introduction.json'; 
        case '2': 
            return PATH = 'json/conditionals.json'; 
        case '3':
            return PATH = 'json/functions.json'; 
        case '4': 
            return PATH = 'json/arrays.json';
        case '5':
            return PATH = 'json/loops.json'; 
    }
}


console.log(getId()); 
const getAnswer = async () => { 
    const response = await fetch(getId()); 
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
        const inputBox = parent.querySelectorAll('input'); //Query the form --> Grab all the input fields in the form (Where each input fields are stored in a nodeList)
        const codeSnippetWrapper = parent.querySelector('.code-snippet-wrapper'); //Retrieve the wrapper to change the contents(i.e if answer is wrong or correct)  
        let correct; 
            
        if(e.target.className === 'try-again') { // Check if the button was already clicked before. If so, we should allow the user to try again. 
            tryAgain(e.target, parent); // Fire the function "tryAgain". Takes 2 arguments (the submit button, and the form)
            showHTMLElements(e.target.parentNode.childNodes[5]); // Show the "Show Answer" button. 
        }else { 
            for(i = 0; i < inputBox.length; i++) { // Cycle through all the input fields in the form 
                correct = true; 
                if(inputBox[i].value !== val[parent.id][i]){ //Check input value of user against answer in the JSON file. 
                    correct = false;  // If one answer is wrong, set flag to FALSE and BREAK from the loop. 
                    break; 
                }
            }
        
            if(correct){ 
                //CALL ON THE FUNCTION changeHTMLElements to show appropriate template (i.e --> either wrong template OR correct template). 
                changeHTMLElements(e.target, codeSnippetWrapper, correct); 
            }else {
                changeHTMLElements(e.target, codeSnippetWrapper, correct)
            }
        }

    }) 
})


showAnsBtns.forEach(btn => { 
    btn.addEventListener('click', e => {    
        e.preventDefault(); 
        e.target.classList.toggle('clicked'); // The class of the button will toggle. That is, it will either be "" or clicked.  
        const parent = e.target.parentNode.parentNode.parentNode; //Grab the parent element (form tag)
        const inputBox = parent.querySelectorAll('input'); //Query the form --> Grab all the input fields in the form

        if(e.target.className !== '') { // Checks if the user clicked on the button. If so, 
            e.target.innerHTML = 'Hide Answer'; // Change the text inside the button from "Show Answer" to "Hide Answer"
            hideHTMLElements(e.target.parentNode.childNodes[1]); //Hide "Submit Answer" button. 
            for(i = 0; i < inputBox.length; i++) { 
                inputBox[i].value = val[parent.id][i]; // Insert answers from JSON file to the input fields. 
            }
        }else { // If not clicked, 
            showHTMLElements(e.target.parentNode.childNodes[1]); //Display "Submit Answer" button. 
            e.target.innerHTML = 'Show Answer'; // Change text of the button from "Hide Answer" to "Show Answer". 
            for(j = 0; j < inputBox.length; j++) { 
                inputBox[j].value = '';  // Reset all input field to blank. 
            }
        }
    })
})


//Functions
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
