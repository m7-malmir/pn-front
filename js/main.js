function ToggleNavBarMenu(){
    var navbar2 = document.getElementById("navbar2");
    if(navbar2.style.display == 'flex'){
        navbar2.style.display = 'none';
    }else{
        navbar2.style.display = 'flex';
    }
}
function ToggleHeaderSideMenu(){
    var navbar2 = document.getElementById("header_smallsize");
    if(navbar2.style.display == 'flex'){
        navbar2.style.display = 'none';
    }else{
        navbar2.style.display = 'flex';
    }
}
        // show password
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
                } else {
                x.type = "password";
                }
            }
        //ارسال متغیر های مختلف
        $(document).ready(function (e) {
            $("#imgup").on('submit',(function(e) {
                e.preventDefault();
                var submit = $('#submit').val();
                var username = $('#username').val();
                var password = $('#password').val();
                var language = $('#language').val();
                // Attach file
                var formData = new FormData(this);
                formData.append('submit', submit);
                formData.append('username', username);
                formData.append('password', password);
                formData.append('language', language);
                
                $.ajax({
                    url: "/library/login.php",
                    type: "POST",
                    data:  formData,
                    contentType: false,
                    cache: false,
                    processData:false,
                    success: function(data)
                    {
                        $("#result").html(data);
                    }
               });
            }));
        });