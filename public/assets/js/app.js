//val itu kita mengambil value dari element yang memiliki id title
function createSlug(){
    let title = $('#title').val();
//skrng pindahin value dari title kdlm slug kita seleksi pake jquery,fungsi string_to_slug stiap value yg d isi
//dikategory dngn id title  ke dlm slug melalui fungsi string to slug
    $('#slug').val(string_to_slug(title));
}

function string_to_slug (str) {
    str = str.replace(/^\s+|\s+$/g, ''); // trim
    str = str.toLowerCase();
  
    // remove accents, swap ñ for n, etc
    var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
    var to   = "aaaaeeeeiiiioooouuuunc------";
    for (var i=0, l=from.length ; i<l ; i++) {
        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
    }

    str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
        .replace(/\s+/g, '-') // collapse whitespace and replace by -
        .replace(/-+/g, '-'); // collapse dashes

    return str;
}