
window.onload = function() {
    render();
};

function render() {
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    window.recaptchaVerifier.render();
}
function phoneAuth()
{
    var phone_number=document.getElementById('phone').value;

    firebase.auth().signInWithPhoneNumber(phone_number,window.recaptchaVerifier)
    .then(function(confirmationResult){
      window.confirmationResult = confirmationResult;
      coderesult=confirmationResult;
      console.log(coderesult);
      alert('message sent');
    }).catch(function(error){
      alert(error.message);
    });
}
function verifynumber()
{
    var phone_number=document.getElementById("vernum").value;
    coderesult.confirm(phone_number).then(function(result){
        // User signed in successfully.
        const user = result.user;
        console.log(user);
        alert("Successfully Registered");
        // ...
      }).catch((error) => {
        alert(error.message);
      });
}