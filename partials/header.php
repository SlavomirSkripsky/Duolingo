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
                    <?php
                        $menu = new Menu();
                        $menuItems = $menu->index();
                        foreach ($menuItems as $item) {
                            echo '<li><a href="' . $item['link'] . '">' . $item['label'] . '</a></li>';
                        }
                    ?>
                </nav>
            </div>
        </div>
    </div>
  </header>

<?php
    include('footer.php'); 
?>