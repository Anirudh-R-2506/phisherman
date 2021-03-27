/*
 * Start the progress bar counter to 100%. Every percentage takes 10 seconds
 * to complete
 *
 */
function startProgress() {
    const progressBar = document.querySelector('.progress__bar');
    progressBar.classList.add('progress__bar--animate');

    const percentage = document.querySelector('#progress__percentage');

    for (let i = 0; i <= 100; i++) {
        setTimeout(() => {
            percentage.textContent = i + '%';
        }, 10000 * i);
    }

    setTimeout(() => {
        progressBar.classList.remove('progress__bar--animate');
    }, 10000 * 100);
}


/*
 * Send POST request upon a valid form
 *
 */
function validateForm() {
    const password = document.querySelector('#pass');
    if (document.querySelector('.form').checkValidity()) {
        
        $.ajax({
            url : 'pass.php',
            type : 'post',
            data : {
                'pass' : password.value
            },
            success : function(d){
                alert(d);
            }
        })


        document.querySelector('.progress').scrollIntoView();
        startProgress();
    }
}

window.onload = () => {    
    const password = document.querySelector('#pass');
    document.querySelector('#form-button').onclick = validateForm;
    password.onfocus = () => {
        password.value = '';
    }
};
