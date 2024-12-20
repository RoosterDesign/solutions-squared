function showReveal() {
  const slideDuration = 600;
  const scrollDuration = 1000;

  // Get the current header height for the scroll offset
  getOffset = () => document.querySelector('.site-header').offsetHeight;

  // Check if there are any blocks in the group open
  anyOpen = (parentBlockId) =>  jQuery('.reveal-block[data-parent='+parentBlockId+']').hasClass('-isOpen');

  // Open specific block based on button clicked on
  openSepcificBlock = (revealBlock) => revealBlock.slideDown(slideDuration).addClass('-isOpen');

  // Close all open blocks of a group
  closeAllBlocks = (parentBlockId, revealBlock) =>  jQuery('.reveal-block.-isOpen[data-parent='+parentBlockId+']').slideUp(slideDuration, function() { openSepcificBlock(revealBlock) }).removeClass('-isOpen');

  //  Add active class
  addActiveClass = openBtn => openBtn.classList.add('-isActive');

  //  Remove active class
  removeActiveClass = (parentBlockId) => {
    console.log('parentBlockId', parentBlockId);
    jQuery('.js-reveal-link[data-link-parent='+parentBlockId+']').removeClass('-isActive');
  }


  //  Remove default button class
  removeDefaultClass = () => jQuery('.js-reveal-link').removeClass('-isDefault');

  // Scroll to reveal block
  scrollToReveal = parentBlockId => {
    const targetEl = jQuery('#'+parentBlockId);
    const bottomofEl = targetEl.position().top + targetEl.outerHeight() - getOffset();
    jQuery("html, body").animate({ scrollTop: bottomofEl }, scrollDuration);
  };

  // Scroll back to parent block
  scrollToParent = parentBlockId => jQuery("html, body").animate({ scrollTop: jQuery('#'+parentBlockId).offset().top - getOffset() }, scrollDuration);

  // Open reveal block
  openReveal = (revealBlock, parentBlockId, scrollToBlock = true) => {
    if(anyOpen(parentBlockId)) {
      closeAllBlocks(parentBlockId, revealBlock)
    } else {
      openSepcificBlock(revealBlock)
    };
    if(scrollToBlock) {
        scrollToReveal(parentBlockId);
    }
  };

  closeReveal = (revealBlock, parentBlockId) => {
    revealBlock.removeClass('-isOpen');
    revealBlock.slideUp(slideDuration).removeClass('-isOpen');
    scrollToParent(parentBlockId);
  };


  // Open default reveal block
  const defaultRevealBlock = jQuery('.reveal-block.-isDefault');
  const parentBlockId = jQuery('.reveal-block.-isDefault')[0].getAttribute('data-parent');
  openReveal(defaultRevealBlock, parentBlockId, false);




  // ====================
  // CLICK EVENTS
  // ====================

  // On Open Click Event
  const revealLinks = document.querySelectorAll('.js-reveal-link');
  for (let i = 0; i < revealLinks.length; i++) {
    const openBtn = revealLinks[i];
    openBtn.addEventListener('click', e => {
      e.preventDefault();
      const parentBlockId = openBtn.getAttribute('data-link-parent');
      const linkRef = openBtn.hash.substr(1);
      const revealBlock = jQuery('[data-reveal='+linkRef+']');

      if(!jQuery(openBtn).hasClass('-isActive')) {
        openReveal(revealBlock, parentBlockId);
        removeActiveClass(parentBlockId);
        addActiveClass(openBtn);
      };
    });
  };


  // On Close Click Event
  const revealClose = document.querySelectorAll('.js-close-reveal');
  for (let i = 0; i < revealClose.length; i++) {
    const closeEl = revealClose[i];
    const revealBlock = jQuery(closeEl.parentNode);
    const parentBlockId = closeEl.parentNode.getAttribute('data-parent');
    closeEl.addEventListener('click', () => {
      removeActiveClass(parentBlockId);
      closeReveal(revealBlock, parentBlockId);
    });
  };
};

jQuery(document).ready(function($) {
  showReveal();
});
