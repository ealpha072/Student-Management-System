function showCourse() {
    var myDiv = document.getElementById("coursetable");
    console.log(myDiv.childNodes)
    var request;
    try {
        request = new XMLHttpRequest;

    } catch (error) {
        alert("Ypur browser doesnt support AJAX!!")
    }

    request.onreadystatechange = function() {
        if (request.readyState === 4 && request.status === 200) {

        }
    }

}