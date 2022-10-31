<?php
  /**
        *Plugin Name: Halloween Effect 
        *Plugin URI:	https://lkloop.com
        *Description:	Simple Halloween Effect For WordPress Websites
        *Version:		1.0
        *Requires PHP:	7.0
        *Author:	LKLoop
        *Author URI:	https://nishans.me
        *License:		Regular
        *License URI:	# 
        *Text Domain:	halloween_effect_lkloop
  **/


function add_stylesheet_to_head_halloween_effect_lkloop() {
	echo "<link rel='stylesheet' href='" . plugin_dir_url( __FILE__ ) . "/style.css'>";
}
add_action( 'wp_head', 'add_stylesheet_to_head_halloween_effect_lkloop' );

function wpb_hook_javascript() {
    for($i=0; $i<5; $i++){
        ?>
            <div id="halloweencontainer" class="bottom-section">
                <div class="container">
                    <div onclick="clickevent()" class="pumpkin">
                        <div class="texture"></div>
                        <div class="root"></div>
                        <div class="eye left"></div>
                        <div class="eye right"></div>
                        <div class="mouth left"></div>
                        <div class="mouth right"></div>
                        <div class="teeth"></div>
                    </div>
                    <div class="shadow"></div>
                </div>
            </div>
            <div id="myModal" class="modal">
                <div class="modal-content" 
                style="background-image:url('https://img.freepik.com/premium-vector/happy-halloween-day-banner_278696-6.jpg')">
                    <span class="close">&times;</span>
                </div>
            </div>
            <script type="text/javascript">

                document.cookie = "username=John Doe";

                function setCookie(cname, cvalue) {
                    document.cookie = cname + "=" + cvalue + ";";
                }

                function getCookie(cname) {
                    let name = cname + "=";
                    let decodedCookie = decodeURIComponent(document.cookie);
                    let ca = decodedCookie.split(';');
                    for(let i = 0; i <ca.length; i++) {
                        let c = ca[i];
                        while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                        }
                        if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                        }
                    }
                    return "";
                }

                if(getCookie('halloween') != ""){
                    document.getElementById("halloweencontainer").style.bottom = "1000px !important";
                }
                

                var modal = document.getElementById("myModal");
                var btn = document.getElementById("myBtn");
                var span = document.getElementsByClassName("close")[0];
                span.onclick = function() {
                    modal.style.display = "none";
                }
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }


                function clickevent(){
                    modal.style.display = "block";
                    setCookie('halloween', '1');
                    document.getElementById("halloweencontainer").style.bottom = "1000px !important";
                }
                (function () {
                var r=Math.random,n=0,d=document,w=window,
                    i=d.createElement('img'),
                    z=d.createElement('div'),
                    zs=z.style,
                    a=w.innerWidth*r(),b=w.innerHeight*r();
                zs.position="fixed";
                zs.left=0;
                zs.top=0;
                zs.opacity=0;
                z.appendChild(i);
                i.src='data:image/gif;base64,R0lGODlhMAAwAJECAAAAAEJCQv///////yH/C05FVFNDQVBFMi4wAwEAAAAh+QQJAQACACwAAAAAMAAwAAACdpSPqcvtD6NcYNpbr4Z5ewV0UvhRohOe5UE+6cq0carCgpzQuM3ut16zvRBAH+/XKQ6PvaQyCFs+mbnWlEq0FrGi15XZJSmxP8OTRj4DyWY1lKdmV8fyLL3eXOPn6D3f6BcoOEhYaHiImKi4yNjo+AgZKTl5WAAAIfkECQEAAgAsAAAAADAAMAAAAnyUj6nL7Q+jdCDWicF9G1vdeWICao05ciUVpkrZIqjLwCdI16s+5wfck+F8JOBiR/zZZAJk0mAsDp/KIHRKvVqb2KxTu/Vdvt/nGFs2V5Bpta3tBcKp8m5WWL/z5PpbtH/0B/iyNGh4iJiouMjY6PgIGSk5SVlpeYmZqVkAACH5BAkBAAIALAAAAAAwADAAAAJhlI+py+0Po5y02ouz3rz7D4biSJbmiabq6gCs4B5AvM7GTKv4buby7vsAbT9gZ4h0JYmZpXO4YEKeVCk0QkVUlw+uYovE8ibgaVBSLm1Pa3W194rL5/S6/Y7P6/f8vp9SAAAh+QQJAQACACwAAAAAMAAwAAACZZSPqcvtD6OctNqLs968+w+G4kiW5omm6ooALeCusAHHclyzQs3rOz9jAXuqIRFlPJ6SQWRSaIQOpUBqtfjEZpfMJqmrHIFtpbGze2ZywWu0aUwWEbfiZvQdD4sXuWUj7gPos1EAACH5BAkBAAIALAAAAAAwADAAAAJrlI+py+0Po5y02ouz3rz7D4ZiCIxUaU4Amjrr+rDg+7ojXTdyh+e7kPP0egjabGg0EIVImHLJa6KaUam1aqVynNNsUvPTQjO/J84cFA3RzlaJO2495TF63Y7P6/f8vv8PGCg4SFhoeIg4UQAAIfkEBQEAAgAsAAAAADAAMAAAAnaUj6nL7Q+jXGDaW6+GeXsFdFL4UaITnuVBPunKtHGqwoKc0LjN7rdes70QQB/v1ykOj72kMghbPpm51pRKtBaxoteV2SUpsT/Dk0Y+A8lmNZSnZlfH8iy93lzj5+g93+gXKDhIWGh4iJiouMjY6PgIGSk5eVgAADs=';
                d.body.appendChild(z);
                function R(o,m){return Math.max(Math.min(o+(r()-.5)*400,m-50),50)}
                function A(){
                    var x=R(a,w.innerWidth),y=R(b,w.innerHeight),
                        d=5*Math.sqrt((a-x)*(a-x)+(b-y)*(b-y));
                    zs.opacity=n;n=1;
                    zs.transition=zs.webkitTransition=d/1e3+'s linear';
                    zs.transform=zs.webkitTransform='translate('+x+'px,'+y+'px)';
                    i.style.transform=i.style.webkitTransform=(a>x)?'':'scaleX(-1)';
                    a=x;b=y;
                    setTimeout(A,d);
                };setTimeout(A,r()*3e3);
                })();
            </script>
        <?php
    }
}
add_action('wp_footer', 'wpb_hook_javascript');
