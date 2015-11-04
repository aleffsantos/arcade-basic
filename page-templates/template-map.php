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
    

    

<div class="container-fluid" style="padding: 0px;margin-top: -37px;">
                        <!--<div class="col-md-12">-->
    <div style="position: absolute;z-index: 10;width: 50%;border-radius: 7px!important; margin: 5% 0px 0px 8%;">
                                
    <h4 class='col-md-12'        style="background-color: #7F983B; margin: 10px 0px -5px 0px; padding: 10px 10px 15px 0px; text-align: center; color: white; z-index: -1; width: 200px; border-radius: 10px 10px 0px 0px; font-weight: 600;"
        >Places (<span id="total_places">0</span>)</h4>
        <label class="sr-only" for="searchbox">Pesquisa...</label>
             <input type="text" class="form-control" id="searchbox" placeholder="Search &hellip;">
                                <span class="glyphicon glyphicon-search search-icon"></span>
                            </div>
                        </br>
                    
                        <div id="map" class="map"></div><br>
                        <div class="places content row col-md-12" id="places"> </div>
                   
                <!--</div>-->
                </div>

                <script id="place-template" type="text/html">
      <div class="col-md-4 movie">
        <div class="thumbnail">
          <div class="caption">
            <h4><%= name %></h4>
            <video width="100%" height="240" controls style="background: #000;">
                <source src="<%= videoUrl %>">        
            </video>
            <div class="detail">
              <dl>
                <dt>Usuário</dt>
                <dd><%= categories.join(', ') %></dd>
                <dt>Local</dt>
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