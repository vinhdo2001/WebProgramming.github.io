//nnếu visit lần đầu auto qua trang login
// nếu lần 2 thì có 2 cases:  qua trang login nếu chưa login, hoặc qua  my account nếu login rồi

var addButton = document.querySelector('#activeLink');

addButton.addEventListener("click", () => {
    //lần đầu visit link
    if (localStorage.getItem('visited') == null) {
        document.getElementsByClassName('activeLink').href = 'Login.html';                                    //qua login page phải login thành công thì visited =true và alreadyLogin =true
        localStorage.setItem('visited', JSON.stringify(true))
        // window.location.href
        // localStorage.setItem('alreadyLogin', JSON.stringify(true))
    }
    //những lần sau visit link
    else {
        //chưa login
        if (localStorage.getItem('alreadyLogin') == null) {
            document.getElementsByClassName('activeLink').href = 'Login.html';                            //qua login page phải login thành công thì visited =true và alreadyLogin =true
            localStorage.setItem('alreadyLogin', JSON.stringify(true))
            localStorage.setItem('visited', JSON.stringify(true))
        }
        //login ròi
        else {
            document.getElementsByClassName('activeLink').href = 'MyAccount(logged-in).html';
        }
    }
});






















const addButton = document.querySelector('#activeLink');
addButton.addEventListener("click", () => {
    // localStorage.setItem("visitedLink", visited);
});


function directToLoginPage(className) {
    document.getElementsByClassName(className).src = 'Login.html';
    ;
    console.log(document.getElementsByClassName(className).src)
    // return 'Login.html';
}
function directToMyAccountPage() {
    document.getElementsByClassName(className).src = 'MyAccount(logged-in).html';
    localStorage.setItem("successfulLogin", JSON.stringify(true))
    console.log(document.getElementsByClassName(className).src)
    // return 'MyAccount(logged-in).html';
}

let addButton = document.querySelector('#activeLink');
addButton.addEventListener('click', addLink);

function addLink() {
    (localStorage.getItem('visitedLink') != true) ? () => { directToMyAccountPage('activeLink') } : () => { directToLoginPage('activeLink') }
}