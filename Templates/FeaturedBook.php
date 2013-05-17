<div class="featuredBook">
    <div>
        <?php if ( 0 < strlen( $obj->field( 'book_image' ) ) ) { ?>
        <a class="button" href="{@detail_url}">
            <img src="<?php echo pods_image_url( $obj->field( 'book_image' ), array( 200, 300 ), 0, true )  ?>" alt="{@title}" />
        </a>
        <?php } ?>
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
    <p>{@book_description}</p>
</div>