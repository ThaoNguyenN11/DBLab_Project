//main function
function validate(inputElement, rule){
  var ErrorMessage = rule.test(inputElement.value);
  var ErrorElement = inputElement.parentElement.querySelector(".message");
      if (ErrorMessage) {
        ErrorElement.innerText = ErrorMessage;
        inputElement.parentElement.classList.add("invalid");
      } else ErrorElement.innerText = "";
      inputElement.parentElement.classList.remove("invalid");
};
function Validator(objects) {
  
  var formElement = document.querySelector(objects.form);
  objects.rules.forEach(function (rule) {
    var inputElement = formElement.querySelector(rule.selector);
    if (inputElement) {
      inputElement.onblur = function () {
        validate(inputElement, rule);
      };
    };
    inputElement.oninput  = function(){
      var ErrorElement = inputElement.parentElement.querySelector(".message");
      ErrorElement.innerText = "";
      inputElement.parentElement.classList.remove("invalid");
    }
  });
}
// rules
Validator.isRequired = function (selector) {
  return {
    selector: selector,
    test: function (value) {
      return value.trim() ? undefined : "Thông tin này là bắt buộc";
    },
  };
};
Validator.isEmail = function (selector) {
  return {
    selector: selector,
    test: function (value) {
      var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      return regex.test(value) ? undefined : 'Vui lòng nhập đúng email';
    },
  };
};
Validator.Password = function(selector){
  return{
    selector: selector,
    test:function (value){
    var a = value.length;
    return (a >= 8 ) ? undefined : "Mật khẩu phải có nhiều hơn 8 kí tự";
    },
  };
};
