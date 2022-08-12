(function() {
    if( document.querySelector( '.js-sections-teaching' ) ) {
        const items = document.getElementsByClassName( 'js-items-teaching' )
        const sections = document.getElementsByClassName( 'js-sections-teaching' )
    
        sections[0].classList.add( 'd-block' )
        sections[0].classList.remove( 'd-none' )
    
        for( const i of items ) {
            i.addEventListener( 'click', function() {
                for( const j of sections ) {
                    if( this.dataset.value == j.dataset.value ) {
                        j.classList.add( 'd-block' )
                        j.classList.remove( 'd-none' )
                    } else {
                        j.classList.remove( 'd-block' )
                        j.classList.add( 'd-none' )
                    }
                }
    
                for( const k of items ) {
                    k.classList.remove( 'active' ) 
                }
    
                this.classList.add( 'active' )
            })
        }
    } 
})()