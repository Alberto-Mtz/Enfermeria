var API_URL = 'http://localhost:8000/users/sign_in';

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
    .catch(error=>console.error(error))
    .then(response=> response["token"]);

    if (x){
        document.cookie = "token="+x+"; max-age=1440; path=/";
        window.location.replace("index.php");
    }
}

