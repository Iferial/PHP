'use strict';

let login = prompt("Логин");
let password;

switch ( login ) {
    case 'Admin':
        password = prompt('Password');

        switch ( password ) {
            case 'Black Overlord':
                alert('welcome');
                break;
            case null:
                alert('Canceled');
            default:
                alert('Wrong password');

        }
    break
    case null:
        alert('Canceled');
        break;
    default:
        alert('Don`t understand');
}