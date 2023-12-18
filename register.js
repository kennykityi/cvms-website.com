function validateForm(){
    var name = document.getElementById("name");
    var male = document.getElementById("male");
    var female = document.getElementById("female");
    var other = document.getElementById("other");
    var phone = document.getElementById("hp");
    var ic = document.getElementById("ic");
    var email = document.getElementById("email");
    var start = document.getElementById("sdate");
    var end = document.getElementById("ndate");
    var purpose = document.getElementById("purpose");
    var department = document.getElementById("depart");

    if(name.value === ''){
        showAlert('Please fill in visitor\'s name','#ff5c5c');
        return false;
    }else if(!male.checked && !female.checked && !other.checked){
        showAlert('Please select visitor\'s gender','#ff5c5c');
        return false;
    }else if(phone.value === ''){
        showAlert('Please fill in visitor\'s phone number','#ff5c5c');
        return false;
    }else if(ic.value === ''){
        showAlert('Please fill in visitor\'s IC number','#ff5c5c');
        return false;
    }else if(email.value === ''){
        showAlert('Please fill in visitor\'s email','#ff5c5c');
        return false;
    }else if(start.value === ''){
        showAlert('Please select date of visit','#ff5c5c');
        return false;
    }else if(end.value === ''){
        showAlert('Please select the end date','#ff5c5c');
        return false;
    }else if(purpose.value === ''){
        showAlert('Please fill in visitor\'s purpose','#ff5c5c');
        return false;
    }else if(department.value === ''){
        showAlert('Please fill in the contact department','#ff5c5c');
        return false;
    }else if(!validateName()){
        return false;
    }else if(!validatePNumber()){
        return false;
    }else if(!validateIC()){
        return false;
    }else if(!validateEmail()){
        return false;
    }else{
        alert('Register Successful');
        return true;
    }
}

function uncheck(currentCheckbox){
    var boxes = document.getElementsByName('option');

    boxes.forEach(
        function(checkbox)
        {
            if(checkbox !== currentCheckbox){
                checkbox.checked = false;
            }
        }
    );
}

function showAlert(content,color) {
    var alert = document.getElementById('alert');
    alert.style.display = 'block';
    alert.style.backgroundColor = color;
    alert.textContent = content;

    setTimeout(function() {
        alert.style.display = 'none';
    }, 2000);
}

function validateName() {
    let regex = /^[a-zA-Z]+$/;
    const name = document.forms["visitorReg"]["name"].value;
    if (regex.test(name) === true) {
        if (name.toUpperCase() === name) {
            console.log('Correct Form');
            return true;
        }
        else {
            showAlert('Name must be all capital letter','#ff5c5c');
            return false;
        }
    }
    else {
        showAlert('Name must be all Alphabet','#ff5c5c');
        return false;
    }
}

function validateIC() {
    let regex = /^\d{6}-\d{2}-\d{4}$/;
    const id = document.forms["visitorReg"]["ic"].value;
    if (regex.test(id) === false) {
        showAlert('IC wrong format','#ff5c5c');
        return false;
    }
    else {
        return true;
    }
}

function validatePNumber() {
    let regex = /^01\d{1}-\d{7,8}$/;
    const pNumber = document.forms["visitorReg"]["hp"].value;
    if (regex.test(pNumber) === false) {
       showAlert('Phone number wrong format','#ff5c5c');
        return false;
    }
    else {
        return true;
    }
}

function validateEmail() {
    let validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    const email = document.forms["visitorReg"]["email"].value;
    if (regex.test(email) === false) {
        showAlert('Email wrong format','#ff5c5c');
        return false;
    }
    else{
        return true;
    }
}

function validateDate() {
    let date = document.getElementById('sdate').value;
    let selectedDate = new Date(date);
    let day = selectedDate.getDate();
    let month = selectedDate.getMonth() + 1;
    let year = selectedDate.getFullYear();

    let currentDate = new Date();
    let currentday = currentDate.getDate();
    let currentmonth = currentDate.getMonth() + 1;
    let currentyear = currentDate.getFullYear();

    let date2 = document.getElementById('ndate').value;
    let selectedDate2 = new Date(date2);
    let day2 = selectedDate2.getDate();
    let month2 = selectedDate2.getMonth() + 1;
    let year2 = selectedDate2.getFullYear();


    if (year < currentyear) {
        showAlert("Invalid Year, the year right now should be " + currentyear + " or greater",'#ff5c5c');
        return false;
    } else if (year === currentyear) {
        if (month < month2) {
            showAlert("Invalid month, the month right now should be " + currentmonth + " or greater",'#ff5c5c');
            return false;
        }
        else if (month === currentmonth) {
            if (day < currentday) {
                showAlert("Invalid day, the day right now should be " + currentday + " or greater",'#ff5c5c');
                return false;
            }
            else {
                return true;               
            }
        }
        else {
            return true;
        }
    }
    else {
        return true;
    }


    if(year2 < year){
        showAlert("Invalid Year, the year right now should be " + year + " or greater",'#ff5c5c');
        return false;
    }else if(year2 === year){
        if(month2 < month){
            showAlert("Invalid month, the month right now should be " + month + " or greater",'#ff5c5c');
            return false;
        }else if(month2 === month){
            if (day2 < day) {
                showAlert("Invalid day, the day right now should be " + currentday + " or greater",'#ff5c5c');
                return false;
            }
            else {
                return true;               
            }
        }
        else{
            return true;
        }
    }
    else{
        return true;
    }
}

function addLeadingZero(number) {
    return number < 10 ? '0' + number : number;
}