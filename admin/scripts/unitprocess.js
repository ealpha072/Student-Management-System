function showUnit() {
    var dpt = document.getElementById("dptselect");
    var request;

    try {
        request = new XMLHttpRequest;
    } catch (error) {
        alert("Your browser doesnt support ajax requests");
    }
    request.onreadystatechange = function() {
        if (request.readyState === 4 && request.status === 200) {
            dpt.innerHTML = "";
            dpt.innerHTML = request.responseText;
        }
    }
    var school = document.getElementById("schoolselect").value;
    var query = "?school=" + school;
    request.open("GET", "../ajaxfiles/processunit.php" + query, true);
    request.send(null)

}