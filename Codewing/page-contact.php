<?php 
//Template Name: Contact Page Template

get_header(); ?>
<div class="container" style="margin-bottom:20px; padding-top:0 !important">

    <div class="comments-area" itemscope="" itemtype="http://schema.org/Comment" style="padding-top:0 !important">
        <h2 class="">Contact Us</h2>

        <div class="comment-respond">

            <form class="comment-form" method="POST" action="<?php echo home_url('/') ?>" enctype="multipart/form-data"  >
            <p class="comment-form-author">
                    <label for="author">Name<span class="required">*</span></label>
                    <input id="fullname" name="fullname" required="required" placeholder="Name*" type="text">
                </p>
                <p class="comment-form-email">
                    <label for="email">Email<span class="required">*</span></label>
                    <input id="email" name="email" required="required" placeholder="Email*" type="email">
                </p>
                
                <p class="comment-form-comment">
                    <label for="comment">Message</label>
                    <textarea id="message" name="message" cols="40" rows="8" required="required" placeholder="Comment*"></textarea>
                </p>
               
                <p class="form-submit">
                    <button  name="form_submit" value="Send Feedback" type="submit">Send</button>
                </p>
            </form>
        </div>
    </div>
</div>

<?php get_footer()?>