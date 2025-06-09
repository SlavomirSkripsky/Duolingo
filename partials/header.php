<?php
    include('header.php'); 
?>

<<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h1>Duolingo</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Serach Start ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="#top" class="active">Domov</a></li>
                      <li class="scroll-to-section"><a href="#onas">O nás</a></li>
                      <li class="scroll-to-section"><a href="#courses">Courses</a></li>
                      <li class="scroll-to-section"><a href="#slovnik">Slovník</a></li>
                      <li class="scroll-to-section"><a href="#events">Events</a></li>
                      <li class="scroll-to-section"><a href="#contact">Kontakt</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>

<?php
    include('footer.php'); 
?>