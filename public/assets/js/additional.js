
//  function to validate email address
function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!regex.test(email)) {
      return false;
    }else{
      return true;
    }
}

//  function to validate mobile number
function IsMobileNumber(mobile) {
    var regex = /^([+])?([0-9]{6,20})$/;

    if(!regex.test(mobile)) {
      return false;
    }else{
      return true;
    }
}

//  function to validate URL
function IsURL(url)
{
    var regex = /^(http|https)?:\/\/[a-zA-Z0-9-\.]+\.[a-z]{2,4}/;
    if(!regex.test(url)) {
    return false;
    }else{
    return true;
    }
}
