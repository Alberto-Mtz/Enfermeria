<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Index</title>

</head>
<body>
    <br>
    Login
    <br>
    <input type="text" placeholder="20170000" id="user" class="form-control">
    <br>
    Password:
    <br>
    <input type="text" placeholder="**" id="password" class="form-control"/>
    <br>
    <button class="btn btn-primary" onclick="login()" >entrar</button>
    <br>
    <br>
    Id:
    <input id="id" type="number" onchange="find_user()"/>
    <br>
    <br>
    Status: <input class="form-control" type="text" id="query_status"/>
    <br>
    Data: <textarea class="form-control" type="text" id="query_data"></textarea>
    <br>
    <div id="app"></div>

    <script>
 
        const API_URL = 'http://3.138.60.6:8000/users/sign_in';
        //const xhr = new XMLHttpRequest();

        async function login(){
            var user = document.getElementById("user").value;
            var password = document.getElementById("password").value;
            var body = {'user': user, 'password':password};
            let token;
            const x = await fetch(API_URL, {
                method:'POST',
                body: JSON.stringify(body),
                headers:{
                    'Content-Type':'application/json'
                }
            }).then(res=>res.json())
            .catch(error=>console.error('Error: ', error))
            .then(response=> response["token"]);

            if (x){
                document.cookie = "token="+x+"; max-age=1440; path=/";
                window.location.replace("index.php");
            }

            //console.log(body)
            //xhr.addEventListener("load", onRequestHandler);
            //xhr.open("POST", `${API_URL}/users/sign_in`);
            //xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
            //xhr.send(body);
            //console.log(JSON.parse(body));
        }

    </script>
</body>
</html>