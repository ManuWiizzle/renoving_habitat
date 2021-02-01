let beforeImage = JSON.parse(siteImage.dataset.before);
let afterImage = JSON.parse(siteImage.dataset.final);
let beforeArray = [];
beforeImage.forEach(function (image) {
    beforeArray.push('images/site/' + image.imageName,
    );
});

let afterArray = [];
afterImage.forEach(function (image) {
    afterArray.push('images/site/' + image.imageName
    );
});

let photoArrayIndex = 0;

document.getElementById("nextImageButton").addEventListener("click", () => {
    switchImage('next')
});
document.getElementById("prevImageButton").addEventListener("click", () => {
    switchImage('prev')
});

function switchImage(direction) {
    if (direction === 'next') {
        if (photoArrayIndex === beforeArray.length - 1) {
            photoArrayIndex = 0;
        } else {
            photoArrayIndex++;
        }
    } else {
        if (photoArrayIndex === 0) {
            photoArrayIndex = beforeArray.length - 1;
        } else {
            photoArrayIndex--;
        }
    }
    removeElem();
    refreshSlider();
}

function removeElem() {
    let elem = document.getElementsByClassName('jx-slider')[0];
    elem.parentNode.removeChild(elem);
}

function refreshSlider() {
    slider = new juxtapose.JXSlider('#slider',
        [
            {
                src: beforeArray[photoArrayIndex],

            },
            {
                src: afterArray[photoArrayIndex],

            }
        ],

        {
            animate: true,
            showLabels: true,
            showCredits: false,
            startingPosition: "50%",
            makeResponsive: true
        });

}

refreshSlider();
