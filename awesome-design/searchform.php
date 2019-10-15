<form role="search" method="get" class="search_form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="search" placeholder="<?php echo esc_attr_e( 'Search', 'awesome-design' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
</form>
