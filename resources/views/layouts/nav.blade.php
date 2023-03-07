<div class="header-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div><a href="index.html"><img src="images/kh.png" height="100px"></a></div>
            </div>
            <div class="col-md-8">
                <div class="menu_text">
                    <ul>


                        <li class="active">
                        <div id="myNav" class="overlay">
                           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <div class="overlay-content">
                           <a href="/home">Accueil</a>
                           <a href="/about">A propos</a>
                           <a href="/details">Caractéristiques</a>
                           <a href="/gallery">Gallerie</a>
                           <a href="/contact">Contact</a>
                           <a href="#" class="btn btn-default btn-flat float-right border"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Se déconnecter <i class="fa-solid fa-right-from-bracket"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        </div>
                        </div>
                        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
                       </div>
                       </li>
                    </ul>
                </div>
        </div>
    </div>
</div>
