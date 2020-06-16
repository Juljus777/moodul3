function scrollToTop(){
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
function addToCart(itemId){
    let itemCounter = document.getElementById('cartItemCounter');
    let modal = document.getElementById('modalBody');
    let modalContent = document.getElementById('modalContent');
    fetch('/addCart?product=' + itemId).then(function (response) {
        response.text().then(function (text){
            if(response.ok){
                modal.classList.remove('bg-danger');
                modal.classList.add('bg-success');
                modalContent.innerHTML = 'Toode on lisatud ostukorvi';
                itemCounter.innerHTML = Number(itemCounter.innerHTML)+1;
                $('#addToCartModal').modal('show');
                setTimeout(function(){
                    $('#addToCartModal').modal('hide');
                }, 1000);

            } else {
                modal.classList.add('bg-danger');
                modal.classList.remove('bg-success');
                modalContent.innerHTML = 'Toodet ei saa rohkem ostukorvi lisada';
                $('#addToCartModal').modal('show');
                setTimeout(function(){
                    $('#addToCartModal').modal('hide');
                }, 1000);
            }
        })
    }).catch(function() {

    });
}
function toggleNavLine(){
    let navline = document.getElementsByClassName('nav-line')[0];
    if(navline.classList.contains('visible')){
        navline.classList.remove('visible');
        navline.classList.add('invisible');
    }
    else{
        setTimeout(function(){
            navline.classList.remove('invisible');
            navline.classList.add('visible');
        }, 300);

    }
}
