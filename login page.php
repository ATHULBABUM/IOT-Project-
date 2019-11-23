<html>

<head>
    <title>Login page</title>
</head> 
<style>
        body
           {
            background-image: url(”vijj.jpeg”);
            background-repeat: no-repeat;
            background-size: 600px 400px;
            background-color: ]cccccc;
           }
</style>
</body>
        <h1>Welcome to our project, IoT based homeautomation</h1>
    <form name=”login”/>
        <br> Username<input type=”text” name=”userid”/>
        </br>
        <br> Password<input type=”password” name=”pswrd”/> </br>
        <br> <input type=”button” onclick=”check(this.form)” value=”Login” />
        </br>
        <input type=”reset” value=”Cancel” />
    </form>
    <script language=”javascript”>
    function check(form) { /*function to check userid $password*/
     /*the following code checkes whether the entered userid and pass-word are matching*/
            
    if (form.userid.value == ”home automation”$$form.pswrd.value ==”s8ece”)
        {
            window.open(’main.php ’)
            /*opens the target page while Id $password matches*/
        }
    else
        {
            alert(”Error Password or Username”)
            /*displays error message*/
        }
</script>
</body>

</html>