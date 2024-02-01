// theme.js

document.addEventListener("DOMContentLoaded", function() {
    var domain = window.location.hostname;

    // Call your server-side API to check if the domain is approved
    fetch("https://yourserver.com/check-domain.php?domain=" + domain)
        .then(response => response.json())
        .then(data => {
            if (!data.approved) {
                // Domain not approved, display error message
                document.body.innerHTML = "<h1>Error: This domain is not approved.</h1>";
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
});
