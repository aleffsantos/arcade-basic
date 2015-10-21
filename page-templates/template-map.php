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

	<div class="container from-the-blog">
		<div class="row">
			<div id="primary" class="col-md-12 hfeed">
				<div class="page-header clearfix">
					<h1 class="pull-left"><?php the_title(); ?></h1>
				</div>

				<div class="row">
					    
                
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

                <code class="hide" id="place-template" type="text/html">
    <div class="col-md-4 movie">
        <div class="thumbnail">
            <div class="caption">
                <h4><%= categories.join(', ') %></h4>
                <div class="outline">
                    <%= description %>
                    </div>
                    <div class="detail">
                        <dl>
                        <dt>Categories</dt>
                        <dd><%= categories.join(', ') %></dd>
                        <% if(phone){ %>
                            <dt>Phone</dt>
                            <dd><%= phone %></dd>
                            <% } %>
                                <dt>Address</dt>
                                <dd><%= address %></dd>
                    </dl>
                    </div>
                    </div>
                    </div>
                    </div>
                </code>
                <code class="hide" id="category-template" type="text/html">
                                    <div class="checkbox">
                                        <label>
                                        <input type="checkbox" value="<%= value %>">
                                            <span><%= name %></span>
                    </label>
                    </div>
                </code>
                    
				</div>
			</div>
		</div>
	</div>

<?php if ( ! is_front_page() ) get_footer(); ?>