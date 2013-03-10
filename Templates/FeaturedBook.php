<div class="featuredBook">
    <div>
        <a class="button" href="{@detail_url}">
            <img src="{@book_image}" alt="{@name}">
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
    <p>{@book_description}</p>
</div>