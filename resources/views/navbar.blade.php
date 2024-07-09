<style>
*{
    padding:0;
    margin:0;
    box-sizing: border-box;
}
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
    padding:.8rem;
    position: relative;
    font-family: 'Advent Pro';
    background-color:#09223B;

}
.main-navbar div ul{
    list-style-type: none;
    display: flex;
    gap:3rem;
    margin-right:2rem;
    margin-top:.4rem;


}
.main-navbar div ul a{ 
    text-decoration: none;
    color:white;
    font-size:1.2rem;
    text-align: center;
}
.main-navbar div ul a:hover{
    color:#E7C108;
    box-shadow: 2px 2px 5px rgba(243, 240, 46, 0.4);
 

} 

.main-navbar div h2{
    color:white;
    font-size: 1.8rem;
    position: relative;
    left:3rem;
}
.main-navbar div h2:hover{
    box-shadow: 2px 2px 8px rgba(243, 240, 46, 0.4);
}

    </style>

<nav class="main-navbar">
    <div>
        <h2>Youfound-<span style="color:#E7C108;">it</span></h2>
    </div>

    <div>
    <ul>
     
      <li><a href="{{ route('livewire.homepage') }}">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    </div>

  </nav>
  