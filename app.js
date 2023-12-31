var username = document.querySelector('#username')
var email = document.querySelector('#email')
var password = document.querySelector('#password')
var comfirmPassword = document.querySelector('#comfirm__password')
var form = document.querySelector('form')

function showError(input, message){
    let parent =  input.parentElement
    let small = parent.querySelector('small')    
    parent.classList.add('error')
    small.innerText = message
}


function showSuccess(input){
    let parent =  input.parentElement
    let small = parent.querySelector('small')    
    parent.classList.remove('error')
    small.innerText = ''
}



function checkEmptyError(listInput){
    let isEmptyError = false;
    listInput.array.forEach(input => {
        input.value = input.value.trim()
        if(!input.value){
            isEmptyError = true;
            showError(input, 'Loi')
        }else{
            showSuccess(input)
        }
    });
    
    return isEmptyError
}

function checkEmail(input) {
	const re =
		/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    
    input.value = input.value.trim()

    let isEmailError = !re.test(input.value)
	if (re.test(input.value)) {
		showSuccess(input)
	} else {
		showError(input, 'Email is not valid')
	}
    return isEmailError
}

form.addEventListener('submit', function(e){
    e.preventDefault()
    let isEmptyError = checkEmptyError([username, email, password, comfirmPassword])
    let isEmailError = checkEmail(email)
})

