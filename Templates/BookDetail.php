<div class="bookDetail">
    <div class="book_image">
        <a href="books/{@permalink}">
            <img src="<?php echo pods_image_url( $obj->field( 'book_image' ), array( 250, 381 ), 0, true )  ?>" alt="{@title}" />
        </a>
    </div>
    <div class="header">
        <?php if ( 0 < strlen( $obj->field( 'name' ) ) ) { ?>
            <h1>{@name}</h1>
        <?php } ?>
        <?php if ( 0 < strlen( $obj->field( 'isbn_10' ) ) ) { ?>
            <p>ISBN 10: <span>{@isbn_10}</span></p>
        <?php } ?>
        <?php if ( 0 < strlen( $obj->field( 'isbn_13' ) ) ) { ?>
            <p>ISBN 13: <span>{@isbn_13}</span></p>
        <?php } ?>
    </div>

    <div class="main-content">
        <p>{@book_description}</p>
    </div>

    <div class="footer">
        <a href="<?php echo get_bloginfo ( 'url' );  ?>/books">Back to Books</a>
    </div>

    <div class="overlayWindowWrapper">
        <a href="#" rel="#{@permalink}" alt="Take a Chance on Me" target="_blank" class="btnBuyNow" data-bookid="take-a-chance-on-me">Buy Now!</a>
        <!-- first overlay. id attribute matches our selector -->
        <div class="simple_overlay" id="{@permalink}">
            <div class="title">
                <h1>Buy <span>{@title}</span> now from these fine book sellers!</h1>
            </div>
            <div class="left">
                <?php if ( 0 < strlen( $obj->field( 'book_image' ) ) ) { ?>
                <img src="<?php echo pods_image_url( $obj->field( 'book_image' ), array( 134, 210 ), 0, true )  ?>" alt="{@title}" />
                <?php } ?>
            </div>
            <div class="right">
                <ul class="bookstoreLinks">
                <?php if ( 0 < strlen( $obj->field( 'amazoncom_link' ) ) ) { ?>
                    <li><a target="_blank" href="{@amazoncom_link}" class="buttonBookstore buttonAmazon">Amazon</a></li>
                <?php } ?>
                <?php if ( 0 < strlen( $obj->field( 'bncom_link' ) ) ) { ?>
                    <li><a target="_blank" href="{@bncom_link}" class="buttonBookstore buttonBN">BN.com</a></li>
                <?php } ?>
                <?php if ( 0 < strlen( $obj->field( 'cbdcom_link' ) ) ) { ?>
                    <li><a target="_blank" href="{@cbdcom_link}"><img width="110" style="border:none;" src="<?php echo get_bloginfo ( 'template_directory' );  ?>/images/jhc_books/cbd-logo.png"></a></li>
                <?php } ?>
                <?php if ( 0 < strlen( $obj->field( 'lifewaycom_link' ) ) ) { ?>
                    <li><a target="_blank" href="{@lifewaycom_link}"><img style="border:none;" src="<?php echo get_bloginfo ( 'template_directory' );  ?>/images/jhc_books/lifeway-logo.png"></a></li>
                <?php } ?>
                <?php if ( 0 < strlen( $obj->field( 'familychristiancom_link' ) ) ) { ?>
                    <li><a target="_blank" href="{@familychristiancom_link}"><img style="border:none;" src="<?php echo get_bloginfo ( 'template_directory' );  ?>/images/jhc_books/family-christian-logo.png"></a></li>
                <?php } ?>
                <?php if ( 0 < strlen( $obj->field( 'parablecom_link' ) ) ) { ?>
                    <li><a target="_blank" href="{@parablecom_link}"><img style="border:none;" src="<?php echo get_bloginfo ( 'template_directory' );  ?>/images/jhc_books/parable-logo.png"></a></li>
                <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>