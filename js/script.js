var baton = $("#submit");
var batton = $("#submitto");
var name = $("#name1");
var login = $("#login");
var haslo = $("#haslo");
var password = $("#password1");
var passwordRe = $("#passwordRe1");

baton.click(function (event) {
    
    event.preventDefault();

    console.log(name);

    var posting = $.post("index.php", {name: $("#name1").val(), password: $("#password1").val(), passwordRe: $("#passwordRe1").val(), submit:"1" });

    posting.done(function (data) {
        console.log(data);
    });
})

batton.click(function (event) { //zrobic logowanie
        
    event.preventDefault();
    
    
$.ajax({
            url: "logowanie.php",
            type: "get",
            data: {name: $("#login").val(), password: $("#haslo").val()},
            success: function (data) {
             
                console.log(data);
            if(data=="xD") {
                     alert ("zalogowano");   
            }
           

            }
});
    });
