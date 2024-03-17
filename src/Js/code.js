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
        validateDropdown('ownership', 'Ownership') &&
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
            resetFormdata('labForm');
        } else {
            alert(status);
        }
        return false;
    }
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

// window.onload = loadStates;
// stateSelect.addEventListener('change', loadCities);

function toggleSidebar() {
    var sidebar = document.getElementById("sidebar");
    var arrow = document.getElementById("arrow");

    var opensidebar = sidebar.classList.contains("w-72");
    if (opensidebar) {
        console.log(opensidebar);
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
        img.src = "../img/light-bulb.png";
    } else {
        html.classList.add("dark");
        img.src = "../img/dark-bulb.png";
    }
}

function adminMenuLoader(process) {
    ajaxCall('../Backend/AdminProcess.php', 'post', "process=" + process, 'adminProcess', false);

}

function farmerMenuLoader(process, id) {
    ajaxCall('../Backend/FarmerProcess.php', 'post', "id=" + id + "&process=" + process, 'section', false);
}

function labMenuLoader(process, id) {
    ajaxCall('../Backend/LabProcess.php', 'post', "id=" + id + "&process=" + process, 'section', false);
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

function chatBot() {
    return {
        prompts: [
            ["hi", "hey", "hello", "good morning", "good afternoon"],
            ["how are you", "how is life", "how are things"],
            ["what are you doing", "what is going on", "what is up"],
            ["how old are you"],
            ["who are you", "are you human", "are you bot", "are you human or bot"],
            ["who created you", "who made you"],
            ["your name please", "your name", "may i know your name", "what is your name", "what call yourself"],
            ["i love you"],
            ["happy", "good", "fun", "wonderful", "fantastic", "cool"],
            ["bad", "bored", "tired"],
            ["help me", "tell me story", "tell me joke"],
            ["ah", "yes", "ok", "okay", "nice"],
            ["bye", "good bye", "goodbye", "see you later"],
            ["what should i eat today"],
            ["bro"],
            ["what", "why", "how", "where", "when"],
            ["no", "not sure", "maybe", "no thanks"],
            [""],
            ["haha", "ha", "lol", "hehe", "funny", "joke"],
            ["flip a coin", "heads or tails", "tails or heads", "head or tails", "head or tail", "tail or heads", "tail or head"],
            ["beer", "buy me a beer", "want a beer"]
        ],
        replies: [
            ["Hello!", "Hi!", "Hey!", "Hi there!", "Howdy"],
            ["Fine... how are you?", "Pretty well, how are you?", "Fantastic, how are you?"],
            ["Nothing much", "About to go to sleep", "Can you guess?", "I don't know actually"],
            ["I am infinite"],
            ["I am just a bot", "I am a bot. What are you?"],
            ["The one true God, JavaScript"],
            ["I am nameless", "I don't have a name"],
            ["I love you too", "Me too"],
            ["Have you ever felt bad?", "Glad to hear it"],
            ["Why?", "Why? You shouldn't!", "Try watching TV"],
            ["What about?", "Once upon a time..."],
            ["Tell me a story", "Tell me a joke", "Tell me about yourself"],
            ["Bye", "Goodbye", "See you later"],
            ["Sushi", "Pizza"],
            ["Bro!"],
            ["Great question"],
            ["That's ok", "I understand", "What do you want to talk about?"],
            ["Please say something :("],
            ["Haha!", "Good one!"],
            ["Heads", "Tails"],
            ["You can buy me a beer at: <a href=\"https://www.buymeacoffee.com/scottwindon\" target=\"_blank\" style=\"text-decoration:underline;\">https://www.buymeacoffee.com/scottwindon</a>"]
        ],
        alternative: ["Same", "Go on...", "Bro...", "Try again", "I'm listening...", "I don't understand :/"],
        coronavirus: ["Please stay home", "Wear a mask", "Fortunately, I don't have COVID", "These are uncertain times"],
        botTyping: false,
        messages: [{
            from: 'bot',
            text: 'Hello world!'
        }],
        output: function (input) {
            let product;

            // Regex remove non word/space chars
            // Trim trailing whitespce
            // Remove digits - not sure if this is best
            // But solves problem of entering something like 'hi1'

            let text = input.toLowerCase().replace(/[^\w\s]/gi, "").replace(/[\d]/gi, "").trim();
            text = text
                .replace(/ a /g, " ") // 'tell me a story' -> 'tell me story'
                .replace(/i feel /g, "")
                .replace(/whats/g, "what is")
                .replace(/please /g, "")
                .replace(/ please/g, "")
                .replace(/r u/g, "are you");

            if (this.compare(this.prompts, this.replies, text)) {
                // Search for exact match in `prompts`
                product = this.compare(this.prompts, this.replies, text);
            } else if (text.match(/thank/gi)) {
                product = "You're welcome!"
            } else if (text.match(/(corona|covid|virus)/gi)) {
                // If no match, check if message contains `coronavirus`
                product = this.coronavirus[Math.floor(Math.random() * this.coronavirus.length)];
            } else {
                // If all else fails: random this.alternative
                product = this.alternative[Math.floor(Math.random() * this.alternative.length)];
            }

            // Update DOM
            this.addChat(input, product);
        },
        compare: function (promptsArray, repliesArray, string) {
            let reply;
            let replyFound = false;
            for (let x = 0; x < promptsArray.length; x++) {
                for (let y = 0; y < promptsArray[x].length; y++) {
                    if (promptsArray[x][y] === string) {
                        let replies = repliesArray[x];
                        reply = replies[Math.floor(Math.random() * replies.length)];
                        replyFound = true;
                        // Stop inner loop when input value matches this.prompts
                        break;
                    }
                }
                if (replyFound) {
                    // Stop outer loop when reply is found instead of interating through the entire array
                    break;
                }
            }
            if (!reply) {
                for (let x = 0; x < promptsArray.length; x++) {
                    for (let y = 0; y < promptsArray[x].length; y++) {
                        if (this.levenshtein(promptsArray[x][y], string) >= 0.75) {
                            let replies = repliesArray[x];
                            reply = replies[Math.floor(Math.random() * replies.length)];
                            replyFound = true;
                            // Stop inner loop when input value matches this.prompts
                            break;
                        }
                    }
                    if (replyFound) {
                        // Stop outer loop when reply is found instead of interating through the entire array
                        break;
                    }
                }
            }
            return reply;
        },
        levenshtein: function (s1, s2) {
            var longer = s1;
            var shorter = s2;
            if (s1.length < s2.length) {
                longer = s2;
                shorter = s1;
            }
            var longerLength = longer.length;
            if (longerLength == 0) {
                return 1.0;
            }
            return (longerLength - this.editDistance(longer, shorter)) / parseFloat(longerLength);
        },
        editDistance: function (s1, s2) {
            s1 = s1.toLowerCase();
            s2 = s2.toLowerCase();

            var costs = new Array();
            for (var i = 0; i <= s1.length; i++) {
                var lastValue = i;
                for (var j = 0; j <= s2.length; j++) {
                    if (i == 0)
                        costs[j] = j;
                    else {
                        if (j > 0) {
                            var newValue = costs[j - 1];
                            if (s1.charAt(i - 1) != s2.charAt(j - 1))
                                newValue = Math.min(Math.min(newValue, lastValue),
                                    costs[j]) + 1;
                            costs[j - 1] = lastValue;
                            lastValue = newValue;
                        }
                    }
                }
                if (i > 0)
                    costs[s2.length] = lastValue;
            }
            return costs[s2.length];
        },
        addChat: function (input, product) {

            // Add user message
            this.messages.push({
                from: 'user',
                text: input
            });

            // Keep messages at most recent
            this.scrollChat();

            // Fake delay to seem "real"
            setTimeout(() => {
                this.botTyping = true;
                this.scrollChat();
            }, 1000)

            // add bit message with Fake delay to seem "real"
            setTimeout(() => {
                this.botTyping = false;
                this.messages.push({
                    from: 'bot',
                    text: product
                });
                this.scrollChat();
            }, ((product.length / 10) * 1000) + (Math.floor(Math.random() * 2000) + 1500))

        },
        scrollChat: function () {
            const messagesContainer = document.getElementById("messages");
            messagesContainer.scrollTop = messagesContainer.scrollHeight - messagesContainer.clientHeight;
            setTimeout(() => {
                messagesContainer.scrollTop = messagesContainer.scrollHeight - messagesContainer.clientHeight;
            }, 100);
        },
        updateChat: function (target) {
            if (target.value.trim()) {
                this.output(target.value.trim());
                target.value = '';
            }
        }
    }
}

function loadUpdateForm(process, id) {
    ajaxCall("../Backend/FarmerProcess.php", "post", "id=" + id + "&process=" + process, "loadUpdateForm");
}

function acceptRequest(farmerId) {
    ajaxCall("../Backend/LabProcess.php", "post", "farmerId=" + farmerId + "&process=changeStatus", "requestStatus", true);
    alert(document.getElementById("requestStatus").value);
}