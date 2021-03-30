const revealLinks = document.querySelectorAll('.js-reveal-link');

for (let i = 0; i < revealLinks.length; i++) {
  const linkEl = revealLinks[i];

  linkEl.addEventListener('click', e => {
    e.preventDefault();
    const linkRef = linkEl.hash.substr(1);
    console.info({linkRef});

    document.querySelector('[data-reveal='+linkRef+']').style.display = 'block';

  })

  


  
}