function registerFarmer() {
    var result =
        validateEmpty('firstname', 'First name') &&
        validateEmpty('middlename', 'Middle name') &&
        validateEmpty('lastname', 'last name') &&
        ValidateEmail('email', 'Email') &&
        validateContact('contact', 'Contact number') &&
        validateEmpty('address', 'Address') &&
        validateEmpty('city', 'City') &&
        validateEmpty('state', 'State') &&
        validatePassword();

    if (result) {
        var firstname = getvalue('firstname');
        var middlename = getvalue('middlename');
        var lastname = getvalue('lastname');
        var email = getvalue('email');
        var contact = getvalue('contact');
        var address = getvalue('address');
        var city = getvalue('city');
        var state = getvalue('state');
        var password = getvalue('pwd');

        var dataForm =
            'firstname=' + firstname +
            '&lastname=' + lastname +
            '&middlename=' + middlename +
            '&email=' + email +
            '&contact=' + contact +
            '&address=' + address +
            '&city=' + city +
            '&state=' + state +
            '&password=' + password +
            '&process=registerFarmer';

        ajaxCall('../Backend/Register.php', 'post', dataForm, 'status', true);

        var status = getvalue('status');
        if (status == 1) {
            alert("Registered Successfully!");
            resetFormdata('farmForm');
        } else {
            alert(status);
        }
    }
    return false;
}

function registerLaboratory() {
    var result =
        validateEmpty('fullname', 'Laboratory name') &&
        ValidateEmail('email', 'Email') &&
        validateContact('contact', 'Contact number') &&
        validateEmpty('address', 'Address') &&
        validateEmpty('city', 'City') &&
        validateEmpty('state', 'State') &&
        validateEmpty('ownership', 'Ownership') &&
        validatePassword();

    if (result) {

        var fullname = getvalue('fullname');
        var email = getvalue('email');
        var contact = getvalue('contact');
        var address = getvalue('address');
        var city = getvalue('city');
        var state = getvalue('state');
        var password = getvalue('pwd');
        var ownership = getvalue('ownership');

        var dataForm =
            'fullname=' + fullname +
            '&email=' + email +
            '&contact=' + contact +
            '&address=' + address +
            '&city=' + city +
            '&state=' + state +
            '&password=' + password +
            '&ownership=' + ownership +
            '&process=registerlab';

        ajaxCall('../Backend/Register.php', 'post', dataForm, 'status', true);

        var status = getvalue('status');
        if (status == 1) {
            alert("Registered Successfully!");
            resetFormdata('labForm');
        } else {
            alert(status);
        }
    }
    return false;
}

function validateContactForm() {
    var result =
        validateEmpty('email', 'Email') &&
        validateEmpty('message', 'Message');
    alert(result);
    if (result) {
        var email = getvalue('email');
        var message = getvalue('message');

        var dataForm = 'email=' + email + '&message=' + message + '&process=registerContact';
        alert(dataForm);

        alert('call ajax');
        ajaxCall('../Backend/Register.php', 'post', dataForm, 'status', true);
        alert("done");

        var status = getvalue('status');
        if (status == 1) {
            alert("Registered Successfully!");
            resetFormdata('contactForm');
        } else {
            alert(status);
        }
    }

    return false;
}

function validateUser() {
    var result =
        ValidateEmail('email', 'Email') &&
        validateEmpty('password', 'Password');

    if (result) {
        var email = getvalue('email');
        var pwd = getvalue('password');

        var dataForm = 'email=' + email + '&password=' + pwd + '&process=validateUser';
        ajaxCall('../Backend/Register.php', 'post', dataForm, 'status', true);

        var status = getvalue('status');
        if (status == 1) {
            alert("Logged Successfully!");
            resetFormdata('loginForm'); 
            window.location.href = "clientdashboard.php";
        } else {
            alert(status);
        }
    }
    return false;
}

function getvalue(elementId) {
    var element = document.getElementById(elementId).value;
    return element;
}

function resetFormdata(formId) {
    var form = document.getElementById(formId);
    form.reset();
}

function validateEmpty(elementId, elementName) {
    var element = document.getElementById(elementId);
    if (element.value == '' || element == null) {
        alert(elementName + " can't be empty!");
        document.getElementById(elementId).focus();
        return false;
    }
    return true;
}


function ValidateEmail(elementId, elementName) {
    var res = validateEmpty(elementId, elementName);
    if (res) {
        var input = document.getElementById(elementId);
        var validRegexEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if (input.value.match(validRegexEmail)) {
            return true;
        } else {
            alert("Invalid email address!");
            document.getElementById(elementId).focus();
            return false;
        }
    }
    return false;
}

function validateContact(elementId, elementName) {
    var res = validateEmpty(elementId, elementName);
    if (res) {
        var validRegexPhoneno = /^\d{10}$/;
        var input = document.getElementById(elementId);
        if ((input.value.match(validRegexPhoneno))) {
            return true;
        }
        else {
            alert("Invalid contact number!");
            document.getElementById(elementId).focus();
            return false;
        }
    }
    return false;
}

function CheckPassword(elementId, elementName) {
    var res = validateEmpty(elementId, elementName);
    if (res) {
        var passw = /^\w{7,14}$/;
        var input = document.getElementById(elementId);
        if (input.value.match(passw)) {
            return true;
        }
        else {
            alert(elementName + ' should be of 7 t0 14 character!')
            document.getElementById(elementId).focus();
            return false;
        }
    }
    // return true;
}

function validatePassword() {
    var res =
        CheckPassword('pwd', 'Password') &&
        CheckPassword('cpwd', 'Confirm Password');

    if (res) {
        var pass = document.getElementById('pwd').value;
        var cpass = document.getElementById('cpwd').value;
        if (pass == cpass) {
            return true;
        } else {
            alert('Invalid password!');
            document.getElementById('cpwd').focus();
            return false;
        }
    }
    return false;
}

function ajaxCall(url, method, data, destination, isHtml) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        if (isHtml) {
            document.getElementById(destination).value = this.responseText;
        } else {
            document.getElementById(destination).innerHTML = this.responseText;
        }
    }
    xhttp.open(method, url, false);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(data);
}
