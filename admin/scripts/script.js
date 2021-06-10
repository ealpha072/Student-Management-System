function showCourse() {
    var myDiv = document.getElementById("coursetable");

    console.log(schoolOption.childNodes)
    var request;
    try {
        request = new XMLHttpRequest;

    } catch (error) {
        alert("Ypur browser doesnt support AJAX!!")
    }

    request.onreadystatechange = function() {
        if (request.readyState === 4 && request.status === 200) {
            myDiv.innerHTML = "";
            myDiv.innerHTML = request.responseText;
        }
    }

    var schoolOption = document.getElementById("schooloption").value;
    var query = "?schoolname=" + schoolOption;
    request.open("GET", "../jquery/processcourse.php" + query, true);
    request.send(null);

}