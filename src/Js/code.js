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

function validateAdmin() {
    var result = ValidateEmail('email', 'Email') &&
        validateEmpty('pwd', 'Password');
    if (result) {
        console.log(result);
        var email = getvalue('email');
        var pwd = getvalue('pwd');

        var dataForm = 'email=' + email + '&password=' + pwd + '&process=adminLogin';

        ajaxCall('../Backend/Login.php', 'post', dataForm, 'status', true);
        var status = getvalue('status');
        console.log(status);
        if (status == 1) {
            alert("Logged Successfully!");
            resetFormdata('ValidateAdmin');
            window.location.href = "../admin/Admindashboard.php";
        } else {
            alert("Invalid Username or Password");
        }
    }
    return false;
}

function validateUser() {
    var result =
        ValidateEmail('email', 'Email') &&
        validateEmpty('pwd', 'pwd');

    if (result) {
        var email = getvalue('email');
        var pwd = getvalue('pwd');

        var farmer = document.getElementById("farmer");
        var laboratory = document.getElementById("laboratory");
        let user = "";
        let url = "";

        if (farmer.checked) {
            user = "farmer";
            var dataForm = 'email=' + email + '&password=' + pwd + '&user=' + user + '&process=userLogin';
            url = "../farmer/FarmerDashboard.php";

        } else if (laboratory.checked) {
            user = "laboratory";
            var dataForm = 'email=' + email + '&password=' + pwd + '&user=' + user + '&process=userLogin';
            url = "../laboratory/LaboratoryDashboard.php";

        } else {
            alert("invalid user");
        }

        ajaxCall('../Backend/Login.php', 'post', dataForm, 'status', true);
        var status = getvalue('status');
        if (status == 1) {
            alert("Logged Successfully!");
            resetFormdata('ValidateUser');
            window.location.href = url;
        } else {
            alert("Invalid Username or Password");
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

function togglepassword(imageId, textboxId) {
    var img = document.getElementById(imageId);
    var input = document.getElementById(textboxId);

    if (input.type == "password") {
        img.src = "../img/seen.png";
        input.type = "text";
    } else {
        img.src = "../img/eye.png";
        input.type = "password";
    }
}

function showsidebar() {
    var sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("hidden");
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

function toggleSidebar() {
    var sidebar = document.getElementById("sidebar");
    var arrow = document.getElementById("arrow");
    // var heading = document.getElementById("heading");
    // var logo = document.getElementById("logo");

    var opensidebar = sidebar.classList.contains("w-72");
    if (opensidebar) {
        sidebar.classList.add("w-20");
        sidebar.classList.remove("w-72");
        arrow.classList.add("rotate-180");
        // heading.classList.add("scale-0");
        // logo.classList.add("rotate-[360deg]");
        toggleheadings(opensidebar);
    } else {
        sidebar.classList.add("w-72");
        sidebar.classList.remove("w-20");
        arrow.classList.remove("rotate-180");
        // heading.classList.remove("scale-0");
        toggleheadings(opensidebar);
        // logo.classList.remove("rotate-[360deg]");
    }
}

function toggleheadings(opensidebar) {
    var headings = document.getElementsByClassName("heading");
    for (let i = 0; i < headings.length; i++) {
        if (opensidebar) {
            headings[i].classList.add("scale-0");
        } else {
            headings[i].classList.remove("scale-0");
        }
    }
}

function toggleMode() {
    var html = document.getElementById("html");
    var img = document.getElementById("mode");

    var mode = html.classList.contains("dark");
    if (mode) {
        console.log(mode);
        html.classList.remove("dark");
        img.src = "../img/light-bulb.png";
    } else {
        console.log(mode);
        html.classList.add("dark");
        img.src = "../img/dark-bulb.png";
    }
}