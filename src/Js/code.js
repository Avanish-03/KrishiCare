function registerFarmer() {
    var result =
        validateEmpty('firstname', 'First name') &&
        validateEmpty('middlename', 'Middle name') &&
        validateEmpty('lastname', 'last name') &&
        ValidateEmail('email', 'Email') &&
        validateContact('contact', 'Contact number') &&
        validateEmpty('address', 'Address') &&
        validateDropdown('state', 'State') &&
        validateDropdown('city', 'City') &&
        validatePassword();

    if (result) {
        var firstname = getvalue('firstname');
        var middlename = getvalue('middlename');
        var lastname = getvalue('lastname');
        var email = getvalue('email');
        var contact = getvalue('contact');
        var address = getvalue('address');
        var state = getvalue('state');
        var city = getvalue('city');
        var password = getvalue('pwd');

        var dataForm =
            'firstname=' + firstname +
            '&lastname=' + lastname +
            '&middlename=' + middlename +
            '&email=' + email +
            '&contact=' + contact +
            '&address=' + address +
            '&state=' + state +
            '&city=' + city +
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
        validateDropdown('state', 'State') &&
        validateDropdown('city', 'City') &&
        validateEmpty('ownership', 'Ownership') &&
        validatePassword();

    if (result) {

        var fullname = getvalue('fullname');
        var email = getvalue('email');
        var contact = getvalue('contact');
        var address = getvalue('address');
        var state = getvalue('state');
        var city = getvalue('city');
        var password = getvalue('pwd');
        var ownership = getvalue('ownership');

        var dataForm =
            'fullname=' + fullname +
            '&email=' + email +
            '&contact=' + contact +
            '&address=' + address +
            '&state=' + state +
            '&city=' + city +
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
            user = "admin";
            var dataForm = 'email=' + email + '&password=' + pwd + '&user=' + user + '&process=adminLogin';
            url = "../admin/Admindashboard.php";
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

function validateDropdown(elementId, elementName) {
    var element = document.getElementById(elementId);
    if (element.value == "default") {
        alert(elementName + " can't be empty!");
        document.getElementById(elementId).focus();
        console.log(element.value);
        return false;
    }
    return true;
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

var config = {
    cUrl: 'https://api.countrystatecity.in/v1/countries',
    ckey: 'SDEwOWNWc1JKWXVYa0hVaWtvYThZQzZhUTFjTkJOQ3VHcVhBYVNkaQ=='
}

function loadStates() {
    var stateSelect = document.querySelector('.state');
    var citySelect = document.querySelector('.city');

    stateSelect.disabled = false;
    citySelect.disabled = true;

    stateSelect.style.pointerEvents = 'auto';
    citySelect.style.pointerEvents = 'none';

    const selectedCountryCode = 'IN';

    stateSelect.innerHTML = '<option value="default">Select State</option>';
    citySelect.innerHTML = '<option value="default">Select City</option>';

    fetch(config.cUrl + '/' + selectedCountryCode + '/states', { headers: { "X-CSCAPI-KEY": config.ckey } })
        .then(response => response.json())
        .then(data => {
            data.forEach(state => {
                const option = document.createElement('option')
                option.value = state.iso2
                option.textContent = state.name
                stateSelect.appendChild(option)
            });
        })
        .catch(error => console.error('Error loading states:', error));
}

function loadCities(event) {
    var citySelect = document.querySelector('.city');

    citySelect.disabled = false
    citySelect.style.pointerEvents = 'auto'

    const selectedCountryCode = 'IN';
    const selectedStateCode = document.querySelector('.state').value;

    citySelect.innerHTML = '<option value="">Select City</option>'

    fetch(config.cUrl + '/' + selectedCountryCode + '/states/' + selectedStateCode + '/cities', { headers: { "X-CSCAPI-KEY": config.ckey } })
        .then(response => response.json())
        .then(data => {
            data.forEach(city => {
                const option = document.createElement('option')
                option.value = city.name
                option.textContent = city.name
                citySelect.appendChild(option)
            })

            if (data.length > 0) {
                citySelect.selectedIndex = 1;
            }
        })
        .catch(error => console.error('Error loading cities:', error))
}

window.onload = loadStates;
// stateSelect.addEventListener('change', loadCities);

function toggleSidebar() {
    var sidebar = document.getElementById("sidebar");
    var arrow = document.getElementById("arrow");

    var opensidebar = sidebar.classList.contains("w-72");
    if (opensidebar) {
        sidebar.classList.add("w-20");
        sidebar.classList.remove("w-72");
        arrow.classList.add("rotate-180");
        toggleheadings(opensidebar);
    } else {
        sidebar.classList.add("w-72");
        sidebar.classList.remove("w-20");
        arrow.classList.remove("rotate-180");
        toggleheadings(opensidebar);
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

function logoutUser() {
    var result = confirm("Are you sure to logout!");
    if (result) {
        ajaxCall("../Backend/logout.php", "post", "", "logoutResult");
        window.location.href = "../dist/";
    } else {
        return false;
    }
}