document.addEventListener('DOMContentLoaded', function() {
    let disabler = document.getElementById("menu_item_disabler");
    if(disabler !== null) {
        let target_id = disabler.value;
        let element = document.getElementById(target_id);
        element.firstElementChild.classList.add('force_red_underline');
        element.classList.add('active');
    }
});
