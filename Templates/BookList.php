<div class="bookListPod">
    <div class="bookListImg">
        <a class="button" href="{@detail_url}">
            <img src="<?php echo pods_image_url( $obj->field( 'book_image' ), array( 134, 210 ), 0, true )  ?>" alt="{@title}" />
        </a>
    </div>
    <div class="bookListText">
        <h4>{@name}</h4>
        <?php if ( 0 < strlen( $obj->field( 'genre' ) ) ) { ?>
            <h6>{@genre}</h6>
        <?php } ?>
        <p>
            <?php if ( 0 < strlen( $obj->field( 'publisher' ) ) ) { ?>
                {@publisher}
            <?php } ?>
            <?php if ( 0 < strlen( $obj->field( 'publisher' ) ) && 0 < strlen( $obj->field( 'publish_date' ) ) ) { ?>
                 / 
            <?php } ?>
            <?php if ( 0 < strlen( $obj->field( 'publish_date' ) ) ) { ?>
                {@publish_date}
            <?php } ?>
            <?php if ( 0 < strlen( $obj->field( 'publish_date' ) ) && 0 < strlen( $obj->field( 'format' ) ) ) { ?>
                 / 
            <?php } ?>
            <?php if ( 0 < strlen( $obj->field( 'format' ) ) ) { ?>
                {@format}
            <?php } ?>
        </p>
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
                        <li><a target="_blank" href="{@cbdcom_link}" class="buttonBookstore buttonCBD">CBD.com</a></li>
                    <?php } ?>
                    <?php if ( 0 < strlen( $obj->field( 'lifewaycom_link' ) ) ) { ?>
                        <li><a target="_blank" href="{@lifewaycom_link}" class="buttonBookstore buttonLIFEWAY">LIFEWAY.com</a></li>
                    <?php } ?>
                    <?php if ( 0 < strlen( $obj->field( 'familychristiancom_link' ) ) ) { ?>
                        <li><a target="_blank" href="{@familychristiancom_link}" class="buttonBookstore buttonFAMILY">FamilyChristian.com</a></li>
                    <?php } ?>
                    <?php if ( 0 < strlen( $obj->field( 'parablecom_link' ) ) ) { ?>
                        <li><a target="_blank" href="{@parablecom_link}" class="buttonBookstore buttonPARABLE">Parable.com</a></li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>