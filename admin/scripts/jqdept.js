function showDepartment() {
    var myDiv = document.getElementById("depttable");
    var request;
    try {
        request = new XMLHttpRequest;

    } catch (error) {
        alert("Your browser doesnt support AJAX!!")
    }

    request.onreadystatechange = function() {
        if (request.readyState === 4 && request.status === 200) {
            myDiv.innerHTML = "";
            myDiv.innerHTML = request.responseText;
        }
    }

    var schoolOption = document.getElementById("schooloption").value;
    var query = "?schoolname=" + schoolOption;
    request.open("GET", "../jquery/processdpt.php" + query, true);
    request.send(null);

}