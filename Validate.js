function validateForm() {
    if (!validateName() || !validateIC() || !validatePNumber() || !validateEmail() || !validateDate()) {
        return false; // Prevent form submission if any validation fails
    }

    return true;
}

function validateName() {
    let regex = /^[a-zA-Z]+$/;
    const name = document.forms["visitorReg"]["name"].value;
    if (regex.test(name) === true) {
        if (name.toUpperCase() === name) {
            console.log('Correct Form');

        }
        else {
            alert("Name must be all capital letter");
            return false;
        }
    }
    else {
        alert("Name must be all Alphabet");
        return false;
    }

    return true;
}

function validateIC() {
    let regex = /^\d{6}-\d{2}-\d{4}$/;
    const id = document.forms["visitorReg"]["id"].value;
    if (regex.test(id) === false) {
        alert("Wrong format");
        return false;
    }
    else {
        return true;
    }
}

function validatePNumber() {
    let regex = /^01\d{1}-\d{7,8}$/;
    const pNumber = document.forms["visitorReg"]["pNumber"].value;
    if (regex.test(pNumber) === false) {
        alert("Wrong format");
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
        alert("Wrong format");
        return false;
    }
}
 
function validateDate() {
    let date = document.getElementById('dateInput').value;
    let selectedDate = new Date(date);
    let day = selectedDate.getDate();
    let month = selectedDate.getMonth() + 1;
    let year = selectedDate.getFullYear();

    let currentDate = new Date();
    let currentday = currentDate.getDate();
    let currentmonth = currentDate.getMonth() + 1;
    let currentyear = currentDate.getFullYear();

    let date2 = document.getElementById('endDateInput').value;
    let selectedDate2 = new Date(date2);
    let day2 = selectedDate2.getDate();
    let month2 = selectedDate2.getMonth() + 1;
    let year2 = selectedDate2.getFullYear();


    if (year < currentyear) {
        alert("Invalid Year, the year right now should be " + currentyear + " or greater");
        return false;
    } else if (year === currentyear) {
        if (month < month2) {
            alert("Invalid month, the month right now should be " + currentmonth + " or greater");
            return false;
        }
        else if (month === currentmonth) {
            if (day < currentday) {
                alert("Invalid day, the day right now should be " + currentday + " or greater");
                return false;
            }
            else {
                alert("Correct Date");               
            }
        }
        else {
            alert("Correct Date");
        }
    }
    else {
        alert("CORRECT DATE");
    }


    if(year2 < year){
        alert("Invalid Year, the year right now should be " + year + " or greater");
        return false;
    }else if(year2 === year){
        if(month2 < month){
            alert("Invalid month, the month right now should be " + month + " or greater");
            return false;
        }else if(month2 === month){
            if (day2 < day) {
                alert("Invalid day, the day right now should be " + currentday + " or greater");
                return false;
            }
            else {
                alert("Correct Date");               
            }
        }
        else{
            alert("correct date");
        }
    }
    else{
        alert("correct date");
    }
    


}

function addLeadingZero(number) {
    return number < 10 ? '0' + number : number;
}

function validateUser(){
    const usr = 'Manager';
    const name = document.forms["loginForm"]["name"].value;
    const pword = 'Manager1';
    const pass = document.forms["loginForm"]["pass"].value;

    if(usr === name){
        if(pword === pass){
            alert("Succesfully login");
            window.location.replace("register.php");
            return false;
        }
        else{
            alert("Wrong Password");
            location.reload();
            return false;
        }
    }
    else{
        alert("Wrong Username");
        location.reload();
        return false;
    }
}

function showPassword(){
    let x = document.forms["loginForm"]["pass"];
    if(x.type === "password"){
        x.type = "text";
    }
    else{
        x.type = "password";
    }
}




