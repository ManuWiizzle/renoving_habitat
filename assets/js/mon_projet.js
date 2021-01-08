$(document).ready(() => {
    // uncheck all checkbox on page load
    let checkboxes = document.getElementsByTagName('input');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].type == 'checkbox') {
            checkboxes[i].checked = false;
        }
    }

    let forms = [
        document.querySelector('#formCouverture'),
        document.querySelector('#formRavalement'),
        document.querySelector('#formChauffage'),
        document.querySelector('#formTerrassement'),
        document.querySelector('#formTravauxInterieur'),
        document.querySelector('#formSalleDeBain'),
    ];

    let elementsArray = document.getElementsByClassName("form-check-input");

    elementsArray.forEach(function (elem, index) {
        elem.addEventListener("change", function () {
            controlForm(elem, index)
        });
    });

    function controlForm(elem, index) {
        if (elem.checked) {
            showElement(index)
        } else {
            hideElement(index);
        }
    }

    function showElement(index) {
        elementsArray.forEach(function (elem, i) {
            if (index === i) {
                forms[i].style.display = 'block';
            }
        });
    }

    function hideElement(index) {
        elementsArray.forEach(function (elem, i) {
            if (index === i) {
                forms[i].style.display = 'none';
            }
        });
    }
});
