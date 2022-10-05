const searchBar = document.getElementById('search');
const width = searchBar.offsetWidth;
const widthExpanded = 400;

    async function grow() {
        if (searchBar.offsetWidth <= width) {
            searchBar.style.backgroundImage = 'none';
            for (let i = 0; i <= widthExpanded; i+= 30) {
                searchBar.style.width = width + i + "px";
                await sleep(1);
            }
        }
    }

    async function shrink() {
            const widthB = searchBar.offsetWidth;
            searchBar.style.backgroundImage = '';
            for (let i = 0; i < width; i+= 10) {
                searchBar.style.width = 250 - i + "px";
                await sleep(1);
            }
    }

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}    

searchBar.value = '';