<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homepage</title>
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
</head>
<style>

    @font-face {
        font-family: 'Advent Pro';  /* Replace with your downloaded font name */
        src: url('../fonts/static/AdventPro-Bold.ttf') format('truetype'); /* Path to your font file */
        font-weight: 400;  /* Optional: Specify font weight */
        font-style: normal;  /* Optional: Specify font style */
      }
    
    .main-navbar{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        padding-inline:3rem;
        position: relative;
        top:1.5rem;
        font-family: 'Advent Pro';
    }
    .main-navbar div ul{
        list-style-type: none;
        display: flex;
        gap:3rem;
    
    }
    .main-navbar div ul a{ 
        text-decoration: none;
        color:white;
        font-size:1.2rem;
    }
    .main-navbar div ul a:hover{
        color:#E7C108;
        box-shadow: 2px 2px 5px rgba(243, 240, 46, 0.4);
     
    
    } 
    
    .main-navbar div h2{
        color:white;
        font-size: 1.8rem;
    }
    .main-navbar div h2:hover{
        box-shadow: 2px 2px 8px rgba(243, 240, 46, 0.4);
    }
    
        </style>
<body>
    
    <div class="container">

        <nav class="main-navbar">
            <div>
                <h2>Youfound-<span style="color:#E7C108;">it</span></h2>
            </div>
        
            <div>
            <ul>
             
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
            </div>
        
          </nav>
          

    <div class="first-hero-title" style="position: relative;top:20rem;">
        <h1 style="font-size:7rem;text-align:center;color:#E7C108;">DISCOVER LOST TREASURES</h1>
        <h6 style="text-align: center;font-size:2rem;color:white;">Uncover hidden gems and lost treasures on our platform. Join the hunt today</h6>
    
        <div class="buttons" style="text-align: center;display:flex;margin-top:3rem; justify-content:center;gap:2rem;">
            <div class="first-button">
                <button type="button"><a href="{{ route('livewire.found-page') }}">Found Page</a></button>
            </div>
            <div class="second-button">
                <button type="button">Lost item</button>
            </div>
        </div>

    </div>



    </div>


</body>
</html>