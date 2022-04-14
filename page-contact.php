<?php get_header(); ?>

<main id="main" class="grid-container grid-y">

    <h2 class="cell text-center medium-text-right"><?php echo the_field('heading') ?></h2>

    <p class="text-center medium-text-right">
        <a href="mailto:<?php echo the_field('email') ?>"><?php echo the_field('email') ?></a>
        <br>
        <a href="tel:<?php echo the_field('phone') ?>"><?php echo the_field('phone') ?></a>     
        <br>
        <a download href="<?php echo site_url( '/wp-content/themes/portfoliowebsite/files/vcard.vcf' ); ?>"><?php echo the_field('download') ?></a>
        <br>
        <?php echo the_field('paragraph') ?>
    </p>

    <ul class="tabs grid-x align-center text-center" data-tabs id="tabs">
        <li class="small-3 text-center align-self-middle"> <i
                class="fi-mail"></i></li>
        <li class="tabs-title is-active small-3"><a href="#panel1"
                aria-selected="true"><h3>Employment</h3></a></li>
        <li class="tabs-title small-3"><a data-tabs-target="panel2"
                href="#panel2"><h3>Purchase</h3></a></li>
        <li class="tabs-title small-3"><a data-tabs-target="panel3"
                href="#panel3"><h3>Enquiry</h3></a></li>
    </ul>

    <div class="tabs-content" data-tabs-content="tabs">

        <div class="tabs-panel is-active" id="panel1">

            <form class="text-center" action="./php/form-1.php" id="form-1" method="post">
            
                <fieldset class="grid-x text-left">
                <legend id="response-1" class="cell">Employment Form</legend>
                    <label class="cell small-6 medium-4">
                        First name
                        <input autocomplete="on" required type="text" name="first-name" maxlength="20">
                    </label>
                    <label class="cell small-6 medium-4">
                        Last name
                        <input autocomplete="on" required type="text" name="last-name" maxlength="20">
                    </label>
                    <label for="email-1" class="cell">
                        Email 
                    </label>          
                    <input id="email-1" class="cell small-6 medium-5" autocomplete="on" required name="email" type="email" maxlength="40">
                    <label for="tel-1" class="cell">
                        Phone
                    </label>           
                    <input id="tel-1" class="cell small-6 medium-5" autocomplete="on" required name="phone" type="tel" pattern="[+]?[0-9]{3,15}" title="Accepts +###############">
                    <label class="cell">
                        Position description
                        <textarea required name="text" rows="5" maxlength="1000"></textarea>
                    </label>
                </fieldset>

                <input type="hidden" name="action" value="submit_form_1">
                <input id="submit-1" aria-label="Form submit" type="submit" class="button" value="Submit">

            </form>

        </div>

        <div class="tabs-panel" id="panel2">

            <form class="text-center" action="./php/form-2.php" id="form-2" method="post">

                <fieldset class="grid-x text-left">
                <legend id="response-2" class="cell">Purchase Form</legend>
                    <label class="cell small-6 medium-4">
                        First name
                        <input autocomplete="on" required type="text" name="first-name" maxlength="20">
                    </label>
                    <label class="cell small-6 medium-4">
                        Last name
                        <input autocomplete="on" required type="text" name="last-name" maxlength="20">
                    </label>
                    <label for="email-2" class="cell">
                        Email
                    </label>               
                    <input id="email-2" class="cell small-6 medium-5" autocomplete="on" required name="email" type="email" maxlength="40">
                    <label for="phone-2" class="cell">
                        Phone
                    </label>           
                    <input id="phone-2" class="cell small-6 medium-5" autocomplete="on" required name="phone" type="tel" pattern="[+]?[0-9]{3,15}" title="Accepts +###############">
                    <label class="cell">
                        Outside Australia
                        <input type="checkbox" name="outside-aus">
                    </label>
                    <label class="cell large-3">
                        Street address   
                        <input required type="text" name="street" maxlength="40">
                    </label>
                    <label class="cell large-3">
                        Suberb  
                        <input required type="text" name="suberb" maxlength="40">
                    </label>
                    <label class="cell small-6 large-3">
                        City   
                        <input required type="text" name="city" maxlength="40">
                    </label>
                    <label class="cell small-6 large-3">
                        Post code   
                        <input required type="text" name="post-code" maxlength="20">
                    </label>
                    <label class="cell">
                        Purchase details
                        <textarea required name="text" rows="5" maxlength="1000"></textarea>
                    </label> 
                </fieldset>

                <input type="hidden" name="action" value="submit_form_2">
                <input id="submit-2" aria-label="Form submit" type="submit" class="button" value="Submit">      

            </form>

        </div>

        <div class="tabs-panel" id="panel3">

            <form class="text-center" action="./php/form-3.php" id="form-3" method="post">

                <fieldset class="grid-x text-left">
                <legend id="response-3" class="cell">Enquiry Form</legend>
                    <label class="cell small-6 medium-4">
                        First name
                        <input autocomplete="on" required type="text" name="first-name" maxlength="20">
                    </label>
                    <label class="cell small-6 medium-4">
                        Last name
                        <input autocomplete="on" required type="text" name="last-name" maxlength="20">
                    </label>
                    <label for="email-3" class="cell">
                        Email
                    </label>               
                    <input id="email-3" class="cell small-6 medium-5" autocomplete="on" required name="email" type="email" maxlength="40">
                    <label for="phone-3" class="cell">
                        Phone
                    </label>           
                    <input id="phone-3" class="cell small-6 medium-5" autocomplete="on" required name="phone" type="tel" pattern="[+]?[0-9]{3,15}" title="Accepts +###############">
                    <label class="cell">
                        Enquiry
                    <textarea required name="text" rows="5" maxlength="1000"></textarea>
                    </label> 
                </fieldset>

                <input type="hidden" name="action" value="submit_form_3">
                <input id="submit-3" aria-label="Form submit" type="submit" class="button">

            </form>

        </div>

    </div>           

    <div class="grid-x align-center text-right">
        <blockquote class="cell small-10 medium-6">
        <?php echo the_field('quote') ?><cite><?php echo the_field('cite') ?></cite>
        </blockquote>
    </div>


</main>

<?php get_footer(); ?>