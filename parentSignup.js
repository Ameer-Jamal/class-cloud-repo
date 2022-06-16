
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
      alert("You have entered an invalid email address either for parent or student!");
      clear = false
      return clear;
    }
  }
    
    
  function validatePhone(phone) {
    var clear = true
    var phoneFormat = /^[0]{1}?[7]{1}?[789]{1}?[0-9]{3}?[0-9]{4}$/;
    
    if (phone.match(phoneFormat)) {
      return clear;
    }

    else {
      alert("You have entered an invalid phone number please enter a Jordanian phone number in the format of 07x xxx xxxx!");
      clear = false
      return clear;
    }
  }
    
  
  function postContent(e) {
      
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var ogPassword = document.getElementById('ogPassword').value;
    var phone = document.getElementById('phone').value;
    var studentEmail = document.getElementById('studentEmail').value;

    if (name == "" || email == "" || password == "" || ogPassword ==  "" || phone == "" || studentEmail == "") {
      alert("Please Fill All Fields to continue");
        return false;
    }
   
   
 
    else {
        
        var emailClear = validateEmail(email);
        var studentEmailClear = validateEmail(studentEmail);
        var passClear = validatePassword(password,ogPassword);
        var phoneClear = validatePhone(phone) 
        
        if (!emailClear || !passClear || !phoneClear || !studentEmailClear) {
            return false;
        }
    

      else { 
      e.preventDefault();
      var params = "name="+name+"&email="+email+"&password="+password+"&phone="+phone+"&studentEmail="+studentEmail; 
      var xhr=new XMLHttpRequest();

      xhr.open('POST','parentSignup.php', true);
      xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded')
    
      xhr.onload = function(){
        if (this.status == 200) {
          if (this.responseText == 'added') {
            alert("Congratulations you are now a member of ClassCloud! lets login");
            window.location.replace('logInPage.php');
          }
          else if(this.responseText=="student not found") {
              console.log(this.responseText)
              alert("The student you are trying to associate does not currently have an account at ClassCloud\nPlease make one for them first.");
            }
          else if (this.responseText == "parent exists") {
              alert("It seems that you already have and account here, how about trying to log in instead");
            }
        }
      }

      xhr.send(params);
        }
      }
    }

  }
