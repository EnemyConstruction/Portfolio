let swapContainers = document.querySelectorAll('.js-swap-container');

for(let swapContainer of swapContainers){
    let swapElements =  swapContainer.querySelectorAll('.js-swap-container > *');
    for(let swapElement of swapElements){
        swapElement.addEventListener('click', function (evt) {
            evt.preventDefault();
            let activeItem = document.querySelector('.js-swap-container .active'); 
            activeItem.classList.remove('active');
            swapElement.classList.add('active');
        })
    }
}