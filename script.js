const password = document.getElementbyID("password")
const password1 = document.getElementbyID("password1")
const form = document.getElementbyID("form")
const errorElement = document.getElementbyID("error")

form.addEventListener('submit', (e) =>{
let messages=[]

if(password.value.length<=6){
    messages.push("password must be longer than 6 characters")
}else if(password.value.length>24){
    messages.push("your password is too long try from 7 to 24 characters")
}else if(password.value==='password'){
    messages.push("password cannot be password")
}else if(password.value !== password1){
    messages.push("Please ensure both passwords match")
}
e.preventDefault()
errorElement.window.alert = messages.join(',')
})