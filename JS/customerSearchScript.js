document.addEventListener("DOMContentLoaded", function () {
    var customerIDInput = document.getElementById("customerID");
    var searchResults = document.getElementById("searchResults");

    customerIDInput.addEventListener("input", function () {
        var customerID = customerIDInput.value;

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "../Controller/customerSearchProcess.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                var responseData = JSON.parse(xhr.responseText);
                displaySearchResults(responseData);
            }
        };

        xhr.send("search=" + encodeURIComponent(customerID));
    });

    function displaySearchResults(data) {
        var table = "<table><tr><th>Customer ID</th><th>Name</th><th>Email</th><th>Profile Photo</th></tr>";

        for (var i = 0; i < data.length; i++) {
            table += "<tr>";
            table += "<td>" + data[i]['id'] + "</td>";
            table += "<td>" + data[i]['name'] + "</td>";
            table += "<td>" + data[i]['email'] + "</td>";
            table += "<td>" + data[i]['profilePhoto'] + "</td>";
            table += "</tr>";
        }

        table += "</table>";
        searchResults.innerHTML = table;
    }

});