function populateCourse() {
    var course = document.getElementById("course-select");
    var request;
    try {
        request = new XMLHttpRequest
    } catch (error) {
        alert("Your browser doesnt support ajax, please use adifferent browser");
    }

    request.onreadystatechange = function() {
        if (request.readyState === 4 && request.status === 200) {
            course.innerHTML = ""
            course.innerHTML = request.responseText;
        }
    }
    var school = document.getElementById("schoolselect").value;
    var queryString = "?school=" + school;
    request.open("GET", "../jquery/studentcourse.php" + queryString, true);
    request.send(null);
}