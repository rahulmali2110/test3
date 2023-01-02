<?php
/**
* Template Name: About
* Template Post Type: page
*
* @package echelon
* @subpackage Twenty_Twenty_One
* @since Twenty Twenty-One 1.0 
*/
get_header(); ?>
<section class="section section--banner pt-0 pb-0">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/about-banner.jpg" alt="">
        <div class=" wrap">
            <div class="banner__content">
                <h1 class="text-white mb-32">About <br>Echelon</h1>
                <a href="#" class="btn">Member Benefits</a>
            </div>
        </div>
    </section>
    <section class="section section--development bg_muesli">
        <div class="wrap">
            <div class="content text-white text-center">
                <h2 class="text-white">Echelon Business Development’s Vision</h2>
                <h3 class="text-white mb-0">TEchelon Business Development Network is a premier business development organization for trusted business advisors. Our members build enduring relationships. Therefore, they grow their businesses by utilizing a dynamic portfolio of exclusive marketing resources and business opportunities.</h3>
            </div>
        </div>
    </section>
    <section class="section section--development">
        <div class="wrap">
            <div class="content text-center">
                <h2>The Goal of Echelon? <br>Business Development and SEO.</h2>
                <h3 class="text-grey">The brainchild of networking and marketing professionals, Echelon knows how difficult and expensive it can be to market their professional services in today’s “new media.”</h3>
                <p>The founders personally experienced how membership organizations struggle to provide tangible benefits to its members. Marketing dollars are important. And it can be difficult to figure out where to market and how to market your professional firm. Many professionals are paralyzed by the overwhelming options and terminology that are ever-changing.</p>
                <p class="mb-0">That’s where Echelon comes in. Echelon Business Development Network is unlike other membership organizations. We are focused on creating great and diverse professional relationships and providing exclusive, top-quality tangible benefits that are marketing driven for our members. It’s our mission. Echelon provides exclusive opportunities and a network that assists professionals with marketing themselves both digitally and traditionally. Search Engine Optimization (SEO), Search Engine Marketing (Ad Words), Publishing (online and print), Viral Marketing, Advertising Opportunities, Video Promotion and the always successful Personal Networking are all part of what a member receives when joining Echelon. Creating relationships that build personal and professional growth is the ultimate goal.</p>
            </div>
        </div>
    </section>
    <section class="section section--magazine">
        <div class="wrap">
            <div class="row text-center">
                <div class="col-6">
                    <div class="content">
                       <ul class="magazine__social">
                            <li style="background-color:#A38258;"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon/echelon-professional-magazine.png" alt=""></li>
                            <li style="background-color:#929598;"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon/echelon-radio-broadcast.png" alt=""></li>
                            <li style="background-color:#C88A2E;"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon/echelon-megaphone.png" alt=""></li>
                            <li style="background-color:#A38258;"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon/white-youtube.png" alt=""></li>
                        </ul>
                        <h2>Echelon Professional Magazine</h2>
                        <h3>All designed to improve your Search Engine Optimization and expand your presences</h3>
                        <ul class="magazine__list text-left">
                            <li>Publishing Opportunities</li>
                            <li>Advertising Opportunities</li>
                            <li>Blogging Opportunities</li>
                            <li>PodCast Opportunities</li>
                            <li>Video Opportunities</li>
                        </ul> 
                        <a href="#" class="btn">Member Benefits</a>
                    </div>
                </div>
                <div class="col-6">
                    
                </div>
            </div>
        </div>
    </section>
<?php get_footer();