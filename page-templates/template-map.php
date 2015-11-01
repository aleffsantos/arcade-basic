<?php
/**
 * Template Name: Map Page
 *
 * Description: A full width page template that will display 4 posts in a block without any sidebars
 *
 * @since 1.0.3
 */

/** SCRIPTS FILTER */
    /** SCRIPTS FILTER */

if ( ! is_front_page() )
	get_header(); 

?>
    

    

	<div class="container">
                        <div class="col-md-12">
                            <div>
                                <h4 class='col-md-12'>Places (<span id="total_places">0</span>)</h4>

                                <label class="sr-only" for="searchbox">Search</label>
                                <input type="text" class="form-control" id="searchbox" placeholder="Search &hellip;">
                                <span class="glyphicon glyphicon-search search-icon"></span>
                            </div>
                        </br>
                    
                        <div id="map" class="map"></div>
                        <div class="places content row" id="places"> </div>
                   
                </div>
                </div>

                <script id="place-template" type="text/html">
      <div class="col-md-4 movie">
        <div class="thumbnail">
          <div class="caption">
            <h4><%= name %></h4>
            <div class="detail">
              <dl>
                <dt>Categories</dt>
                <dd><%= categories.join(', ') %></dd>
                <dt>Address</dt>
                <dd><%= address %></dd>
                    </dl>
                    </div>
                    </div>
                    </div>
                    </div>
                </script>
                <script id="category-template" type="text/html">
      <div class="checkbox">
        <label>
          <input type="checkbox" value="<%= value %>">
          <span><%= name %></span>
                    </label>
                    </div>
                </script>


<?php if ( ! is_front_page() ) get_footer(); ?>