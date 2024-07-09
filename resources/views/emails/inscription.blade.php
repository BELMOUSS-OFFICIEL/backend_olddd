{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<div style="text-align: center; padding:10px">
  <img src="{{asset('./logo-removebg.png')}}" width="200px" style="background: black ; border-radius:20px" alt="LuxeImmoKech"><br>
  <h4>hello {{$nom}}</h4>
<h2>yor email {{$email}}</h2>
  <a href="https://api.luxeimmokech.com/virefiy_email/{{$href}}">virefie</a>
</div>
  
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LuxeImmoKech | verification</title>
  <link rel="shortcut icon" href="{{asset('./favicon.ico')}}" type="image/x-icon">

</head>
<body style="background-color: black ; width: 60%;margin: 10px auto;">
  <div style="text-align: center; background-color: #191C24; padding:20px;border-radius: 24px;">
    <img src="{{asset('./logo-removebg.png')}}" alt="logo LuxeImmoKech" width="100px" style="border-radius:20px; background:black">
  <h2 style="color:white">Hello <span style="color:#d18e2a">{{$nom}}</span></h2>
  <p style="color:white">
    bienvenue dans notre site  <span ><a style="color:#d18e2a" href="">LuxeImmoKech</a></span> nous sommes heureux de vous servir et on espere que vous trouvez ce que vous cherchez chez nous
  </p>
  <p style="color:white">Pour continuer l'inscription,verifiez votre email <span style="color:#d18e2a">{{$email}}</span> </p>
  <a href="https://api.luxeimmokech.com/virefiy_email/{{$href}}" style="padding: 10px 29px;;border: 1px solid #d18e2a;color:#d18e2a;background-color: black;border-radius: 10px;text-decoration: none;">Verifier Email</a>
  

</div>

</body>
</html>