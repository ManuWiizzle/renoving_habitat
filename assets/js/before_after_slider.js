let beforeArray =
    [
        require('../images/homepage/imgbf1_1.jpeg'),
        require('../images/homepage/imgbf2_1.png'),
        require('../images/homepage/imgbf3_1.jpg'),
        require('../images/homepage/imgbf4_1.jpg'),
    ];

let afterArray =
    [
        require('../images/homepage/imgbf1_2.jpeg'),
        require('../images/homepage/imgbf2_2.jpeg'),
        require('../images/homepage/imgbf3_2.jpg'),
        require('../images/homepage/imgbf4_2.jpg'),
    ];

let photoArrayIndex = 0;

document.getElementById("nextImageButton").addEventListener("click", () => {
    switchImage('next')
});
document.getElementById("prevImageButton").addEventListener("click", () => {
    switchImage('prev')
});

function switchImage(direction){
    if(direction === 'next'){
        if(photoArrayIndex === beforeArray.length - 1){
            photoArrayIndex = 0;
        }else{
            photoArrayIndex++;
        }
    }else{
        if(photoArrayIndex === 0){
            photoArrayIndex = beforeArray.length - 1;
        }else{
            photoArrayIndex--;
        }
    }
    removeElem();
    refreshSlider();
}

function removeElem(){
    let elem = document.getElementsByClassName('jx-slider')[0];
    elem.parentNode.removeChild(elem);
}

function refreshSlider(){
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
