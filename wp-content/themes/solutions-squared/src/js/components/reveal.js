function showReveal() {
  const slideDuration = 400;
  const scrollDuration = 1000;
  let blockHasOpen = false;


  // Get the current header height for the scroll offset
  function getOffset() {
    return document.querySelector('.site-header').offsetHeight;
  }


  // Check if there are any blocks in the group open
  function anyOpen(parentBlockId) {
    return jQuery('.reveal-block[data-parent='+parentBlockId+']').hasClass('-isOpen');
  }


  // Open specific block based on button clicked on
  function openSepcificBlock(revealBlock) {
    // if (!revealBlock.hasClass('-isOpen')) {
    revealBlock.css('opacity', 0).slideDown(slideDuration).animate( { opacity: 1 }, { queue: false, duration: 'slow' } );
    // }
    // jQuery("html, body").animate({ scrollTop: revealBlock.offset().top - getOffset() }, scrollDuration);
    revealBlock.addClass('-isOpen');
  }


  // Close all open blocks of a group
  function closeAllBlocks(parentBlockId, revealBlock) {
    jQuery('.reveal-block.-isOpen[data-parent='+parentBlockId+']').slideUp(slideDuration).animate( {
      opacity: 0
    },
    {
      queue: false,
      duration: 'slow',
      complete: function() {
        openSepcificBlock(revealBlock)
      }
    } ).css('opacity', 0).removeClass('-isOpen');
  }


  
  function open(revealBlock, parentBlockId) {

    console.info(anyOpen(parentBlockId));

    if(anyOpen(parentBlockId)) {
      closeAllBlocks(parentBlockId, revealBlock)
    } else {
      openSepcificBlock(revealBlock)
    }

    
    // blockHasOpen = true;

    // if(blockHasOpen) {
    //   console.info('CLOSE ALL FIRST')      
    //   jQuery('.reveal-block.-isOpen').removeClass('-isOpen');
    //   blockHasOpen = false;
    // } else {
    //   console.info('nothing open, open this one');
    //   if (!revealBlock.hasClass('-isOpen')) {
    //     revealBlock.css('opacity', 0).slideDown(slideDuration).animate( { opacity: 1 }, { queue: false, duration: 'slow' } );
    //   }
    //   jQuery("html, body").animate({ scrollTop: revealBlock.offset().top - getOffset() }, scrollDuration);
    //   revealBlock.addClass('-isOpen');
    //   blockHasOpen = true;
    // }

    // if any others are open, close them first
      // else open this one

    // jQuery('.reveal-block.-isOpen[data-parent=block1]').slideUp(slideDuration).animate( { opacity: 0 }, { queue: false, duration: 'slow' } ).css('opacity', 0);
    // jQuery('.reveal-block.-isOpen[data-parent=block1]').removeClass('-isOpen');

    
    // if (!revealBlock.hasClass('-isOpen')) {
    //   revealBlock.css('opacity', 0).slideDown(slideDuration).animate( { opacity: 1 }, { queue: false, duration: 'slow' } );
    // }
    // jQuery("html, body").animate({ scrollTop: revealBlock.offset().top - getOffset() }, scrollDuration);
    // revealBlock.addClass('-isOpen');

  }




  function close(revealBlock, parentBlockId) {
    const parentBlock = jQuery('#'+parentBlockId);

    revealBlock.removeClass('-isOpen');
    revealBlock.slideUp(slideDuration).animate( { opacity: 0 }, { queue: false, duration: 'slow' } ).css('opacity', 0);
    
    // jQuery("html, body").animate({ scrollTop: parentBlock.offset().top - getOffset() }, scrollDuration);

  }  

  //  Remove active class from buttons
  function removeActiveClass() {
    jQuery('.js-reveal-link').removeClass('-isActive');
  }

  // Open
  const revealLinks = document.querySelectorAll('.js-reveal-link');  
  for (let i = 0; i < revealLinks.length; i++) {
    const openEl = revealLinks[i];

    openEl.addEventListener('click', e => {
      e.preventDefault();
      const parentBlockId = openEl.getAttribute('data-link-parent');
      const linkRef = openEl.hash.substr(1);      
      const revealBlock = jQuery('[data-reveal='+linkRef+']');

      
      if( !jQuery(openEl).hasClass('-isActive')) {
        open(revealBlock, parentBlockId);
        removeActiveClass();
        openEl.classList.add('-isActive');
      }
      
    });
  }


  // Close
  const revealClose = document.querySelectorAll('.js-close-reveal');  
  for (let i = 0; i < revealClose.length; i++) {
    const closeEl = revealClose[i];
    const revealBlock = jQuery(closeEl.parentNode);
    const parentBlockId = closeEl.parentNode.getAttribute('data-parent');
    
    closeEl.addEventListener('click', () => {
      removeActiveClass();
      close(revealBlock, parentBlockId);
    });    
  };

}

jQuery(document).ready(function($) {
  showReveal();
});