window.loginModal = (e) => {

    let html  = '';
        html += `
        <form action="/test.php">
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">  
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="checkbox">
                <label><a href="#" onClick="SignUp()">Sign Up?<span class="fa fa-angle-down"></span></a></label>
            </div>

            <button type="button" onClick="loginPost()" class="btn btn-default">Submit</button>
        </form>`;
        
    $("#modalHeader").html(`<h4 class="modal-title">LOGIN</h4>`);
    $("#modalBody").html(html);

    $("#globalModal").modal('show');
}

window.loginPost = (e) => {

    const myurl  = `${url}/login-post`;
    let postData = {
        _token:token,
        signIn_email:$("#email").val(),
        signIn_password:$("#password").val(),
    }
    
    $.post(myurl,postData,(res) => {
        
        var data = JSON.parse(Base64.decode(res));
        if(data.succ)
            window.location = `${url}`;
        else
           $("#modalError").html(`<div class="alert alert-danger">Invalid username or Password</div>`);
        
    },'json')
}

window.SignUp = (e) => {

    let html  = '';
        html += `
        <form action="">
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="sup_email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="sup_password">
            </div>
            <div class="form-group">
                <label for="pwd">Confirm Password:</label>
                <input type="password" class="form-control" id="confirmpassword">
            </div>

            <button type="button" onClick="signUpPost()" class="btn btn-default">Submit</button>
        </form>`;

    $("#modalHeader").html(`<h4 class="modal-title">SIGN UP</h4>`);
    $("#modalBody").html(html);

}

window.signUpPost = (e) => {

    const myurl  = `${url}/signup-post`;
    let postData = {
        _token:token,
        email:$("#sup_email").val(),
        password:$("#sup_password").val(),
        password_confirmation:$("#confirmpassword").val(),
    }
    
    $.post(myurl,postData,(res) => {

        var data = JSON.parse(Base64.decode(res));
        if(data.succ) window.location = `${url}`;

    },'json')

}