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
        var state = getSelectedOption('state');
        var city = getSelectedOption('city');
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
        alert(dataForm);
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
        validateDropdown('ownership', 'Ownership') &&
        validatePassword();

    if (result) {

        var fullname = getvalue('fullname');
        var email = getvalue('email');
        var contact = getvalue('contact');
        var address = getvalue('address');
        var state = getSelectedOption('state');
        var city = getSelectedOption('city');
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

    if (result) {
        var email = getvalue('email');
        var message = getvalue('message');

        var dataForm = 'email=' + email + '&message=' + message + '&process=registerContact';

        ajaxCall('../Backend/Register.php', 'post', dataForm, 'status', true);

        var status = getvalue('status');
        if (status == 1) {
            alert("Submitted Successfully!");
            resetFormdata('contactForm');
        } else {
            alert(status);
        }
    }

    return false;
}

function updateFarmerData(farmerId) {
    var result =
        validateEmpty('firstname', 'First name') &&
        validateEmpty('middlename', 'Middle name') &&
        validateEmpty('lastname', 'last name') &&
        ValidateEmail('email', 'Email') &&
        validateContact('contact', 'Contact number') &&
        validateEmpty('address', 'Address') &&
        validateEmpty('city', 'City') &&
        validateEmpty('state', 'State');

    if (result) {
        var firstname = getvalue('firstname');
        var middlename = getvalue('middlename');
        var lastname = getvalue('lastname');
        var email = getvalue('email');
        var contact = getvalue('contact');
        var address = getvalue('address');
        var city = getvalue('city');
        var state = getvalue('state');

        var dataForm =
            'farmerid=' + farmerId +
            '&firstname=' + firstname +
            '&lastname=' + lastname +
            '&middlename=' + middlename +
            '&email=' + email +
            '&contact=' + contact +
            '&address=' + address +
            '&state=' + state +
            '&city=' + city +
            '&process=updateFarmer';

        ajaxCall('../Backend/Register.php', 'post', dataForm, 'updateFarmerData', true);

        var status = getvalue('updateFarmerData');
        if (status == 1) {
            alert("Updated Successfully!");
        } else {
            alert(status);
        }
    }
    return false;
}

function updateFarmerPassword(farmerId) {
    var result =
        validateEmpty('oldpass', 'Old Password') &&
        validatePassword();

    if (result) {
        var oldpass = getvalue('oldpass');
        var password = getvalue('pwd');

        var dataForm =
            'farmerid=' + farmerId +
            '&oldpass=' + oldpass +
            '&password=' + password +
            '&process=updateFarmerPassword';

        ajaxCall('../Backend/Register.php', 'post', dataForm, 'updateFarmerPassword', true);

        var status = getvalue('updateFarmerPassword');
        if (status == 1) {
            alert("Updated Successfully!");
            resetFormdata("updateFarmerPassword");
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

function submitRequest(id) {

    var result = validateEmpty("requestdate", "Request Date")
        && validateDropdown("labid", "Lab Name");
    if (result) {
        var requestdate = getvalue("requestdate");
        var labId = getvalue("labid");

        var dataForm =
            'id=' + id +
            '&requestdate=' + requestdate +
            '&labid=' + labId +
            '&process=soilrequest';

        ajaxCall('../Backend/FarmerProcess.php', 'post', dataForm, 'status', true);

        var status = getvalue('status');
        if (status == 1) {
            alert("Requested Successfully!");
            resetFormdata('soilForm');
        } else {
            alert(status);
        }
        return false;
    }
}

function verifyUser(labId) {
    var result = validateDropdown("farmername", "Farmer name") &&
        validateDropdown("email", "Farmer Email") &&
        validateDropdown("requestid", "Request Id") &&
        validateEmpty("collectiondate", "Collection Date");

    if (result) {
        alert(labId);
        var farmerid = getvalue("farmername");
        var farmername = getSelectedOption("farmername");
        var email = getvalue("email");
        var requestid = getvalue("requestid");

        var dataForm =
            'farmerid=' + farmerid +
            '&farmername=' + farmername +
            '&email=' + email +
            '&requestid=' + requestid +
            '&labId=' + labId +
            '&process=verifyUser';

        alert(dataForm);
        ajaxCall('../Backend/labProcess.php', 'post', dataForm, 'verifyUser', true, false);

        var status = getvalue('verifyUser');
        if (isNaN(status)) {
            alert(status);
        } else {
            alert("OTP Sent Successfully!");
        }
        return false;
    }
}

function submitSampleForm(labId) {
    var result = validateEmpty("verifyotp", "OTP");
    if (result) {

        var verifyUser = getvalue("verifyUser");
        var verifyotp = getvalue("verifyotp");

        if (verifyUser == verifyotp) {
            var farmerid = getvalue("farmername");
            var farmername = getSelectedOption("farmername");
            var email = getvalue("email");
            var requestid = getvalue("requestid");
            var collectiondate = getvalue("collectiondate");

            var dataForm =
                'farmerid=' + farmerid +
                '&farmername=' + farmername +
                '&email=' + email +
                '&requestid=' + requestid +
                '&collectiondate=' + collectiondate +
                '&labId=' + labId +
                '&process=submitSampleForm';

            ajaxCall('../Backend/labProcess.php', 'post', dataForm, 'submitSampleForm', true, false);

            var status = getvalue('submitSampleForm');
            alert(status);
        } else {
            alert("invalid");
        }
    }
    return false;
}

function getSelectedOption(elementId) {
    var selectElement = document.getElementById(elementId);
    var selectedOption = selectElement.options[selectElement.selectedIndex];
    var selectedOptionInnerHTML = selectedOption.innerHTML;
    return selectedOptionInnerHTML;
}

function validateDropdown(elementId, elementName) {
    var element = document.getElementById(elementId);
    if (element.value == "default") {
        alert(elementName + " should be selected!");
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
            alert(elementName + ' should be of 7 to 14 character!')
            document.getElementById(elementId).focus();
            return false;
        }
    }
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
            alert('Password not Matched!');
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
        img.src = "../img/eye.png";
        input.type = "text";
    } else {
        img.src = "../img/seen.png";
        input.type = "password";
    }
}

function showsidebar() {
    var sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("hidden");
}

function ajaxCall(url, method, data, destination, isHtml, isFile) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        if (isHtml) {
            document.getElementById(destination).value = this.responseText;
        } else {
            document.getElementById(destination).innerHTML = this.responseText;
        }
    }
    xhttp.open(method, url, false);
    if (!isFile) {
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    }
    xhttp.send(data);
}

