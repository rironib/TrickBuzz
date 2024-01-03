<style>
    .search_bar {
        display: none !important;
    }
</style>

<div id="search">
    <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
        <div class="searchContainer">
            <i class='bx bx-search searchButton'></i>
            <input type="text" name="s" class="searchBox" id="searchInput" value="<?php echo get_search_query(); ?>" placeholder="Search..." autofocus>
            <i id="clearButton" class='bx bx-x clearIcon'></i>
        </div>
    </form>
</div>