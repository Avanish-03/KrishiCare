function registerFarmer() {
    var result =
        validateEmpty('firstname', 'First name', 'spanfirstname') &&
        validateEmpty('middlename', 'Middle name', 'spanmiddlename') &&
        validateEmpty('lastname', 'last name', 'spanlastname') &&
        ValidateEmail('email', 'Email', 'spanemail') &&
        validateContact('contact', 'Contact number', 'spancontact') &&
        validateEmpty('address', 'Address', 'spanaddress') &&
        validateDropdown('state', 'State', 'spanstate') &&
        validateDropdown('city', 'City', 'spancity') &&
        validatePassword('pwd', 'cpwd', 'spancpass');

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
        validateEmpty('fullname', 'Laboratory name', 'spanfullname') &&
        ValidateEmail('email', 'Email', 'spanemail') &&
        validateContact('contact', 'Contact number', 'spancontact') &&
        validateEmpty('address', 'Address', 'spanaddress') &&
        validateDropdown('state', 'State', 'spanstate') &&
        validateDropdown('city', 'City', 'spancity') &&
        validateDropdown('ownership', 'Ownership', 'spanownership') &&
        validatePassword('pwd', 'cpwd', 'spancpass');

    if (result) {

        var fullname = getvalue('fullname');
        var email = getvalue('email');
        var contact = getvalue('contact');
        var address = getvalue('address');
        var state = getSelectedOption('state');
        var city = getSelectedOption('city');
        var ownership = getvalue('ownership');
        var password = getvalue('pwd');

        var dataForm =
            'fullname=' + fullname +
            '&email=' + email +
            '&contact=' + contact +
            '&address=' + address +
            '&state=' + state +
            '&city=' + city +
            '&ownership=' + ownership +
            '&password=' + password +
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
        validateEmpty('email', 'Email', 'spanemail') &&
        validateEmpty('message', 'Message', 'spanmsg');

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
        validateEmpty('firstname', 'First name', 'spanfirstname') &&
        validateEmpty('middlename', 'Middle name', 'spanmiddlename') &&
        validateEmpty('lastname', 'last name', 'spanlastname') &&
        ValidateEmail('email', 'Email', 'spanemail') &&
        validateContact('contact', 'Contact number', 'spancontact') &&
        validateEmpty('address', 'Address', 'spanaddress') &&
        validateEmpty('city', 'City', 'spancity') &&
        validateEmpty('state', 'State', 'spanstate');

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
        validateEmpty('oldpass', 'Old Password', 'spanoldpass') &&
        validatePassword('pwd', 'cpwd', 'spancpass');

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

function updateLabPassword(labId) {
    var result =
        validateEmpty('oldpass', 'Old Password', 'spanoldpass') &&
        validatePassword('pwd', 'cpwd', 'spancpass');

    if (result) {
        var oldpass = getvalue('oldpass');
        var password = getvalue('pwd');

        var dataForm =
            'labid=' + labId +
            '&oldpass=' + oldpass +
            '&password=' + password +
            '&process=updateLabPassword';

        ajaxCall('../Backend/Register.php', 'post', dataForm, 'updateLabPassword', true);

        var status = getvalue('updateLabPassword');
        if (status == 1) {
            alert("Updated Successfully!");
            resetFormdata("updateLabPasswordform");
        } else {
            alert(status);
        }
    }
    return false;
}

function updateAdminPassword(email) {
    var result =
        validateEmpty('oldpass', 'Old Password', 'spanoldpass') &&
        validatePassword('pwd', 'cpwd', 'spancpass');

    if (result) {
        var oldpass = getvalue('oldpass');
        var password = getvalue('pwd');

        var dataForm =
            'email=' + email +
            '&oldpass=' + oldpass +
            '&password=' + password +
            '&process=updateAdminPassword';

        ajaxCall('../Backend/Register.php', 'post', dataForm, 'updateAdminPassword', true);

        var status = getvalue('updateAdminPassword');
        if (status == 1) {
            alert("Updated Successfully!");
            resetFormdata("updateAdminPasswordform");
        } else {
            alert(status);
        }
    }
    return false;
}

function validateUser(user) {
    var result =
        ValidateEmail('email', 'Email', 'spanemail') &&
        validateEmpty('pwd', 'pwd', 'spanpass');

    if (result) {
        var email = getvalue('email');
        var pwd = getvalue('pwd');

        if (user == "farmer") {
            var dataForm = 'email=' + email + '&password=' + pwd + '&user=' + user + '&process=userLogin';
            url = "../farmer/FarmerDashboard.php";

        } else if (user == "laboratory") {
            var dataForm = 'email=' + email + '&password=' + pwd + '&user=' + user + '&process=userLogin';
            url = "../laboratory/LaboratoryDashboard.php";

        } else if (user == "admin") {
            var res = validateEmpty("verifyotp", "OTP", 'spanotp');
            if (res) {
                var varifyAdmin = getvalue("varifyAdmin");
                var verifyotp = getvalue("verifyotp");
                if (varifyAdmin == verifyotp) {
                    var dataForm = 'email=' + email + '&password=' + pwd + '&user=' + user + '&process=adminLogin';
                    url = "../admin/Admindashboard.php";
                    resetFormdata('varifyAdminForm');
                }
            }
        } else {
            alert("Invalid Request");
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

function ResetPassword(user) {
    var result = ValidateEmail('email', 'Email', 'spanemail')
        && CheckPassword('pwd', 'Password', 'spanpass')
        && CheckPassword('cpwd', 'New Password', 'spancpass');
    if (result) {
        alert(result)
        var email = getvalue('email');
        var pwd = getvalue('pwd');
        var newpwd = getvalue('cpwd');

        if (user == "farmer") {
            var dataForm = 'email=' + email + '&oldpass=' + pwd + '&newpass=' + newpwd + '&user=' + user + '&process=farmerPassword';
        } else if (user == "laboratory") {
            var dataForm = 'email=' + email + '&oldpass=' + pwd + '&newpass=' + newpwd + '&user=' + user + '&process=labPassword';
        } else if (user == "admin") {
            var dataForm = 'email=' + email + '&oldpass=' + pwd + '&newpass=' + newpwd + '&user=' + user + '&process=adminPassword';
        } else {
            alert("Invalid Request");
        }

        ajaxCall('../Backend/Register.php', 'post', dataForm, 'status', true);
        var status = getvalue('status');
        if (status == 1) {
            alert("Password Changed Successfully!");
            resetFormdata('ResetPassword');
        } else {
            alert("Invalid Username or Password");
        }
    }
    return false;
}

function varifyAdmin() {
    var result = ValidateEmail('email', 'Email', 'spanemail') &&
        validateEmpty('pwd', 'Password', 'spanpass');
    if (result) {
        var email = getvalue('email');
        var pwd = getvalue('pwd');

        let dataForm = 'email=' + email + '&password=' + pwd + '&user=admin' + '&process=varifyAdmin';
        ajaxCall('../Backend/Login.php', 'post', dataForm, 'varifyAdmin', true, false);

        var status = getvalue('varifyAdmin');
        if (isNaN(status)) {
            alert(status);
        } else {
            alert("OTP Sent Successfully!");
        }
    }
    return false;
}

function submitRequest(farmerid, labid) {

    let date = new Date();
    let day = date.getDate();
    let month = date.getMonth() + 1;
    let year = date.getFullYear();

    var requestdate = `${year}-${month}-${day}`;

    var dataForm =
        'id=' + farmerid +
        '&requestdate=' + requestdate +
        '&labid=' + labid +
        '&process=soilrequest';

    ajaxCall('../Backend/FarmerProcess.php', 'post', dataForm, 'status', true);

    var status = getvalue('status');
    if (status == 1) {
        alert("Requested Successfully!");
    } else {
        alert(status);
    }
    return false;
}

function verifyUser(labId) {
    var result = validateDropdown("requestid", "Request Id", 'spanrequestid') &&
        validateDropdown("farmername", "Farmer name", 'spanfarmername') &&
        validateDropdown("email", "Farmer Email", 'spanemail') &&
        validateEmpty("collectiondate", "Collection Date", 'spandate');

    if (result) {
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
    var result = validateEmpty("verifyotp", "OTP", 'spanotp');
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
            resetFormdata("verifyForm");
            resetFormdata("submitForm");
            alert(status);
        } else {
            alert("invalid");
        }
    }
    return false;
}

function uploadReport(labId) {
    var result = validateDropdown("farmername", "Farmer name", 'spanfarmername') &&
        validateDropdown("email", "Farmer Email", 'spanemail') &&
        validateDropdown("sampleid", "Request Id", 'spansampleid');

    if (result) {
        var farmerid = getvalue("farmername");
        var farmername = getSelectedOption("farmername");
        var email = getvalue("email");
        var sampleid = getvalue("sampleid");

        var dataForm =
            'farmerid=' + farmerid +
            '&farmername=' + farmername +
            '&email=' + email +
            '&sampleid=' + sampleid +
            '&labId=' + labId +
            '&process=uploadReport';

        ajaxCall('../Backend/labProcess.php', 'post', dataForm, 'uploadReport', true, false);

        var status = getvalue('uploadReport');
        resetFormdata("uploadReportForm");
        alert(status);
    }
    return false;
}

function ApproveLab(labid, email) {
    ajaxCall("../Backend/Register.php", "post", "labid=" + labid + "&email=" + email + "&process=approveLab", "approveLab", true);
    let status = getvalue("approveLab");
    if (status == 1) {
        alert("Lab Approved Successfully!")
        adminMenuLoader('dashboard');
    } else {
        alert("Invalid request!")

    }
}

function getSelectedOption(elementId) {
    var selectElement = document.getElementById(elementId);
    var selectedOption = selectElement.options[selectElement.selectedIndex];
    var selectedOptionInnerHTML = selectedOption.innerHTML;
    return selectedOptionInnerHTML;
}

function validateDropdown(elementId, elementName, spanid) {
    var element = document.getElementById(elementId);
    if (element.value == "default") {
        // alert(elementName + " should be selected!");
        document.getElementById(elementId).focus();
        document.getElementById(spanid).textContent = elementName + " should be selected!";
        return false;
    } else {
        document.getElementById(spanid).textContent = "";
        return true;
    }
    // return true;
}

function getvalue(elementId) {
    var element = document.getElementById(elementId).value;
    return element;
}

function resetFormdata(formId) {
    var form = document.getElementById(formId);
    form.reset();
}

function validateEmpty(elementId, elementName, spanid) {
    var element = document.getElementById(elementId);
    if (element.value == '' || element == null) {
        // alert(elementName + " can't be empty!");
        document.getElementById(elementId).focus();
        document.getElementById(spanid).textContent = elementName + " can't be empty!";
        return false;
    } else {
        document.getElementById(spanid).textContent = "";
        return true;
    }
    // return true;
}

function ValidateEmail(elementId, elementName, spanid) {
    var res = validateEmpty(elementId, elementName, spanid);
    if (res) {
        var input = document.getElementById(elementId);
        var validRegexEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if (input.value.match(validRegexEmail)) {
            return true;
        } else {
            // alert("Invalid email address!");
            document.getElementById(elementId).focus();
            document.getElementById(spanid).textContent = "Invalid email address!";
            return false;
        }
    }
    return false;
}

function validateContact(elementId, elementName, spanid) {
    var res = validateEmpty(elementId, elementName, spanid);
    if (res) {
        var validRegexPhoneno = /^\d{10}$/;
        var input = document.getElementById(elementId);
        if ((input.value.match(validRegexPhoneno))) {
            return true;
        }
        else {
            // alert("Invalid contact number!");
            document.getElementById(elementId).focus();
            document.getElementById(spanid).textContent = "Invalid Contact Number!";
            return false;
        }
    }
    return false;
}

function CheckPassword(elementId, elementName, spanid) {
    var res = validateEmpty(elementId, elementName, spanid);
    if (res) {
        var passw = /^\w{7,14}$/;
        var input = document.getElementById(elementId);
        if (input.value.match(passw)) {
            return true;
        }
        else {
            // alert(elementName + ' should be of 7 to 14 character!')
            document.getElementById(elementId).focus();
            document.getElementById(spanid).textContent = elementName + ' should be of 7 to 14 character!';
            return false;
        }
    }
}

function validatePassword(firstElement, secondElement) {
    var res =
        CheckPassword(firstElement, 'Password', 'spanpass') &&
        CheckPassword(secondElement, 'Confirm Password', 'spancpass');

    if (res) {
        var pass = document.getElementById(firstElement).value;
        var cpass = document.getElementById(secondElement).value;
        if (pass == cpass) {
            return true;
        } else {
            alert('Password not Matched!');
            document.getElementById(secondElement).focus();
            // document.getElementById(spanid).textContent = "Password not Matched!";
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

    stateSelect.disabled = false;
    citySelect.disabled = false;

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
            headings[i].classList.add("hidden");
        } else {
            headings[i].classList.remove("hidden");
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
    var result = validateEmpty('admin_img', 'Profile Picture', 'spanadmin_img');
    if (result) {
        var file = document.getElementById('admin_img');
        var imageFile = file.files[0];

        var formData = new FormData();
        formData.append("profilePicture", imageFile);
        formData.append("process", process);

        ajaxCall('../Backend/AdminProcess.php', 'post', formData, 'changeProfile', true, true);
        var status = getvalue("changeProfile");
        alert(status);
    }
    adminMenuLoader('profile');
}

function farmerProfilePic(process, id) {
    var result = validateEmpty('farmer_img', 'Profile Picture', 'spanfarmer_img');
    if (result) {
        var file = document.getElementById('farmer_img');
        var imageFile = file.files[0];

        var formData = new FormData();
        formData.append("profilePicture", imageFile);
        formData.append("process", process);
        formData.append("id", id);

        ajaxCall('../Backend/FarmerProcess.php', 'post', formData, 'farmerProfile', true, true);
        farmerMenuLoader('profile', id);
    }
    return false;
}

function labProfilePic(process, labid) {
    var result = validateEmpty("laboratory_img", "Profile Picture", 'spanlaboratory_img');
    if (result) {
        var file = document.getElementById("laboratory_img");
        var imageFile = file.files[0];

        var formData = new FormData();
        formData.append("profilePicture", imageFile);
        formData.append("process", process);
        formData.append("labId", labid);

        ajaxCall('../Backend/labProcess.php', 'post', formData, 'labProfile', true, true);
        labMenuLoader('profile', labid);
    }
    return false;
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

function initializeCarousel() {
    let carouselItems = document.querySelector(".carousel-items");
    let currentIndex = 0;
    let indicators = document.querySelectorAll('.indicator');
    let prevButton = document.querySelector('.prev');
    let nextButton = document.querySelector('.next');

    // Function to update indicators
    function updateIndicators() {
        indicators.forEach(indicator => indicator.classList.remove('bg-white'));
        indicators.forEach(indicator => indicator.classList.add('bg-opacity-70'));
        indicators[currentIndex].classList.add('bg-white');
        indicators[currentIndex].classList.remove('bg-opacity-70');
    }

    // Function to move to the previous slide
    function moveToPrev() {
        currentIndex = (currentIndex - 1 + carouselItems.children.length) % carouselItems.children.length;
        carouselItems.style.transform = `translateX(-${currentIndex * 100}%)`;
        updateIndicators();
    }

    // Function to move to the next slide
    function moveToNext() {
        currentIndex = (currentIndex + 1) % carouselItems.children.length;
        carouselItems.style.transform = `translateX(-${currentIndex * 100}%)`;
        updateIndicators();
    }

    // Automatic sliding
    let slideInterval = setInterval(moveToNext, 2000); // Adjust the interval as needed

    // Event listener for prev button
    prevButton.addEventListener('click', () => {
        clearInterval(slideInterval); // Stop automatic sliding when manually navigating
        moveToPrev();
    });

    // Event listener for next button
    nextButton.addEventListener('click', () => {
        clearInterval(slideInterval); // Stop automatic sliding when manually navigating
        moveToNext();
    });
}