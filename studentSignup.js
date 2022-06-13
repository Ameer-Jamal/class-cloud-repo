
document.body.style.zoom = "95%";
window.onload = function () {
  document.getElementById('button').addEventListener('click', postContent);

  function validatePassword(pass1,pass2) {
    var minNumberofChars = 6;
    var maxNumberofChars = 16;
    var regularExpression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{6,}$/
    var clear = true
    
    if (pass1 != pass2) {
      alert("passwords do not match")
      clear = false;
    }

    else if (pass1.length < minNumberofChars || pass1.length > maxNumberofChars) {
      alert("password must be a minimum of 6 characters and a max of 16  ")
      clear = false;
    }

    else if (!regularExpression.test(pass1)) {
      alert("password should contain at least one number and one Capital letter");
      clear = false;
    }
    return clear;
  }


  function validateEmail(email) {
    var clear = true
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
    
    if (email.match(mailformat)) {
      return clear;
    }

    else {
      alert("You have entered an invalid email address!");
      clear = false
      return clear;
    }
  }
    

  
  function postContent(e) {
      
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var ogPassword = document.getElementById('OGpassword').value;
    var select = document.getElementById('grade');
    var grade = Number(select.options[select.selectedIndex].value);


    if (name == "" || email == "" || password == "" || ogPassword ==  "" || grade =="") {
      alert("Please Fill All Fields to continue");
      return false;
    }
   
   
    else{
     var emailClear = validateEmail(email);
     var passClear = validatePassword(password,ogPassword);
      if(!emailClear||!passClear){
      return false;}
    
      else { 
      e.preventDefault();
      var params = "name="+name+"&email="+email+"&password="+password+"&grade="+grade; 
      var xhr=new XMLHttpRequest();

      xhr.open('POST','studentSignup.php', true);
      xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded')
    
      xhr.onload = function(){
        if (this.status == 200) {
          if (this.responseText == '200') {
            alert("Congratulations you are now a member of ClassCloud! lets login");
            window.location.replace('logInPage.php');
          }
          else {
            console.log("USER CANNOT BE ADDED: "+this.responseText);
          }
        }
      }

      xhr.send(params);
        }
      }
    }

  }
