

const btn = document.getElementById('my-account');


const log = localStorage.getItem('alreadyLogin');
console.log(btn)
if (log) {
    btn.setAttribute('href', 'MyAccount(logged-in).html')
}
else
    btn.setAttribute('href', 'Login.html')

