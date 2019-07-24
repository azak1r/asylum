<nav class="navbar-youplay navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="off-canvas" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/logo-light.png" alt="">
                </a>
            
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            
            <ul class="nav navbar-nav">
                <li class=" dropdown dropdown-hover">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Games
                        
                        <span class="caret"></span>
                        <span class="label">Stuff we play</span>
                    </a>
                    <div class="dropdown-menu">
            
                        <ul role="menu">
                            <li>
                                <a href="">
                                    World of Warcraft
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Elder Scrolls Online
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Eve Online
                                </a>
                            </li>
                        </ul>
                    
                        <ul role="menu">
                            <li>
                                <a href="">
                                    Minecraft
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Warhammer
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Something else
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                <a href="{{ route('blogIndex') }}">
                        Blog
                        <span class="label">Latest updates</span>
                    </a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class=" dropdown dropdown-hover">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        YOUR USERNAME COMES HERE!!
                        <!--<span class="badge bg-default">8</span>
                        <span class="caret"></span>-->
                        <span class="label">user</span>
                    </a>
                </li>
            </ul>
    </div>
</nav>