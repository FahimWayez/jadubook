function searchBooks() {
    var input, filter, sections, section, h2, i, txtValue;
    input = document.getElementById('search-box');
    filter = input.value.toUpperCase();
    sections = document.getElementsByTagName('section');

    for (i = 0; i < sections.length; i++) {
        section = sections[i];
        h2 = section.getElementsByTagName('h2')[0];
        txtValue = h2.textContent || h2.innerText;

        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            section.style.display = '';
        } else {
            section.style.display = 'none';
        }
    }
}