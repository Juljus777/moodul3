let title = document.getElementsByClassName('modal-title')[0];
let body = document.getElementsByClassName('modal-body')[0];
let link = document.getElementsByClassName('confirmDelete')[0];

function deleteAdmin(adminId, adminName){
    link.href = '/admin/administrators/' + adminId + '/delete';
    title.innerHTML = adminName;
    body.innerHTML = 'Kas olete kindlad, et soovite eemaldada administraatorit: ' + '<b>' + adminName + '</b>';
}

function copyLink(){
    let link = document.getElementById('generatedLink');
    link.focus();
    link.select();
    link.setSelectionRange(0, 99999);
    document.execCommand("copy");
    link.classList.add('border-success');
}

function deleteProduct(productId, productName){
    link.href = '/admin/products/' + productId + '/delete';
    title.innerHTML = productName;
    body.innerHTML = 'Kas olete kindlad, et soovite kustutada toodet: ' + '<b>' + productName + '</b>';
    body.innerHTML+= '<br/>' + '<b class="text-danger"> Teie valik on lõplik ja kustutatud toodet ei saa tagasi.</b>'
}