var config = {
    cUrl: 'https://api.countrystatecity.in/v1/countries',
    ckey: 'SDEwOWNWc1JKWXVYa0hVaWtvYThZQzZhUTFjTkJOQ3VHcVhBYVNkaQ=='
}

function loadStates() {
    var stateSelect = document.querySelector('.state');
    var citySelect = document.querySelector('.city');

    // stateSelect.disabled = false;
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

function loadCities() {
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

// window.onload = loadStates;
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
        html.classList.remove("dark");
    } else {
        html.classList.add("dark");
    }
}

function adminMenuLoader(process) {
    ajaxCall('../Backend/AdminProcess.php', 'post', "process=" + process, 'adminProcess', false);
}

function farmerMenuLoader(process, id) {
    ajaxCall('../Backend/FarmerProcess.php', 'post', "id=" + id + "&process=" + process, 'section', false);
}

function labMenuLoader(process, id) {
    ajaxCall('../Backend/LabProcess.php', 'post', "labId=" + id + "&process=" + process, 'section', false);
}

function uploadProfilePic(process) {
    var result = validateEmpty("admin_img", "Profile Picture");
    if (result) {
        var file = document.getElementById("admin_img");
        var imageFile = file.files[0];

        var formData = new FormData();
        formData.append("profilePicture", imageFile);
        formData.append("process", process);

        ajaxCall('../Backend/AdminProcess.php', 'post', formData, 'changeProfile', true, true);
        var status = getvalue("changeProfile");
        alert(status);
    } else {
        document.getElementById("inputDiv").classList.add("bg-red-700");
        document.getElementById("inputDiv").classList.remove("bg-green-500");

    }
    adminMenuLoader('profile');
}

function farmerProfilePic(process, id) {
    var result = validateEmpty("farmer_img", "Profile Picture");
    if (result) {
        var file = document.getElementById("farmer_img");
        var imageFile = file.files[0];

        var formData = new FormData();
        formData.append("profilePicture", imageFile);
        formData.append("process", process);
        formData.append("id", id);

        ajaxCall('../Backend/FarmerProcess.php', 'post', formData, 'farmerProfile', true, true);
        var status = getvalue("farmerProfile");
        alert(status);
        farmerMenuLoader('profile', id);
    }
    return false;
}

function labProfilePic(process, id) {
    var result = validateEmpty("laboratory_img", "Profile Picture");
    if (result) {
        var file = document.getElementById("laboratory_img");
        var imageFile = file.files[0];

        var formData = new FormData();
        formData.append("profilePicture", imageFile);
        formData.append("process", process);
        formData.append("id", id);

        ajaxCall('../Backend/labProcess.php', 'post', formData, 'labProfile', true, true);
        var status = getvalue("labProfile");
        alert(status);
        labMenuLoader('profile', id);
    }
    return false;
}

function loadChart() {
    var dataPoints = [
        { label: "WordPress", y: 60.0 },
        { label: "Joomla", y: 6.5 },
        { label: "Drupal", y: 4.6 },
        { label: "Magento", y: 2.4 },
        { label: "Blogger", y: 1.9 },
        { label: "Shopify", y: 1.8 },
        { label: "Bitrix", y: 1.5 },
        { label: "Squarespace", y: 1.5 },
        { label: "PrestaShop", y: 1.3 },
        { label: "Wix", y: 0.9 },
        { label: "OpenCart", y: 0.8 }
    ];

    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        theme: "light2",
        title: {
            text: "CMS Market Share - 2017"
        },
        axisY: {
            suffix: "%",
            scaleBreaks: {
                autoCalculate: true
            }
        },
        data: [{
            type: "column",
            yValueFormatString: "#,##0\"%\"",
            indexLabel: "{y}",
            indexLabelPlacement: "inside",
            indexLabelFontColor: "white",
            dataPoints: dataPoints
        }]
    });
    chart.render();
}

function logoutUser(user) {
    var result = confirm("Are you sure to logout!");
    if (result) {
        ajaxCall("../Backend/logout.php", "post", "user=" + user, "logoutResult");
        window.location.href = "../dist/";
        alert("Logged out!");
    } else {
        return false;
    }
}

function loadUpdateForm(process, id) {
    ajaxCall("../Backend/FarmerProcess.php", "post", "id=" + id + "&process=" + process, "loadUpdateForm");
}

function acceptRequest(farmerId, labId) {
    alert(farmerId)
    alert(labId)
    ajaxCall("../Backend/LabProcess.php", "post", "farmerId=" + farmerId + "&labId=" + labId + "&process=changeStatus", "requestStatus", true);
    alert(document.getElementById("requestStatus").value);
}

function toggleModeAdmin() {
    var html = document.getElementById("html");
    var mode = html.classList.contains("dark");
    if (mode) {
        html.classList.remove("dark");
    } else {
        html.classList.add("dark");
    }
}