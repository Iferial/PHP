'use strict';

let login = prompt("Логин");
let password;

if (login === null) {
    alert('Canceled');
}
else if  (login !== 'Admin') {
    alert('Don`t understand');
}
else
{
    password = prompt('Password')
    if (password === 'Black overlord') {
        alert('wellcome');
    }
    else if (password !== null) {
        alert('wrong password');
    } else
        { alert('don`t understand');}
}