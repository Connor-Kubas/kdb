const searchBar = document.getElementById('search');
const width = searchBar.offsetWidth;
const widthExpanded = 300;
searchBar.value = '';

async function grow() {
    if (searchBar.offsetWidth <= width) {
        searchBar.style.backgroundImage = 'none';
        for (let i = 0; i <= widthExpanded; i+= 30) {
            searchBar.style.width = width + i + "px";
            await sleep(1);
        }
    }
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}    

function expandWithText() {
    const padding = 20;
    let width = searchBar.style.width.replace('px', '');
    let desiredWidth = searchBar.scrollWidth - padding;

    if (width < desiredWidth) {
        searchBar.style.width = desiredWidth + 'px';
    }
}