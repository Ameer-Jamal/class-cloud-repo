
    

    const form = {
        submit: document.getElementById("btn"),
        errormsg: document.getElementById("formMessage"),
    };
    console.log(form);

    
form.submit.addEventListener('click', (e) => {
        var password = document.getElementById("password").value;
        var username = document.getElementById("email").value;

        e.preventDefault();
        console.log('in submit fun')
        const request = new XMLHttpRequest();

    request.onload = function () {
             
        let responseObject = null;

        try {
            responseObject = JSON.parse(request.responseText);

        }
        catch (e) {
            console.error("could not parse json");

        }

        if (responseObject) {
            handleResponse(responseObject);
        }


          
        }
        const params = "username=" + username + "&password=" + password; 
        console.log(params);
      
        request.open('post', 'loginPage.php');
        request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        request.send(params);


});
    

function handleResponse(responseObject) {
           console.log(responseObject);
   
    if (responseObject.ok) {
        location.href = "studentPage.html";
    }

    else {
        while (form.errormsg.firstChild) {
            form.errormsg.removeChild(form.errormsg.firstChild);
        }



        responseObject.messages.forEach((message) => {
            const li = document.createElement('li');
            li.textContent = message;
            form.errormsg.appendChild(li);
        });
        form.errormsg.style.display = "block"; 
    }
    
}
    
