<?php
/**
 * Template Name: Page Commander
 */

get_header();
?>

<div class="commander-background">
    <div class="commander-container">
        <div class="command-title">
            <h1>COMMANDER</h1>
        </div>
        <div class="command-separator"></div>
        <h2>Votre commande</h2>

        <form method="post" action="">
            <div class="products-grid">
                <div class="product">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fraise.png" alt="Fraise">
                    <div class="quantity">
                        <input type="number" name="quantity_fraise" value="0" min="0" step="1">
                        <div class="quantity-controls">
                            <input type="button" value="-" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <input type="button" value="+" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        </div>
                        <div class="quantity-ok">
                            <input type="submit" value="OK">
                        </div>
                    </div>
                </div>

                <div class="product">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pamplemousse.png" alt="Pamplemousse">
                    <div class="quantity">
                        <input type="number" name="quantity_pamplemousse" value="0" min="0" step="1">
                        <div class="quantity-controls">
                            <input type="button" value="-" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <input type="button" value="+" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        </div>
                        <div class="quantity-ok">
                            <input type="submit" value="OK">
                        </div>
                    </div>
                </div>
                
                <div class="product">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/framboise.png" alt="Framboise">
                    <div class="quantity">
                        <input type="number" name="quantity_framboise" value="0" min="0" step="1">
                        <div class="quantity-controls">
                            <input type="button" value="-" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <input type="button" value="+" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        </div>
                        <div class="quantity-ok">
                            <input type="submit" value="OK">
                        </div>
                    </div>
                </div>

                <div class="product">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/citron.png" alt="Citron">
                    <div class="quantity">
                        <input type="number" name="quantity_citron" value="0" min="0" step="1">
                        <div class="quantity-controls">
                            <input type="button" value="-" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <input type="button" value="+" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        </div>
                        <div class="quantity-ok">
                            <input type="submit" value="OK">
                        </div>
                    </div>
                </div>
            </div>

            <div class="command-separator"></div>

            <div class="form-columns">
                <div class="form-column">
                    <div class="order-info">
                        <h2>Vos informations</h2>
                        <label for="name">Nom</label>
                        <input type="text" id="name" name="name" required>

                        <label for="prenom">Prénom</label>
                        <input type="text" id="prenom" name="prenom">

                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>

                <div class="form-column">
                    <div class="delivery-info">
                        <h2>Livraison</h2>
                        <label for="address">Adresse de livraison</label>
                        <input type="text" id="address" name="address" required>

                        <label for="postal-code">Code postal</label>
                        <input type="text" id="postal-code" name="postal-code" required>

                        <label for="city">Ville</label>
                        <input type="text" id="city" name="city" required>
                    </div>
                </div>
            </div>
            <div class="submit-order">
                <input type="submit" name="submit_order" value="Commander">
            </div>
        </form>
    </div>
</div>

<?php
// Handle form submission
if (isset($_POST['submit_order'])) {
    $quantity_fraise = intval($_POST['quantity_fraise']);
    $quantity_pamplemousse = intval($_POST['quantity_pamplemousse']);
    $quantity_framboise = intval($_POST['quantity_framboise']);
    $quantity_citron = intval($_POST['quantity_citron']);

    $name = sanitize_text_field($_POST['name']);
    $prenom = sanitize_text_field($_POST['prenom']);
    $email = sanitize_email($_POST['email']);
    $address = sanitize_text_field($_POST['address']);
    $postal_code = sanitize_text_field($_POST['postal-code']);
    $city = sanitize_text_field($_POST['city']);

    // Construct the email message
    $message = "Commande de $name $prenom\n\n";
    $message .= "Fraise: $quantity_fraise\n";
    $message .= "Pamplemousse: $quantity_pamplemousse\n";
    $message .= "Framboise: $quantity_framboise\n";
    $message .= "Citron: $quantity_citron\n";

    $message .= "\nLivraison à:\n$address\n$postal_code $city\n";

    // Send the email
    $sent = wp_mail('planty.drinks@gmail.com', 'Nouvelle commande', $message);

    if ($sent) {
        echo '<p>Merci pour votre commande !</p>';
    } else {
        echo '<p>Une erreur est survenue, veuillez réessayer.</p>';
    }
}

get_footer();
?>
