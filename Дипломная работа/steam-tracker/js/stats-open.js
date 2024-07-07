let containers = document.querySelectorAll('.stats-container .stats-container__content');
let containersHeaders = document.querySelectorAll('.stats-container .content-container--header');
let wrapButtons = document.querySelectorAll('.stats-container .unwrap-content-icon');

const statsTimeout = 200;

for(let i = 0; i < wrapButtons.length; i++){
    wrapButtons[i].addEventListener("click", function() {
        this.classList.toggle("wrap");
        let content = containers[i];
        let header = containersHeaders[i];
        if(content.style.maxHeight){
            content.style.maxHeight = null;
            setTimeout(function () {
                content.style.display = "none";
                header.style.marginBottom = "0";
            }, statsTimeout - 10);
        }
        else{
            content.style.display = "block";
            header.style.marginBottom = "20px";
            content.style.maxHeight = content.scrollHeight + 'px';
        }
    });
}