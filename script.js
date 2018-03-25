document.getElementById("addNewClassBtn").addEventListener("click", addRow);

var orderlist = 1;
function addRow() {
    orderlist++;
    var tbody = document.getElementById("classes_tbody");
    var newTr = document.createElement("tr");
    for (var i = 0; i < 5; ++i) {
        var td = document.createElement("td");
        var input = document.createElement("input");
        input.size = "15";
        if(i == 0) { td.innerHTML = orderlist; }
        if(i == 1) {
            td.appendChild(input);
            input.setAttribute("class", "courseID");
            input.setAttribute("name", "course[]");
            input.setAttribute("required", "");
        }
        if(i == 2) {
            td.appendChild(input);
            input.setAttribute("class", "courseName");
            input.setAttribute("name", "name[]");
            input.setAttribute("required", "");
        }
        if(i == 3) {
            td.appendChild(input);
            input.setAttribute("class", "credit");
            input.setAttribute('onkeyup','calculate()');
            input.setAttribute("name", "credit[]");
            input.setAttribute("required", "");
            input.setAttribute("pattern", "[0-9]*");
            input.setAttribute("maxlength", "1");
        }
        if(i == 4) {
            td.appendChild(input);
            input.setAttribute("class", "grade");
            input.setAttribute('onkeyup','calculate(event)');
            input.setAttribute("name", "grade[]");
            input.setAttribute("required", "");
            input.setAttribute("maxlength", "4");
        }
        newTr.appendChild(td);
    }
    tbody.appendChild(newTr);
    let child = tbody.children;
    let childLength = child.length - 1;
    document.getElementById("x").value = childLength;
}

function calculate(event){
    var credit = parseInt(document.getElementById("accumulative_Credit").value);
    var gpa = parseFloat(document.getElementById("accumulative_GPA").value);
    var GP = gpa * credit;
    var totalCredits = 0;
    var thisGP = 0;
    var finalGPA = 0

    //Prevent input from user
    if(isNaN(event.target.value)){
        event.target.value = "";
        alert("Grades must be numbers only.");
    }
    else if(event.target.value < 0 || event.target.value > 4){
        event.target.value = "";
        alert("Please input grade between 0 and 4");
    }

    var g = document.getElementsByClassName("grade");
    var c = document.getElementsByClassName("credit");
    for (var i = 0; i < g.length; i++) {
        if(c[i].value.length == 0 || g[i].value.length == 0){
            thisGP = thisGP;
            totalCredits = totalCredits;
        }
        else{
            totalCredits += parseInt(c[i].value);
            thisGP += (parseInt(c[i].value) * getGrade(g[i].value));
        }
    }

    totalCredits += credit;
    finalGPA = (thisGP + GP)/totalCredits;

    document.getElementById("total_credits").value = totalCredits;
    document.getElementById("gpa").value = finalGPA.toFixed(2);
}
function getGrade(grade){
    if(grade == '4' || grade == '4.00' || grade == '4.0') { return 4; }
    else if(grade == '3.5' || grade == '3.50') { return 3.5; }
    else if(grade == '3' || grade == '3.00' || grade == '3.0') { return 3; }
    else if(grade == '2.5' || grade == '2.50') { return 2.5; }
    else if(grade == '2' || grade == '2.00' || grade == '2.0') { return 2; }
    else if(grade == '1.5'|| grade == '1.50') { return 1.5; }
    else if(grade == '1' || grade == '1.00' || grade == '1.0') { return 1; }
    else if(grade == '0' || grade == '0.00' || grade == '0.0') { return 0; }
    else{ return null; }
}