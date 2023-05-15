const modal = document.querySelector("#blogModal");

if(modal){
    const btn = document.querySelector(".modalButton");
    const iframe = document.querySelector('iframe');

    const URL = 'https://www.youtube.com/embed/yagCTWz-sjk?autoplay=1';
    btn.addEventListener('click',function (e){
        modal.style.display = "block";
        iframe.setAttribute('src',URL);
        console.log('Daa')
    })

    window.onclick = function(event) {
        if (event.target === modal) {
            iframe.setAttribute('src','#');
            modal.style.display = "none";
        }
    }

    document.addEventListener('keydown', evt => {
        if (evt.key === 'Escape') {

            modal.style.display = "none";
            iframe.setAttribute('src','#');
        }
    });
}
