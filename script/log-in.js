let validate = ()=>{
    return validateBlank();
}
let validateBlank = ()=>{
    let email = document.getElementById("email").value.trim()
    let pass = document.getElementById("password").value.trim()

    if (email.length ===0){
        return false
    }
    if (pass.length ===0){
        return false
    }
    return true
}