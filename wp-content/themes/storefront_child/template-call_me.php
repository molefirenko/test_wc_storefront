<div id="callmeModal" style="display:none;"><?php echo do_shortcode('[contact-form-7 id="12" title="Call me"]'); ?></div>

<script>
    var modalFormCallme = new jBox('Modal', {
        width: 400,
        height: 380,
        attach: '#callmeButton',
        title: '<?php echo _e('Call me', 'storefrontchild'); ?>',
        content: jQuery('#callmeModal')
    });

    var wpcf7Elm = document.querySelector( '.wpcf7' );

    wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
        modalFormCallme.close()
        }, false 
    );
</script>