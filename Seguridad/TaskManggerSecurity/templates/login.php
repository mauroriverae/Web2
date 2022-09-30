<!-- (include file = 'templates/header.php') -->
<div class="row mt-4">
    <div class="col-md-4" style="border:1px solid black;">
        <h2>Login</h2>
        <form action="verify" class="form-alta" method="post">
            <div style="margin: 20px;">
                <input placeholder="user" type="text" name="user" id="user" require>
            </div>
            <div style="margin: 20px;">
                <input placeholder="password" type="password" name="password" id="password" require>
            </div>
            <div style="margin: 20px;">
                <input type="submit" class="btn btn-primary " value="login">
            </div>
        </form>
    </div>
</div>